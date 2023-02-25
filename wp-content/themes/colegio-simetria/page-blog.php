<?php
	get_header();

	$id_page = get_page_by_path( 'blog', OBJECT, 'page' )->ID;
?>

	<?php include "inc-breadcrumbs.php"; ?>


	<section class="wsg-blog_01">
		<div class="wsg-container">
			<div class="wsg-flex">
				<div class="wsg-box_8 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-7 wsg-box_tl-8">
					<div class="wsg-blog_01-item">
						<div class="wsg-flex">
							<?php
								$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
								$args = array (
									'post_type'         => 'post',
									'posts_per_page'    => 5,
									'paged' => $paged
								);
								$query = new WP_Query( $args );
								if ( $query->have_posts() ) {
									while ( $query->have_posts() ) {
										$query->the_post();
										$attachID = get_post_thumbnail_id( get_the_ID() );

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
								<div class="wsg-box_6 wsg-box_cp-12 wsg-box_cl-6 wsg-box_tp-12 wsg-box_tl-6">
									<div class="wsg-08_box">
										<figure>
											<a href="<?php the_permalink(); ?>">
												<?php getImageThumb($attachID, '400x280'); ?>
											</a>
											<figcaption>
												<span><?php echo $htmlCategory; ?></span>
											</figcaption>
										</figure>
										<div class="wsg-08_conteudo">
											<span class="wq-data">
												<?php echo get_the_date('d'); ?>/<?php echo get_the_date('m'); ?>/<?php echo get_the_date('Y'); ?>
											</span>
											<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
											<?php the_excerpt(); ?>
										</div>
									</div>
								</div>
							<?php } } wp_reset_query(); ?>
						</div>
						<?php
							if (function_exists("pagination")) {
								pagination($query);
							}
						?>
					</div>
				</div>
				<?php
					get_sidebar();
				?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>