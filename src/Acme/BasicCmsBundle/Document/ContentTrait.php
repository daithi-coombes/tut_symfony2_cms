<?php
// src/Acme/BasicCmsBundle/Document/ContentTrait.php
namespace Acme\BasicCmsBundle\Document;

use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCR;

/**
 * @todo document this class and methods.
 */
trait ContentTrait
{
    /**
     * @PHPCR\Id()
     * @var [type]
     */
    protected $id;

    /**
     * @PHPCR\ParendDocument()
     * @var [type]
     */
    protected $parent;

    /**
     * @PHPCR\Nodename()
     * @var [type]
     */
    protected $title;

    /**
     * @PHPCR\String(nullable=true)
     * @var string
     */
    protected $content;

    /**
     * @var [type]
     */
    protected $routes;

    public function getId()
    {
        return $this->id;
    }

    public function getParentDocument()
    {
        return $this->parent;
    }

    public function setParentDocument($parent)
    {
        $this->parent = $parent;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getContent(){
        return $this->content;
    }

    public function setContent($content){
        $this->content = $content;
    }

    public function getRoutes()
    {
        return $this->routes;
    }
}
