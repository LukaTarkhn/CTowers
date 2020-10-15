<?php

use ibuild\Router;


    Router::add('^ru/apartment/?(?P<id>[a-z0-9-]+)/?$', ['controller' => 'Apartment', 'action' => 'view']);
    Router::add('^ru/bapartment/?(?P<id>[a-z0-9-]+)/?$', ['controller' => 'Bapartment', 'action' => 'view']);
    Router::add('^ru/floor/?(?P<id>[a-z0-9-]+)/?$', ['controller' => 'Floor', 'action' => 'view']);
    Router::add('^ru/bfloor/?(?P<id>[a-z0-9-]+)/?$', ['controller' => 'Bfloor', 'action' => 'view']);
    Router::add('^ru/current/?(?P<id>[a-z0-9-]+)/?$', ['controller' => 'Current', 'action' => 'view']);
    Router::add('^ru/project/?(?P<id>[a-z0-9-]+)/?$', ['controller' => 'Project', 'action' => 'view']);
    
    Router::add('^en/apartment/?(?P<id>[a-z0-9-]+)/?$', ['controller' => 'Apartment', 'action' => 'view']);
    Router::add('^en/bapartment/?(?P<id>[a-z0-9-]+)/?$', ['controller' => 'Bapartment', 'action' => 'view']);
    Router::add('^en/floor/?(?P<id>[a-z0-9-]+)/?$', ['controller' => 'Floor', 'action' => 'view']);
    Router::add('^en/bfloor/?(?P<id>[a-z0-9-]+)/?$', ['controller' => 'Bfloor', 'action' => 'view']);
    Router::add('^en/current/?(?P<id>[a-z0-9-]+)/?$', ['controller' => 'Current', 'action' => 'view']);
    Router::add('^en/project/?(?P<id>[a-z0-9-]+)/?$', ['controller' => 'Project', 'action' => 'view']);

    Router::add('^ka/apartment/?(?P<id>[a-z0-9-]+)/?$', ['controller' => 'Apartment', 'action' => 'view']);
    Router::add('^ka/bapartment/?(?P<id>[a-z0-9-]+)/?$', ['controller' => 'Bapartment', 'action' => 'view']);
    Router::add('^ka/floor/?(?P<id>[a-z0-9-]+)/?$', ['controller' => 'Floor', 'action' => 'view']);
    Router::add('^ka/bfloor/?(?P<id>[a-z0-9-]+)/?$', ['controller' => 'Bfloor', 'action' => 'view']);
    Router::add('^ka/current/?(?P<id>[a-z0-9-]+)/?$', ['controller' => 'Current', 'action' => 'view']);
    Router::add('^ka/project/?(?P<id>[a-z0-9-]+)/?$', ['controller' => 'Project', 'action' => 'view']);

// default routes
Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$',['prefix' => 'admin']);

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');