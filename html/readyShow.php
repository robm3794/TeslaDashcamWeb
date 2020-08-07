<?php
include "header.php";

<div id="maininfo">Disconnecting the drive from the car...

exec("/home/pi/dash/disconnectCar", $output1, $ret1);
if ($ret1 == 0) {
	<font color='green'>done</font>.
	} else {
		<font color='red'>FAILED</font>:<br> <p> <pre>
		echo implode("\n", $output1);
		</pre>
		}

<br> <p> Mounting the drive on the Pi...

exec("/home/pi/dash/connectPi", $output2, $ret2);
if ($ret2 == 0) {
	<font color='green'>done</font>.
	} else {
		<font color='red'>FAILED</font>:<br> <p> <pre>
		echo implode("\n", $output2);
		</pre>
		}

if (($ret1 == 0) && ($ret2 == 0)) {
	<br> <p> <form action='videoList.php'> <button type='submit'>Show video list</button> </form>
	}
	</div>

include "footer.php";
?>
