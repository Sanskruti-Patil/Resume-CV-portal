<?php

/**
 * Used to store website configuration information.
 *
 * @var string
 * 
 * $config('name') is for Site Name
 * 
 * $config('nav_menu') is for menu name, menu link and number of columns of the page. * 
 * For example 'about-us' => ['About Us', 'col2'] where 'about-us' is menu link, 'About Us' for menu name, 'col2' is for number of columns of the page.
 * 
 * config('version') is for displays site version.
 * 
 * $config('template_path') is for template folder path.
 * 
 * $config('content_path') is for content folder path. * 
 * 
 */
function config($key = '')
{
    $config = [
        'name' => 'Resume and CV of Sanskruti Patil',
        'nav_menu' => [
            'home' => ['Home', 'col1'],//'Home' is for Menu name & 'col1' is for number of columns of page
            'about-me' => ['About me', 'col2'],
            'resume' =>['Resume', 'col1'],
            'cv' => ['CV', 'col2']
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'pretty_uri' => false,
        'version' => 'v2.0',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
