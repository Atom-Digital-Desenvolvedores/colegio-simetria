<?php
	get_header();

	$id_page = get_page_by_path( 'home', OBJECT, 'page' )->ID;
?>
	<!--<section class="wsg-banner">
		<?php
			$entries = get_post_meta( $id_page, 'banner_items', true );

			foreach ( (array) $entries as $key => $entry ) {

				$wsg_banner_items_titulo = null;
				$wsg_banner_items_texto = null;
				$wsg_banner_items_btn_texto = null;

				if ( isset( $entry['wsg_banner_items_img_id'] ) ) {
					$wsg_banner_items_img_id = $entry['wsg_banner_items_img_id'];
				}
				if ( isset( $entry['wsg_banner_items_titulo'] ) ) {
					$wsg_banner_items_titulo = $entry['wsg_banner_items_titulo'];
				}
				if ( isset( $entry['wsg_banner_items_texto'] ) ) {
					$wsg_banner_items_texto = $entry['wsg_banner_items_texto'];
				}
				if ( isset( $entry['wsg_banner_items_btn_link'] ) ) {
					$wsg_banner_items_btn_link = $entry['wsg_banner_items_btn_link'];
				}
				if ( isset( $entry['wsg_banner_items_btn_texto'] ) ) {
					$wsg_banner_items_btn_texto = $entry['wsg_banner_items_btn_texto'];
				}
		?>
			<div class="wsg-banner_item">
				<figure>
					<?php getImageThumb($wsg_banner_items_img_id,'1920x720') ?>
				</figure>
				<div class="wsg-banner_conteudo">
					<div class="wsg-container">
						<?php if ($wsg_banner_items_titulo != null && strlen($wsg_banner_items_titulo) > 0) { ?>
							<h2><?php echo $wsg_banner_items_titulo; ?></h2>
						<?php } ?>
						<?php if ($wsg_banner_items_texto != null && strlen($wsg_banner_items_texto) > 0) { ?>
							<?php echo wpautop($wsg_banner_items_texto); ?>
						<?php } ?>
						<?php if ($wsg_banner_items_btn_texto != null && strlen($wsg_banner_items_btn_texto) > 0) { ?>
							<a href="<?php echo $wsg_banner_items_btn_link; ?>" class="wsg-btn wsg-btn_estilo-1">
								<span><?php echo $wsg_banner_items_btn_texto; ?></span>
							</a>
						<?php } ?>
					</div>
				</div>
			</div>
		<?php } ?>
	</section>-->

	<section class="banner-tabs-content">
			<div class="banner-bgc-colors tab-content">

				<?php $banner_items = get_post_meta( $id_page, "banner_items", true );
					if( $banner_items ){
						$count = 0;
						foreach( $banner_items as $key => $entry ){ ?>

					<?php if( $count == 0 ){ ?>
						<div class="banner-color-item tab-pane active show" id="nav-<?php echo $count;?>" style="background-color: <?php echo $entry['wsg_banner_items_colorpicker'] ?>;">
					<?php }else{ ?>
						<div class="banner-color-item tab-pane" id="nav-<?php echo $count;?>" style="background-color: <?php echo $entry['wsg_banner_items_colorpicker'] ?>;">
					<?php } ?>
						<div class="wsg-container">
							<div class="banner-conteudo-wrapper">
								<div class="banner-conteudo-carousel-item">
									<h2><?php echo $entry['wsg_banner_items_titulo']; ?></h2>
									<?php echo wpautop($entry['wsg_banner_items_texto']); ?>

									<?php if( $wsg_banner_items_btn_texto = $entry['wsg_banner_items_btn_texto'] ){ ?>
										<a href="<?php echo $entry['wsg_banner_items_btn_link']; ?>" class="wsg-btn wsg-btn_estilo-2 wsg-btn_larg-menor">
											<span><?php echo $entry['wsg_banner_items_btn_texto']; ?></span>
										</a>
									<?php } ?>
								</div>

								<div>
									<figure><?php getImageThumb( $entry['wsg_banner_items_img_id'], "440x440"); ?></figure>

									<ul class="nav nav-tabs btns-mobile">

										<?php $banner_items = get_post_meta( $id_page, "banner_items", true );
											if( count($banner_items) > 1){
												$count02 = 0;
												foreach( $banner_items as $entries => $item ){
													$active = '';
													if( $count02 == 0){
														$active = 'active';
													}else{
														$active = '';
													}
													?>
												<li> <a class="tabs-btn <?php echo $active; ?>" style="background-color: <?php echo $item['wsg_banner_items_colorpicker']; ?>;" data-toggle="tab" href="#nav-<?php echo $count02; ?>"><span>
													<?php echo $item['wsg_banner_items_select_titulo'] ?>	</span></a> 
												</li> 
										<?php $count02++; }} ?>


									</ul> 
								</div>
								
							</div>
						</div>
					</div>
				<?php $count++; }} ?>

			</div>
			<div class="banner-particles" id="particles"><canvas class="pg-canvas" style="display:block;" width="867" height="685"></canvas></div>
			<div class="btns-content">
				<div class="wsg-container">
					<div class="btns-content-wrapper">
						<div></div>
						<ul class="nav nav-tabs">


						<?php $banner_items = get_post_meta( $id_page, "banner_items", true );

							if( count($banner_items) > 1){
								$count03 = 0;
								foreach( $banner_items as $entries => $item ){
									$active = '';
									if( $count03 == 0){
										$active = 'active';
									}else{
										$active = '';
									}
									?>
								<li> <a class="tabs-btn <?php echo $active; ?>" style="background-color: <?php echo $item['wsg_banner_items_colorpicker']; ?>;" data-toggle="tab" href="#nav-<?php echo $count03; ?>"><span>
									<?php echo $item['wsg_banner_items_select_titulo']; ?>	</span></a> 
								</li> 
						<?php $count03++; }} ?>
						
						</ul> 
					</div>
				</div>
			</div>
		</section>

	<section class="wsg-02">
		<div class="wsg-container">
			<div class="wsg-flex">
				<div data-aos="fade-right" data-aos-duration="2000" class="wsg-box_7 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-12 wsg-box_tl-7">
					<h1 class="wsg-titulo_2"><?php echo get_post_meta( $id_page, 'wsg_sobre_titulo', true ); ?></h1>
					<?php echo wpautop(get_post_meta( $id_page, 'wsg_sobre_conteudo', true )); ?>
				</div>
				<div class="wsg-box_5 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-12 wsg-box_tl-5">
					<div class="wsg-flex wsg-sobre_imgs">
						<div data-aos="fade" data-aos-duration="2000" class="wsg-box_6 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-12 wsg-box_tl-6">
							<figure>
								<?php
									$wsg_sobre_img_1_id = get_post_meta( $id_page, 'wsg_sobre_img_1_id', true );
									getImageThumb($wsg_sobre_img_1_id,'440x440');
								?>
							</figure>
						</div>
						<div data-aos="fade" data-aos-duration="2000" class="wsg-box_6 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-12 wsg-box_tl-6">
							<figure>
								<?php
									$wsg_sobre_img_2_id = get_post_meta( $id_page, 'wsg_sobre_img_2_id', true );
									getImageThumb($wsg_sobre_img_2_id,'440x440');
								?>
							</figure>
						</div>
						<div data-aos="fade" data-aos-duration="2000" class="wsg-box_6 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-12 wsg-box_tl-6">
							<figure>
								<?php
									$wsg_sobre_img_3_id = get_post_meta( $id_page, 'wsg_sobre_img_3_id', true );
									getImageThumb($wsg_sobre_img_3_id,'440x440');
								?>
							</figure>
						</div>
						<div data-aos="fade" data-aos-duration="2000" class="wsg-box_6 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-12 wsg-box_tl-6">
							<figure>
								<?php
									$wsg_sobre_img_4_id = get_post_meta( $id_page, 'wsg_sobre_img_4_id', true );
									getImageThumb($wsg_sobre_img_4_id,'440x440');
								?>
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--<section class="wsg-02_beneficios">
		<div class="wsg-container">
			<div class="wsg-cto">
				<h3 class="wsg-titulo_1"><?php echo get_post_meta( $id_page, 'wsg_beneficios_titulo', true ); ?></h3>
			</div>
			<div class="wsg-flex">
				<?php
					$entries = get_post_meta( $id_page, 'beneficios_items', true );

					$position = 0;
					foreach ( (array) $entries as $key => $entry ) {

						$position++;

						if ( isset( $entry['wsg_beneficios_items_img_id'] ) ) {
							$wsg_beneficios_items_img_id = $entry['wsg_beneficios_items_img_id'];
						}
						if ( isset( $entry['wsg_beneficios_items_titulo'] ) ) {
							$wsg_beneficios_items_titulo = $entry['wsg_beneficios_items_titulo'];
						}
						if ( isset( $entry['wsg_beneficios_items_texto'] ) ) {
							$wsg_beneficios_items_texto = $entry['wsg_beneficios_items_texto'];
						}
				?>
					<div class="wsg-box_3 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-12 wsg-box_tl-12">
						<div class="wsg-beneficios_box">
							<figure>
								<?php getImageThumb($wsg_beneficios_items_img_id,'64x64') ?>
							</figure>
							<div>
								<h2><?php echo $wsg_beneficios_items_titulo; ?></h2>
								<?php echo wpautop($wsg_beneficios_items_texto); ?>
							</div>
						</div>
					</div>
				<?php } ?>
				<div class="wsg-box_6 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-12 wsg-box_tl-12">
					<figure>
						<?php
							$wsg_beneficios_img_id = get_post_meta( $id_page, 'wsg_beneficios_img_id', true );
							getImageThumb($wsg_beneficios_img_id,'440x440');
						?>
					</figure>
				</div>
				<div class="wsg-box_6 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-12 wsg-box_tl-12"></div>
			</div>
			<div class="wsg-cto">
				<a href="<?php echo get_post_meta( $id_page, 'wsg_beneficios_btn_link', true ); ?>" class="wsg-btn wsg-btn_estilo-1">
					<span><?php echo get_post_meta( $id_page, 'wsg_beneficios_btn_texto', true ); ?></span>
				</a>
			</div>
		</div>
	</section>-->

	<section class="wsg-01">
		<div class="wsg-container">
			<div class="wsg-cto">
				<h3 class="wsg-titulo_1"><?php echo get_post_meta( $id_page, 'wsg_servicos_titulo',  true ); ?></h3>
			</div>
			<div class="wsg-flex">
				<?php
					$wsg_servicos_na_home = get_post_meta( $id_page, 'wsg_servicos_na_home', true );

					$arrayQueryServicos = array(
						'post_type'				=> array( 'servicos192' ),
						'orderby' => 'menu_order',
						'order' => 'ASC',
						'posts_per_page'		=> '4',
						'post__in'				=> $wsg_servicos_na_home
					);
					$queryServicos = new WP_Query($arrayQueryServicos);
					while ( $queryServicos->have_posts()) {
						$queryServicos->the_post();
				?>
					<div data-aos="fade-up" data-aos-duration="2000" class="wsg-box_6 wsg-box_cp-12 wsg-box_cl-6 wsg-box_tp-6 wsg-box_tl-6">
						<div class="wsg-servico_box">
							<figure>
								<?php
									$wsg_servico_item_icone_id = get_post_meta( get_the_ID(), 'wsg_servico_item_icone_id', true );
									getImageThumb($wsg_servico_item_icone_id,'370x283');
								?>
							</figure>
							<div>
								<h2><?php the_title(); ?></h2>
								<?php //echo wpautop(get_post_meta( get_the_ID(), 'wsg_servico_item_resumo', true )); ?>
								<a href="<?php the_permalink(); ?>" class="wsg-btn wsg-btn_estilo-2 wsg-btn_larg-menor">
									<span>Veja Mais</span>
								</a>
							</div>
						</div>
					</div>
				<?php }wp_reset_query(); ?>
			</div>
			<div class="wsg-cto">
				<a href="<?php bloginfo('url'); ?>/segmentos" class="wsg-btn wsg-btn_estilo-1">
					<span>Ver todos</span>
				</a>
			</div>
		</div>
	</section>

	<section class="wsg-04">
		<div class="wsg-container">
			<div class="wsg-cto">
				<h2 class="wsg-titulo_1"><?php echo get_post_meta( $id_page, 'wsg_projetos_titulo',  true ); ?></h2>
			</div>
			<div class="wsg-04-carousel">
				<?php
					$wsg_projetos_na_home = get_post_meta( $id_page, 'wsg_projetos_na_home', true );

					$arrayQueryProjetos = array(
						'post_type'				=> array( 'projetos192' ),
						'orderby' => 'menu_order',
						'order' => 'ASC',
						'posts_per_page'		=> '-1',
						'post__in'				=> $wsg_projetos_na_home
					);
					$queryProjetos = new WP_Query($arrayQueryProjetos);
					while ( $queryProjetos->have_posts()) {
						$queryProjetos->the_post();

						$wsg_projeto_item_interna_imgs = get_post_meta( get_the_ID(), "wsg_projeto_item_interna_imgs", true );
				?>
					<div class="wsg-04_carousel-item">
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
										<span class="wsg-link">Veja Mais </span>
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
					
				</div>
			</div>
	<?php }wp_reset_query(); ?>


	<!-- seção de estatisticas removida -->

	<?php include "inc-parceiros.php"; ?>

	<?php
		$wsg_info_img_id = get_post_meta($id_page, 'wsg_info_img_id', true);
		$wsg_info_img_id = wp_get_attachment_image_src($wsg_info_img_id, '1920x720');
		$wsg_info_img_id = $wsg_info_img_id[0];
	?>

	<section class="wsg-06 wsg-cto" style="background-image: url(<?php echo $wsg_info_img_id; ?>);">
		<div class="wsg-container">
			<h2 class="wsg-titulo_2"><?php echo get_post_meta( $id_page, 'wsg_info_titulo',  true ); ?></h2>
			<?php echo wpautop(get_post_meta( $id_page, 'wsg_info_texto',  true )); ?>
			<a href="<?php echo get_post_meta( $id_page, 'wsg_info_btn_link', true ); ?>" class="wsg-btn wsg-btn_estilo-1">
				<span><?php echo get_post_meta( $id_page, 'wsg_info_btn_texto', true ); ?></span>
			</a>
		</div>
	</section>

	<!-- seção de depoimentos removida -->

	<section class="wsg-08">
		<div class="wsg-container">
			<div class="wsg-cto">
				<h2 class="wsg-titulo_1"><?php echo get_post_meta( $id_page, 'wsg_blog_titulo',  true ); ?></h2>
			</div>
			<div class="wsg-08_item">
				<div class="wsg-flex">
					<?php
						$args = array (
							'post_type'         => 'post',
							'posts_per_page'    => 3
						);
						$query = new WP_Query( $args );
						$posts = $query->get_posts();
						foreach ($posts as $key => $item) {
							// setup_postdata($item);
							$categories = get_the_terms( $item->ID, 'category' );
							$htmlCategory = '';
							if ( $categories && ! is_wp_error( $categories ) ){
								$draught_links = array();
								foreach ($categories as $category) {
									$cat_Item = '<a href="'.get_term_link($category->term_id, "category").'" title="'.$category->name.'" > '.$category->name.'</a>';
									array_push($draught_links, $cat_Item);
								}
								$htmlCategory = implode(' | ', $draught_links);
							}
					?>
						<div data-aos="fade-up" data-aos-duration="2000" class="wsg-box_4 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-6 wsg-box_tl-4">
							<div class="wsg-08_box">
								<figure>
									<a href="<?php echo get_permalink($item->ID); ?>">
										<?php echo getImageThumb(get_post_thumbnail_id($item->ID), '400x280'); ?>
									</a>
									<figcaption>
										<span><?php echo $htmlCategory; ?></span>
									</figcaption>
								</figure>
								<div class="wsg-08_conteudo">
									<span class="wq-data">
										<?php echo get_the_date('d', $item->ID); ?>/<?php echo get_the_date('m', $item->ID); ?>/<?php echo get_the_date('Y', $item->ID); ?>
									</span>
									<h3><a href="<?php echo get_permalink($item->ID); ?>"><?php echo $item->post_title; ?></a></h3>
									<?php echo wpautop($item->post_excerpt); ?>
								</div>
							</div>
						</div>
					<?php }wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</section>

	<?php include "inc-depoimentos.php"; ?>

	<?php include "inc-call_to_action.php"; ?>

<?php get_footer(); ?>