<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 25.05.2018
 * Time: 21:09
 */

return [

//    MainController

    '' => [
        'controller' => 'main',
        'action' => 'index'
    ],

    'projects' => [
        'controller' => 'main',
        'action' => 'projects'
    ],

    'projects/{page:\d+}' => [
        'controller' => 'main',
        'action' => 'projects'
    ],

    'projects/filter/{filter:\d+}' => [
        'controller' => 'main',
        'action' => 'filter'
    ],

    'project/{project:\d+}' => [
        'controller' => 'main',
        'action' => 'project'
    ],

    'studio' => [
        'controller' => 'main',
        'action' => 'studio'
    ],

    'news' => [
        'controller' => 'main',
        'action' => 'news'
    ],

    'contact' => [
        'controller' => 'main',
        'action' => 'contact'
    ],

//    BasketController

    'basket/orders' => [
        'controller' => 'basket',
        'action' => 'orders'
    ],

    'basket/buy/{id:\d+}' => [
        'controller' => 'basket',
        'action' => 'buy'
    ],

//    AccountController

    'login' => [
        'controller' => 'account',
        'action' => 'login'
        ],

    'register' => [
        'controller' => 'account',
        'action' => 'register'
    ],

    'account/recovery' => [
        'controller' => 'account',
        'action' => 'recovery'
    ],

    'account/reset/{token:\w+}' => [
        'controller' => 'account',
        'action' => 'reset'
    ],

    'account/confirm/{token:\w+}' => [
        'controller' => 'account',
        'action' => 'confirm'
    ],

    'account/logout' => [
        'controller' => 'account',
        'action' => 'logout'
    ],

    'account/profile' => [
        'controller' => 'account',
        'action' => 'profile'
    ],

//    AdminController

    'admin/login' => [
        'controller' => 'admin',
        'action' => 'login'
    ],

    'admin/logout' => [
        'controller' => 'admin',
        'action' => 'logout'
    ],

    'admin/add' => [
        'controller' => 'admin',
        'action' => 'add'
    ],

    'admin/products' => [
        'controller' => 'admin',
        'action' => 'products'
    ],

    'admin/orders' => [
        'controller' => 'admin',
        'action' => 'orders'
    ],

    'admin/edit/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'edit'
    ],

    'admin/delete/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'delete'
    ],

];