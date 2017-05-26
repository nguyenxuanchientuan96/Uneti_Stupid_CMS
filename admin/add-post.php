<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
	require_once '../inc/lib.php';
	$title=$_POST["title"];
	$excerpt=$_POST["excerpt"];
	$content=$_POST["content"];
	$user_id=$_POST["user_id"];
	$menu=$_POST["menu"];

	$sql="INSERT INTO posts (title,excerpt,content,user_id,menu) VALUES ('{$title}','{$excerpt}','{$content}',1,'{$menu}')";
	$query=mysqli_query($conn,$sql);

	if($query){
		echo "Thành công";
	}
	else{
		echo "<h1> Cập nhật thất bại </h1>" .mysqli_query($conn);
	}}
?>

<?php require_once'../inc/lib.php'; ?>
<?php require_once("template/head.php"); ?>
<?php require_once("template/header.php");?>
	<div class="container">
			
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-success">
							<div class="panel-heading text-center"> THÊM BÀI VIẾT </div>
							<div class="panel-body">
								<form action="" method="POST" role="form">
									
								
									<div class="form-group">
										<label for="">Title</label>
										<input type="text" name="title" class="form-control" id="" placeholder="Input field">
									</div>

									<div class="form-group">
										<label for="">Excerpt</label>
										<input type="text" name="excerpt" class="form-control" id="" placeholder="Input field">
									</div>

									<div class="form-group">
										<label for="">Content</label>
										<input type="text" name="content" class="form-control" id="" placeholder="Input field">
									</div>

									<div class="form-group">
										<label for="">User_ID</label>
										<input type="text" name="user_id" class="form-control" id="" placeholder="Input field">
									</div>
									

									<div class="form-group">
										<label for="">Menu</label>
										<select name="menu">
											<?php
												require_once '../inc/lib.php';
												$menus = mysqli_query($conn, "SELECT id,name FROM category");
												while( $menu = mysqli_fetch_array($menus, MYSQLI_ASSOC) ){
											?>
											<option value="<?php echo $menu['id']?>"><?php echo $menu["name"];?></option>
											<?php } ?>
											
										</select>
									</div>
								
									
									<div class="col-lg-12 text-center">
										<button type="submit" class="btn btn-success">Thêm bài viết</button>
									</div>
									
								</form>
								
							</div>
						</div>
					</div>
				</div> <!-- .row -->
		
		</div> <!-- .container -text -->


<?php require_once("template/footer.php"); ?>