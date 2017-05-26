<?php
	require_once'../inc/lib.php';
	$id=$_GET["id"];
	$sql="SELECT * FROM category where id={$id}";
	$query=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
	if(empty($row)){
		echo "menu khong ton tai";
		return;
	}
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$name=$_POST["name"];
		$info=$_POST["info"];
		
		$sql="UPDATE category SET name='{$name}',info='{$info}' where id={$id}";
		$query=mysqli_query($conn,$sql);
		if($query){
			echo "edit menu thành công";
		}
		else{
			echo "thất bại".mysqli_error($conn);
		}
	}

?>
<?php
	require_once("template/head.php");
	require_once("template/header.php");
?>
	<div class="container">
		
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-success">
							<div class="panel-heading text-center"> EDIT MENU </div>
							<div class="panel-body">
								<form action="" method="POST" role="form">
									
								
									<div class="form-group">
										<label for="">Name</label>
										<input type="text" class="form-control" id="" placeholder="Input field" name="name" value="<?php echo $row['name']; ?>">
									</div>

								
									<div class="form-group">
										<label for="">Info</label>
										<input type="text" class="form-control" id="" placeholder="Input field" name="info" value="<?php echo $row['name']; ?>">
									</div>

									
								
									
									<div class="col-lg-12 text-center">
										<button type="submit" class="btn btn-success">Edit-menu</button>
									</div>
									
								</form>
								
							</div>
						</div>
					</div>
				</div> <!-- .row -->
		
		</div> <!-- .container -text -->

<?php require_once("template/footer.php"); ?>