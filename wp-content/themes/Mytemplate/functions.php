<?php

new \Kirki\Panel(
	'aidzone_panel_id',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Aidzone Options', 'aidzone' ),
		'description' => esc_html__( 'My Options  Description.', 'aidzone' ),
	]
);


function header_info_section(){
    new \Kirki\Section(
        'header_section_id',
        [
            'title'       => esc_html__( 'Header Settings', 'aidzone' ),
            'description' => esc_html__( 'My Header Section Description.', 'aidzone' ),
            'panel'       => 'aidzone_panel_id',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'address_text',
            'label'    => esc_html__( 'Address', 'aidzone' ),
            'section'  => 'header_section_id',
            'default'  => esc_html__( 'The queens walk, TSV 3456', 'aidzone' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'address_url',
            'label'    => esc_html__( 'Address URL', 'aidzone' ),
            'section'  => 'header_section_id',
            'default'  => esc_html__( '#', 'aidzone' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'email_id',
            'label'    => esc_html__( 'Email', 'aidzone' ),
            'section'  => 'header_section_id',
            'default'  => esc_html__( 'needhelp@mail.com', 'aidzone' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'button_text',
            'label'    => esc_html__( 'Button', 'aidzone' ),
            'section'  => 'header_section_id',
            'default'  => esc_html__( 'The queens walk, TSV 3456', 'aidzone' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'button_url',
            'label'    => esc_html__( 'Button URL', 'aidzone' ),
            'section'  => 'header_section_id',
            'default'  => esc_html__( '#', 'aidzone' ),
            'priority' => 10,
        ]
    );

}
header_info_section();
function venue_scripts() {

wp_enqueue_style( 'templatemo-style', get_stylesheet_uri() );
    
}

add_action('wp_enqueue_scripts', 'venue_scripts');


