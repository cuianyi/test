<?php

ob_start();
str_repeat('', 2);
ob_end_flush();
ob_flush();
$i = 1;
while (true) {
   echo $i++;
   ob_flush();
   flush();
   sleep(1);
}