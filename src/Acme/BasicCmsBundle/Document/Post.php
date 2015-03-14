<?php
// src/Acme/BasicSms/Document/Post.php
namespace Acme\BasicCmsBundle\Document;

use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCR;
use Symfony\Cmf\Component\Routing\RouteReferrersReadInterface;

/**
 * @todo finish documentation for this class & methods.
 * @PHPCR\Document(referenceable=true)
 */
class Post implements RouteReferrersReadInterface
{
    use ContentTrait;

    /**
     * @PHPCR\Date();
     */
    protected $date;

    /**
     * @PHPCR\PrePersist()
     */
    public function udpateDate()
    {
        if (!$this->date) {
            $this->date = new \DateTime();
        }
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate(\DateTime $data)
    {
        $this->date = $date;
    }
}
