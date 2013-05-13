<?php

/**
 *
 */
class Module {
	public $id = "";
	public $title = "";
	public $youtube_video_id = "";
	public $audio_url = "";
	public $text = "";

}

$module = new Module();

$module -> id = 1;
$module -> title = "test title";
$module -> youtube_video_id = "5XMVLbUvr4w";
$module -> audio_url = "/audio/5XMVLbUvr4w.mp3";
$module -> text = "our test text here";

$module2 = new Module();

$module2 -> id = 2;
$module2 -> title = "test title 2";
$module2 -> youtube_video_id = "5XMVLbUvr4w";
$module2 -> audio_url = "/audio/5XMVLbUvr4w.mp3";
$module2 -> text = "our test text here";

$modules = array($module, $module2);

header('Content-Type: application/json');
echo json_encode($modules);

// Create connection
$con = mysqli_connect("localhost", "serstkov_serst", "gReen10", "serstkov_green");

// Check connection
if (mysqli_connect_errno($con)) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Check if table exists
$sql = "SELECT * FROM modules";

$result = @mysql_query($sql);

if (!$result) {
	//Table does not exits so lets create a new one
	
	// Create table
	$sql = "CREATE TABLE Modules(ID INT NOT NULL AUTO_INCREMENT,PRIMARY KEY(ID),Title CHAR(90),YoutubeId CHAR(30),AudioURL CHAR(30),Text BIGTEXT)";

	// Execute query
	if (mysqli_query($con, $sql)) {
		echo "Table persons created successfully";
	} else {
		echo "Error creating table: " . mysqli_error($con);
	}

}
?>
