<?php  


// Directory
$old_directory = "files";

$new_directory = "renamed";

// Returns array of files
$files = scandir($old_directory);   

// Count number of files and store them to variable..
$num_files = count($files)-2;



for($i = 1; $i<= $num_files; $i++ ){
    
    $old_file_name = $files[$i+1];  

	$template_document = ltrim(file_get_contents('files/'.$old_file_name)); 
    $template_document  = preg_replace("/[^a-zA-Z '']/", "", $template_document);
    
    $template_document = substr($template_document, 0, 60);

    $file_cotent = explode(" ", $template_document);
    $new_name = implode("_",$file_cotent).'.doc';

   
    rename ("files/".$old_file_name, $new_directory."/".$new_name);
}


echo "Successfully Renamed "."</br>"."Please Checke the directory ' ".$new_directory." '";

