<!doctype html><!-- HTML5 -->

<html lang="en" dir="ltr">
<head>
    <!-- Set character encoding for the document -->
    <meta charset="utf-8">
    <!-- Instruct Internet Explorer to use its latest rendering engine -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Viewport for responsive web design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Document Title -->
    <title>Homepage Martin F&ouml;dinger</title>
    <!-- Meta Description -->
    <meta name="description" content="Homepage of Martin F&ouml;dinger">

    <!-- Standard favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <!-- Apple Touch Icon (at least 200x200px) -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <!-- Recommended favicon format -->
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <!-- Android favicon-->
    <link rel="manifest" href="manifest.json">
    <!-- Safari favicon-->
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    <!-- Microsoft Tiles -->
    <meta name="msapplication-config" content="browserconfig.xml" />

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->
    
    <!-- Material Icons-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Material Design lite-->
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    <!--<meta name="author" content="SitePoint">
    <link rel="stylesheet" href="css/styles.css?v=1.0">-->

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    
    <style>
		.welcome-card-wide.mdl-card, .sm-card-wide.mdl-card, .other-card-wide.mdl-card {
			width: 380px;
		}
		
		.welcome-card-wide > .mdl-card__menu, .sm-card-wide > .mdl-card__menu, .other-card-wide > .mdl-card__menu {
			color: #fff;
		}
		
		.welcome-card-wide > .mdl-card__title {
			color: #fff;
			height: 176px;
			background: url('../assets/welcome_card.jpg') center / cover;
		}
		
		.sm-card-wide > .mdl-card__title {
			color: #fff;
			height: 176px;
			background: url('../assets/connected.png') center / cover;
		}
		
		.other-card-wide > .mdl-card__title {
			color: #fff;
			height: 176px;
			background: url('../assets/others.png') center / cover;
		}
		
	</style>
</head>
<body>
    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">Martin F&ouml;dinger</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation. We hide it in small screens. -->
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href="nextcloud/">Nextcloud</a>
                    <!--
                    <a class="mdl-navigation__link" href="">Link</a>
                    <a class="mdl-navigation__link" href="">Link</a>
                    <a class="mdl-navigation__link" href="">Link</a>-->
				</nav>
			</div>
		</header>
		<div class="mdl-layout__drawer">
			<span class="mdl-layout-title">Navigation</span>
			<nav class="mdl-navigation">
				<a class="mdl-navigation__link" href="nextcloud/">Nextcloud</a>
				<!--
				<a class="mdl-navigation__link" href="">Link</a>
				<a class="mdl-navigation__link" href="">Link</a>
				<a class="mdl-navigation__link" href="">Link</a>-->
			</nav>
		</div>
		<main class="mdl-layout__content">
			<div class="page-content">
				<noscript>
					Please enable JavaScript to view this Site and all of its content.
				</noscript>
				<!-- Your content goes here -->
				<div class="mdl-grid">
					<!-- first -->
					<div class="mdl-cell mdl-cell--4-col">
						<div class="welcome-card-wide mdl-card mdl-shadow--2dp">
							<div class="mdl-card__title">
								<h2 class="mdl-card__title-text">Anyone out there?</h2>
							</div>
							<div class="mdl-card__supporting-text">
								Hey there! Welcome!</br>
								So you somehow stranded on my personal homepage?</br>
								Have a look around!</br>
								You will find some social media links and other stuff.
							</div>
							<!--
							<div class="mdl-card__actions mdl-card--border">
								<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
									Get Started
								</a>
							</div>-->
						</div>
					</div>
					<!-- second -->
					<div class="mdl-cell mdl-cell--4-col">
						<div class="sm-card-wide mdl-card mdl-shadow--2dp">
							<div class="mdl-card__title">
								<h2 class="mdl-card__title-text">Social Media</h2>
							</div>
							<div class="mdl-card__actions mdl-card--border">
								<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="https://www.facebook.com/martin.foedinger" target="_blank" rel="noopener noreferrer">
									Facebook
								</a>
								<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="https://twitter.com/ViktorFoedowski" target="_blank" rel="noopener noreferrer">
									Twitter
								</a>
								<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="hhttps://github.com/ViktorF" target="_blank" rel="noopener noreferrer">
									Github
								</a>
								<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="https://www.reddit.com/user/ViktorFoedowski" target="_blank" rel="noopener noreferrer">
									Reddit
								</a>
								<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="https://steamcommunity.com/id/ViktorFoedowski" target="_blank" rel="noopener noreferrer">
									Steam
								</a>
								<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="https://www.instagram.com/viktorfoedowski" target="_blank" rel="noopener noreferrer">
									Instagram
								</a>
								<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="https://soundcloud.com/viktorfoedowski" target="_blank" rel="noopener noreferrer">
									Soundcloud
								</a>
							</div>
						</div>
					</div>
					<!-- third -->
					<div class="mdl-cell mdl-cell--4-col">
						<div class="other-card-wide mdl-card mdl-shadow--2dp">
							<div class="mdl-card__title">
								<h2 class="mdl-card__title-text">Other Links</h2>
							</div><!--
							<div class="mdl-card__supporting-text">
							</div>-->
							<div class="mdl-card__actions mdl-card--border">
								<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="https://open.spotify.com/user/wsi87ej26yp0ztsms1vsm6yn1/playlist/2bIN5F1VmvZlsdm32xoUNq" target="_blank" rel="noopener noreferrer">
									Spotify Playlist
								</a>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</main>
		<footer class="mdl-mini-footer">
			<div class="mdl-mini-footer__left-section">
				<div class="mdl-logo">Copyright &copy; <?php echo date("Y"); ?> Martin F&ouml;dinger. All rights reserved.</div>
			</div>
			<div class="mdl-mini-footer__right-section">
				<ul class="mdl-mini-footer__link-list">
					<li>This Site is hosted on <a href="https://www.archlinux.org/" target="_blank" rel="noopener noreferrer"><img src="assets/archlinux-logo.svg" alt="Arch Linux" height="35 px"></img></a></li>
					<li><a href="https://www.apache.org" target="_blank" rel="noopener noreferrer"><img src="assets/Apache_PoweredBy.svg" alt="Powered by Apache" height="35 px"></img></a></li>
				</ul>
			</div>
		</footer>
	</div>
</body>
</html>
