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
```

###file function###

- fileatime($file)
- filemtime($file)
-  date("jS F Y,H:i" )
- fileowner()
- filegroup()
- posix_getpwuid()
- posix_getgrdid()

- fileperms()
- decoct()
- filetype() fifo char dir block link file unknown
- filesize()
- is_dir() is_file() is_readable() is_writable() is_executable() is_link()
- stat()

* chgrp()
* chmod()
* chown($file, user)
 
- bool touch(string file,**)
- unlink($filename)
- copy($src, $des)
- rename($old, $new)  // 相对脚本的地址， not path

####exec function####

- string exec (string commond, array &result, int &return_value)  the return string is the last line

- passthru(string commond, int return_value)  return all the commond output

- system(string commond, int return_value)
- escapeshellcmd($commond)

	system(escapeshellcmd($commond))
