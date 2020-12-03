<?php
include("dbConfig.php");
session_start();
$uname=$_SESSION['uname'];
if(isset($_POST['submit'])){
    $extensions_arr = array("jpg","jpeg","png","gif");
  $name = $_FILES['imageUpload']['name'];
  $target_dir = "../upload/";

  $fileNames = array_filter($_FILES['imageUpload']['name']);
  // Select file type
  
  
  
  if(!empty($fileNames)){ 
    foreach($_FILES['imageUpload']['name'] as $key=>$val){ 
        // File upload path 
        $fileName = basename($_FILES['imageUpload']['name'][$key]); 
        $targetFilePath = $target_dir . $fileName; 
  
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $extensions_arr)){

                 // Convert to base64 
                    $image_base64 = base64_encode(file_get_contents($_FILES['imageUpload']['tmp_name'][$key]) );
                     $image = 'data:image/'.$fileType.';base64,'.$image_base64;
                // Insert record
                     $query = "insert into image (uname,name,image) values('$uname','".$name."','".$image."')";
                     mysqli_query($db,$query);

                /*if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .= "('".$fileName."', NOW()),"; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } */
            
        }

  // Check extension
  /*if( in_array($imageFileType,$extensions_arr) ){
 
    // Convert to base64 
    $image_base64 = base64_encode(file_get_contents($_FILES['imageUpload']['tmp_name']) );
    $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
    // Insert record
    $query = "insert into image (uname,name,image) values('.$uname','".$name."','".$image."')";
    mysqli_query($db,$query);
  */
    // Upload file
   // move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
  }
 
}
}
?>