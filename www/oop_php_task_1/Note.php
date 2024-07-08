<?php 
    class Note
    {
        protected $title;
        private $pages;




        private function checkPages($num)
        {
            if($num < 10)
            {
                return false;
            }
            return true;
        }

        public function __construct($pages)
        {   
            if($this->checkPages($pages))
            {  
                $this->pages=$pages;
            }
            else
            {
                $this->pages="Недостаточно страниц";
            }
        }





        protected function setTitle($title)
        {   
            $this->title=$title; 
        }





        public function getPages()
        {
            return $this->pages;
        }

        public function currPage($num)
        {   
            if(is_numeric($num))
            {
                return "Текущая страница: " . $num;
            }
        }
    }


    $note1=new Note(22);
    


    class News extends Note
    {
        public $date;

        public function setTitle($news_title)
        {   
            if(mb_strlen($news_title) > 10 && mb_strlen($news_title) < 100)
            {
                parent::setTitle($news_title);
            }  
        }

        public function getTitle()
        {
            return $this->title;
        }
    }


    $news1=new News(20);


    $news1->setTitle("ООООООООООООООООООООООООООООООООООООООООООООООООООООООООООООООООООООООООЧЕНЬ ДЛИННАЯ СТРОКА");
?>