<?php
 echo date('Y-m-d H:m:s').'<br/>';
 $today = date('Y-m-d H:m:s');

 $currentDate = new DateTime('2016-01-01');
 // $currentDate = DateTime::createFromFormat('d-m-Y', '1-3-2016');

 $currentDate->sub(new DateInterval('P3M'));
 echo $currentDate->format('d F Y');
