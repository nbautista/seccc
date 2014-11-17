//* Marie Forleo
genesis_register_sidebar( array(
	'id'          => 'marieforleo-subscribe-box',
	'name'        => __( 'Marie Forleo Subscribe Box', 'wpsites' ),
	'description' => __( 'This is the Marie Forleo Style widget area.', 'wpsites' ),
) );
add_action( 'genesis_after_header', 'wpsites_marie_forleo_subscribe_box', 15 );
function wpsites_marie_forleo_subscribe_box() {

	genesis_widget_area( 'marieforleo-subscribe-box', array(
		'before' => '<div class="marieforleo-subscribe-box" class="widget-area">',
		'after'  => '</div>',
	) );

}
