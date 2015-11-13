<?php

/**
 * cnp_add_favicon
 *
 * @version 1.0
 *
 * Creates a favicon link element based on host and front-end/back-end.
 *
 * @param array $args Optional argumants used to pass favicon urls by host
 *                    and front-end/back-end
 *
 * $args = array(
 *  'host.dev' => array(
 *      'public' => '[FAVICON URL]',
 *      'admin' => '[FAVICON URL]'
 *  ),
 *  'another.host.dev' => array(
 *      'public' => '[FAVICON URL]',
 *      'admin' => '[FAVICON URL]'
 *  ),
 *  'onemore.host.dev' => array(
 *      'public' => '[FAVICON URL]',
 *      'admin' => '[FAVICON URL]'
 *  )
 * );
 */
public function cnp_add_favicon( $args=array() ) {

    $vars = $args;
    if ( !isset($vars['*']) ) {
        $vars['*'] = array(
            'public' => '/img/icons/favicon.ico',
            'admin' => '/img/icons/admin-favicon.ico'
        );
    }

    $host = $_SERVER['HTTP_HOST'];
    $favicon = '';

    if ( isset($var[$host]) ) {

        $env = $var[$host];
        $favicon = is_admin() ? $env['admin'] : $env['public'];

    }

    $favicon_uri = get_stylesheet_directory_uri() . $favicon;
    $favicon_uri = apply_filters( 'cnp_add_favicon_filter', $favicon_uri );
    echo '<link rel="shortcut icon" href="'. $favicon_uri .'" />';

}
