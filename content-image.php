<?php
/**
 * The template part for displaying an image post
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen_DcK
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php the_content(); ?>
</article>
