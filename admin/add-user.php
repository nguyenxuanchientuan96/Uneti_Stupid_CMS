<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	require_once'../inc/lib.php';
	$username=$_POST["name"];
	$p1=$_POST["password"];
	$p2=$_POST["repassword"];
	$email=$_POST["email"];
	$info=$_POST["info"];
	if($p1==$p2){
	$sql="INSERT INTO user(name,email,info,password) VALUES ('{$username}','{$email}','{$info}','{$p1}')";
	$rs=mysqli_query($conn,$sql);
		if($rs){
			echo ("Thêm thành công");
		}
		else{
			echo "Thêm thất bại";;
		}
}
else{
	echo "Mật khẩu không khớp";
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
							<div class="panel-heading text-center"> THÊM USER </div>
							<div class="panel-body">
								<form action="" method="POST" role="form">
									
								
									<div class="form-group">
										<label for="">Name</label>
										<input type="text" class="form-control" name="name" id="" placeholder="Input field">
									</div>


									<div class="form-group">
										<label for="">Email</label>
										<input type="text" class="form-control" name="email" id="" placeholder="Input field">
									</div>
									<div class="form-group">
										<label for="">Info</label>
										<input type="text" class="form-control" name="info" id="" placeholder="Input field">
									</div>
									<div class="form-group">
										<label for="">Password</label>
										<input type="text" class="form-control" name="password" id="" placeholder="Input field">
									</div>
									
									<div class="form-group">
										<label for="">Re-Password</label>
										<input type="text" class="form-control" name="repassword" id="" placeholder="Input field">
									</div>

									
								
									
									<div class="col-lg-12 text-center">
										<button type="submit" class="btn btn-success">Thêm user</button>
									</div>
									
								</form>
								
							</div>
						</div>
					</div>
				</div> <!-- .row -->
	
		</div> <!-- .container -text -->

<?php 
	require_once("template/footer.php");
?>