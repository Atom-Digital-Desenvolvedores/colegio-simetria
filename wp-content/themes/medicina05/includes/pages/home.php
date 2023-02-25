<?php

	add_action( 'cmb2_admin_init', 'metaboxes_home' );

	function metaboxes_home() {


		// Metabox Benefícios
		$header = new_cmb2_box( array(
			'id'            => 'header',
			'title'         => __( 'Cabeçalho' ),
			'object_types'  => array( 'page', ),
			'show_on'      => array( 'key' => 'id', 'value' => array( 16 ) ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$header->add_field( array(
			'name'       => __( 'Texto do Botão' ),
			'id'         => 'wsg_header_btn_texto',
			'type'       => 'text',
		) );
		$header->add_field( array(
			'name'       => __( 'Link do Botão' ),
			'id'         => 'wsg_header_btn_link',
			'type'       => 'text',
		) );

		// Metabox Banner
		$banner = new_cmb2_box( array(
			'id'            => 'banners',
			'title'         => __( 'Banners' ),
			'object_types'  => array( 'page', ),
			'show_on'      => array( 'key' => 'id', 'value' => array( 16 ) ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );

		$banner_items = $banner->add_field( array(
			'id'            => 'banner_items',
			'type'          => 'group',
			'options'       => array(
				'group_title'   => __( 'Item {#}' ),
				'add_button'    => __( 'Adicionar Outro Item' ),
				'remove_button' => __( 'Remover Item' ),
				'sortable'      => true,
				'closed'        => true,
			),
		) );

		$banner->add_group_field( $banner_items, array(
			'name'       => __( 'Imagem do banner' ),
			'desc'       => __( 'Tamanho recomendado <strong>1920x520</strong>' ),
			'id'         => 'wsg_banner_items_img',
			'type' => 'file',
			'preview_size' => array( 1920/5, 520/5 ),
			'query_args' => array( 'type' => 'image' ),
		) );

		$banner->add_group_field( $banner_items, array(
			'name'       => __( 'Titulo do banner' ),
			'id'         => 'wsg_banner_items_titulo',
			'type'       => 'text',
		) );
		$banner->add_group_field( $banner_items, array(
			'name'       => __( 'Texto do banner' ),
			'id'         => 'wsg_banner_items_texto',
			'type'       => 'wysiwyg',
		) );
		$banner->add_group_field( $banner_items, array(
			'name'       => __( 'texto do botão' ),
			'id'         => 'wsg_banner_items_btn_texto',
			'type'       => 'text',
		) );
		$banner->add_group_field( $banner_items, array(
			'name'       => __( 'Link do botão' ),
			'id'         => 'wsg_banner_items_btn_link',
			'type'       => 'text',
		) );

		// // Metabox Benefícios
		// $beneficios = new_cmb2_box( array(
		// 	'id'            => 'beneficios',
		// 	'title'         => __( 'Benefícios' ),
		// 	'object_types'  => array( 'page', ),
		// 	'show_on'      => array( 'key' => 'id', 'value' => array( 16 ) ),
		// 	'context'       => 'normal',
		// 	'priority'      => 'high',
		// 	'show_names'    => true,
		// 	'closed'        => true,
		// ) );
		// $beneficios->add_field( array(
		// 	'name'       => __( 'Título da seção' ),
		// 	'id'         => 'wsg_beneficios_titulo',
		// 	'type'       => 'text',
		// ) );
		// $beneficios_items = $beneficios->add_field( array(
		// 	'id'            => 'beneficios_items',
		// 	'type'          => 'group',
		// 	'options'       => array(
		// 		'group_title'   => __( 'Item {#}' ),
		// 		'add_button'    => __( 'Adicionar Outro Item' ),
		// 		'remove_button' => __( 'Remover Item' ),
		// 		'sortable'      => true,
		// 		'closed'        => true,
		// 	),
		// ) );
		// $beneficios->add_group_field( $beneficios_items, array(
		// 	'name'       => __( 'Imagem do item' ),
		// 	'desc'       => __( 'Tamanho recomendado <strong>64x64</strong>' ),
		// 	'id'         => 'wsg_beneficios_items_img',
		// 	'type' => 'file',
		// 	'preview_size' => array( 64/1, 64/1 ),
		// 	'query_args' => array( 'type' => 'image' ),
		// ) );
		// $beneficios->add_group_field( $beneficios_items, array(
		// 	'name'       => __( 'Titulo do item' ),
		// 	'id'         => 'wsg_beneficios_items_titulo',
		// 	'type'       => 'text',
		// ) );
		// $beneficios->add_group_field( $beneficios_items, array(
		// 	'name'       => __( 'Texto do item' ),
		// 	'id'         => 'wsg_beneficios_items_texto',
		// 	'type'       => 'wysiwyg',
		// ) );

		// $beneficios->add_field( array(
		// 	'name'       => __( 'Imagem da seção' ),
		// 	'desc'       => __( 'Tamanho recomendado <strong>560x395</strong>' ),
		// 	'id'         => 'wsg_beneficios_img',
		// 	'type' => 'file',
		// 	'preview_size' => array( 560/1, 395/1 ),
		// 	'query_args' => array( 'type' => 'image' ),
		// ) );

		// $beneficios->add_field( array(
		// 	'name'       => __( 'Link da seção' ),
		// 	'id'         => 'wsg_beneficios_btn_link',
		// 	'type'       => 'text',
		// ) );
		// $beneficios->add_field( array(
		// 	'name'       => __( 'Texto da seção' ),
		// 	'id'         => 'wsg_beneficios_btn_texto',
		// 	'type'       => 'text',
		// ) );

		// Metabox Sobre
		$sobre = new_cmb2_box( array(
			'id'            => 'sobre',
			'title'         => __( 'Sobre nós' ),
			'object_types'  => array( 'page', ),
			'show_on'      => array( 'key' => 'id', 'value' => array( 16 ) ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$sobre->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_sobre_titulo',
			'type'       => 'text',
		) );
		$sobre->add_field( array(
			'name'       => __( 'Resumo sobre nós' ),
			'id'         => 'wsg_sobre_conteudo',
			'type'       => 'wysiwyg',
		) );
		$sobre->add_field( array(
			'name'       => __( 'Imagem da seção 1' ),
			'desc'       => __( 'Tamanho recomendado <strong>260x260</strong>' ),
			'id'         => 'wsg_sobre_img_1',
			'type' => 'file',
			'preview_size' => array( 260/1, 260/1 ),
			'query_args' => array( 'type' => 'image' ),
		) );
		$sobre->add_field( array(
			'name'       => __( 'Imagem da seção 2' ),
			'desc'       => __( 'Tamanho recomendado <strong>260x260</strong>' ),
			'id'         => 'wsg_sobre_img_2',
			'type' => 'file',
			'preview_size' => array( 260/1, 260/1 ),
			'query_args' => array( 'type' => 'image' ),
		) );
		$sobre->add_field( array(
			'name'       => __( 'Imagem da seção 3' ),
			'desc'       => __( 'Tamanho recomendado <strong>260x260</strong>' ),
			'id'         => 'wsg_sobre_img_3',
			'type' => 'file',
			'preview_size' => array( 260/1, 260/1 ),
			'query_args' => array( 'type' => 'image' ),
		) );
		$sobre->add_field( array(
			'name'       => __( 'Imagem da seção 4' ),
			'desc'       => __( 'Tamanho recomendado <strong>260x260</strong>' ),
			'id'         => 'wsg_sobre_img_4',
			'type' => 'file',
			'preview_size' => array( 260/1, 260/1 ),
			'query_args' => array( 'type' => 'image' ),
		) );

		// Metabox Estatísticas
		// $estatisticas = new_cmb2_box( array(
		// 	'id'            => 'estatisticas',
		// 	'title'         => __( 'Estatísticas' ),
		// 	'object_types'  => array( 'page', ),
		// 	'show_on'      => array( 'key' => 'id', 'value' => array( 16 ) ),
		// 	'context'       => 'normal',
		// 	'priority'      => 'high',
		// 	'show_names'    => true,
		// 	'closed'        => true,
		// ) );

		// $estatisticas_items = $estatisticas->add_field( array(
		// 	'id'            => 'estatisticas_items',
		// 	'type'          => 'group',
		// 	'options'       => array(
		// 		'group_title'   => __( 'Item {#}' ),
		// 		'add_button'    => __( 'Adicionar outra item' ),
		// 		'remove_button' => __( 'Remover item' ),
		// 		'sortable'      => true,
		// 		'closed'        => true,
		// 	),
		// ) );
		// $estatisticas->add_group_field( $estatisticas_items, array(
		// 	'name'       => __( 'Valor do item' ),
		// 	'id'         => 'wsg_estatisticas_items_valor',
		// 	'type' => 'text',
		// ) );
		// $estatisticas->add_group_field( $estatisticas_items, array(
		// 	'name'       => __( 'Título do item' ),
		// 	'id'         => 'wsg_estatisticas_items_titulo',
		// 	'type' => 'text',
		// ) );

		// Metabox Serviços
		$servicos = new_cmb2_box( array(
			'id'            => 'servicos',
			'title'         => __( 'Segmentos' ),
			'object_types'  => array( 'page', ),
			'show_on'      => array( 'key' => 'id', 'value' => array( 16 ) ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$servicos->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_servicos_titulo',
			'type'       => 'text',
		) );
		$servicos->add_field( array(
			'name'    => __( 'Listagem de segmentos' ),
			'desc'    => __( 'Arraste os segmentos da coluna da esquerda para a da direita para anexá-lo. <br/>Você pode reorganizar a ordem dos segmentos na coluna da direita arrastando e soltando.'),
			'id'      => 'wsg_servicos_na_home',
			'type'    => 'custom_attached_posts',
			'column'  => false,
			'options' => array(
				'show_thumbnails' => true,
				'filter_boxes'    => true,
				'query_args'      => array(
					'posts_per_page' => -1,
					'post_type'      => 'servicos192',
				),
			),
		) );

		// Metabox Nossa Estrutura
		$projetos = new_cmb2_box( array(
			'id'            => 'projetos',
			'title'         => __( 'Nossa Estrutura' ),
			'object_types'  => array( 'page', ),
			'show_on'      => array( 'key' => 'id', 'value' => array( 16 ) ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );

		$projetos->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_projetos_titulo',
			'type'       => 'text',
		) );
		$projetos->add_field( array(
			'name'    => __( 'Listagem de Nossa Estrutura' ),
			'desc'    => __( 'Arraste os itens da coluna da esquerda para a da direita para anexá-lo. <br/>Você pode reorganizar a ordem dos itens na coluna da direita arrastando e soltando.'),
			'id'      => 'wsg_projetos_na_home',
			'type'    => 'custom_attached_posts',
			'column'  => false,
			'options' => array(
				'show_thumbnails' => true,
				'filter_boxes'    => true,
				'query_args'      => array(
					'posts_per_page' => -1,
					'post_type'      => 'projetos192',
				),
			),
		) );

		// Metabox Mais informação
		$info = new_cmb2_box( array(
			'id'            => 'info',
			'title'         => __( 'Mais informação' ),
			'object_types'  => array( 'page', ),
			'show_on'      => array( 'key' => 'id', 'value' => array( 16 ) ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$info->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_info_titulo',
			'type'       => 'text',
		) );
		$info->add_field( array(
			'name'       => __( 'Texto da seção' ),
			'id'         => 'wsg_info_texto',
			'type'       => 'wysiwyg',
		) );
		$info->add_field( array(
			'name'       => __( 'Imagem de fundo da seção' ),
			'desc'       => __( 'Tamanho recomendado <strong>1920x720</strong>' ),
			'id'         => 'wsg_info_img',
			'type' => 'file',
			'preview_size' => array( 1920/1, 720/1 ),
			'query_args' => array( 'type' => 'image' ),
		) );
		$info->add_field( array(
			'name'       => __( 'Texto do botão da seção' ),
			'id'         => 'wsg_info_btn_texto',
			'type'       => 'text',
		) );
		$info->add_field( array(
			'name'       => __( 'Link do botão da seção' ),
			'id'         => 'wsg_info_btn_link',
			'type'       => 'text',
		) );

		// Metabox Depoimentos
		$depoimentos = new_cmb2_box( array(
			'id'            => 'depoimentos',
			'title'         => __( 'Depoimentos' ),
			'object_types'  => array( 'page', ),
			'show_on'      => array( 'key' => 'id', 'value' => array( 16 ) ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );

		$depoimentos->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_depoimentos_titulo',
			'type'       => 'text',
		) );

		// Metabox Ultimas do blog
		$blog = new_cmb2_box( array(
			'id'            => 'blog',
			'title'         => __( 'Ultimas do blog' ),
			'object_types'  => array( 'page', ),
			'show_on'      => array( 'key' => 'id', 'value' => array( 16 ) ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );

		$blog->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_blog_titulo',
			'type'       => 'text',
		) );

		// // Metabox Parceiros
		// $parceiros = new_cmb2_box( array(
		// 	'id'            => 'parceiros',
		// 	'title'         => __( 'Parceiros' ),
		// 	'object_types'  => array( 'page', ),
		// 	'show_on'      => array( 'key' => 'id', 'value' => array( 16 ) ),
		// 	'context'       => 'normal',
		// 	'priority'      => 'high',
		// 	'show_names'    => true,
		// 	'closed'        => true,
		// ) );

		// $parceiros->add_field( array(
		// 	'name'       => __( 'Título da seção' ),
		// 	'id'         => 'wsg_parceiros_titulo',
		// 	'type'       => 'text',
		// ) );
		// $parceiros_items = $parceiros->add_field( array(
		// 	'id'            => 'parceiros_items',
		// 	'type'          => 'group',
		// 	'options'       => array(
		// 		'group_title'   => __( 'Item {#}' ),
		// 		'add_button'    => __( 'Adicionar Outro Item' ),
		// 		'remove_button' => __( 'Remover Item' ),
		// 		'sortable'      => true,
		// 		'closed'        => true,
		// 	),
		// ) );

		// $parceiros->add_group_field( $parceiros_items, array(
		// 	'name'       => __( 'Imagem do item' ),
		// 	'desc'       => __( 'Tamanho recomendado <strong>230x50</strong>' ),
		// 	'id'         => 'wsg_parceiros_items_img',
		// 	'type' => 'file',
		// 	'preview_size' => array( 230/1, 50/1 ),
		// 	'query_args' => array( 'type' => 'image' ),
		// ) );

		// Metabox call_to_action
		$call_to_action = new_cmb2_box( array(
			'id'            => 'call_to_action',
			'title'         => __( 'Chamada para ação' ),
			'object_types'  => array( 'page', ),
			'show_on'      => array( 'key' => 'id', 'value' => array( 16 ) ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$call_to_action->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_call_to_action_titulo',
			'type'       => 'text',
		) );
		$call_to_action->add_field( array(
			'name'       => __( 'Texto do botão da seção' ),
			'id'         => 'wsg_call_to_action_btn_texto',
			'type'       => 'text',
		) );
		$call_to_action->add_field( array(
			'name'       => __( 'Link do botão da seção' ),
			'id'         => 'wsg_call_to_action_btn_link',
			'type'       => 'text',
		) );

	}

?>