<?php
	include('db_connect.php');
?>
<html>
	<head>
		<title>Join | View Records | Demo</title>
	</head>
	<body>
			<table>
			<tr>
				<th>SID</th>
				<th>Coutry</th>
				<th>State</th>
			</tr>
				<?php
					$sel_query="SELECT state.*,cname.cname FROM state JOIN cname on state.cid=cname.cid";


					$execute=$conn->query($sel_query);
					while($fet=$execute->fetch_array())
					{
				?>
			<tr>
				<td><?php echo $fet['sid'];  ?></td>
				<td><?php echo $fet['cname'];  ?></td>
				<td><?php echo $fet['sname'];  ?></td>
			</tr>

			<?php
				}
			?>

			</table>
	</body>
</html>