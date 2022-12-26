 <?php

require_once('Abstract/ProductAbstract.php');

 final class Notebook extends ProductAbstract
 {
    public function __construct()
    {
        $this->setId(1);
        $this->setName('NoteBook');
        $this->setColor('Gray');
        $this->setValue(7.200);
    }
 }