<?php 
$q=mysqli_query($conn,"select * from user ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any user exists !!!</h2>";
}
else
{
?>
<script>
	function DeleteUser(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_user.php?id="+id;
		}
	}
</script>
<br/><br/>
<h2 style="color:#00FFCC">All Users</h2>

<table class="table  table-bordered">

	<Tr class="success">
		<th>Sr.No</th>
		<th>User Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Gender</th>
		<th>Delete</th>
	</Tr>
	
	
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td><font color='white'>".$row['name']."</font></td>";
echo "<td><font color='white'>".$row['email']."</font></td>";
echo "<td><font color='white'>".$row['mobile']."</font></td>";
echo "<td><font color='white'>".$row['gender']."</font></td>";
?>

<Td><a href="javascript:DeleteUser('<?php echo $row['id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td><?php 

echo "</Tr>";
$i++;
}
		?>
		
</table>

<?php }?>