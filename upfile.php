<?php
if(empty($_FILES))
{
	exit("no files");
}

if($_FILES['pic']['error'] != 0)
{
	exit("upload failure");
}
echo $_FILES['pic']['name'];
move_uploaded_file($_FILES['pic']['tmp_name'],'upload/'.$_FILES['pic']['name']);

echo 'ok';
?>