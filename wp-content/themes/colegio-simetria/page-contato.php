<?php
	get_header();

	$id_page = get_page_by_path( 'contato', OBJECT, 'page' )->ID;

	$id_email = get_page_by_path( 'email', OBJECT, 'contatos' )->ID;
	$id_telefones = get_page_by_path( 'telefones', OBJECT, 'contatos' )->ID;
	$id_endereco = get_page_by_path( 'endereco', OBJECT, 'contatos' )->ID;
	$id_horario = get_page_by_path( 'horario-de-funcionamento', OBJECT, 'contatos' )->ID;

	$wsg_contato_widget = get_post_meta($id_page, 'wsg_contato_widget', true);
?>

	<?php include "inc-breadcrumbs.php"; ?>

	<section class="wsg-contato-01">
		<div class="wsg-container">
			<div class="wsg-cto">
				<h3 class="wsg-titulo_1" data-aos="fade-up" data-aos-duration="3000"><?php echo get_post_meta( $id_page, 'wsg_contato_01_iframe_titulo', true ); ?></h3>
			</div>
			
			<div class="wsg-mapa">
				<?php echo get_post_meta( $id_page, 'wsg_contato_01_iframe', true ); ?>
			</div>
		</div>
	</section>

	<section class="wsg-contato-02">
		<div class="wsg-container">
			<div class="wsg-flex">
				<?php
					$entries = get_post_meta( $id_telefones, 'wsg_telefone_items', true );
					foreach ( (array) $entries as $key => $entry ) {

						if ( isset( $entry['wsg_telefone_nmr'] ) ) {
							$wsg_telefone_nmr = $entry['wsg_telefone_nmr'];
						}
						if ( isset( $entry['wsg_telefone_link'] ) ) {
							$wsg_telefone_link = $entry['wsg_telefone_link'];
						}
						if ( isset( $entry['wsg_telefone_icone'] ) ) {
							$wsg_telefone_icone = $entry['wsg_telefone_icone'];
						}
				?>
					<div class="wsg-box_4 wsg-box_cp-12 wsg-box_cl-6 wsg-box_tp-6 wsg-box_tl-4">
						<div data-aos="fade-up" data-aos-duration="2000" class="wsg-contato_02-box">
							<span class="flaticon-<?php echo $wsg_telefone_icone; ?>"></span>
							<div>
								<h3><a href="<?php echo $wsg_telefone_link; ?>"><?php echo $wsg_telefone_nmr; ?></a>
								<?php if ($wsg_telefone_icone == 'phone-1') { ?>
									<p>Telefone</p>
								<?php } else{ ?>
									<p>Whatsapp</p>
								<?php } ?>
							</div>
						</div>
					</div>
				<?php } ?>
				<div class="wsg-box_4 wsg-box_cp-12 wsg-box_cl-6 wsg-box_tp-6 wsg-box_tl-4">
					<div data-aos="fade-up" data-aos-duration="2000" class="wsg-contato_02-box">
						<span class="flaticon-mail-1"></span>
						<div>
							<h3>Mande-nos um email.</h3>
							<?php
								$wsg_emails = get_post_meta( $id_email, 'wsg_emails', true );
								foreach ( (array) $wsg_emails as $key => $email ) {
							?>
								<p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="wsg-box_4 wsg-box_cp-12 wsg-box_cl-6 wsg-box_tp-6 wsg-box_tl-4">
					<div data-aos="fade-up" data-aos-duration="2000" class="wsg-contato_02-box">
						<span class="flaticon-placeholder-1"></span>
						<div>
							<h3>Nosso endereço</h3>
							<p><?php echo get_post_meta( $id_endereco, 'wsg_endereco', true ) ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="wsg-contato-03">
		<div class="wsg-container">
			<div class="wsg-cto">
				<h2 class="wsg-titulo_1"><?php echo get_post_meta( $id_page, 'wsg_contato_01_titulo', true ); ?></h2>
				<?php echo wpautop(get_post_meta( $id_page, 'wsg_contato_01_texto', true )); ?>
			</div>
			<form action="#" onsubmit="return submitFormWithRecaptcha(this);" class="contact-form" method="POST">

				<input data-aos="fade-up" data-aos-duration="2000" type="hidden" name="subject_email" value="Enviado pelo site">
				<input data-aos="fade-up" data-aos-duration="2000" required type="hidden" name="title_email" value="Contato enviado pelo formulário da página de contato">

				<div class="wsg-flex">
					<div class="wsg-box_4 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-12 wsg-box_tl-4">
						<input data-aos="fade-up" data-aos-duration="2000" type="hidden" name="label-send-data-name" value="Nome">
						<input data-aos="fade-up" data-aos-duration="2000" required type="text" name="send-data-name" placeholder="Seu Nome">
					</div>
					<div class="wsg-box_4 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-12 wsg-box_tl-4">
						<input data-aos="fade-up" data-aos-duration="2000" type="hidden" name="label-send-data-email" value="Email">
						<input data-aos="fade-up" data-aos-duration="2000" required type="email" name="send-data-email" placeholder="Seu E-mail*">
					</div>
					<div class="wsg-box_4 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-12 wsg-box_tl-4">
						<input data-aos="fade-up" data-aos-duration="2000" type="hidden" name="label-send-data-phone" value="Telefone">
						<input data-aos="fade-up" data-aos-duration="2000" required type="text" name="send-data-phone" placeholder="Seu Telefone" class="inputphone">
					</div>
				</div>
				<input data-aos="fade-up" data-aos-duration="2000" type="hidden" name="label-send-data-message" value="Mensagem">
				<textarea data-aos="fade-up" data-aos-duration="2000" placeholder="Sua Mensagem" name="send-data-message" required></textarea>

				<div style="display: none;" data-aos="fade-up" data-aos-duration="2000"class="g-recaptcha invisible-recaptcha" id="recaptcha-<?php echo md5(uniqid(rand(), true)); ?>" data-sitekey="<?php echo $wsg_contato_widget; ?>" data-size="invisible"></div>

				<button data-aos="fade-up" data-aos-duration="2000" type="submit" class="wsg-btn wsg-estilo_4">Enviar</button>
			</form>
		</div>
	</section>

<?php get_footer(); ?>