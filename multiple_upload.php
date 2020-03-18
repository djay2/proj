<?php 
if(isset($_POST['submit'])){
 
 // Count total files
 $countfiles = count($_FILES['file']['name']);

 // Looping all files
 for($i=0;$i<$countfiles;$i++){
  $filename = $_FILES['file']['name'][$i];
 
  // Upload file
  move_uploaded_file($_FILES['file']['tmp_name'][$i],'upload/'.$filename);
 
 }
} 
?>
<form method='post' action='' enctype='multipart/form-data'>
 <input type="file" name="file[]" id="file" multiple>

 <input type='submit' name='submit' value='Upload'>
</form>
<?php
$path = "..."; ///the folder path
		$theFilePath = "";		
		
		$theFileName = glob ($path . "*.xls");
		
		
		//Read more than one file here
		for($j = 0; $j< count($theFileName); $j++) {

		$theFilePath = $theFileName[$j];
		
		$excel = new Spreadsheet_Excel_Reader();
		$excel->setOutputEncoding('CP1251');
		$excel->setUTFEncoder('mb_convert_encoding');
		error_reporting(E_ALL ^ E_NOTICE);			
			
			//echo $theFileName[$j];; 
			
			echo "<br />";
			echo $theFilePath; 
			echo "<br />";
			 

			
			$excel->read($theFilePath);

                          .
                          .
                          .// Do what u want display here

                       }
?>