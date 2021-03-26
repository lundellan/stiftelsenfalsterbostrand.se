<?php /* Template Name: Kontakt */ ?>

<?php get_header();?>

<span class='scalingParentWrapper'>
<span class='scalingParent'>
	
<div class='contentSection'>
	<h1 class='pageTitle'>Kontakt</h1>
	<div class='row'>
		<h3 class='caption captionLarge pageCaption'>Kom i kontakt med stiftelsens ledamöter och få svar på frågor</h3>
	</div>
	<div class='pageDivider'></div>
</div>



<div class='contentSection' style='position: relative;'>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("contact_form") ) : ?>
<?php endif;?>
	
	<h3 class='caption captionLarge textTitle'>Hur funkar det?</h3>
		
	<p class='text'>Fält markerade med * är obligatoriska. Verifiera dig med knappen "jag är inte en robot" för att kunna skicka meddelandet. Stiftelsens ledamöter svarar den angivna emailadressen snarast möjligt. </p>
</div>

</span>
</span>


<?php get_footer();?>