<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/articles')) {
            // get_articles
            if ($pathinfo === '/articles') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_articles;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ArticlesController::getArticlesAction',  '_format' => NULL,  '_route' => 'get_articles',);
            }
            not_get_articles:

            // get_article
            if (preg_match('#^/articles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_article;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_article')), array (  '_controller' => 'AppBundle\\Controller\\ArticlesController::getArticleAction',  '_format' => NULL,));
            }
            not_get_article:

            // post_articles
            if ($pathinfo === '/articles') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post_articles;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ArticlesController::postArticlesAction',  '_format' => NULL,  '_route' => 'post_articles',);
            }
            not_post_articles:

            // delete_articles
            if (preg_match('#^/articles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_delete_articles;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_articles')), array (  '_controller' => 'AppBundle\\Controller\\ArticlesController::deleteArticlesAction',  '_format' => NULL,));
            }
            not_delete_articles:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
