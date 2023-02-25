<?php
	get_header();

	$id_page = get_page_by_path( 'blog', OBJECT, 'page' )->ID;
	$id_disqus = get_page_by_path( 'configuracoes-do-disqus', OBJECT, 'gerais' )->ID;
?>

	<?php include "inc-breadcrumbs.php"; ?>

	<?php
		if (have_posts()) : while (have_posts()) : the_post();
			$attachID = get_post_thumbnail_id(get_the_ID());
			$categories = get_the_terms( get_the_ID(), 'category' );
			$htmlCategory = '';
			if ( $categories && ! is_wp_error( $categories ) ){
				$draught_links = array();
				foreach ($categories as $category) {
					$item = '<a href="'.get_term_link($category->term_id, "category").'" title="'.$category->name.'" > '.$category->name.'</a>';
					array_push($draught_links, $item);
				}
				$htmlCategory = implode(' | ', $draught_links);
			}
	?>

	<section class="wsg-blog_01">
		<div class="wsg-container">
			<div class="wsg-flex">
				<div class="wsg-box_8 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-7 wsg-box_tl-8">
					<div class="wsg-blog_01-item">
						<h2><?php the_title(); ?></h2>
						<figure>
							<?php echo getImageThumb(get_post_thumbnail_id(), '780x440'); ?>
						</figure>
						<?php echo wpautop(the_content()); ?>
					</div>
					<div class="wsg-comentarios">
						<?php disqus_embed(get_post_meta( $id_disqus, 'wsg_disqus_code', true )); ?>
					</div>
				</div>
				<?php
					get_sidebar();
				?>
			</div>
		</div>
	</section>

	<?php endwhile; ?>
	<?php endif; ?>
	<?php wp_reset_query(); ?>

	<?php
		$categories = get_the_category(get_the_ID());
		if ($categories) {
			$category_ids = array();
			foreach($categories as $individual_category){
				array_push($category_ids, $individual_category->term_id);
			}
			sort($category_ids);
			$args=array(
				'category__in' => $category_ids,
				'post__not_in' => array(get_the_ID()),
				'posts_per_page'=>3,
			);
			$my_query = new wp_query($args);
			$relacionados = $my_query->get_posts();

			if (count($relacionados) > 0) {
	?>

	<section class="wsg-08">
		<div class="wsg-container">
			<div class="wsg-cto">
				<h2 class="wsg-titulo_1">Posts Relacionados</h2>
			</div>
			<div class="wsg-08_item">
				<div class="wsg-flex">
					<?php
						}
						foreach ($relacionados as $key => $relacionado) {
							setup_postdata($relacionado);
							$attachID = get_post_thumbnail_id($relacionado->ID);
							$author_id=$post->post_author;
							$categories = get_the_terms( $relacionado->ID, 'category' );
							$htmlCategory = '';
							if ( $categories && ! is_wp_error( $categories ) ){
								$draught_links = array();
								foreach ($categories as $category) {
									$item = '<a href="'.get_term_link($category->term_id, "category").'" title="'.$category->name.'" > '.$category->name.'</a>';
									array_push($draught_links, $item);
								}
								$htmlCategory = implode(' | ', $draught_links);
							}
					?>
						<div class="wsg-box_4 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-6 wsg-box_tl-4">
							<div class="wsg-08_box">
								<figure>
									<a href="<?php echo get_permalink($relacionado->ID); ?>">
										<?php echo getImageThumb(get_post_thumbnail_id($relacionado->ID), '400x280'); ?>
									</a>
									<figcaption>
										<span><?php echo $htmlCategory; ?></span>
									</figcaption>
								</figure>
								<div class="wsg-08_conteudo">
									<span class="wq-data"><?php echo get_the_date('d', $relacionado->ID); ?>/<?php echo get_the_date('m', $relacionado->ID); ?>/<?php echo get_the_date('Y', $relacionado->ID); ?></span>
									<h3><a href="<?php echo get_permalink($relacionado->ID); ?>"><?php echo $relacionado->post_title; ?></a></h3>
									<?php echo wpautop($relacionado->post_excerpt); ?>
								</div>
							</div>
						</div>
					<?php
						} wp_reset_postdata();
						if (count($relacionados) > 0) {
					?>
				</div>
			</div>
		</div>
	</section>

	<?php
			}
		}
	?>

<?php get_footer(); ?>