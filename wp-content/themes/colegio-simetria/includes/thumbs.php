<?php

	// tamanhos dinâmicos para thumbs
	function tamanhos_thumbs(){

		// Ativando suporte para imagem destacada
		add_theme_support('post-thumbnails');
		add_image_size( '1920x720', 1920, 720, true );
		add_image_size( '960x170', 960, 170, true );
		add_image_size( '850x560', 850, 560, true );
		add_image_size( '780x440', 780, 440, true );
		add_image_size( '560x465', 560, 465, true );
		add_image_size( '560x395', 560, 395, true );
		add_image_size( '440x440', 440, 440, true );
		add_image_size( '400x280', 400, 280, true );
		add_image_size( '380x290', 380, 290, true );
		add_image_size( '375x250', 375, 250, true );
		add_image_size( '370x283', 370, 283, true );
		add_image_size( '360x350', 360, 350, true );
		add_image_size( '350x350', 350, 350, true );
		add_image_size( '260x260', 260, 260, true );
		add_image_size( '180x180', 180, 180, true );
		add_image_size( '64x64', 64, 64, true );
	}
	add_action('after_setup_theme', 'tamanhos_thumbs');

?>