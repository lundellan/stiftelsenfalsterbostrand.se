<?php get_header();?>
	
<span class='scalingParent'>	
	
<div class='contentSection'>
	<h1 class='pageTitle'>Nyheter</h1>
	<div class='row'>
		<h3 class='caption captionLarge pageCaption'>Läs de senaste nyheterna från stiftelsen och området</h3>
	</div>
	<div class='pageDivider'></div>
</div>		
			
<?php if (have_posts()) : while(have_posts()) : the_post()?>
	
	<div class='row'>
	
		<div class='contentSection'>
	
			<h2 class='largeTitle newsTitle'><?php the_title();?></h2>
			
			<h3 class='caption newsDate'>Publicerat <?php the_time('j F Y'); ?></h3>
			
			<div class='text newsText'><?php the_content();?></div>
			
		</div>
	
	</div>
	
<?php endwhile; endif;?>

</span>

<div class='row footerArchive'>
	<?php get_footer();?>
</div>