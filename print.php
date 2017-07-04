<?php 
 $con = mysql_connect('localhost','root','root') or die('Unable To connect');
 mysql_select_db('test',$con);
 
 $a = mysql_query("SELECT * FROM images");
 while($res = mysql_fetch_array($a)){
	//echo $res['image'];
	 //echo '<img src="data:image/jpeg;base64,'.base64_encode( $res['image'] ).'"/>';
	 echo '<img src="data:image/jpeg;base64,' . base64_encode( $res['image'] ) . '" />';
 }
?>