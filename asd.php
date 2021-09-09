<?php
  date_default_timezone_set('Asia/Ho_Chi_Minh');
   $startTime =date('Y-m-d');
   $cenvertedTime = date('Y-m-d',strtotime('+10 year',strtotime($startTime)));
  echo $cenvertedTime;
?>