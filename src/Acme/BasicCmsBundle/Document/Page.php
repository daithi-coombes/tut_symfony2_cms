<?php
// src/Acme/BasicCmsBundle/Document/Page.php
namespace Acme\BasicCmsBundle\Document;

use Symfony\Cmf\Component\Routing\RouteReferrersReadInterface;

use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCR;

/**
 * @todo document this class and methods.
 * @PHPCR\Document(referenceable=true)
 */
class Page implements RouteReferrersReadInterface
{
    use ContentTrait;

}
