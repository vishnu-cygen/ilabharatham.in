<?php
$q=$_GET["q"];
if ($q==NULL)
$q="vlntr";
$username="ilabh9qc_view";
$password="view@123";
$database="ilabh9qc_details";

$con=mysql_connect('localhost',$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM info WHERE ".$q."";
$result=mysql_query($query);
$num=mysql_numrows($result);
$i=0;

 echo "<font size=+1><table width=500 border=2 cellspacing=1 cellpadding=2>
          <tr>
            <th width=7% scope=col>ID</th>
            <th width=46% scope=col>Name</th>
            <th width=25% scope=col>Current City</th>
            <th width=22% scope=col>Blood Group</th>
          </tr>";
while ($i < $num) {
$field1=mysql_result($result,$i,"id");
$field2=mysql_result($result,$i,"fnm");
$field3=mysql_result($result,$i,"lnm");
$field4=mysql_result($result,$i,"bloodgrp");
$field5=mysql_result($result,$i,"ccity");

echo "<tr><td>$field1</td><td>$field2 &nbsp; $field3</td><td>$field5</td><td>$field4</td></tr>";
$i++;
}
echo "</table>";
mysql_close($con);
?>