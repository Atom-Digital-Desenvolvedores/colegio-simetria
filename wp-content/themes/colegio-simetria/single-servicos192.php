<?php
	get_header();

	$id_page = get_page_by_path( 'segmentos', OBJECT, 'page' )->ID;
	$id_contato = get_page_by_path( 'contato', OBJECT, 'page' )->ID;

	$wsg_contato_widget = get_post_meta($id_contato, 'wsg_contato_widget', true);
?>

	<?php include "inc-breadcrumbs.php"; ?>

	<section class="wsg-servicos-intena-01">
		<div class="wsg-container">
			<div class="wsg-flex">
				<article class="wsg-box_8 wsg-box_cp-12 wsg-box_cl-12">
					<figure data-aos="fade-up" data-aos-duration="2000">
						<?php
							$wsg_servico_interna_img_id = get_post_meta( get_the_ID(), 'wsg_servico_interna_img_id', true );
							getImageThumb($wsg_servico_interna_img_id,'850x560');
						?>
					</figure>
					<h2><?php the_title(); ?></h2>
					<?php echo wpautop(get_post_meta( get_the_ID(), 'wsg_servico_interna_conteudo', true )) ?>
				</article>
				<aside class="wsg-box_4 wsg-box_cp-12 wsg-box_cl-12">
					<div>
					<h3 data-aos="fade-up" data-aos-duration="2000">Outras Aulas</h3>
					<ul>
						<?php
							$arrayQueryServicos = array(
								'post_type'				=> array( 'servicos192' ),
								'posts_per_page'		=> '5',
								'orderby' => 'menu_order',
								'order' => 'ASC',
								'post__not_in'			=> array(
									get_the_ID()
								),
							);

							$queryServicos = new WP_Query($arrayQueryServicos);

							while ( $queryServicos->have_posts()) {
								$queryServicos->the_post();
						?>
						<li data-aos="fade-up" data-aos-duration="2000">
							<a href="<?php the_permalink(); ?>">
								<span><?php the_title(); ?></span>
								<span class="flaticon-next"></span>
							</a>
						</li>
						<?php } wp_reset_query(); ?>
					</ul>
					</div>
					<div class="wsg-servico_form">
						<h3 data-aos="fade-up" data-aos-duration="2000">Entre em contato</h3>
						<form action="#" onsubmit="return submitFormWithRecaptcha(this);" class="contact-form" method="POST">

							<input data-aos="fade-up" data-aos-duration="2000" type="hidden" name="subject_email" value="Enviado pelo site">
							<input data-aos="fade-up" data-aos-duration="2000" required type="hidden" name="title_email" value="Contato enviado pelo formulário da página: <?php the_title(); ?>">

							<input data-aos="fade-up" data-aos-duration="2000" type="hidden" name="label-send-data-name" value="Nome">
							<input data-aos="fade-up" data-aos-duration="2000" required type="text" name="send-data-name" placeholder="Seu Nome">

							<input data-aos="fade-up" data-aos-duration="2000" type="hidden" name="label-send-data-email" value="Email">
							<input data-aos="fade-up" data-aos-duration="2000" required type="email" name="send-data-email" placeholder="Seu E-mail*">

							<input data-aos="fade-up" data-aos-duration="2000" type="hidden" name="label-send-data-phone" value="Telefone">
							<input data-aos="fade-up" data-aos-duration="2000" required type="text" name="send-data-phone" placeholder="Seu Telefone" class="inputphone">

							<input data-aos="fade-up" data-aos-duration="2000" type="hidden" name="label-send-data-message" value="Mensagem">
							<textarea  data-aos="fade-up" data-aos-duration="2000"placeholder="Sua Mensagem" name="send-data-message" required></textarea>

							<div data-aos="fade-up" data-aos-duration="2000" class="g-recaptcha invisible-recaptcha" id="recaptcha-<?php echo md5(uniqid(rand(), true)); ?>" data-sitekey="<?php echo $wsg_contato_widget; ?>" data-size="invisible"></div>

							<button data-aos="fade-up" data-aos-duration="2000" type="submit" class="wsg-btn wsg-estilo_4 wsg-btn_larg-menor">Enviar</button>
						</form>
					</div>
				</aside>
			</div>
		</div>
	</section>

	<?php include "inc-call_to_action.php";?>

<?php get_footer(); ?>