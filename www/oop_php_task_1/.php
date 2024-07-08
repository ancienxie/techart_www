<?php 
    class Note
    {
        public $title;
        public $pages;

        public function currPage($num)
        {   
            if(is_numeric($num))
            {
                return "Текущая страница: " . $num;
            }
        }
    }

    $note1=new Note;
    $note2=new Note;
    $note1->pages=12;
    $note2->pages=30;
?>