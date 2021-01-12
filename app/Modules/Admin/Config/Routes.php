<?php
  $routes->group('admin', ['namespace' => '\Modules\Admin\Controllers'], function($routes) {
    $routes->get('/', 'Admin::index');
    $routes->get('user_management', 'Admin::user_management');
    $routes->get('movie_management', 'Admin::movie_management');
  });
?>