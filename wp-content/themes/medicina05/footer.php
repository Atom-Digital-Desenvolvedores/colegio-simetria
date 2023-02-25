<?php
	$id_sobre = get_page_by_path( 'sobre', OBJECT, 'page' )->ID;
	$id_admin = get_page_by_path( 'slug-outras-info', OBJECT, 'adminpanel' )->ID;

	$id_logo = get_page_by_path( 'configuracoes-da-logo', OBJECT, 'gerais' )->ID;
	$id_google = get_page_by_path( 'configuracoes-do-google', OBJECT, 'gerais' )->ID;
	$id_email = get_page_by_path( 'email', OBJECT, 'contatos' )->ID;
	$id_endereco = get_page_by_path( 'endereco', OBJECT, 'contatos' )->ID;
	$id_horario = get_page_by_path( 'horario-de-funcionamento', OBJECT, 'contatos' )->ID;
	$id_telefones = get_page_by_path( 'telefones', OBJECT, 'contatos' )->ID;
?>

	<footer class="wsg-footer">
		<div class="wsg-footer_top">
			<div class="wsg-container">
				<div class="wsg-flex">
					<div class="wsg-box_3 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-6 wsg-box_tl-6">
						<a href="<?php bloginfo('url') ?>/" class="wsg-logo">
							<figure>
								<?php
									$wsg_logo_footer_img_id = get_post_meta( $id_logo, 'wsg_logo_footer_img_id', true );
									echo getImageThumb($wsg_logo_footer_img_id, 'full');
								?>
							</figure>
						</a>
						<!--<?php echo wpautop(get_post_meta( $id_sobre, 'wsg_sobre_footer_texto', true )); ?>-->
						<ul class="wsg-mideas-sociais wsg-lista-inline">
							<?php
								$arrayQuery_Midias_Sociais = array(
									'post_type'			=> array( 'redes_sociais' ),
									'posts_per_page'	=> '-1',
									'orderby' 			=> 'menu_order',
									'order' 			=> 'ASC',
								);

								$query_Midias_Sociais = new WP_Query($arrayQuery_Midias_Sociais);

								while ( $query_Midias_Sociais->have_posts()) {
									$query_Midias_Sociais->the_post();
							?>
								<li><a href="<?php echo get_post_meta( get_the_ID(), 'wsg_redes_sociais_link', true ); ?>" target="_blank" class="flaticon-<?php echo get_post_meta( get_the_ID(), 'wsg_redes_sociais_titulo', true); ?>"></a></li>
							<?php
								}
								wp_reset_query();
							?>
						</ul>
					</div>
					<div class="wsg-box_6 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-6 wsg-box_tl-6">

						<div class="wq-footer-logos">
							<?php foreach( get_post_meta( $id_logo, 'wsg_logo_footer_avulsas_img', true ) as $key => $item ){ ?>
								<figure class="wq-logo-avulsa"><?php getImageThumb( $key, "full"); ?></figure>
							<?php } ?>
						</div>
					</div>
					<div class="wsg-box_3 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-6 wsg-box_tl-6">
						<h3>Contato</h3>

						<div class="wsg-footer_contato">
							<span class="flaticon-placeholder-1"></span>
							<?php echo wpautop(get_post_meta( $id_endereco, 'wsg_endereco', true )); ?>
						</div>

						<?php
							$entries = get_post_meta( $id_telefones, 'wsg_telefone_items', true );

							foreach ( (array) $entries as $key => $entry ) {

								if ( isset( $entry['wsg_telefone_nmr'] ) ) {
									$wsg_telefone_nmr = $entry['wsg_telefone_nmr'];
								}
								if ( isset( $entry['wsg_telefone_link'] ) ) {
									$wsg_telefone_link = $entry['wsg_telefone_link'];
								}
								if ( isset( $entry['wsg_telefone_icone'] ) ) {
									$wsg_telefone_icone = $entry['wsg_telefone_icone'];
								}
						?>
							<div class="wsg-footer_contato">
								<span class="flaticon-<?php echo $wsg_telefone_icone; ?>"></span>
								<p>
									<?php if ($wsg_telefone_icone == "phone-1") {echo "Telefone";} else{echo "Whatsapp";} ?>
									<a href="<?php echo $wsg_telefone_link; ?>"><?php echo $wsg_telefone_nmr; ?></a>
								</p>
							</div>
						<?php } ?>

						<?php
							$wsg_emails = get_post_meta( $id_email, 'wsg_emails', true );
							foreach ( (array) $wsg_emails as $key => $email ) {
						?>
							<div class="wsg-footer_contato">
								<span class="flaticon-mail-1"></span>
								<p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>

		<div class="wsg-footer_bottom">
			<div class="wsg-container">
				<div class="wsg-flex">
					<?php echo wpautop(get_post_meta( $id_sobre, 'wsg_sobre_footer_copyright', true )); ?>
					<?php if( $wsg_google_safe_browsing_img_id = get_post_meta( $id_google, 'wsg_google_safe_browsing_img_id', true ) ){ ?>
						<a href="<?php echo get_post_meta( $id_google, 'wsg_google_safe_browsing_link', true ); ?>" target="_blank">
							<figure class="wq-copy__google-safe">
								<?php getImageThumb( $wsg_google_safe_browsing_img_id, "140x40"); ?>
							</figure>
						</a>
					<?php } ?>
					<?php echo wpautop(get_post_meta( $id_admin, 'agency_setting_footer_site_content', true )); ?>

				</div>
			</div>
		</div>

	</footer>

	<?php
		echo get_post_meta( $id_google, 'script_analytics', true );
	?>

	<script src="<?php bloginfo('template_url') ?>/js-template/footer-load.js"></script>

	<?php wp_footer(); ?>

	<?php
		$wsg_whatsapp_popup_link = get_post_meta( $id_telefones, 'wsg_whatsapp_popup_link', true );
		if ( !empty($wsg_whatsapp_popup_link) ) {
	?>
		<div class="wq-whatsapp_btn">
			<a href="<?php echo $wsg_whatsapp_popup_link; ?>" target="_blank">
				<span class="flaticon-whatsapp-2"></span>
			</a>
		</div>
	<?php } ?>
	

</body>
</html>