
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
 
//echo json_encode($module);


//lets analyse POST request received
//$ourPostReuqest = $_POST['testValue'];
var_dump($_POST);
//echo $ourPostReuqest;
echo json_decode($ourPostReuqest);
//echo "<br/><br/> our obj: " + $obj;


 
  ?> 
