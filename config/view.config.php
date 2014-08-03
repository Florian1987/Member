<?php

return array(
    'controllers' => array(
        'invokables' => array(
            'Member\Controller\User' => 'Florian1987\Member\Controller\UserController',
        ),
    ),
    'view_manager' => array(
        'template_map' => array(
            'florian1987/member/user/add'    => __DIR__ . '/../view/florian1987/member/user/add.phtml',
            'florian1987/member/user/detail' => __DIR__ . '/../view/florian1987/member/user/detail.phtml',
            'florian1987/member/user/edit'   => __DIR__ . '/../view/florian1987/member/user/edit.phtml',
            'florian1987/member/user/list'   => __DIR__ . '/../view/florian1987/member/user/list.phtml',
        ),
        'controller_map' => array(
            'Florian1987\Member' => true,
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);