<?php


namespace Air\BlogBundle\DataFixtures;



use Air\BlogBundle\Entity\Tag;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class TagsFixtures extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param Doctrine\Common\Persistence\ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        $tagList = array(
            'oso',
            'dolor',
            'suspendise',
            'luctus',
            'faucibus',
            'loctus',
            'gownus',
            'zasrancus',


        );

        foreach($tagList as $key => $name)
        {
            $Tag = new Tag();

            $Tag->setTitle($name);
            $manager->persist($Tag);
            //udostępnia referencja, uzyta w PostsFixtures.php
            $this->addReference('tag_'.$name, $Tag);
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