<?php $id_home = get_page_by_path( 'home', OBJECT, 'page' )->ID; ?>

	<section class="wsg-07">
		<div class="wsg-container">
			<div class="wsg-cto">
				<h2 class="wsg-titulo_1"><?php echo get_post_meta( $id_home, 'wsg_depoimentos_titulo',  true ); ?></h2>
			</div>
			<div class="wsg-07_carousel">
				<?php
					$arrayQueryDepoimentos = array(
						'post_type'				=> array( 'depoimentos192' ),
						'orderby' => 'menu_order',
						'order' => 'ASC',
						'posts_per_page'		=> '-1',
					);
					$queryDepoimentos = new WP_Query($arrayQueryDepoimentos);
					while ( $queryDepoimentos->have_posts()) {
						$queryDepoimentos->the_post();
				?>
					<div class="wsg-07_carousel-item">
						<div class="wsg-07_item">
							<div class="wsg-flex">
								<figure>
									<?php
										$wsg_depoimento_item_img_id = get_post_meta( get_the_ID(), 'wsg_depoimento_item_img_id', true );
										getImageThumb($wsg_depoimento_item_img_id,'180x180');
									?>
								</figure>
								<div class="wsg-07_conteudo">
									<?php echo wpautop(get_post_meta( get_the_ID(), 'wsg_depoimento_item_conteudo', true )); ?>
									<h2><?php the_title(); ?></h2>
									<h4><?php echo get_post_meta( get_the_ID(), 'wsg_depoimento_item_cargo', true ) ?></h4>
								</div>
							</div>
						</div>
					</div>
				<?php }wp_reset_query(); ?>
			</div>
		</div>
	</section>