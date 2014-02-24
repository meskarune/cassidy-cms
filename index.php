<?php
include($_SERVER['DOCUMENT_ROOT'].'/inc/template.php');

html_head();

$articles = './articles';

foreach (new DirectoryIterator($articles) as $article) {
	include $article;
}
?>
	</body>
</html>
