<?php

namespace GB\API;

// Avoid that files are directly loaded
if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

App::uses( 'Controller', 'post-type' );
App::uses( 'Controller', 'taxonomy' );
App::uses( 'Controller', 'widget' );

