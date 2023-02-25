<?php
	add_action( 'cmb2_admin_init', 'cmb2_metaboxes_gerais_googleanalytics' );
	/**
	* Define the metabox and field configurations.
	*/
	function cmb2_metaboxes_gerais_googleanalytics() {
		$slugGeraisGoogle = get_page_by_path( 'configuracoes-do-google', OBJECT, 'gerais' );
		$post_id;
		if (isset($_GET['post'])) {
			$post_id = $_GET['post'];
		}else if(isset($_POST['post_ID'])) {
			$post_id = $_POST['post_ID'];
		}
		if( !isset( $post_id ) ) return;

		if($slugGeraisGoogle && $slugGeraisGoogle->ID != $post_id){
			return;
		}

		$cmbDataGoogleAnalyticsScript = new_cmb2_box( array(
			'id'            => 'cmbDataGoogleAnalyticsScript',
			'title'         => "Gerais",
			'object_types'  => array( 'gerais', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'     => false,
		));


		$cmbDataGoogleAnalyticsScript->add_field( array(
			'name'  => 'Pixel de conversão (Head)',
			'id'    => 'pixel_de_conversao_facebook',
			'type'  => 'textarea_code'
		));

		$cmbDataGoogleAnalyticsScript->add_field( array(
			'name'  => 'Código WebMasterTools (Head)',
			'id'    => 'code_webmaster_tools',
			'type'  => 'textarea_code'
		));

		$cmbDataGoogleAnalyticsScript->add_field( array(
			'name' => 'Script (Footer / Body)',
			'id' => 'script_analytics',
			'type' => 'textarea_code'
		));



		$cmbDataGoogleAnalyticsScript->add_field( array(
			'name'  => 'Google Safe Browsing Imagem',
			'desc'       => __( 'Tamanho recomendado <strong>160x45</strong>' ),
			'id'    => 'wsg_google_safe_browsing_img',
			'type' => 'file',
			'options' => array(
				'url' => false, // Hide the text input for the url
			),
			'preview_size' => array( 200/1, 100/1 ),
			'query_args' => array( 'type' => 'image' ),
		) );

		$cmbDataGoogleAnalyticsScript->add_field( array(
			'name'  => 'Google Safe Browsing Link',
			'id'    => 'wsg_google_safe_browsing_link',
			'type'  => 'text'
		));
	}
?>