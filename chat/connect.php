<?php
/*数据库连接*/
@$link = mysql_connect('localhost','root','123456');
mysql_query('set names urf8',$link);
mysql_select_db('test');


/*
$mysqli = new mysqli('localhost', 'root', '123456', 'test');
*/