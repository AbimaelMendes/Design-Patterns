<?php

require_once('Creational Design Patterns/Prototype/Author.php');
require_once('Creational Design Patterns/Prototype/Page.php');


$author = new Author('Abimael Mendes');
$page = new Page('Fisrt Page', 'Olá, mundo!', $author);
$page->addComment("Meu primeiro padrão implementado");

$clone = clone $page;
$clone->addComment('seundo comentário');
echo '<pre>';
print_r($author);
