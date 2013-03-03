<HTML>
<HEAD/>
<BODY>
<?php
include('inc/functions.inc.php');

$userid=$_GET['userid'];
$eventid=$_GET['eventid'];
#echo $userid."--".$eventid;

$line = get_user_info($userid, $eventid) or die('couldnt get user info');

#print_r($line);

foreach($line as $key => $value){
	if($key != 'user_id' && $key != "user_updated" &&  $value != NULL){
		echo "<div id=$key>$value</div><br/>\n";
	}
}

log_connection(1,119,NULL,NULL);

?>
</BODY>
</HTML>
