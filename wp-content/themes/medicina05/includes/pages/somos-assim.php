<?php

	add_action( 'cmb2_admin_init', 'metaboxes_somos_assim' );

	function metaboxes_somos_assim() {

		// Método de especificação de página
		$somos_assimPage = get_page_by_path( 'somos-assim', OBJECT, 'page' );

		$post_id;

		if (isset($_GET['post'])) {
			$post_id = $_GET['post'];
		}else if(isset($_POST['post_ID'])) {
			$post_id = $_POST['post_ID'];
		}
		if( !isset( $post_id ) ) return;

		if($somos_assimPage && $somos_assimPage->ID != $post_id){
			return;
		}

		// Metabox Banner
		$somos_assim_01 = new_cmb2_box( array(
			'id'            => 'somos_assim_01',
			'title'         => __( 'Foto inicial' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$somos_assim_01->add_field( array(
			'name'       => __( 'Foto' ),
			'desc'       => __( 'Tamanho recomendado <strong>1140x760</strong>' ),
			'id'         => 'wsg_somos_assim_01_img',
			'type' => 'file',
			'preview_size' => array( 1140/2, 760/2 ),
			'query_args' => array( 'type' => 'image' ),
		) );
		$somos_assim_01->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_somos_assim_01_titulo',
			'type'       => 'text',
		) );
		$somos_assim_01->add_field( array(
			'name'       => __( 'Texto abaixo do título da seção' ),
			'id'         => 'wsg_somos_assim_01_texto',
			'type'       => 'wysiwyg',
		) );

		// Metabox Segunda seção
		$somos_assim_02 = new_cmb2_box( array(
			'id'            => 'somos_assim_02',
			'title'         => __( 'Equipe com fotos intercaladas' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$somos_assim_02_items = $somos_assim_02->add_field( array(
			'id'            => 'somos_assim_02_items',
			'type'          => 'group',
			'options'       => array(
				'group_title'   => __( 'Integrante {#}' ),
				'add_button'    => __( 'Adicionar Outro Integrante' ),
				'remove_button' => __( 'Remover Integrante' ),
				'sortable'      => true,
				'closed'        => true,
			),
		) );
		$somos_assim_02->add_group_field( $somos_assim_02_items, array(
			'name'       => __( 'Imagem do Integrante' ),
			'desc'       => __( 'Tamanho recomendado <strong>350x350</strong>' ),
			'id'         => 'wsg_somos_assim_02_items_img',
			'type' => 'file',
			'preview_size' => array( 350/1, 350/1 ),
			'query_args' => array( 'type' => 'image' ),
		) );
		$somos_assim_02->add_group_field( $somos_assim_02_items, array(
			'name'       => __( 'Nome' ),
			'id'         => 'wsg_somos_assim_02_items_titulo',
			'type' => 'text',
		) );
		$somos_assim_02->add_group_field( $somos_assim_02_items, array(
			'name'       => __( 'Cargo' ),
			'id'         => 'wsg_somos_assim_02_items_subtitulo',
			'type' => 'text',
		) );
		$somos_assim_02->add_group_field( $somos_assim_02_items, array(
			'name'       => __( 'Qualificações' ),
			'id'         => 'wsg_somos_assim_02_items_texto',
			'type' => 'text',
			'repeatable' => true
		) );


		// Metabox Terceira seção
		$somos_assim_03 = new_cmb2_box( array(
			'id'            => 'somos_assim_03',
			'title'         => __( 'Equipe no rodapé' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		
		$somos_assim_03->add_field( array(
			'name'       => __( 'Imagem do Integrante' ),
			'desc'       => __( 'Tamanho recomendado <strong>350x350</strong>' ),
			'id'         => 'wsg_somos_assim_03_img',
			'type' => 'file',
			'preview_size' => array( 350/1, 350/1 ),
			'query_args' => array( 'type' => 'image' ),
		) );


		$somos_assim_03->add_field( array(
			'name'       => __( 'Informações do integrante ao lado ESQUERDO da imagem' ),
			'id'         => 'wsg_somos_assim_03_esq_title',
			'type' => 'title',
		) );

		$somos_assim_03->add_field( array(
			'name'       => __( 'Nome' ),
			'id'         => 'wsg_somos_assim_03_esq_nome',
			'type' => 'text',
		) );
		$somos_assim_03->add_field( array(
			'name'       => __( 'Cargo' ),
			'id'         => 'wsg_somos_assim_03_esq_cargo',
			'type' => 'text',
		) );
		$somos_assim_03->add_field( array(
			'name'       => __( 'Qualificações' ),
			'id'         => 'wsg_somos_assim_03_esq_qualificacoes',
			'type' => 'text',
			'repeatable' => true
		) );


		$somos_assim_03->add_field( array(
			'name'       => __( 'Informações do integrante ao lado DIREITO da imagem' ),
			'id'         => 'wsg_somos_assim_03_dir_title',
			'type' => 'title',
		) );

		$somos_assim_03->add_field( array(
			'name'       => __( 'Nome' ),
			'id'         => 'wsg_somos_assim_03_dir_nome',
			'type' => 'text',
		) );
		$somos_assim_03->add_field( array(
			'name'       => __( 'Cargo' ),
			'id'         => 'wsg_somos_assim_03_dir_cargo',
			'type' => 'text',
		) );
		$somos_assim_03->add_field( array(
			'name'       => __( 'Qualificações' ),
			'id'         => 'wsg_somos_assim_03_dir_qualificacoes',
			'type' => 'text',
			'repeatable' => true
		) );


	}

?>