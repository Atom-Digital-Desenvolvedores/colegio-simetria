<?php

	add_action( 'cmb2_admin_init', 'metaboxes_eventos' );

	function metaboxes_eventos() {

		// Detalhes do item na home
		$evento_item = new_cmb2_box( array(
			'id'            => 'evento_item',
			'title'         => __( 'Detalhes do evento' ),
			'object_types'  => array( 'eventos192', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => false,
		) );

		$evento_item->add_field( array(
			'name'       => __( 'Descrição do evento' ),
			'id'         => 'wsg_evento_desc',
			'type' => 'wysiwyg',
		) );

		$evento_item->add_field( array(
			'name'       => __( 'IFrame do Vídeo' ),
			'id'         => 'wsg_evento_video',
			'type' => 'textarea_code',
		) );
	
	


	}

?>