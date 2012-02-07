<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_welcome' => true,
       '_demo_login' => true,
       '_demo_logout' => true,
       'acme_demo_secured_hello' => true,
       '_demo_secured_hello' => true,
       '_demo_secured_hello_admin' => true,
       '_demo' => true,
       '_demo_hello' => true,
       '_demo_contact' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       '_security_login' => true,
       '_security_check' => true,
       '_security_logout' => true,
       'user' => true,
       'user_show' => true,
       'user_new' => true,
       'user_create' => true,
       'user_edit' => true,
       'user_update' => true,
       'user_delete' => true,
       'status' => true,
       'status_show' => true,
       'status_new' => true,
       'status_create' => true,
       'status_edit' => true,
       'status_update' => true,
       'status_delete' => true,
       'priority' => true,
       'priority_show' => true,
       'priority_new' => true,
       'priority_create' => true,
       'priority_edit' => true,
       'priority_update' => true,
       'priority_delete' => true,
       'project' => true,
       'project_show' => true,
       'project_new' => true,
       'project_create' => true,
       'project_edit' => true,
       'project_update' => true,
       'project_delete' => true,
       'project_category' => true,
       'project_category_show' => true,
       'project_category_new' => true,
       'project_category_create' => true,
       'project_category_edit' => true,
       'project_category_update' => true,
       'project_category_delete' => true,
       'project_type' => true,
       'project_type_show' => true,
       'project_type_new' => true,
       'project_type_create' => true,
       'project_type_edit' => true,
       'project_type_update' => true,
       'project_type_delete' => true,
       'task' => true,
       'task_show' => true,
       'task_new' => true,
       'task_create' => true,
       'task_edit' => true,
       'task_update' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_welcomeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function get_demo_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login',  ),));
    }

    private function get_demo_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/logout',  ),));
    }

    private function getacme_demo_secured_helloRouteInfo()
    {
        return array(array (), array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_hello_adminRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello/admin',  ),));
    }

    private function get_demoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/',  ),));
    }

    private function get_demo_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/hello',  ),));
    }

    private function get_demo_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/contact',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function get_security_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\SecurityController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login',  ),));
    }

    private function get_security_checkRouteInfo()
    {
        return array(array (), array (), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_check',  ),));
    }

    private function get_security_logoutRouteInfo()
    {
        return array(array (), array (), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getuserRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\UserController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/user',  ),));
    }

    private function getuser_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\UserController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/user',  ),));
    }

    private function getuser_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\UserController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/user/new',  ),));
    }

    private function getuser_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\UserController::createAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/user/create',  ),));
    }

    private function getuser_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\UserController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/user',  ),));
    }

    private function getuser_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\UserController::updateAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/user',  ),));
    }

    private function getuser_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\UserController::deleteAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/user',  ),));
    }

    private function getstatusRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\StatusController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/status',  ),));
    }

    private function getstatus_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\StatusController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/status',  ),));
    }

    private function getstatus_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\StatusController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/status/new',  ),));
    }

    private function getstatus_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\StatusController::createAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/status/create',  ),));
    }

    private function getstatus_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\StatusController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/status',  ),));
    }

    private function getstatus_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\StatusController::updateAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/status',  ),));
    }

    private function getstatus_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\StatusController::deleteAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/status',  ),));
    }

    private function getpriorityRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\PriorityController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/priority',  ),));
    }

    private function getpriority_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\PriorityController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/priority',  ),));
    }

    private function getpriority_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\PriorityController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/priority/new',  ),));
    }

    private function getpriority_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\PriorityController::createAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/priority/create',  ),));
    }

    private function getpriority_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\PriorityController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/priority',  ),));
    }

    private function getpriority_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\PriorityController::updateAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/priority',  ),));
    }

    private function getpriority_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\PriorityController::deleteAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/priority',  ),));
    }

    private function getprojectRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\ProjectController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/project',  ),));
    }

    private function getproject_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\ProjectController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/project',  ),));
    }

    private function getproject_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\ProjectController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/project/new',  ),));
    }

    private function getproject_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\ProjectController::createAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/project/create',  ),));
    }

    private function getproject_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\ProjectController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/project',  ),));
    }

    private function getproject_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\ProjectController::updateAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/project',  ),));
    }

    private function getproject_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\ProjectController::deleteAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/project',  ),));
    }

    private function getproject_categoryRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\Project_CategoryController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/project_category',  ),));
    }

    private function getproject_category_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\Project_CategoryController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/project_category',  ),));
    }

    private function getproject_category_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\Project_CategoryController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/project_category/new',  ),));
    }

    private function getproject_category_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\Project_CategoryController::createAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/project_category/create',  ),));
    }

    private function getproject_category_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\Project_CategoryController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/project_category',  ),));
    }

    private function getproject_category_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\Project_CategoryController::updateAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/project_category',  ),));
    }

    private function getproject_category_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\Project_CategoryController::deleteAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/project_category',  ),));
    }

    private function getproject_typeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\Project_TypeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/project_type',  ),));
    }

    private function getproject_type_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\Project_TypeController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/project_type',  ),));
    }

    private function getproject_type_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\Project_TypeController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/project_type/new',  ),));
    }

    private function getproject_type_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\Project_TypeController::createAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/project_type/create',  ),));
    }

    private function getproject_type_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\Project_TypeController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/project_type',  ),));
    }

    private function getproject_type_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\Project_TypeController::updateAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/project_type',  ),));
    }

    private function getproject_type_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\Project_TypeController::deleteAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/project_type',  ),));
    }

    private function gettaskRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\TaskController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/task',  ),));
    }

    private function gettask_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\TaskController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/task',  ),));
    }

    private function gettask_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\TaskController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/task/new',  ),));
    }

    private function gettask_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\TaskController::createAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/task/create',  ),));
    }

    private function gettask_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\TaskController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/task',  ),));
    }

    private function gettask_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\ManagementBundle\\Controller\\TaskController::updateAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/task',  ),));
    }
}
