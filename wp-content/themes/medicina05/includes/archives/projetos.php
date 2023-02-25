<?php

	add_action( 'cmb2_admin_init', 'metaboxes_projetos' );

	function metaboxes_projetos() {

		// Detalhes do item na home
		$projeto_item = new_cmb2_box( array(
			'id'            => 'projeto_item',
			'title'         => __( 'Detalhes do item na home' ),
			'object_types'  => array( 'projetos192', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => false,
		) );

		$projeto_item->add_field( array(
			'name'       => __( 'Imagem capa da estrutura' ),
			'desc'       => __( 'Tamanho recomendado <strong>375x250</strong>' ),
			'id'         => 'wsg_projeto_item_img',
			'type' => 'file',
			'preview_size' => array( 375/1, 250/1 ),
			'query_args' => array( 'type' => 'image' ),
		) );

		$projeto_item->add_field( array(
			'name'       => __( 'Imagens internas da estrutura' ),
			'desc'       => __( 'Tamanho recomendado <strong>375x250</strong>' ),
			'id'         => 'wsg_projeto_item_interna_imgs',
			'type' => 'file_list',
			'preview_size' => array( 375/2, 250/2 ),
			'query_args' => array( 'type' => 'image' ),
		) );
	
	

		// Método de especificação de página
		$projetosPage = get_page_by_path( 'nossa-estrutura', OBJECT, 'page' );

		$post_id;

		if (isset($_GET['post'])) {
			$post_id = $_GET['post'];
		}else if(isset($_POST['post_ID'])) {
			$post_id = $_POST['post_ID'];
		}
		if( !isset( $post_id ) ) return;

		if($projetosPage && $projetosPage->ID != $post_id){
			return;
		}

		// // Metabox projetos
		// $projeto_01 = new_cmb2_box( array(
		// 	'id'            => 'projeto_01',
		// 	'title'         => __( 'projetos' ),
		// 	'object_types'  => array( 'page', ),
		// 	'context'       => 'normal',
		// 	'priority'      => 'high',
		// 	'show_names'    => true,
		// 	'closed'        => true,
		// ) );

		// $projeto_01->add_field( array(
		// 	'name'       => __( 'Título da seção' ),
		// 	'id'         => 'wsg_projetos_01_titulo',
		// 	'type'       => 'text',
		// ) );

		// $projeto_01->add_field( array(
		// 	'name'       => __( 'Subtítulo da seção' ),
		// 	'id'         => 'wsg_projetos_01_subtitulo',
		// 	'type'       => 'text',
		// ) );

	}

?>