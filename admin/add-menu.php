<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		require_once '../inc/lib.php';
		
		$name=$_POST["name"];
		$info=$_POST["info"];
		$sql="INSERT INTO category(name,info) VALUES ('{$name}','{$info}')";
		$rs=mysqli_query($conn,$sql);
		if($rs){
			echo "Thêm menu thành công!!!";
		}
		else{
			die("Thêm menu thất bại".mysqli_error());
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
							<div class="panel-heading text-center"> THÊM MENU </div>
							<div class="panel-body">
								<form action="" method="POST" role="form">
									
								
									<div class="form-group">
										<label for="">Name</label>
										<input type="text" class="form-control" name="name" id="" placeholder="Input field">
									</div>

								
									<div class="form-group">
										<label for="">Info</label>
										<input type="text" class="form-control" name="info" id="" placeholder="Input field">
									</div>

									
								
									
									<div class="col-lg-12 text-center">
										<button type="submit" class="btn btn-success">Thêm menu</button>
									</div>
									
								</form>
								
							</div>
						</div>
					</div>
				</div> <!-- .row -->
		
		</div> <!-- .container -text -->

<?php require_once("template/footer.php"); ?>