<?php

	add_action( 'cmb2_admin_init', 'metaboxes_all_pages' );

	function metaboxes_all_pages() {

		// Metabox Banner
		$banner_all_pages = new_cmb2_box( array(
			'id'            => 'banner_all_pages',
			'title'         => __( 'Banner' ),
			'object_types'  => array( 'page', ),
			'show_on'      => array( 'key' => 'id', 'value' => array( 17, 18, 19, 20, 49, 238, 247, 465, 466, 470 ) ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );

		$banner_all_pages->add_field( array(
			'name'       => __( 'Imagem do banner' ),
			'desc'       => __( 'Tamanho recomendado <strong>960x170</strong>' ),
			'id'         => 'wsg_banner_all_pages_img',
			'type' => 'file',
			'preview_size' => array( 960/2, 170/2 ),
			'query_args' => array( 'type' => 'image' ),
		) );

	}

?>