<?php
	# Our JSON_Util file. This file will contain our methods used to read and modify JSON files.
	
	# Reading the content of a JSON file into a php array
	function read_json() {
		// Read the JSON file 
		$class = file_get_contents('class.json');
		
		$classarr=[];
		// Decode the JSON file
		$classarr = json_decode($class,true);
		
		return $classarr;
	}
	
	# Reads the content of a JSON file into a php array and returning 1 element
	function read_jsonelement($i) {
			// Read the JSON file 
		$class = file_get_contents('class.json');
  
		$classarr=[];
		// Decode the JSON file
		$classarr = json_decode($class,true);
		
		return $classarr[$i];
	}
	
	# Saves a php array into a JSON file
	function save_phptojson($phparray){
		# Opens the file for writing
		$change=fopen($file,'w+');
		
		# This will take the changed array and save the php array to json
		$jsonarray = json_encode($phparray);
		fwrite($change,$jsonarray);
		fclose($change);
	}


?>