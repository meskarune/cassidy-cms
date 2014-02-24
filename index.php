<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Quadrangle Designs</title>
		<meta name="description" content="A graphic design studio that creates unique websites and branding for small business">
		<meta name="viewport" content="width = device-width, initial-scale = 1./0">
		<link rel="stylesheet" type="text/css" href="/assets/css/normalize.css">
		<link rel="stylesheet" type="text/css" media="screen" href="/assets/css/screen.css">
		<link rel="stylesheet" type="text/css" media="screen" href="/assets/css/magnific-popup.css">
	</head>
	<body>
		<?php
			$articles = './articles';
			foreach (new DirectoryIterator($articles) as $article) {
					include $article;
			}
		?>
	</body>
</html>
