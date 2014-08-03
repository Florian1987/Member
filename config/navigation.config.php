<?php

return array(
    'navigation' => array(
        'default' => array(
            'administration' => array(
                'visible'   => true,
                'pages'     => array(
                    'user' => array(
                        'label'     => 'navigation_user',
                        'uri'       => '',
                        'order'     => 100,
                        'resource'  => '',
                        'pages'     => array(
                            'add' => array(
                                'label'     => 'navigation_user_add',
                                'title'     => 'page_title_user_add',
                                'route'     => 'user/add',
                                'order'     => 200,
                                'resource'  => '',
                                'pages'     => array(),
                            ),
                            'display' => array(
                                'label'     => 'navigation_user_display',
                                'title'     => 'page_title_user_display',
                                'route'     => 'user/display',
                                'resource'  => '',
                                'visible'   => false,
                                'pages'     => array(),
                            ),
                            'edit' => array(
                                'label'     => 'navigation_user_edit',
                                'title'     => 'page_title_user_edit',
                                'route'     => 'user/edit',
                                'resource'  => '',
                                'visible'   => false,
                                'pages'     => array(),
                            ),
                            'list' => array(
                                'label'     => 'navigation_user_list',
                                'title'     => 'page_title_user_list',
                                'route'     => 'user/list',
                                'order'     => 100,
                                'resource'  => '',
                                'pages'     => array(),
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'header' => array(),
    ),
);