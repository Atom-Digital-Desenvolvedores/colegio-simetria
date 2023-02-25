<?php
	$id_home = get_page_by_path( 'home', OBJECT, 'page' )->ID;
?>
	<section class="wsg-cta">
		<div class="wsg-container">
			<div class="wsg-flex">
				<h2><?php echo get_post_meta( $id_home, 'wsg_call_to_action_titulo', true ); ?></h2>
				<a href="<?php echo get_post_meta( $id_home, 'wsg_call_to_action_btn_link', true ); ?>" class="wsg-btn wsg-estilo_3">
					<?php echo get_post_meta( $id_home, 'wsg_call_to_action_btn_texto', true ); ?>
				</a>
			</div>
		</div>
	</section>