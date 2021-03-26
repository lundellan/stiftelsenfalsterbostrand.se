<?php get_header();?>

<div class="hidden">
	<script type="text/javascript">
		<!--//--><![CDATA[//><!--
			var images = new Array()
			function preload() {
				for (i = 0; i < preload.arguments.length; i++) {
					images[i] = new Image()
					images[i].src = preload.arguments[i]
				}
			}
			preload(
				"https://stiftelsenfalsterbostrand.se/wp-content/uploads/2020/09/3-2-1536x1021.jpg",
				"https://stiftelsenfalsterbostrand.se/wp-content/uploads/2020/09/4-2-1536x1021.jpg",
				"https://stiftelsenfalsterbostrand.se/wp-content/uploads/2020/09/5-2-1536x1021.jpg",
				"https://stiftelsenfalsterbostrand.se/wp-content/uploads/2020/09/6-2-1536x1021.jpg",
				"https://stiftelsenfalsterbostrand.se/wp-content/uploads/2020/09/7-2-1536x1021.jpg",
				"https://stiftelsenfalsterbostrand.se/wp-content/uploads/2020/09/8-2-1536x1021.jpg",
				"https://stiftelsenfalsterbostrand.se/wp-content/uploads/2020/09/9-2-1536x1021.jpg",
				"https://stiftelsenfalsterbostrand.se/wp-content/uploads/2020/09/10-2-1536x1021.jpg",
				"https://stiftelsenfalsterbostrand.se/wp-content/uploads/2020/09/11-2-1536x1021.jpg",
				"https://stiftelsenfalsterbostrand.se/wp-content/uploads/2020/09/12-2-1536x1021.jpg",
				"https://stiftelsenfalsterbostrand.se/wp-content/uploads/2020/09/13-2-1536x1021.jpg",
				"https://stiftelsenfalsterbostrand.se/wp-content/uploads/2020/09/14-2-1536x1021.jpg"
			)
		//--><!]]>
	</script>
</div>
		
<div id='slideshow'>
	<div id='slideshowContent'>
		<img id='leftImage' src='./wp-content/uploads/2020/09/15-2-1536x1021.jpg' alt='En bild från området'>
		<img id='centerImage' border='0' src='./wp-content/uploads/2020/09/1-2-1536x1021.jpg' alt='En bild från området'>
		<img id='rightImage' src='./wp-content/uploads/2020/09/2-2-1536x1021.jpg' alt='En bild från området' style='margin-right: 0;'>
	</div>
</div>

<div class='row'>
	<div id='slideshowControlsParent'>
		<span class='scalingParent'>
		<button class='slideshowButton' onclick='previousImage()' name='Bläddra till vänster'>
			<img class='slideshowButtonArrow' style='padding-right: 4px;' src='<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/arrowLeft.png'alt='Pil åt vänster'>
		</button>
		<button class='slideshowButton slideshowButtonRight' onclick='nextImage()' name='Bläddra till höger'>
			<img class='slideshowButtonArrow' style='padding-left: 4px;' src='<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/arrowRight.png' alt='Pil åt höger'>
		</button>
		</span>
	</div>
</div>

<span class='scalingParent'>
<div class='contentSection'>
	<h2 class='largeTitle'>Välkommen till Stiftelsen Falsterbo Strand</h2>
	<p class='text'><span class='mobileHidden'>Längst ute på Falsterbohalvön hittar du Stiftelsen Falsterbo Strands mark. Beläget på båda sidor om Falsterbohus och Falsterbo borgruin med utsikt över Måkläppen följer området en vacker sandstrand och mångfaldig natur.
		Stiftelsen har som ändamål att förvalta marken som bland annat arrenderas ut till ett hundratal badhyttsägare i närområdet. Här på hemsidan kan du läsa om senaste nytt från stiftelsen, regler för området och ägande av badhytt, och mer om stiftelsens bakgrund. Givetvis kan du även kontakta oss vid funderingar. Stiftelsen hälsar dig välkommen!</span> 
		<span class='desktopHidden'>Längst ute på Falsterbohalvön hittar du Stiftelsen Falsterbo Strands mark. Beläget på båda sidor om Falsterbohus och Falsterbo borgruin med utsikt över Måkläppen följer området en vacker sandstrand och mångfaldig natur.
		Stiftelsen har som ändamål att förvalta marken som bland annat arrenderas ut till ett hundratal badhyttsägare i närområdet. Stiftelsen hälsar dig välkommen!</span>
		</p>		

	
	<div class='row'>
		<img class='signature' src='./wp-content/uploads/2020/09/robertSignatur.png' alt='Roberts signatur'>
	</div>
	
	<p class='caption' style='color: #999999;'>Robert Herslow<br>Styrelseordförande</p>
</div>



<div class='row'>
	<div class='linkSection'>
		<div class='linkSectionModule'>
			<img class='linkIcon' src='./wp-content/uploads/2020/09/tidning.png' alt='En tidning'>
			<h2 class='largeTitle linkModuleTitle'>Nyheter</h2>
			
			<p class='caption'>Läs de senaste nyheterna från stiftelsen och området</p>
			<a class='caption captionLink' href='<?php echo get_site_url(); ?>/category/Nyheter/'>Visa senaste nytt</a>
		</div>
		
		<div class='linkSectionModule'>
			<img class='linkIcon' src='./wp-content/uploads/2020/09/nyckel.png' alt='En nyckel'>
			<h2 class='largeTitle linkModuleTitle'>Ägande</h2>
			
			<p class='caption'>Allt du behöver veta om att äga badhytt på stiftelsens mark</p>
			<a class='caption captionLink' href='<?php echo get_site_url(); ?>/agande/'>Läs om ägande</a>
		</div>
		
		<div class='linkSectionModule'>
			<img class='linkIcon' src='./wp-content/uploads/2020/09/bok.png' alt='En bok'>
			<h2 class='largeTitle linkModuleTitle'>Stiftelsen</h2>
			
			<p class='caption'>Läs mer om stiftelsens historia och ändamål</p>
			<a class='caption captionLink' href='<?php echo get_site_url(); ?>/stiftelsen/'>Läs om stiftelsen</a>
		</div>
		
		<div class='linkSectionModule'>
			<img class='linkIcon' src='./wp-content/uploads/2020/09/telefon.png' alt='En telefon'>
			<h2 class='largeTitle linkModuleTitle'>Kontakt</h2>
			
			<p class='caption'>Kom i kontakt med stiftelsens ledamöter och få svar på frågor</p>
			<a class='caption captionLink' href='<?php echo get_site_url(); ?>/kontakt/'>Kom i kontakt</a>
		</div>
		
	</div>
</div>
</span>

<?php get_footer();?>