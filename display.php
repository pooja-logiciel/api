<?php
include('conf.php');

$sql=$dbh->prepare("select * from first");
$sql->execute();

?>
<table border="1px" width="80%">
	<tr>
		<th>id</th>
		<th>name</th>
		<th>marks</th>
	</tr>
	<?php 
	while($row=$sql->fetch()) 
	{  
		?>
		<tr>
			<td><?php echo $row['id']?></td>
			<td><?php echo $row['name']?></td>
			<td><?php echo $row['marks']?></td>
		</tr>   
		<?php 
	}

	?>
</table>	