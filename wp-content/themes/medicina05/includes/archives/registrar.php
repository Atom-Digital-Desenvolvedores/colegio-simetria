<?php

// Meus posts types
	function meus_post_types(){

		// Serviços virou o que temos
		register_post_type('servicos192',
			array(
				'labels' 			=> array(
					'name' 			=> __('Segmentos'),
					'singular_name'	=> _x('Segmento', 'post type singular name'),
					'add_new'		=> _x('Novo Segmento', 'portfolio item'),
					'add_new_item'	=> _x('Adicionar novo Segmento', 'portfolio item'),
					'edit_item'		=> _x('Editar Segmento', 'portfolio item'),
				),
				'rewrite' 			=> array('slug' => 'segmentos'),
				'public' 			=> true,
				'has_archive' 		=> true,
				'menu_icon' 		=> 'dashicons-admin-post',
				'supports' 			=> array('title', 'page-attributes'),
			)
		);
		// Projetos
		register_post_type('projetos192',
			array(
				'labels' 			=> array(
					'name' 			=> __('Nossa Estrutura'),
					'singular_name'	=> _x('Estrutura', 'post type singular name'),
					'add_new'		=> _x('Novo Estrutura', 'portfolio item'),
					'add_new_item'	=> _x('Adicionar novo Estrutura', 'portfolio item'),
					'edit_item'		=> _x('Editar Estrutura', 'portfolio item'),
				),
				'rewrite' 			=> array('slug' => 'nossa-estrutura'),
				'public' 			=> true,
				'has_archive' 		=> true,
				'menu_icon' 		=> 'dashicons-building',
				'supports' 			=> array('title', 'page-attributes'),
			)
		);

		// Eventos
		register_post_type('eventos192',
			array(
				'labels' 			=> array(
					'name' 			=> __('Nossos Eventos'),
					'singular_name'	=> _x('Evento', 'post type singular name'),
					'add_new'		=> _x('Novo Evento', 'portfolio item'),
					'add_new_item'	=> _x('Adicionar novo Evento', 'portfolio item'),
					'edit_item'		=> _x('Editar Evento', 'portfolio item'),
				),
				'rewrite' 			=> array('slug' => 'nossos-eventos'),
				'public' 			=> true,
				'has_archive' 		=> true,
				'menu_icon' 		=> 'dashicons-images-alt',
				'supports' 			=> array('title', 'page-attributes'),
			)
		);

		// // Equipe
		// register_post_type('equipe192',
		// 	array(
		// 		'labels' 			=> array(
		// 			'name' 			=> __('Equipe'),
		// 			'singular_name'	=> _x('Membro da Equipe', 'post type singular name'),
		// 			'add_new'		=> _x('Novo Membro da Equipe', 'portfolio item'),
		// 			'add_new_item'	=> _x('Adicionar novo Membro da Equipe', 'portfolio item'),
		// 			'edit_item'		=> _x('Editar Membro da Equipe', 'portfolio item'),
		// 		),
		// 		'rewrite' 			=> array('slug' => 'equipe'),
		// 		'public' 			=> true,
		// 		'has_archive' 		=> true,
		// 		'menu_icon' 		=> 'dashicons-groups',
		// 		'supports' 			=> array('title', 'page-attributes'),
		// 	)
		// );

	}
	add_action('init', 'meus_post_types');

?>