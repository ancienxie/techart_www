<?php
    class Date
    {
        private $date;
        public function __construct($date = null)
        {
            if (is_null($date))
            { 
                $this->date = new DateTime();
            }
            else
            {
                $this->date = new DateTime($date);
            }
        }

        public function getDay()
        {
            return $this->date->format("d");
        }
        public function getMonth($lang = null)
        {
            $arr = ["Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"];
            
            if (is_null($lang)){
                return $this->date->format("m");
            }
            else if ($lang === "ru"){
                $num = $this->date->format("m");
                return $arr[$num-1];
            }
            else if ($lang === "en")
            {
                return $this->date->format("F");
            }
            
        }
        public function getYear()
        {
            return $this->date->format("Y");
        }
        public function getWeekDay($lang = null)
        {
            $arr = ["Понедельник","Вторник","Среда","Четверг","Пятница","Суббота","Воскресенье"];
            if (is_null($lang)){
                return $this->date->format("N");
            }
            else if ($lang === "ru"){
                $num = $this->date->format("N");
                return $arr[$num-1];
            }
            else if ($lang === "en")
            {
                return $this->date->format("l");
            }
        }
        public function addDay($value)
        {
            $num = $this->date->format("d") + $value;
            return $this->date->format("Y-m-". $num);
        }
        public function subDay($value)
        {
            $num = $this->date->format("d") - $value;
            return $this->date->format("Y-m-". $num);
        }

        public function addMonth($value)
        {
            $num = $this->date->format("m") + $value;
            return $this->date->format("Y-" . $num . "-d");
        }
        public function subMonth($value)
        {
            $num = $this->date->format("m") - $value;
            return $this->date->format("Y-" . $num . "-d");
        }

        public function addYear($value)
        {
            $num = $this->date->format("Y") + $value;
            return $this->date->format($num . "-m-d");
        }
        public function subYear($value)
        {
            $num = $this->date->format("Y") - $value;
            return $this->date->format($num . "-m-d");
        }

        public function format($format)
        {
            return $this->date->format($format);
        }
        public function __toString()
        {
            return $this->date->format("Y-m-d");
        }
    }

    $date1= new Date("2077-08-02");
?>