<?php 
 $del_teacher = $_GET['teacherid'];
$del_done = $ravi->delete_teacher($del_teacher);
if($del_done==true)
{
	echo "<script>window.location = 'home.php?teacher=teacher-delete'; alert('Success delete');</script>";
	
}
else
{
	echo "<script>window.location='home.php?teacher=teacher-delete'; alert('Can't delete');</script>";
}
?>