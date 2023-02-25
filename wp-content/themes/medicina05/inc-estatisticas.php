<?php $id_home = get_page_by_path( 'home', OBJECT, 'page' )->ID; ?>

	<section class="wsg-03">
		<div class="wsg-container">
			<div class="wsg-flex">
				<?php
					$entries = get_post_meta( $id_home, 'estatisticas_items', true );

					foreach ( (array) $entries as $key => $entry ) {

						if ( isset( $entry['wsg_estatisticas_items_valor'] ) ) {
							$wsg_estatisticas_items_valor = $entry['wsg_estatisticas_items_valor'];
						}
						if ( isset( $entry['wsg_estatisticas_items_titulo'] ) ) {
							$wsg_estatisticas_items_titulo = $entry['wsg_estatisticas_items_titulo'];
						}
				?>
					<div class="wsg-box_3 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-6 wsg-box_tl-6">
						<h2><?php echo $wsg_estatisticas_items_valor; ?></h2>
						<p><?php echo $wsg_estatisticas_items_titulo; ?></p>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>