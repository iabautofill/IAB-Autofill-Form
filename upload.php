<?php


if (isset($_FILES['userfile'])) {
	echo 'You have uploaded next content\n';
	print_r($_FILES);

	$fileContent = file_get_contents($_FILES['userfile']['tmp_name']);
	echo $fileContent;
}

?>


<html>
<title>Image Editor</title>

<style type="text/css">
	input {
  		border: none; 
  		height: 140px;
  		width: 100%;
  		font-size: 60px;
	}

	html,body {
  		height:100%;
  		width:100%;
  		margin:0;
  		font-size: 40px;
	}
	body {
  		display:flex;
	}
	form {
  		margin:auto;
	}

</style>

<body>


<form id="uploadForm" action="upload.php" method="POST" enctype="multipart/form-data">
	<h1>Awesome image editor</h1>
	
	<p>Please choose file for edit</p>

	<div style='height: 0px;width:0px; overflow:hidden;'>
		<input id="fileButtonId" name="userfile" type="file" accept="vulnano/app">
	</div>
	
	<input type="button" value="Select file" onClick="document.getElementById('fileButtonId').click();">
	<!-- <input type="submit" value="Edit"/> -->
	
</form>


<script>

	function ready() {
		//alert('loaded');
		//document.getElementById('fileButtonId').click();
	}

	document.addEventListener("DOMContentLoaded", ready);

	document.getElementById("fileButtonId").onchange = function() {
    	document.getElementById("uploadForm").submit();
	};


</script>

</body>

</html>
