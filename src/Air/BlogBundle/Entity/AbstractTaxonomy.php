<?php
namespace Air\BlogBundle\Entity;

use Air\BlogBundle\Libs\Utils;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class AbstractTaxonomy
 * @package Air\BlogBundle\Enitiy
 * @ORM\MappedSuperclass()
 * @ORM\HasLifecycleCallbacks()
 */
abstract class AbstractTaxonomy {


    /**
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=120, unique=true)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=120, unique=true)
     */
    private $slug;

    /**
     *
     */
    protected $posts;




    /**
     * Constructor
     */
    public function __construct()
    {
        $this->posts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add posts
     *
     * @param \Air\BlogBundle\Entity\Post $posts
     * @return Category
     */
    public function addPost(\Air\BlogBundle\Entity\Post $posts)
    {
        $this->posts[] = $posts;

        return $this;
    }

    /**
     * Remove posts
     *
     * @param \Air\BlogBundle\Entity\Post $posts
     */
    public function removePost(\Air\BlogBundle\Entity\Post $posts)
    {
        $this->posts->removeElement($posts);
    }

    /**
     * Get posts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPosts()
    {
        return $this->posts;
    }







    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return AbstractTaxonomy
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return AbstractTaxonomy
     */
    public function setSlug($slug)
    {
        $this->slug = Utils::slugify($slug);

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    // przed zapisaniem do bazy ma się to wykonać
    // adnotacje mówią to ormowi, trzeba jeszcze do klasy dodać lifecycle
    // callback
    public function preSave()
    {
        if(null === $this->slug)
        {
            $this->setSlug($this->getTitle());
        }
    }
}
