<?php
namespace Air\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Class Tag
 * @package Air\BlogBundle\Enitiy
 * @ORM\Entity()
 * @ORM\Table(name="blog_tags")
 */
class Tag extends AbstractTaxonomy {


    /**
     * @ORM\ManyToMany(
     *      targetEntity="Post",
     *      mappedBy="tags"
     * )
     */
    protected $posts;


}
