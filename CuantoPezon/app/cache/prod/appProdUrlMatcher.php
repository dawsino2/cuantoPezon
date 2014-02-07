<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

        // icm06_cuanto_pezon_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'icm06_cuanto_pezon_homepage')), array (  '_controller' => 'ICM06\\CuantoPezonBundle\\Controller\\DefaultController::indexAction',));
        }

        // icm06_cuanto_pezon_listado
        if ($pathinfo === '/listado') {
            return array (  '_controller' => 'ICM06\\CuantoPezonBundle\\Controller\\DefaultController::listadoAction',  '_route' => 'icm06_cuanto_pezon_listado',);
        }

        // icm06_cuanto_pezon_nuevo
        if ($pathinfo === '/nuevo') {
            return array (  '_controller' => 'ICM06\\CuantoPezonBundle\\Controller\\DefaultController::nuevoAction',  '_route' => 'icm06_cuanto_pezon_nuevo',);
        }

        // icm06_cuanto_pezon_borra
        if (0 === strpos($pathinfo, '/borra') && preg_match('#^/borra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'icm06_cuanto_pezon_borra')), array (  '_controller' => 'ICM06\\CuantoPezonBundle\\Controller\\DefaultController::borraAction',));
        }

        // icm06_cuanto_pezon_modifica
        if (0 === strpos($pathinfo, '/modifica') && preg_match('#^/modifica/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'icm06_cuanto_pezon_modifica')), array (  '_controller' => 'ICM06\\CuantoPezonBundle\\Controller\\DefaultController::modificaAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
