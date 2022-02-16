<html>

<p> 
<?php  

$dir_id=opendir("files");  
     
     while ($file = readdir($dir_id)) {  
     	echo "File Name : ".$file. " File Type: ". filetype("files/".$file). "  , IS DIR ? ".is_dir("files/".$file) ."<br>";
     }  
     closedir($dir_id);  
?>
</html>