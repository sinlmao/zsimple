<?php
/**
 * Template Name: 标签列表页面
 */
?>
<?php get_header(); ?>

<div id="content" class="col-8 content">
	<nav class="breadcrumbs">
		You are here: <a class="first_home" rel="nofollow" title="Go to homepage" href="<?php echo home_url('/'); ?>">Home</a>
		&raquo; <?php the_title(); ?>
	</nav>

	<?php the_post(); ?>
	<article class="post" id="post-<?php the_ID(); ?>">
		<div class="post-header">
			<i class="p-type p-type-page">Page</i>
			<?php the_title( '<h1 class="title">', '</h1>' ); ?>
		</div>
		<div class="entry">
			<?php the_content(); ?>
			<?php wp_link_pages('before=<div class="wp_link_pages"><strong>'. __('Pages:', 'zsimple') . '</strong>&after=</div>&next_or_number=number&pagelink=<span class="page_number">%</span>'); ?>
			<div id="tags">
				<h3>Tags</h3>
				<div class="tags">
					<?php
					$zoo_tag_cloud_new = wp_tag_cloud( array(
						'taxonomy'  => array('post_tag'),
						'echo'      => 0,
						'unit'      => 'px',
						'smallest'  => 12,
						'largest'   => 24,
						'number'    => 0,
						'separator' => ' '
					) );
					echo $zoo_tag_cloud_new;
					?>
				</div>
			</div>
		</div>
	</article>

</div><!--content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>