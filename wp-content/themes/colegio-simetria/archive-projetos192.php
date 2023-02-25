<?php
	get_header();

	$id_page = get_page_by_path( 'nossa-estrutura', OBJECT, 'page' )->ID;
?>

	<?php include "inc-breadcrumbs.php"; ?>

	<section class="wsg-servicos_01">
		<div class="wsg-container">
			<div class="wsg-flex">
				<?php
					$arrayQueryProjetos = array(
						'post_type'				=> array( 'projetos192' ),
						'orderby' => 'menu_order',
						'order' => 'ASC',
						'posts_per_page'		=> '-1',
					);
					$queryProjetos = new WP_Query($arrayQueryProjetos);
					while ( $queryProjetos->have_posts()) {
						$queryProjetos->the_post();
				?>
					<div data-aos="fade-up" data-aos-duration="2000" class="wsg-box_4 wsg-box_cp-12 wsg-box_cl-6 wsg-box_tp-6 wsg-box_tl-4">
						<a href="#wsg-carousel-modal-<?php echo get_the_ID();?>" data-lity class="wsg-04_box">
							<figure>
								<?php
									$wsg_projeto_item_img_id = get_post_meta( get_the_ID(), 'wsg_projeto_item_img_id', true );
									getImageThumb($wsg_projeto_item_img_id,'375x250');
								?>
								<figcaption>
									<div class="wsg-04_conteudo">
										<div class="wsg-flex">
											<h3><?php the_title(); ?></h3>
										</div>
										<?php echo wpautop(get_post_meta( get_the_ID(), 'wsg_projeto_item_resumo', true )); ?>
										<span class="wsg-link">Veja Mais <span class="flaticon-next"></span></span>
									</div>
								</figcaption>
							</figure>
						</a>
					</div>

				<?php } ?>
			</div>
		</div>
	</section>



	<?php 
	while ( $queryProjetos->have_posts()) {
		$queryProjetos->the_post();
		 ?>
		<div id="wsg-carousel-modal-<?php echo get_the_ID();?>" class="lity-hide">
			<div class="wsg-carousel-modal-01">
					

				<?php
				$wsg_projeto_item_interna_imgs = get_post_meta( get_the_ID(), "wsg_projeto_item_interna_imgs", true );
				if( $wsg_projeto_item_interna_imgs ){
					foreach( $wsg_projeto_item_interna_imgs as $key => $entry ){ ?>
					<div>
						<figure><?php getImageThumb( $key, "full"); ?></figure>
					</div>
				<?php }}else{ ?>
					<div>
						<figure><?php getImageThumb( get_post_meta( get_the_ID(), 'wsg_projeto_item_img_id', true ), "full"); ?></figure>
					</div>
				<?php } ?>

				<div>
				</div>
			</div>
		</div>
	<?php } ?>

<?php get_footer(); ?>