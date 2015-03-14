<?php
// src/Acme/BasicCmsBundle/DataFixtures/PHPCR/LoadPageData.php
namespace Acme\BasicCmsBundle\DataFixtures\PHPCR;

use Acme\BasicCmsBundle\Document\Page;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ODM\PHPCR\DocumentManager;

/**
 * @todo document this class & methods.
 */
class LoadPageData implements FixtureInterface
{
    public function load(ObjectManager $dm)
    {
        if (!$dm instanceof DocumentManager) {
            $class = get_class($dm);
            throw new \RuntimeException(
                "Fixture requires a PHPCR ODM DocumentManager instance,"
                . " instance of '$class' given."
            );
        }

        $parent = $dm->find(null, '/cms/pages');

        $page = new Page();
        $page->setTitle('Home');
        $page->setParentDocument($parent);
        $page->setContent(<<<HERE
Welcome to the homepage of this really basic CMS.
HERE
        );

        $dm->persist($page);
        $dm->flush();
    }
}
