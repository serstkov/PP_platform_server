
 <?php
 
 /**
  * 
  */
 class Module  {
 	 public $id = "";
	 public $title = "";
     public $youtube_video_id = "";
	 public $audio_url = "";
	 public $text = "";
	 
 }
  
$module = new Module();

$module->id = 1;
$module->title = "test title";
$module->youtube_video_id = "5XMVLbUvr4w";
$module->audio_url = "/audio/5XMVLbUvr4w.mp3";
$module->text = "our test text here";

 // //$data = array(4 => "four", 8 => "eight");
//  
// //echo json_encode($module);
// 
// 
// //lets analyse POST request received
// //$ourPostReuqest = $_POST['testValue'];
// var_dump($_POST);
// //echo $ourPostReuqest;
// echo json_decode($ourPostReuqest);
// //echo "<br/><br/> our obj: " + $obj;



header('Content-Type: application/json');
echo json_encode($module);
 
  ?> 
