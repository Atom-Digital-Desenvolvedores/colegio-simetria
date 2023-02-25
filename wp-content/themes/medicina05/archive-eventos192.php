<?php get_header();
    $id_page = get_page_by_path( 'nossos-eventos', OBJECT, 'page' )->ID;
?>
<?php include "inc-breadcrumbs.php"; ?>

    <section class="wsg-evento">


        <?php
            $arrayQueryEventos = array(
                'post_type'				=> array( 'eventos192' ),
                'orderby' => 'menu_order',
                'order' => 'ASC',
                'posts_per_page'		=> '-1',
            );
            $queryEventos = new WP_Query($arrayQueryEventos);
            while ( $queryEventos->have_posts()) {
                $queryEventos->the_post();

        ?>
            <div class="wsg-item-evento">
                <div class="wsg-container">
                    <div class="wsg-flex">
                        <div data-aos="fade-right" data-aos-duration="2000" class="wsg-box_6 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-12 wsg-box_tl-6">
                            <div class="wsg-conteudo-01">
                                <h2 class="wsg-titulo_2"><?php the_title(  ); ?></h2>
                                <?php echo wpautop(get_post_meta( get_the_ID(), 'wsg_evento_desc', true )); ?>
                            </div>
                        </div>
                        <div data-aos="fade-left" data-aos-duration="2000" class="wsg-box_6 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-12 wsg-box_tl-6">
                        <?php echo get_post_meta( get_the_ID(), 'wsg_evento_video', true ); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
	</section>

<?php get_footer(); ?>