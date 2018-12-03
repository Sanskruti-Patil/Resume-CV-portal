<?php

/**
 * Displays site name.
 */
function siteName()
{
    echo config('name');
}

/**
 * Displays site version.
 */
function siteVersion()
{
    echo config('version');
}

/**
 * Website navigation.
 */

function navMenu($sep = ' | ')
{
    $nav_menu = '';
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
	//echo $page . "</br>";
	$page = ucwords(str_replace('-', ' ', $page));
 
    foreach (config('nav_menu') as $uri => $name) {
		$class = '';
	    if ($page == $name){$class = 'nav-item active'; } else{$class = 'nav-item';}
        $nav_menu .= '<li class="'.$class.'"><a class="nav-link" href="'.(config('pretty_uri') || $uri == '' ? '' : '?page=').$uri.'">'.$name[0].'</a></li>';
    }

    echo trim($nav_menu, $sep);
}

/**
 * Displays page title. It takes the data from 
 * URL, it replaces the hyphens with spaces and 
 * it capitalizes the words.
 */
function pageTitle()
{
    $page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'Home';

    echo ucwords(str_replace('-', ' ', $page));
}

/**
 * Displays page content. It takes the data from 
 * the static pages inside the pages/ directory.
 * When not found, display the 404 error page.
 */
function pageContent()
{
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';

    $path = getcwd().'/'.config('content_path').'/'.$page.'.php';

    if (file_exists(filter_var($path, FILTER_SANITIZE_URL))) {
        include $path;
    } else {
        include config('content_path').'/404.php';
    }
}

/**
 * Starts everything and displays the template.
 */
function run()
{
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    /*
	if($page == 'home'){
		include config('template_path').'/front.php';
		}
    else {
		include config('template_path').'/template.php';
		}*/		
	if(config('nav_menu')[$page][1] == 'col1'){
			include config('template_path').'/front.php';
			}
	if(config('nav_menu')[$page][1] == 'col2'){
			include config('template_path').'/template.php';
			}

}
