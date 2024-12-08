<?php
$routes = [
    '/register' => 'AuthController@register',
    '/login' => 'AuthController@login',
    '/categories' => 'DataController@fetchCategories',
    '/products' => 'DataController@fetchProducts'
];