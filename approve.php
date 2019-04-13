<?php
include('db_conection.php');
if(isset($_GET['session']))
{
$bid=$_GET['session'];
$select=mysqli_query($dbcon,"select * from items where item_id='$bid'");
while($row=mysqli_fetch_array($select))
{
$status_var=$row['Action'];
if($status_var=='0')
{
$status_state=1;
}
else
{
$status_state=0;
}
$update=mysqli_query($dbcon,"update items set Action='$status_state' where item_id='$bid' ");
if($update)
{
header("Location:approval.php");
}
else
{
echo mysqli_error();
}
}
?>
<?php
}
?>