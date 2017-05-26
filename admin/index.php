<?php require_once'../inc/lib.php'; ?>
<?php require_once("template/head.php"); ?>
<?php require_once("template/header.php");?>
<?php

if( isset( $_GET["r"] ) )
					switch( $_GET["r"] ){
						case "add-post":
						include_once 'add-post.php';
						break;

						case "add-menu":
						include_once "add-menu.php";
						break;

						case "add-user" : 
						include_once 'add-user.php';
						break;

						case "edit-post":
						include_once "edit-post.php";
						break;

						case "edit-menu":
						include_once 'edit-menu.php';
						break;

						case "edit-user";
						include_once 'edit-user.php';
						break;

						case "delete":
						include_once 'delete.php';
						break;

						case "list-user" :
						include_once 'list-user.php';
						break;

						case "list-post":
						include "list-post.php";
						break;

						case "list-menu":
						include 'list-menu.php';
						break;

					
	

						case "logout":
							if(!empty($_SESSION))
							session_destroy();
						include "login.php";
						break;



						default:
						include_once 'list-post.php';
					}
			else 
				include_once 'list-post.php';

			?>