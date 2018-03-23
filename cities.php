<?php
$state=$_GET['state'];
$c1= array('Faridabad','Hisar');
$c2= array('thar');
$c3= array('chandigarh');
$c4= array('Rourkela','Cuttak','Bhuvneshvar');

if($state=="Haryana")
{
     foreach ($c1 as $c) {
     	echo "<option>$c</option>";
     }
}
elseif ($state=="Gujrat") {
	 foreach ($c2 as $c) {
     	echo "<option>$c</option>";
     }
}
elseif ($state=="Punjab") {
	 foreach ($c3 as $c) {
     	echo "<option>$c</option>";
     }
}
elseif ($state=="Odisha") {
	 foreach ($c4 as $c) {
     	echo "<option>$c</option>";
     }
}
else
{
	echo "<option>First Select State</option>";
}