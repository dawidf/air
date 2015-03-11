<?php


namespace Air\BlogBundle\Twig\Extension;


use Doctrine\Bundle\DoctrineBundle\Registry;

class BlogExtension extends \Twig_Extension{

    // udostępnenie doctrine w servicie, trzeba było dodać argument w
    // Resources/config/services.yml
    /**
     * @var Registry
     */
    private $doctrine;
    private $categoriesList;
    private $environment;

    //dodanie doctrine
    function __construct(Registry $doctrine)
    {
        $this->doctrine = $doctrine;
    }
    //przeciążenie czegoś tam, żeby renderować widok się dało
    public function initRuntime(\Twig_Environment $environment)
    {
        $this->environment = $environment;
    }

    //Własne funkcje w twigu
    public function getName()
    {
        return 'air_blog_extension';
    }
    //Dodanie funkcji
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('air_blog_test', array($this, 'test')),
            //na koncu, pozwala stosować htmla
            new \Twig_SimpleFunction('print_categories_list', array($this, 'printCategoriesList'), array('is_safe' => array('html'))),
            new \Twig_SimpleFunction('print_main_menu', array($this, 'printMainMenu'), array('is_safe' => array('html'))),
        );
    }

    // Dodanie filtrów
    public function getFilters()
    {
        return array(
          new \Twig_SimpleFilter('ab_shorten',array($this,'shorten'),array('is_safe' => array('html')))
        );
    }


    // funkcja do twiga w twigu wywołuje się ją {{ air.blog_test() }}
    public function test()
    {
        return 'test _ok';
    }


    //menu listy kategori
    public function printCategoriesList()
    {
        // żeby nie robiło dwuch zapytać o to samo
        if(!isset($this->categoriesList))
        {
            $CategoryRepo = $this->doctrine->getRepository('AirBlogBundle:Category');
            $this->categoriesList = $CategoryRepo->findAll();
        }

        //renderowanie szablonu views/Template/categoriesList
        return $this->environment->render('AirBlogBundle:Template:categoriesList.html.twig', array(
           'categoriesList' => $this->categoriesList
        ));
    }


    public function  printMainMenu()
    {
        $mainMenu = array(
            'home' => 'blog_index',
            'o mnie' => 'o_mnie',
            'kontakt' => 'kontakt',

        );

        return $this->environment->render('AirBlogBundle:Template:mainMenu.html.twig', array(
           'mainMenu' => $mainMenu
        ));
    }


    /////////////////////////////////////////////////////////
   ///// FILTRY ////////////////////////////////////////////
  /////////////////////////////////////////////////////////

    public function shorten($text, $lenght=200, $wrapTag='p')
    {
        $text = strip_tags($text);
        $textLenght = strlen($text);
        $text = substr($text, 0, $lenght);


        if($textLenght > $lenght)
        {
            $text = $text.'[...]';
        }

        $openTag = "<{$wrapTag}>";
        $closeTag = "</{$wrapTag}>";

        return $openTag.$text.$closeTag;
    }
}