<h1>Welcome to Dannie's Blog!</h1>

<?php

$articles = array();

$article = new stdClass();
$article->name = 'Dannie';
$article->author = 'Dan';
$article->body = '<p>Dannie the phantom is the man no body is greater bruh</p>';
$articles[] = $article;


$article = new stdClass();
$article->name = 'Danielle';
$article->author = 'Ms. Dan';
$article->body ='<p>Dannie the phantom is the man no body is greater bruh</p>' ;
$articles[] = $article;


$article = new stdClass();
$article->name = 'Danny';
$article->author = 'Vanilla Ice';
$article->body = '<p>Dannie the phantom is the man no body is greater bruh</p>';
$articles[] = $article;

foreach ($articles as $article){
	print '<article>';
    print '<h2 style= "font: bold red;">' . $article->name . '</h2>';
    print '<em>By: ' . $article->author . '</em><br/>';
    print $article->body . '<br/><br/>';
    print '</article>';

}

?>