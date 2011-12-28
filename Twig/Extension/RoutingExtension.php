<?php

/*
 * This file is part of sonata-project.
 *
 * (c) Sonata Project
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\NewsBundle\Twig\Extension;

use Sonata\NewsBundle\Model\PostInterface;
use Sonata\NewsBundle\Model\BlogInterface;

class RoutingExtension extends \Twig_Extension
{
    /**
     * @var BlogInterface
     */
    private $blog;

    /**
     * @param Sonata\NewsBundle\Permalink\BlogInterface $blog
     */
    public function __construct(BlogInterface $blog)
    {
        $this->blog = $blog;
    }
    

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'sonata_news_routing';
    }

    /**
     * Returns a list of functions to add to the existing list.
     *
     * @return array An array of functions
     */
    public function getFunctions()
    {
        return array(
            'sonata_news_permalink' => new \Twig_Function_Method($this, 'generatePermalink')
        );
    }
    

    /**
     * @param Sonata\NewsBundle\Model\PostInterface $post
     * @return string|Exception
     */
    public function generatePermalink(PostInterface $post)
    {
        return $this->blog->getPermalinkGenerator()->generate($post);
    }
}