
	<section class="wsg-breadcrumbs">
		<div class="wsg-breadcrumbs_item-1">
			<figure>
				<?php
					$wsg_banner_all_pages_img_id = get_post_meta( $id_page, 'wsg_banner_all_pages_img_id', true );
					getImageThumb($wsg_banner_all_pages_img_id,'960x170');
				?>
			</figure>
			<div class="wsg-breadcrumbs_item-1-conteudo">
				<div class="wsg-container">
					<?php if ( is_page() || is_single() ) { ?>
						<h1 data-aos="zoom-in-right" data-aos-duration="2000"><?php the_title(); ?></h1>
					<?php } elseif ( is_post_type_archive('servicos192') ) { ?>
						<h1 data-aos="zoom-in-right" data-aos-duration="2000"><?php echo get_page_by_path( 'segmentos', OBJECT, 'page' )->post_title; ?></h1>
					<?php } elseif ( is_post_type_archive('projetos192') ) { ?>
						<h1 data-aos="zoom-in-right" data-aos-duration="2000"><?php echo get_page_by_path( 'nossa-estrutura', OBJECT, 'page' )->post_title; ?></h1>
					<?php } elseif ( is_post_type_archive('eventos192') ) { ?>
						<h1 data-aos="zoom-in-right" data-aos-duration="2000"><?php echo get_page_by_path( 'nossos-eventos', OBJECT, 'page' )->post_title; ?></h1>
					<?php } elseif ( is_post_type_archive('equipe192') ) { ?>
						<h1 data-aos="zoom-in-right" data-aos-duration="2000"><?php echo get_page_by_path( 'equipe', OBJECT, 'page' )->post_title; ?></h1>
					<?php } elseif ( is_category() ) { ?>
						<h1 data-aos="zoom-in-right" data-aos-duration="2000">Categoria: <?php echo $category->name; ?></h1>
					<?php } elseif ( is_search() ) { ?>
						<h1 data-aos="zoom-in-right" data-aos-duration="2000">Resultados de: <?php echo $_GET['s'];?></h1>
					<?php } elseif ( is_tag() ) { ?>
						<h1 data-aos="zoom-in-right" data-aos-duration="2000">Tag: <?php echo $tag->name; ?></h1>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="wsg-container">
			<div class="wsg-breadcrumbs_item-2">
				<?php
					if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb('<p id="breadcrumbs">','</p>');
					}
				?>
			</div>
		</div>
	</section>