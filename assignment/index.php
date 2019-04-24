
<!DOCTYPE html>
<html>
<head>
	<title>Resume Uploading</title>
	<link rel="stylesheet" type="text/css" href="./css/semantic.min.css">
	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript" src="./js/semantic.min.js"></script>
</head>
<body>
<div class="ui container"><br><br>	
<div class="ui center aligned raised inverted blue segment">
	<h1>
	Resume Uploding</h1>
</div>
<form method="post" action="example.php" enctype="multipart/form-data" class="ui stacked bolded raised segment header form" style="width: 60em">
	
	File &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  type="file" class="ui red  button" name="file1" accept=".docx"> <br><br><br>
	<button type="submit" name="sub"> Submit </button>
</form>

<h1 class="ui container segment">View The data</h1>
<a href='./view.php'class='ui green button'>Click View Data</a>
</div>
</body>
</html>

