<?php
	get_header();

	$id_page = get_page_by_path( 'segmentos', OBJECT, 'page' )->ID;
?>

	<?php include "inc-breadcrumbs.php"; ?>

	<section class="wsg-servicos_01">
		<div class="wsg-container">
			<div class="wsg-flex">
				<?php
					$arrayQueryServicos = array(
						'post_type'				=> array( 'servicos192' ),
						'orderby' => 'menu_order',
						'order' => 'ASC',
						'posts_per_page'		=> '-1',
					);
					$queryServicos = new WP_Query($arrayQueryServicos);
					while ( $queryServicos->have_posts()) {
						$queryServicos->the_post();
				?>
					<div data-aos="fade-up" data-aos-duration="2000" class="wsg-box_4 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-4 wsg-box_tl-4">
						<div class="wsg-servico_box">
							<figure>
								<?php
									$wsg_servico_item_icone_id = get_post_meta( get_the_ID(), 'wsg_servico_item_icone_id', true );
									getImageThumb($wsg_servico_item_icone_id,'full');
								?>
							</figure>
							<div>
								<h2><?php the_title(); ?></h2>
								<?php echo wpautop(get_post_meta( get_the_ID(), 'wsg_servico_item_resumo', true )); ?>
								<a href="<?php the_permalink(); ?>" class="wsg-btn wsg-btn_estilo-2 wsg-btn_larg-menor">
									<span>Veja Mais</span>
								</a>
							</div>
						</div>
					</div>
				<?php }wp_reset_query(); ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>