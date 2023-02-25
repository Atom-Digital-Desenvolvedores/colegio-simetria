<?php
	get_header();

	$id_page = get_page_by_path( 'sobre', OBJECT, 'page' )->ID;
?>

	<?php include "inc-breadcrumbs.php"; ?>

	<section class="wsg-02">
		<div class="wsg-container">
			<div class="wsg-flex">
				<div data-aos="fade-right" data-aos-duration="2000" class="wsg-box_6 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-12 wsg-box_tl-6">
					<h2 class="wsg-titulo_2"><?php echo get_post_meta( $id_page, 'wsg_sobre_01_titulo', true ); ?></h2>
					<?php echo wpautop(get_post_meta( $id_page, 'wsg_sobre_01_conteudo', true )); ?>
				</div>
				<div data-aos="fade-left" data-aos-duration="2000" class="wsg-box_6 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-12 wsg-box_tl-6">
					
					<figure>
						<?php
							$wsg_sobre_01_img_id = get_post_meta( $id_page, 'wsg_sobre_01_img_id', true );
							getImageThumb($wsg_sobre_01_img_id,'560x395');
						?>
					</figure>
				</div>
			</div>
		</div>
	</section>

	<section class="wsg-empresa_01">
		<div class="wsg-container">
			<div class="wsg-flex">
				<?php
					$entries = get_post_meta( $id_page, 'sobre_02_items', true );

					foreach ( (array) $entries as $key => $entry ) {

						if ( isset( $entry['wsg_sobre_02_items_img_id'] ) ) {
							$wsg_sobre_02_items_img_id = $entry['wsg_sobre_02_items_img_id'];
						}
						if ( isset( $entry['wsg_sobre_02_items_titulo'] ) ) {
							$wsg_sobre_02_items_titulo = $entry['wsg_sobre_02_items_titulo'];
						}
						if ( isset( $entry['wsg_sobre_02_items_texto'] ) ) {
							$wsg_sobre_02_items_texto = $entry['wsg_sobre_02_items_texto'];
						}
				?>
					<div data-aos="fade-up" data-aos-duration="2000" class="wsg-box_4 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-12 wsg-box_tl-4">
						<span>
							<?php getImageThumb($wsg_sobre_02_items_img_id,'64x64') ?>
						</span>
						<h3><?php echo $wsg_sobre_02_items_titulo; ?></h3>
						<?php echo wpautop($wsg_sobre_02_items_texto); ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>

	<?php
		$wsg_info_img_id = get_post_meta($id_page, 'wsg_info_img_id', true);
		$wsg_info_img_id = wp_get_attachment_image_src($wsg_info_img_id, '1920x720');
		$wsg_info_img_id = $wsg_info_img_id[0];
	?>

	<!--<section class="wsg-06" style="background-image: url(<?php echo $wsg_info_img_id; ?>);">
		<div class="wsg-container">
			<div class="wsg-flex">
				<div class="wsg-box_6 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-12 wsg-box_tl-7">
					<div class="wsg-06_box">
						<h2 class="wsg-titulo_2"><?php echo get_post_meta( $id_page, 'wsg_info_titulo',  true ); ?></h2>
						<?php echo wpautop(get_post_meta( $id_page, 'wsg_info_texto',  true )); ?>
					</div>
					<a href="<?php echo get_post_meta( $id_page, 'wsg_info_btn_link', true ); ?>" class="wsg-btn_estilo-3">
						<span><?php echo get_post_meta( $id_page, 'wsg_info_btn_texto', true ); ?></span> <span class="flaticon-next"></span>
					</a>
				</div>
			</div>
		</div>
	</section>-->


<?php get_footer(); ?>