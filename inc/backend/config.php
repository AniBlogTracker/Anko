<?php
/**
 * backend/config.php
 *
 * Author: pixelcave
 *
 * Backend pages configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$one->inc_side_overlay           = 'inc/backend/views/inc_side_overlay.php';
$one->inc_sidebar                = 'inc/backend/views/inc_sidebar.php';
$one->inc_header                 = 'inc/backend/views/inc_header.php';
$one->inc_footer                 = 'inc/backend/views/inc_footer.php';


// **************************************************************************************************
// MAIN CONTENT
// **************************************************************************************************

$one->l_m_content                = 'narrow';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$one->main_nav                   = array(
    array(
        'name'  => 'Home',
        'icon'  => 'si si-home',
        'sub'   => array(
                         array(
                             'name'  => 'Blogs',
                             'url'   => 'index.php'
                         ),
                         array(
                             'name'  => 'News',
                             'url'   => 'news.php'
                         )
                )
    ),
    array(
        'name'  => 'Sites',
        'icon'  => 'si si-globe',
        'url'   => 'sites.php'
    ),
    array(
        'name'  => 'Seasons',
        'icon'  => 'si si-film',
        'url'   => 'seasons.php'
    ),
    array(
        'name'  => 'Subscriptions',
        'icon'  => 'si si-user-following',
        'url'   => 'subscriptions.php'
    ),
    array(
        'name'  => 'About',
        'icon'  => 'si si-speedometer',
        'url'   => 'about.php'
    ),
    array(
        'name'  => 'Donate',
        'icon'  => 'si si-heart',
        'url'   => 'donate.php'
    )
);
