<?php
  $routes->group('movie', ['namespace' => '\Modules\Movies\Controllers'], function($routes) {
    $routes->get('/', 'Movie::index');
    $routes->get('review', 'Movie::review');
  });
?>