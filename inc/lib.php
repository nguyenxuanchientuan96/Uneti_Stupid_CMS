<?php
	if(empty($_SESSION)){
		session_start();
	}

	$conn=mysqli_connect("localhost","root","","cms");
	if($conn){
		mysqli_set_charset($conn,"utf8");
	}
	else{
		die("Có lỗi khi kết nối với db".mysqli_error($conn));
	}

	$postPerPage=2; //so bai 1 trang
	function checkLogin(){
		global $_SESSION;
		if(empty($_SESSION["username"])){
			header("location:http://localhost/learn/Easy_CMS/admin/login.php");
		}
	}
	function get_total_posts(){
		global $conn;
		$sql="SELECT COUNT(id) AS total FROM posts";
		$rs=mysqli_query($conn,$sql);
		$total=mysqli_fetch_array($rs,MYSQLI_ASSOC);
		return $total["total"];
	}

?>