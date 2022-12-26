<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// require_once('Creational Design Patterns/Prototype/Example1/Author.php');
// require_once('Creational Design Patterns/Prototype/Example1/Page.php');


// $author = new Author('Abimael Mendes');
// $page = new Page('Fisrt Page', 'Olá, mundo!', $author);
// $page->addComment("Meu primeiro padrão implementado");

// $clone = clone $page;
// $clone->addComment('seundo comentário');
// echo '<pre>';
// print_r($author->getPage());


require_once('Creational Design Patterns/Prototype/Example2/Notebook.php');

 $notebook1 = new Notebook();

 $notebook2 = clone $notebook1;
 $notebook2->setColor('black');

echo '<pre>';
print_r($notebook1);

echo '-------------';
print_r($notebook2);