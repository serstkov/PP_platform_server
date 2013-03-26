<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php
 
 /**
  * 
  */
 class Module  {
 	 public $id = "";
	 public $title = "";
     public $youtube_video_url = "";
	 public $audio_url = "";
	 public $text = "";
	 
 }
  
$module = new Module();

$module->id = 1;
$module->title = "test title";

 //$data = array(4 => "four", 8 => "eight");
 
echo json_encode($module);
 
  ?> 
 </body>
</html>