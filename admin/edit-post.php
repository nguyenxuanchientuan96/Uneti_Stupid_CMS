<?php
	require_once'../inc/lib.php';
	$id=$_GET["id"];
	$sql="SELECT * FROM posts where id={$id}";
	$query=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
	if(empty($row)){
		echo "bài viết không tồn tại";
		return;
	}
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$title=$_POST["title"];
		$excerpt=$_POST["excerpt"];
		$content=$_POST["content"];
		$user_id=$_POST["user_id"];
		$create_date=$_POST["create_date"];
		$menu=$_POST["menu"];
		$sql="UPDATE posts SET title='{$title}',excerpt='{$excerpt}',content='{$content}',user_id='{$user_id}', create_date='{$create_date}',menu='{$menu}' where id={$id}";
		$query=mysqli_query($conn,$sql);
		if($query){
			echo "edit bài thành công";
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
							<div class="panel-heading text-center"> SỬA BÀI VIẾT </div>
							<div class="panel-body">
								<form action="" method="POST" role="form">
									
								
									<div class="form-group">
										<label for="">Title</label>
										<input type="text" name="title" class="form-control" id="" placeholder="Input field" value="<?php echo $row['title']; ?>">
									</div>

									<div class="form-group">
										<label for="">Excerpt</label>
										<input type="text" name="excerpt" class="form-control" id="" placeholder="Input field"
										value="<?php echo $row['excerpt']; ?>">
									</div>

									<div class="form-group">
										<label for="">Content</label>
										<input type="text" name="content" class="form-control" id="" placeholder="Input field" value="<?php echo $row['content']; ?>"">
									</div>

									<div class="form-group">
										<label for="">User_ID</label>
										<input type="text" name="user_id" class="form-control" id="" placeholder="Input field" value="<?php echo $row['user_id']; ?>"">
									</div>
									<div class="form-group">
										<label for="">Create_date</label>
										<input type="text" name="create_date" class="form-control" id="" placeholder="Input field" value="<?php echo $row['create_date']; ?>"">
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
										<button type="submit" class="btn btn-success">Sửa bài viết</button>
									</div>
									
								</form>
								
							</div>
						</div>
					</div>
				</div> <!-- .row -->
	
		</div> <!-- .container -text -->


<?php require_once("template/footer.php"); ?>