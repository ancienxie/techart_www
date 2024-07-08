<?php
	date_default_timezone_set('UTC');
	class Date
	{
		public $date;

		public function __construct($date == null)
		{	
			if($date == null){
				$this->date = new Date();
			}
			else
			{
				$this->date = new Date();
			}
		}

		public function getDay()
		{	
			$date_value = $this->date;
			return date("d", $date_value);
		}
		
		public function getMonth($date_value, $lang=null)
		{	
			if($lang=null)
			{	
				$date_value = $this->date;
				return date("F", $date_value);
			}
			if($lang="ru")
			{	
				$date_value = $this->date;
				return date("F", $date_value);	
			}
			else if($lang="en")
			{	
				$date_value = $this->date;
				return date("F", $date_value);
			}
		}

		public function getYear()
		{
			$date_value = $this->date;
			return date("o", $date_value);
		}

		public function getWeekDay($lang=null)
		{
			if($lang=null)
			{
				return date("l");
			}
			if($lang="ru")
			{
				return date("l");	
			}
			else if($lang="en")
			{
				return date("l");
			}
		}

	}

	$date1=new Date('2023-01-01');
?>