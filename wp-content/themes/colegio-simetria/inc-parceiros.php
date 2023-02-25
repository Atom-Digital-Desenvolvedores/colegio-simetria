<!-- <?php
	$id_home = get_page_by_path( 'home', OBJECT, 'page' )->ID;
?>
	<section class="wsg-09">
		<div class="wsg-container">
			<div class="wsg-cto">
				<h2 class="wsg-titulo_1"><?php echo get_post_meta( $id_home, 'wsg_parceiros_titulo',  true ); ?></h2>
			</div>
			<div class="wsg-09_carousel">
				<?php
					$entries = get_post_meta( $id_home, 'parceiros_items', true );

					foreach ( (array) $entries as $key => $entry ) {

						if ( isset( $entry['wsg_parceiros_items_img_id'] ) ) {
							$wsg_parceiros_items_img_id = $entry['wsg_parceiros_items_img_id'];
						}
				?>
					<figure>
						<?php getImageThumb($wsg_parceiros_items_img_id,'full') ?>
					</figure>
				<?php } ?>
			</div>
		</div>
	</section> -->