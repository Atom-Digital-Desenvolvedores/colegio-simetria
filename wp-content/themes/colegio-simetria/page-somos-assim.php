<?php
	get_header();

	$id_page = get_page_by_path( 'somos-assim', OBJECT, 'page' )->ID;
?>

	<?php include "inc-breadcrumbs.php"; ?>

	<section class="wsg-energia_01 wsg-cto">
		<div class="wsg-container">
			<div data-aos="fade-up" data-aos-duration="3000" class="wq-sobre-carousel">
				<?php $wsg_somos_assim_01_img = get_post_meta( $id_page, "wsg_somos_assim_01_img", true );
					if( $wsg_somos_assim_01_img ){
						foreach( $wsg_somos_assim_01_img as $key => $entry ){ ?>
					<figure>
						<?php getImageThumb( $key, "1140x760"); ?>
					</figure>
				<?php }} ?>
				
			</div>
			<!--<figure><?php getImageThumb( get_post_meta( $id_page, 'wsg_somos_assim_01_img_id', true ), '1140x760'); ?></figure>-->
			<h3 class="wsg-titulo_1" data-aos="fade-up" data-aos-duration="3000"><?php echo get_post_meta( $id_page, 'wsg_somos_assim_01_titulo', true ); ?></h3>
			<p data-aos="fade-up" data-aos-duration="3000"><?php echo get_post_meta( $id_page, 'wsg_somos_assim_01_texto', true ); ?></p>
		</div>
	</section>


	<?php 
	$somos_assim_02_items = get_post_meta( $id_page, "somos_assim_02_items", true );
		if( $somos_assim_02_items ){ ?>
			<section class="wsg-equipe-01">
				<div class="wsg-container">
					<?php foreach( $somos_assim_02_items as $key => $entry ){ ?>
					
						<div class="wq-equipe-wrapper">
							<figure data-aos="fade-left" data-aos-duration="3000"><?php getImageThumb( $entry['wsg_somos_assim_02_items_img_id'], "350x350"); ?></figure>
							<div class="wsg-content" data-aos="fade-left" data-aos-duration="3000">
								<div>
									<h2><?php echo $entry['wsg_somos_assim_02_items_titulo']; ?></h2>
									<h3><?php echo $entry['wsg_somos_assim_02_items_subtitulo']; ?></h3>
								</div>
								<ul>
									<?php foreach( $entry['wsg_somos_assim_02_items_texto'] as $listaItems => $items ){ ?>
										<li><?php echo $items; ?></li>
									<?php } ?>
								</ul>
							</div>
						</div>
					<?php } ?>
			</section>
		<?php } ?>

	<section class="wsg-equipe-02">
		<div class="wsg-container">
			<div class="wq-equipe-wrapper">
				<div class="wsg-content" data-aos="fade-right" data-aos-duration="3000">
					<div>
						<h2><?php echo get_post_meta( $id_page, 'wsg_somos_assim_03_esq_nome', true ); ?></h2>
						<h3><?php echo get_post_meta( $id_page, 'wsg_somos_assim_03_esq_cargo', true ); ?></h3>
					</div>
					<ul>
						<?php foreach( get_post_meta( $id_page, 'wsg_somos_assim_03_esq_qualificacoes', true ) as $item => $key ){ ?>
							<li><?php echo $key; ?></li>
						<?php } ?>
					</ul>
				</div>
				<figure data-aos="zoom-in" data-aos-duration="3000"><?php getImageThumb( get_post_meta( $id_page, 'wsg_somos_assim_03_img_id', true ), "350x350"); ?></figure>
				<div class="wsg-content" data-aos="fade-left" data-aos-duration="3000">
					<div>
						<h2><?php echo get_post_meta( $id_page, 'wsg_somos_assim_03_dir_nome', true ); ?></h2>
						<h3><?php echo get_post_meta( $id_page, 'wsg_somos_assim_03_dir_cargo', true ); ?></h3>
					</div>
					<ul>
					<?php foreach( get_post_meta( $id_page, 'wsg_somos_assim_03_dir_qualificacoes', true ) as $item => $key ){ ?>
							<li><?php echo $key; ?></li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<?php include "inc-call_to_action.php"; ?>
	<script src="<?php bloginfo('template_url'); ?>/js/efeitos.js"></script>
<?php get_footer(); ?>