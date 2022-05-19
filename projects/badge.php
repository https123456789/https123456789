<link rel="stylesheet" href="/css/badge.css?rnd=1">

<?php
$projectName = $_GET["projectName"];
$description = "";
$url = "https://githubapi.https123456789.repl.co/github/repos/https123456789/" . $projectName;
$data = file_get_contents($url);
$data = json_decode($data);
$description = $data->description;
$language = $data->language;
$stars = $data->stargazers_count;
?>

<?php echo '<a href="https://github.com/https123456789/' . $projectName . '" target="_blank" rel="noreferrer">'; ?>
	<div class="card">
		<h1 class="title"><?php echo $projectName; ?></h1>
		<p class="description"><?php echo $description; ?></p>
		<div class="details">
			<div><p class="attribute">
				<img src="/icons/star.svg" alt=""/>
				<span><?php echo $stars; ?></span>
			</p></div>
			<div><p class="attribute">
				<img src="" alt="" style="display: none;"/>
				<span><?php echo $language; ?></span>
			</p></div>
		</div>
	</div>
</a>