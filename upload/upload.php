<!DOCTYPE html>
<html>
<head>
	<title>Uploading...</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Uploading...</h1>
<?php
	
	if($_FILE['userfile']['error'] > 0)
	{
		echo "Problem:";
		switch($_FILE['userfile']['error'])
		{
			case 1: echo "File exceeded upload_max_filesize";
				break;
			case 2: echo "File exceeded max_file_size";
				break;
			case 3: echo "File only partially uploaded";
				break;
			case 4: echo "No file uploadded`";
				break;
			case 6: echo "Cannot upload file: No temp directory specilied";
				break;
			case 7:  echo "upload failed: cannot write to disk";
		}
		exit;
	}
	if($_FILES['userfile']['type'] != 'text/plain')
	{
		echo "Problem: file is not plain text; and even this, go on upload.<br />";
		//exit;  //go on with not plain ??
	}
//$upfile = $_SERVER['DOCUMENT_ROOT']."/html/m/uploads/";
$upfile = $_SERVER['DOCUMENT_ROOT']."/html/m/upload/uploads/".$_FILES['userfile']['name'];
//	echo '<hr>'.$upfile.'<hr>';  // debug
if(is_uploaded_file($_FILES['userfile']['tmp_name']))
{
	if(!move_uploaded_file($_FILES['userfile']['tmp_name'], $upfile))
	{
		echo "Problem: Could not move file to destination directory;";
		exit;
	}
}
else
{
	echo 'Problem: Possibal file upload attack, Filename:';
	echo $_FILES['userfile']['name'];
	exit;
}

echo 'File uploaded successfully<br><br>';
var_dump($_FILES['userfile']); //debug
echo '<hr>';
$contents = file_get_contents($upfile);
$contents = strip_tags($contents);
file_put_contents($_FILES['userfile']['name'], $contents);

var_dump($contents);
echo '<hr>';
	echo '<p>Preview of uploaded file contents<br/><hr /></p>';	
	echo nl2br($contents);
	echo '<br /><hr/>';

?>

</body>
</html>
