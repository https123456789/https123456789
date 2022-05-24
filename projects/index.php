<?php
$userDataUrl = "https://githubapi.https12345678.repl.co/github/users/https123456789";
$data = json_decode(file_get_contents($userDataUrl));
$totalOpenSourceRepos = $data->public_repos;
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ben Landon's Portfolio</title>
		<base href="/projects/">
		<link rel="stylesheet" href="css/globals.css"/>
		<link rel="stylesheet" href="css/index.css"/>
		<link rel="stylesheet" href="css/typing.css"/>
		<link rel="stylesheet" href="css/languagesGrid.css"/>
		<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
		<link rel="stylesheet" href="css/glide.core.min.css">
		<meta name="viewport" content="width=device-width">
		<script type="text/javascript">
// Kick page back to top
//window.onbeforeunload = function () {
	window.scrollTo(0, 0);
//}
		</script>
	</head>
	<body>
		<main class="container main">
			<div class="header">
				<div class="dropDown">
					<h1 class="title">
						<a href="/">Ben Landon's Portfolio</a>
					</h1>
				</div>
				<div class="description">
					<p class="typedText">A collection of all of my projects.</p>
				</div>
			</div>

			<!--<div class="carousel" id="c1">
				<iframe loading="lazy" src="/badge.php?projectName=BFC&carousel=1" class="carouselItem"></iframe>
				<iframe loading="lazy" src="/badge.php?projectName=Textual&carousel=1" class="carouselItem"></iframe>
				<iframe loading="lazy" src="/badge.php?projectName=GithubAPI&carousel=1" class="carouselItem"></iframe>
				<iframe loading="lazy" src="/badge.php?projectName=Cube-Run&carousel=1" class="carouselItem"></iframe>
				<iframe loading="lazy" src="/badge.php?projectName=Cpp-Math&carousel=1" class="carouselItem"></iframe>
				<iframe loading="lazy" src="/badge.php?projectName=Dot-Replit&carousel=1" class="carouselItem"></iframe>
				<iframe loading="lazy" src="/badge.php?projectName=brainF-Programs&carousel=1" class="carouselItem"></iframe>
			</div>-->

			<!--<div class="carousel">
				<div class="glide" id="c1">
					<div class="glide__track" data-glide-el="track">
						<ul class="glide__slides">
							<li class="glide__slide">
								<iframe src="/badge.php?projectName=BFC&carousel=1" class="carouselItem"></iframe>
							</li>
							<li class="glide__slide">
								<iframe src="/badge.php?projectName=Textual&carousel=1" class="carouselItem"></iframe>
							</li>
							<li class="glide__slide">
								<iframe src="/badge.php?projectName=GithubAPI&carousel=1" class="carouselItem"></iframe>
							</li>
							<li class="glide__slide">
								<iframe src="/badge.php?projectName=Cube-Run&carousel=1" class="carouselItem"></iframe>
							</li>
							<li class="glide__slide">
								<iframe src="/badge.php?projectName=Cpp-Math&carousel=1" class="carouselItem"></iframe>
							</li>
							<li class="glide__slide">
								<iframe src="/badge.php?projectName=Dot-Replit&carousel=1" class="carouselItem"></iframe>
							</li>
							<li class="glide__slide">
								<iframe src="/badge.php?projectName=brainF-Programs&carousel=1" class="carouselItem"></iframe>
							</li>
							<li class="glide__slide">
								<iframe src="/badge.php?projectName=BFC&carousel=1" class="carouselItem"></iframe>
							</li>
						</ul>
					</div>
				</div>
			</div>-->

			<div class="carousel">
				<div class="glide" id="c2">
					<div class="glide__track" data-glide-el="track">
						<ul class="glide__slides">
							<li class="glide__slide">
								<iframe src="badge.php?projectName=BFC&carousel=1" class="carouselItem"></iframe>
							</li>
							<li class="glide__slide">
								<iframe src="badge.php?projectName=Textual&carousel=1" class="carouselItem"></iframe>
							</li>
							<li class="glide__slide">
								<iframe src="badge.php?projectName=GithubAPI&carousel=1" class="carouselItem"></iframe>
							</li>
							<li class="glide__slide">
								<iframe src="badge.php?projectName=Cube-Run&carousel=1" class="carouselItem"></iframe>
							</li>
							<li class="glide__slide">
								<iframe src="badge.php?projectName=Cpp-Math&carousel=1" class="carouselItem"></iframe>
							</li>
							<li class="glide__slide">
								<iframe src="badge.php?projectName=Dot-Replit&carousel=1" class="carouselItem"></iframe>
							</li>
							<li class="glide__slide">
								<iframe src="badge.php?projectName=brainF-Programs&carousel=1" class="carouselItem"></iframe>
							</li>
							<li class="glide__slide">
								<iframe src="badge.php?projectName=BFC&carousel=1" class="carouselItem"></iframe>
							</li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="grid">
				<a href="https://github.com/https123456789" class="card" target="_blank">
					<h2>
						<img src="icons/github-mark.svg" alt="" class="cardIcon"/>
						<p>My Github Page <span class="rarr-anm">&rarr;</span></p>
					</h2>
					<p>Check out all of my open source projects.</p>
				</a>
		
				<a href="https://replit.com/@https123456789" class="card" target="_blank">
					<h2>
						<img src="icons/replit-logo.svg" alt="" class="cardIcon"/>
						<p>My Replit Page <span class="rarr-anm">&rarr;</span></p>
					</h2>
					<p>Check out my projects on Replit.</p>
				</a>
			</div>

			<section>
				<h2 class="section-title">About Me</h2>
				<div class="section-description">
					<p>I am a high schooler with an interest in coding.</p>
					<p>Total open source repositories: <?php echo $totalOpenSourceRepos; ?>.</p>
					<p>Where are my repositories? <a href="https://github.com/https123456789?tab=repositories" target="_blank">GitHub!</a></p>
					<!--<p>How old am I?</p>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="img" width="100" height="100">
						<style>
							.five-top-line {
								stroke-width: 10%;
							}
							.file-top-vline {
								stroke-width: 10%;
							}
							.five-bottom {
								fill: none;
								stroke: #000000;
								stroke-width: 4%;
								stroke-dasharray: 32;
							}
							.one-line {
								stroke-width: 4%;
							}
						</style>
						<path class="" d="M20,20 L10,30 L15,30 L20,25 Z"></path>
						<path d="M10,85 L35,85 L35,80 L10,80 Z"></path>
						<path class="one-line" d="M20,20 L20,85 L25,85 L25,20 Z"></path>
						<path class="five-top-line" d="M60,20 L90,20 L 90,25 L60,25 Z"></path>
						<path class="five-top-vline" d="M60,25 L60,58 L65,58 L65,25 Z"></path>
						<circle class="five-bottom" r="15%" cx="70%" cy="70%"></circle>
					</svg>-->
				</div>
			</section>

			<section>
				<h2 class="section-title">Project Showcases</h2>
				<div class="grid">
					<a class="card" href="/showcases/GithubAPI.php">
						<h2>
							<img src="icons/github-mark.svg" alt="" class="cardIcon"/>
							<p>Github API</p>
						</h2>
						<p>A rate-limitless mirror of the GitHub API.</p>
					</a>
				</div>
			</section>
			
			<h2 class="section-title">Languages I Know</h2>
			<div class="languageGrid fade-in">
				<div class="languageCard">
					<div class="">
						<h2>
							<img src="icons/javascript-logo.svg" alt="JavaScript Logo" class="languageCardIcon"/>
							<p>JavaScript</p>
						</h2>
						<p>Despite what people say, it's not that bad.</p>
					</div>
				</div>
				<div class="languageCard">
					<div class="">
						<h2>
							<img src="icons/python-logo.svg" alt="Python Logo" class="languageCardIcon"/>
							<p>Python</p>
						</h2>
						<p>Great for working with data.</p>
					</div>
				</div>
				<div class="languageCard">
					<div class="">
						<h2>
							<img src="icons/C++-logo.svg" alt="C++ Logo" class="languageCardIcon"/>
							<p>C++</p>
						</h2>
						<p>Fun (most of the time).</p>
					</div>
				</div>
				<div class="languageCard">
					<div class="">
						<h2>
							<img src="icons/c-logo.svg" alt="C Logo" class="languageCardIcon"/>
							<p>C</p>
						</h2>
						<p>Good to know, but a little more challenging to use than C++.</p>
					</div>
				</div>
				<div class="languageCard">
					<div class="">
						<h2>
							<img src="icons/PHP-logo.svg" alt="PHP Logo" class="languageCardIcon"/>
							<p>PHP</p>
						</h2>
						<p>🤨 Say something, I dare you. 🤨</p>
					</div>
				</div>
			</div>

			<h2 class="section-title">Languages I want to learn.</h2>

			<div class="languageGrid">
				<div class="languageCard">
					<h2>
						<img src="icons/nasm-logo.svg" alt="" class="languageCardIcon"/>
						<p>Assembly (x86 Intel flavored)</p>
					</h2>
					<p>It would be pretty nice to know.</p>
				</div>
			</div>
		</main>
		<footer class="footer">
			<p>Hosted on Replit</p>
			<p>Written in PHP, HTML, JS, and CSS</p>
			<p>Requests this page has made:&nbsp;<span id="pageReqsDisplay"></span>.</p>
		</footer>
		<script src="main.js?rnd=1"></script>
	</body>
</html>