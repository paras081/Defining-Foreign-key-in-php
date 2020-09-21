<?php
	include('db_connect.php');

	if(isset($_POST['sub'])){

		$cname=$_POST['cid'];
		$state=$_POST['state'];

		$ins_query="INSERT INTO state(cid,sname)
						VALUES ('$cname','$state')
					";

		$execute=$conn->query($ins_query);

		if($execute){

			echo "<script>
					alert('Inserted Successfully');
					windows.location='index.php';
					</script>
					";
		}else{

			echo "<script>
					alert('Inserted not Successfully');
					windows.location='index.php';
					</script>
					";
		}

	}

?>
<html>
	<head>
		<title>Primary Key & Foreign Key| Demo</title>
	</head>
	<body>
			<form method="POST">
			<label>Country</label>
			<select name="cid">
				<option>--Select Country--</option>
				<?php
					$sel_query="SELECT * from cname";
					$execute=$conn->query($sel_query);
					while($fet=$execute->fetch_array())
					{
				?>
				<option value="<?php echo $fet['cid']  ?>"><?php echo $fet['cname']  ?></option>
				<?php
				}
				?>
			</select>
			<br/>
			<br/>
			<label>State</label>
			<input type="text" name="state" /><br><br>
			<input type="submit" name="sub" />
			</form>
	</body>
</html>