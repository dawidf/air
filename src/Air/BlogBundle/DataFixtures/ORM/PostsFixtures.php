<?php


namespace Air\BlogBundle\DataFixtures;



use Air\BlogBundle\Entity\Post;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class PostsFixtures extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param Doctrine\Common\Persistence/ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        $postList = array(
            array(
                'title' => 'Lorem ipsum dolor sit amet',
                'content' => 'Lorem ipsum dolor tttt, consectetur adipisicing elit, sed do eiusmod',
                'category' => 'osobowe',
                'tags' => array('dolor', 'suspendise', 'loctus'),
                'author' => 'kowal',
                'createDate' => '2012-01-01 12:12:12',
                'publishedDate' => '2012-11-11 10:16:11'
            ),

            array(
                'title' => 'sit ametrrr',
                'content' => 'Lorem ipsum dolor aaaaa, consectetur adipisicing elit, sed do',
                'category' => 'wojskowe',
                'tags' => array('loctus', 'suspendise', 'zasrancus'),
                'author' => 'kowal',
                'createDate' => '2012-01-01 12:12:12',
                'publishedDate' => '2012-11-11 10:16:13'
            ),
            array(
                'title' => 'sit amet',
                'content' => 'Lorem ipsum dolor rrrr, consectetur adipisicing elit, sed do asdasd',
                'category' => 'wojskowe',
                'tags' => array('loctus', 'suspendise', 'zasrancus'),
                'author' => 'macq',
                'createDate' => '2012-01-01 12:10:10',
                'publishedDate' => '2012-11-11 10:16:10'
            ),
        );

        foreach ($postList as $idx => $details) {
            $Post = new Post();

            $Post->setTitle($details['title'])
                ->setContent($details['content'])
                ->setAuthor($this->getReference('user-'.$details['author']))
                ->setCreateDate(new \DateTime($details['createDate']));

            if(null !== $details['publishedDate']){
                $Post->setPublishedDate(new \DateTime($details['publishedDate']));
            }

            $Post->setCategory($this->getReference('category_'.$details['category']));

            foreach($details['tags'] as $tagName){
                $Post->addTag($this->getReference('tag_'.$tagName));
            }

            $this->addReference('post-'.$idx, $Post);

            $manager->persist($Post);
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
        return 1;
    }
}