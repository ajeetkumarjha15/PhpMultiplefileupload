<?php

    if(isset($_POST['submit'])){
        $uploads_dir = './Uploads/';

        //Count total number of files to upload
        $countfiles = count($_FILES['files']['name']);
       
        // Looping through all the files
        for($i=0;$i<$countfiles;$i++){
         $filename = $_FILES['files']['name'][$i];
        
         // Upload file
         move_uploaded_file($_FILES['files']['tmp_name'][$i],$uploads_dir.$filename);

                 
        }
        echo "File uploaded sucessfully";
       } 

    
    

?>