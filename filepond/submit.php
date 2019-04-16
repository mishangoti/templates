<?php
// echo "<pre>";
// print_r($_FILES);

if(isset($_FILES)){
	// filepondimage1
	if(isset($_FILES['filepondimage1'])){
		$errors= array();
		$file_name = $_FILES['filepondimage1']['name'];
		$file_size =$_FILES['filepondimage1']['size'];
		$file_tmp =$_FILES['filepondimage1']['tmp_name'];
		$file_type=$_FILES['filepondimage1']['type'];

		if(empty($errors)==true){
		 move_uploaded_file($file_tmp,"uploads/image/".time().$file_name);
		 echo "uploads/image/".time().$file_name;
		}else{
		 print_r($errors);
		}
	}
	// filepondimage2
	if(isset($_FILES['filepondimage2'])){
		$errors= array();
		$file_name = $_FILES['filepondimage2']['name'];
		$file_size =$_FILES['filepondimage2']['size'];
		$file_tmp =$_FILES['filepondimage2']['tmp_name'];
		$file_type=$_FILES['filepondimage2']['type'];

		if(empty($errors)==true){
		 move_uploaded_file($file_tmp,"uploads/image/".time().$file_name);
		 echo "uploads/image/".time().$file_name;
		}else{
		 print_r($errors);
		}
	}
	// filepondimage3
	if(isset($_FILES['filepondimage3'])){
		$errors= array();
		$file_name = $_FILES['filepondimage3']['name'];
		$file_size =$_FILES['filepondimage3']['size'];
		$file_tmp =$_FILES['filepondimage3']['tmp_name'];
		$file_type=$_FILES['filepondimage3']['type'];

		if(empty($errors)==true){
		 move_uploaded_file($file_tmp,"uploads/image/".time().$file_name);
		 echo "uploads/image/".time().$file_name;
		}else{
		 print_r($errors);
		}
	}
	// filepondvideo
	if(isset($_FILES['filepondvideo'])){
		$errors= array();
		$file_name = $_FILES['filepondvideo']['name'];
		$file_size =$_FILES['filepondvideo']['size'];
		$file_tmp =$_FILES['filepondvideo']['tmp_name'];
		$file_type=$_FILES['filepondvideo']['type'];

		if(empty($errors)==true){
		 move_uploaded_file($file_tmp,"uploads/video/".time().$file_name);
		 echo "uploads/video/".time().$file_name;
		}else{
		 print_r($errors);
		}
	}
	// filepondpdf
	if(isset($_FILES['filepondpdf'])){
		$errors= array();
		$file_name = $_FILES['filepondpdf']['name'];
		$file_size =$_FILES['filepondpdf']['size'];
		$file_tmp =$_FILES['filepondpdf']['tmp_name'];
		$file_type=$_FILES['filepondpdf']['type'];

		if(empty($errors)==true){
		 move_uploaded_file($file_tmp,"uploads/pdf/".time().$file_name);
		 echo "uploads/pdf/".time().$file_name;
		}else{
		 print_r($errors);
		}
	}
}
