<?php
include("connection.php");
?>

<!-- DELETE -->
<?php
if(isset($_GET['delete_value']))
{
$delete="delete from tbl_laboratory where 
lab_id='$_GET[delete_value]'";
$query=mysql_query($delete);
}
?>
				
<!-- APPROVE -->
<?php
if(isset($_GET['approve_value']))
{
$update="update tbl_laboratory set lab_status=1 where  
lab_id='$_GET[approve_value]'";
$query=mysql_query($update);
}
?>
				
<!-- REJECT -->
<?php
if(isset($_GET['reject_value']))
{
$update="update tbl_laboratory set lab_status=0 where  
lab_id='$_GET[reject_value]'";
$query=mysql_query($update);
}
?>
                    