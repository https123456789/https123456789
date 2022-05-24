<!DOCTYPE html>
<html>
	<head>
		<title>Badge</title>
		<base href="/projects/">
		<link rel="stylesheet" href="css/badge.css">
		<meta name="viewport" content="width=device-width">
	</head>
	<body>
		<?php
		$projectName = $_GET["projectName"];
		echo '<script>window.globals = {projectName: "' . $projectName . '"}</script>';
		?>
		<?php echo '<a href="https://github.com/https123456789/' . $projectName . '" target="_blank" rel="noreferrer">'; ?>
			<div class="card">
				<h1 class="title"><span id="projectName"></span></h1>
				<p class="description"><span id="description"></span></p>
				<div class="details">
					<div><p class="attribute">
						<img src="icons/star.svg" alt="" class="img"/>
						<span id="stars"></span>
					</p></div>
					<div><p class="attribute">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="img">
							<style>
								#languageDotDom {
									animation-name: circle-spin;
									animation-duration: 2s;
									animation-fill-mode: forwards;
									animation-iteration-count: infinite;
									transform-origin: center;
									stroke-dasharray: 307;
									stroke-linecap: round;
									stroke-width: 2;
									fill: none;
								}

								@keyframes circle-spin {
									0% {
										transform: rotate(0deg);
										stroke-dashoffset: 300%;
									}
									50% {
										stroke-dashoffset: 200%;
									}
									100% {
										transform: rotate(360deg);
										stroke-dashoffset: 300%;
									}
								}
							</style>
							<circle cx="50%" cy="50%" r="49%" stroke="#888888" id="languageDotDom"></circle>
						</svg>
						<span id="language"></span>
					</p></div>
				</div>
			</div>
		</a>
		<script>
			var url = "https://githubapi.https123456789.repl.co/github/repos/https123456789/" + window.globals.projectName;
			var projectNameDom = document.getElementById("projectName");
			var descriptionDom = document.getElementById("description");
			var starsDom = document.getElementById("stars");
			var languageDom = document.getElementById("language");
			var languageDotDom = document.getElementById("languageDotDom");
			projectNameDom.innerHTML = window.globals.projectName;
			
			function colors() {
				var req = new XMLHttpRequest();
				req.onload = () => {
					if (req.status != 200) {
						return;
					}
					var data = JSON.parse(req.responseText);
					var language = languageDom.innerHTML;
					if (!language) {
						language = "other";
					}
					console.log(data[language]);
					if (language != "other") {
						languageDotDom.style.fill = data[language].color;
					}
				}
				req.open("GET", "https://raw.githubusercontent.com/ozh/github-colors/master/colors.json");
				req.send();
			}
			
			function main() {
				console.log("Fectching data...");
				var data = {
					description: "An error occured."
				};
				var req = new XMLHttpRequest();
				req.onload = () => {
					if (req.status != 200) {
						console.log("Error in retriving data. Inserting error messages into DOM...");
					} else  {
						console.log("Data retrived. Inserting data into DOM...");
						data = JSON.parse(req.responseText);
					}
					console.log("Project description...");
					descriptionDom.innerHTML = data.description;
					console.log("Project stars count...");
					starsDom.innerHTML = data.stargazers_count;
					console.log("Project language...");
					languageDom.innerHTML = data.language;
					console.log("Done loading main data.");
					colors();
				}
				req.open("GET", url);
				req.send();
			}
			
			if (document.readyState == "complete") {
				main();
			}
			document.addEventListener('readystatechange', (event) => {
				console.log("Document is " + document.readyState)
				if (document.readyState == "complete") {
					main();
				}
			})
		</script>
	</body>
</html>