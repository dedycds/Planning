<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // _security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\SecurityController::loginAction',  '_route' => '_security_login',);
        }

        // _security_check
        if ($pathinfo === '/login_check') {
            return array('_route' => '_security_check');
        }

        // _security_logout
        if ($pathinfo === '/logout') {
            return array('_route' => '_security_logout');
        }

        // user
        if ($pathinfo === '/user') {
            return array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
        }

        // user_show
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\UserController::showAction',)), array('_route' => 'user_show'));
        }

        // user_new
        if ($pathinfo === '/user/new') {
            return array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
        }

        // user_create
        if ($pathinfo === '/user/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_user_create;
            }
            return array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
        }
        not_user_create:

        // user_edit
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\UserController::editAction',)), array('_route' => 'user_edit'));
        }

        // user_update
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_user_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\UserController::updateAction',)), array('_route' => 'user_update'));
        }
        not_user_update:

        // user_delete
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_user_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\UserController::deleteAction',)), array('_route' => 'user_delete'));
        }
        not_user_delete:

        // status
        if ($pathinfo === '/status') {
            return array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\StatusController::indexAction',  '_route' => 'status',);
        }

        // status_show
        if (0 === strpos($pathinfo, '/status') && preg_match('#^/status/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\StatusController::showAction',)), array('_route' => 'status_show'));
        }

        // status_new
        if ($pathinfo === '/status/new') {
            return array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\StatusController::newAction',  '_route' => 'status_new',);
        }

        // status_create
        if ($pathinfo === '/status/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_status_create;
            }
            return array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\StatusController::createAction',  '_route' => 'status_create',);
        }
        not_status_create:

        // status_edit
        if (0 === strpos($pathinfo, '/status') && preg_match('#^/status/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\StatusController::editAction',)), array('_route' => 'status_edit'));
        }

        // status_update
        if (0 === strpos($pathinfo, '/status') && preg_match('#^/status/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_status_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\StatusController::updateAction',)), array('_route' => 'status_update'));
        }
        not_status_update:

        // status_delete
        if (0 === strpos($pathinfo, '/status') && preg_match('#^/status/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_status_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\StatusController::deleteAction',)), array('_route' => 'status_delete'));
        }
        not_status_delete:

        // priority
        if ($pathinfo === '/priority') {
            return array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\PriorityController::indexAction',  '_route' => 'priority',);
        }

        // priority_show
        if (0 === strpos($pathinfo, '/priority') && preg_match('#^/priority/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\PriorityController::showAction',)), array('_route' => 'priority_show'));
        }

        // priority_new
        if ($pathinfo === '/priority/new') {
            return array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\PriorityController::newAction',  '_route' => 'priority_new',);
        }

        // priority_create
        if ($pathinfo === '/priority/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_priority_create;
            }
            return array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\PriorityController::createAction',  '_route' => 'priority_create',);
        }
        not_priority_create:

        // priority_edit
        if (0 === strpos($pathinfo, '/priority') && preg_match('#^/priority/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\PriorityController::editAction',)), array('_route' => 'priority_edit'));
        }

        // priority_update
        if (0 === strpos($pathinfo, '/priority') && preg_match('#^/priority/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_priority_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\PriorityController::updateAction',)), array('_route' => 'priority_update'));
        }
        not_priority_update:

        // priority_delete
        if (0 === strpos($pathinfo, '/priority') && preg_match('#^/priority/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_priority_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\PriorityController::deleteAction',)), array('_route' => 'priority_delete'));
        }
        not_priority_delete:

        // project
        if ($pathinfo === '/project') {
            return array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\ProjectController::indexAction',  '_route' => 'project',);
        }

        // project_show
        if (0 === strpos($pathinfo, '/project') && preg_match('#^/project/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\ProjectController::showAction',)), array('_route' => 'project_show'));
        }

        // project_new
        if ($pathinfo === '/project/new') {
            return array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\ProjectController::newAction',  '_route' => 'project_new',);
        }

        // project_create
        if ($pathinfo === '/project/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_project_create;
            }
            return array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\ProjectController::createAction',  '_route' => 'project_create',);
        }
        not_project_create:

        // project_edit
        if (0 === strpos($pathinfo, '/project') && preg_match('#^/project/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\ProjectController::editAction',)), array('_route' => 'project_edit'));
        }

        // project_update
        if (0 === strpos($pathinfo, '/project') && preg_match('#^/project/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_project_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\ProjectController::updateAction',)), array('_route' => 'project_update'));
        }
        not_project_update:

        // project_delete
        if (0 === strpos($pathinfo, '/project') && preg_match('#^/project/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_project_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\ProjectController::deleteAction',)), array('_route' => 'project_delete'));
        }
        not_project_delete:

        // project_category
        if ($pathinfo === '/project_category') {
            return array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\Project_CategoryController::indexAction',  '_route' => 'project_category',);
        }

        // project_category_show
        if (0 === strpos($pathinfo, '/project_category') && preg_match('#^/project_category/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\Project_CategoryController::showAction',)), array('_route' => 'project_category_show'));
        }

        // project_category_new
        if ($pathinfo === '/project_category/new') {
            return array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\Project_CategoryController::newAction',  '_route' => 'project_category_new',);
        }

        // project_category_create
        if ($pathinfo === '/project_category/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_project_category_create;
            }
            return array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\Project_CategoryController::createAction',  '_route' => 'project_category_create',);
        }
        not_project_category_create:

        // project_category_edit
        if (0 === strpos($pathinfo, '/project_category') && preg_match('#^/project_category/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\Project_CategoryController::editAction',)), array('_route' => 'project_category_edit'));
        }

        // project_category_update
        if (0 === strpos($pathinfo, '/project_category') && preg_match('#^/project_category/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_project_category_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\Project_CategoryController::updateAction',)), array('_route' => 'project_category_update'));
        }
        not_project_category_update:

        // project_category_delete
        if (0 === strpos($pathinfo, '/project_category') && preg_match('#^/project_category/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_project_category_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\Project_CategoryController::deleteAction',)), array('_route' => 'project_category_delete'));
        }
        not_project_category_delete:

        // project_type
        if ($pathinfo === '/project_type') {
            return array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\Project_TypeController::indexAction',  '_route' => 'project_type',);
        }

        // project_type_show
        if (0 === strpos($pathinfo, '/project_type') && preg_match('#^/project_type/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\Project_TypeController::showAction',)), array('_route' => 'project_type_show'));
        }

        // project_type_new
        if ($pathinfo === '/project_type/new') {
            return array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\Project_TypeController::newAction',  '_route' => 'project_type_new',);
        }

        // project_type_create
        if ($pathinfo === '/project_type/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_project_type_create;
            }
            return array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\Project_TypeController::createAction',  '_route' => 'project_type_create',);
        }
        not_project_type_create:

        // project_type_edit
        if (0 === strpos($pathinfo, '/project_type') && preg_match('#^/project_type/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\Project_TypeController::editAction',)), array('_route' => 'project_type_edit'));
        }

        // project_type_update
        if (0 === strpos($pathinfo, '/project_type') && preg_match('#^/project_type/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_project_type_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\Project_TypeController::updateAction',)), array('_route' => 'project_type_update'));
        }
        not_project_type_update:

        // project_type_delete
        if (0 === strpos($pathinfo, '/project_type') && preg_match('#^/project_type/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_project_type_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\Project_TypeController::deleteAction',)), array('_route' => 'project_type_delete'));
        }
        not_project_type_delete:

        // task
        if ($pathinfo === '/task') {
            return array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\TaskController::indexAction',  '_route' => 'task',);
        }

        // task_show
        if (0 === strpos($pathinfo, '/task') && preg_match('#^/task/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\TaskController::showAction',)), array('_route' => 'task_show'));
        }

        // task_new
        if ($pathinfo === '/task/new') {
            return array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\TaskController::newAction',  '_route' => 'task_new',);
        }

        // task_create
        if ($pathinfo === '/task/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_task_create;
            }
            return array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\TaskController::createAction',  '_route' => 'task_create',);
        }
        not_task_create:

        // task_edit
        if (0 === strpos($pathinfo, '/task') && preg_match('#^/task/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\TaskController::editAction',)), array('_route' => 'task_edit'));
        }

        // task_update
        if (0 === strpos($pathinfo, '/task') && preg_match('#^/task/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_task_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\TaskController::updateAction',)), array('_route' => 'task_update'));
        }
        not_task_update:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
