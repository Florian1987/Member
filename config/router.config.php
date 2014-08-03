<?php

return array(
    'router' => array(
        'routes' => array(
            //  User
            'user' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/user',
                    'defaults' => array(
                        'controller'=> 'Member\Controller\User',
                        'resource' => '',
                    ),
                ),
                'may_terminate' => false,
                'child_routes' => array(
                    //  Add User
                    'add' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => '/add',
                            'defaults' => array(
                                'action' => 'add',
                            ),
                        ),
                    ),
                    //  Display User
                    'display' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/display/:id',
                            'constraints' => array(
                                'id' => '[0-9]+'
                            ),
                            'defaults' => array(
                                'action' => 'display',
                            ),
                        ),
                    ),
                    //  Edit User
                    'edit' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/edit/:id',
                            'constraints' => array(
                                'id' => '[0-9]+'
                            ),
                            'defaults' => array(
                                'action' => 'edit',
                            ),
                        ),
                    ),
                    //  List User
                    'list' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => '/list',
                            'defaults' => array(
                                'action' => 'list',
                            ),
                        ),
                    ),
                    //  Remove User
                    'remove' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/remove/:id',
                            'constraints' => array(
                                'id' => '[0-9]+'
                            ),
                            'defaults' => array(
                                'action' => 'remove',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);