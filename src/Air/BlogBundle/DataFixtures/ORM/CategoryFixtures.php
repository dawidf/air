<?php


namespace Air\BlogBundle\DataFixtures;


use Air\BlogBundle\Entity\Category;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixtures extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param Doctrine\Common\Persistence\ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        $categoriesList = array(
            'osobowe' => 'Samoloty osobowe i pasarzerskie',
            'odrzutowe' => 'Samoloty odrzutowe',
            'wojskowe' => 'Samoloty wojskowe',
            'tajne' => 'Tajne rozwiązania',
        );

        foreach($categoriesList as $key => $name)
        {
            $Category = new Category();

            $Category->setTitle($name);
            $manager->persist($Category);
            // udostępnia referencje, użyte będie w PostsFixtures.php
            $this->addReference('category_'.$key, $Category);
        }



        $manager->flush();


    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    function getOrder()
    {
        return 0;
    }
}