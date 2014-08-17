###php upload###

php upload dir and variables

####$_FILES####

* $_FILES['userfile']['tmp_name'] tmp file name
* $_FILES['username']['name']
* $_FILES['userfile']['size']
* $_FILES['userfile']['type']  'text/plain' 'image/jpg' file MIME type
* $_FILES['userfile']['error']
	- UPLOAD_ERROR_OK 0 noerror
	- UPLOAD_ERR_INI_SIZE 1 size 
	- UPLOAD_ERR_FORM_SIZE 2 form size  // `<input type="hidden" name="MAX_FILE_SIZE" value="***">`
	- UPLOAD_ERR_PARTIAL 3 partial uploaded
	- UPLOAD_ERR_NO_FILE 4 none uploaded
	- UPLOAD_NO_TMP_DIR 6  no `upload_tmp_dir` in `php.ini`
	- UPLOAD_ERR_CANT_WRITE 7 cannot write

####Dir information####

- dirname($dir) get the dirname
- basename($dir)
- disk_free_space($dir) FLOAT byte

####dir function####

- mkdir($dir, 0777)
-  $oldumask = umask(0);
  	mkdir($dir, 0777);
	umask($oldmask);
- rmdir($dir)

```
	while(false !== ($file = readdir($dir)))
	{
		echo "<a href=\"filedtails.php?file=".$file."\"></a>"";

	}

