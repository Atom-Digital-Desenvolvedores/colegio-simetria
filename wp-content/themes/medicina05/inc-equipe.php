<?php
	$id_home = get_page_by_path( 'home', OBJECT, 'page' )->ID;
?>

	<section class="wsg-05">
		<div class="wsg-container">
			<div class="wsg-cto">
				<h2 class="wsg-titulo_1"><?php echo get_post_meta( $id_home, 'wsg_equipe_titulo',  true ); ?></h2>
				<?php echo wpautop(get_post_meta( $id_home, 'wsg_equipe_texto',  true )); ?>
			</div>
			<div class="wsg-05-carousel">
				<?php

					$arrayQueryEquipe = array(
						'post_type'				=> array( 'equipe192' ),
						'orderby' => 'menu_order',
						'order' => 'ASC',
						'posts_per_page'		=> '-1',
					);
					$queryEquipe = new WP_Query($arrayQueryEquipe);
					while ( $queryEquipe->have_posts()) {
						$queryEquipe->the_post();
				?>
					<div class="wsg-05-carousel_item">
						<div class="wsg-05_box">
							<figure>
								<?php
									$wsg_equipe_item_img_id = get_post_meta( get_the_ID(), 'wsg_equipe_item_img_id', true );
									getImageThumb($wsg_equipe_item_img_id,'360x350');
								?>
							</figure>
							<div class="wsg-05-conteudo">
								<h2><?php the_title() ?></h2>
								<h3><?php echo get_post_meta( get_the_ID(), 'wsg_equipe_item_cargo', true ) ?></h3>
							</div>
							<ul class="wsg-lista-inline">
								<?php
									$entries = get_post_meta( get_the_ID(), 'equipe_redes_sociais', true );

									foreach ( (array) $entries as $key => $entry ) {

										if ( isset( $entry['wsg_equipe_redes_sociais_icone'] ) ) {
											$wsg_equipe_redes_sociais_icone = $entry['wsg_equipe_redes_sociais_icone'];
										}
										if ( isset( $entry['wsg_equipe_redes_sociais_link'] ) ) {
											$wsg_equipe_redes_sociais_link = $entry['wsg_equipe_redes_sociais_link'];
										}
								?>
									<li>
										<a href="<?php echo $wsg_equipe_redes_sociais_link; ?>" target="_blank">
											<span class="flaticon-<?php echo $wsg_equipe_redes_sociais_icone; ?>"></span>
										</a>
									</li>
								<?php } ?>
							</ul>
						</div>
					</div>
				<?php }wp_reset_query(); ?>
			</div>
		</div>
	</section>