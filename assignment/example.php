<?php
include './db.php';
echo '<link rel="stylesheet" type="text/css" href="./css/semantic.min.css">
	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript" src="./js/semantic.min.js"></script>';
require("doc2txt.class.php");
if(isset($_POST['sub']) && isset($_FILES['file1'])){
	$file1=$_FILES['file1']['name'];
	$file2=$_FILES['file1']['tmp_name'];
	$fsize=$_FILES['file1']['size'];
	
	$path="./resume/".$file1;
	if($fsize > 4097152){
         echo '<h1 class="ui red message">File size must be exactely 2 MB</h1>';
      }
	if(file_exists($path)){
			echo "<h1 class='ui red message'> already Uploaded</h1>";
			header( "refresh:5;url=index.php" );
		}
	else{
		//print($path);
		move_uploaded_file($file2,"./resume/".$file1);
		$docObj = new Doc2Txt($path);
		//$docObj = new Doc2Txt("test.doc");

		$txt = $docObj->convertToText();
		//print_r($txt);
		//$fruits_ar = explode(' ', $txt);
		//print_r(preg_split('/\s+/',$fruits_ar[13])[0]);

		$n_words = preg_match_all('/[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})/', $txt, $match_arr);
		$word_arr1 = $match_arr[0];


		//var_dump($word_arr1[0]);
		$n_words = preg_match_all('/[6-9][0-9]{9}/', $txt, $match_arr);
		$word_arr = $match_arr[0];


		//var_dump($word_arr[0]);
		//print_r($txt);
		$sql="INSERT INTO assignment (email,mobile,resume) values ('$word_arr1[0]','$word_arr[0]','./resume/".$file1."')";
		$rr=$con->query($sql);
		if($rr){
		echo "<h1 class='ui center aligned green  raised segment container'>Data Inserted</h1>";
		echo "<a href='./view.php'class='ui green button'>View Data</a>";
		
		}
		else{
		echo "Not";
		}

		}
	
	
}


?>
