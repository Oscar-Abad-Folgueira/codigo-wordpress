<?php
/**
 * @snippet       WordPress Snippet: Crear post con código
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/crear-post-wordpress-codigo/
 */
 
$post_id = -1;

// Set the Author, Slug, title and content of the new post
$author_id = 1;
$slug = 'wordpress-post-created-with-code';
$title = 'WordPress post created whith code';
$content = 'This is the content of the post that we are creating right now with code. 
			More text: I motsetning til hva mange tror, er ikke Lorem Ipsum bare tilfeldig tekst. 
			Dets røtter springer helt tilbake til et stykke klassisk latinsk litteratur fra 45 år f.kr., 
			hvilket gjør det over 2000 år gammelt. Richard McClintock - professor i latin ved Hampden-Sydney 
			College i Virginia, USA - slo opp flere av de mer obskure latinske ordene, consectetur, 
			fra en del av Lorem Ipsum, og fant dets utvilsomme opprinnelse gjennom å studere bruken 
			av disse ordene i klassisk litteratur. Lorem Ipsum kommer fra seksjon 1.10.32 og 1.10.33 i 
			"de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) av Cicero, skrevet i år 45 f.kr. 
			Boken er en avhandling om teorier rundt etikk, og var veldig populær under renessansen. Den første 
			linjen av Lorem Ipsum, "Lorem Ipsum dolor sit amet...", er hentet fra en linje i seksjon 1.10.32.';

$post_id = wp_insert_post(
	array(
		'comment_status'	=>	'closed',
		'ping_status'		=>	'closed',
		'post_author'		=>	$author_id,
		'post_name'		    =>	$slug,
		'post_title'		=>	$title,
		'post_content'      =>  $content,
		'post_status'		=>	'publish',
		'post_type'		    =>	'post'
	)
);