<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="sv">
	<head>
		
		<meta charset="UTF-8">
		<meta property="og:image" content="<?php echo get_site_url(); ?>/wp-content/uploads/2020/12/previewImage.jpg">
		
		<?php wp_head();?>
		
		
		<meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=3.0, minimum-scale=0.86">
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
		
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-KG51BGSGXQ"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		
		  gtag('config', 'G-KG51BGSGXQ');
		</script>
			
	</head>
	
<body <?php body_class();?> onresize='resize()'> 
	
	<span class='scalingParent'>
	<div class='row'>
		<div id='navigation'>
			<a class='wordmark' href='<?php echo get_site_url(); ?>'>Stiftelsen<br>Falsterbo<br>Strand</a>
		
				<a class='navigationLink mobileHidden' href='<?php echo get_site_url(); ?>/category/Nyheter/'>
					<img class='navigationIcon' src='<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/tidning-compressed.png' style='width: 64px;' alt='En tidning'><br>
					Nyheter
				</a>
				<a class='navigationLink mobileHidden' href='<?php echo get_site_url(); ?>/agande/'>
					<img class='navigationIcon' src='<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/nyckel-compressed.png' style='width: 74px;' alt='En nyckel'><br>
					Ägande
				</a>
				<a class='navigationLink mobileHidden' href='<?php echo get_site_url(); ?>/stiftelsen/'>
					<img class='navigationIcon' src='<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/bok-compressed.png' style='width: 76.5px;' alt='En bok'><br>
					Stiftelsen
				</a>
				<a class='navigationLink mobileHidden' href='<?php echo get_site_url(); ?>/kontakt/'>
					<img class='navigationIcon' src='<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/telefon-compressed.png' style='width: 66px;' alt='En telefon'><br>
					Kontakt
				</a>
				
				<button class='navigationToggleMobile' onclick='toggleNav();'>
					<span class='navigationToggleMobileText' style='margin-top: 13px; margin-right: 6px;'>Meny</span>
					<img class='toggleNavIcon' src='<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/meny.png'>
				</button>
		</div>
	</div>
	</span>
	
	<div id='mobileNav'>
		<span class='scalingParent'>
		<a class='wordmark' style='margin-left: 25px; margin-top: -3px;' href='<?php echo get_site_url(); ?>'>Stiftelsen<br>Falsterbo<br>Strand</a>
		
		<button class='navigationToggleMobile' style='margin-right: 25px; margin-top: -3px;' onclick='closeNav();'>
			<span class='navigationToggleMobileText'>Stäng</span>
			<img class='toggleNavIcon' src='<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/stang.png'>
		</button>
		
		</span>
		
		<div class='row'>
			<div class='linkSection'>
				<span class='scalingParent'>
					<a class='linkSectionModule' href='<?php echo get_site_url(); ?>/category/Nyheter/' style='margin-top: 75px;'>
						<img class='linkIcon' src='<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/tidning.png' alt='En tidning'>
						<h2 class='largeTitle linkModuleTitle'>Nyheter</h2>
						
						<h4 class='caption'>Läs de senaste nyheterna från stiftelsen och området</h4>
						<div class='caption captionLink'>Visa senaste nytt</div>
					</a>
					
					<a class='linkSectionModule' href='<?php echo get_site_url(); ?>/agande/'>
						<img class='linkIcon' src='<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/nyckel.png' alt='En nyckel'>
						<h2 class='largeTitle linkModuleTitle'>Ägande</h2>
						
						<h4 class='caption'>Allt behöver veta om att äga badhytt på stiftelsens mark</h4>
						<div class='caption captionLink'>Läs om ägande</div>
					</a>
					
					<a class='linkSectionModule' href='<?php echo get_site_url(); ?>/stiftelsen/'>
						<img class='linkIcon' src='<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/bok.png' alt='En bok'>
						<h2 class='largeTitle linkModuleTitle'>Stiftelsen</h2>
						
						<h4 class='caption'>Läs mer om stiftelsens historia och ändamål</h4>
						<div class='caption captionLink'>Läs om stiftelsen</div>
					</a>
					
					<a class='linkSectionModule' style='padding-bottom: 150px;' href='<?php echo get_site_url(); ?>/kontakt/'>
						<img class='linkIcon' src='<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/telefon.png' alt='En telefon'>
						<h2 class='largeTitle linkModuleTitle'>Kontakt</h2>
						
						<h4 class='caption'>Kom i kontakt med stiftelsens ledamöter och få svar på frågor</h4>
						<div class='caption captionLink'>Kom i kontakt</div>
					</a>
				</span>
			</div>
		</div>
	</div>
	
	<script>
		
		function toggleNav()	{
			document.getElementById("mobileNav").style.display = "block";
			document.body.style.overflowY = "hidden";
		}
		
		function closeNav()	{
			document.getElementById("mobileNav").style.display = "none";
			document.body.style.overflowY = "scroll";
		}
		
	</script>