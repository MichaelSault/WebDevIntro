<!DOCTYPE html>
<html lang = 'en'>
<head>
	<meta charset = "utf-8" />
	<title>File Lister</title>
</head>

<body>
	<?PHP
  $dirlist = getFileList("images");
  echo "<pre>",print_r($dirlist),"</pre>";

	/* sample output

  	Array
  	(
   	 [0] => Array
       	 (
        	    [name] => images/background0.jpg
    	        [type] => image/jpeg
	            [size] => 86920
            	[lastmod] => 1077461701
        	)

    	[1] => ...
  	)

	*/
	?>
</body>
</html>