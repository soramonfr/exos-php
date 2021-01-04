<?php
class Calendar
{
    public $month;
    public $year;

    public function __construct($month, $year)
    {
        $this->month = $month;
        $this->year = $year;
    }

 private function getMonthDuration($monthNumber, $year)
 {
  $date1 = new DateTime("$year-$monthNumber-01");
  $date2 = new DateTime($year . "-" .($monthNumber + 1) . "-01");
     
 }  
}
