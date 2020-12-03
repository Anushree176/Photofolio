<?php
session_start();

$link="portfolio/".$_SESSION['uname'].".php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit your images</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron">
<div class="text-right">
<a href="logout.php">
  <button id="dark" type="button" class="btn btn-outline-dark glow-button " name="logout">
                 Logout 
  </button></a>
  <a href="<?php echo($link); ?>" target="_blank"><button id="dark" type="button" class="btn btn-outline-dark glow-button " name="link">
                 Go-To Portfolio 
  </button></a>

</div>
<form name="upload_template" action="" method="post" enctype="multipart/form-data">
<div class="text-center">
  <h2>Edit your Portfolio</h2>
</div>
<div class="text-right">
<INPUT type="file" name="imageUpload[]"  multiple style=""><br>
<button id="upload_button" name="sub" class="btn btn-outline-dark glow-button" >Upload</button>
</div>
</form>
<!--<div class="container">
  <div class="row">
  	<div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="alert alert-success alert-dismissible" id="success" style="display: none;">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          File uploaded successfully
        </div>
      <form id="submitForm">
        <div class="form-group">
          <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" name="multipleFile[]" id="multipleFile" required="" multiple>
            <label class="custom-file-label" for="multipleFile">Choose Multiple Images to Upload</label>
          </div>
        </div>
        <div class="form-group">
          <button type="submit" name="upload" class="btn btn-primary" style="float:right;">Upload</button><br>
        </div>  
      </form><br>
    </div>
  </div>
</div>

    
  <div class="container" id="gallery">

  </div>

   
  <div class='modal' id='exampleModal'>
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
          <h4 class='modal-title'>Update Image</h4>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
        </div>
        <div id="editForm">

        </div>
      </div>    
    </div>
  </div>
  

  <script type="text/javascript">
$(document).ready(function(){
    $("#submitForm").on("submit", function(e){
    e.preventDefault();
    $.ajax({
      url  :"upload.php",
      type :"POST",
      cache:false,
      contentType : false, // you can also use multipart/form-data replace of false
      processData : false,
      data: new FormData(this),
      success:function(response){
        $("#success").show();
        $("#multipleFile").val("");
        fetchData();
      }
    });
});

  // Fetch Data from Database
  function fetchData(){
    $.ajax({
      url  : "fetch_data.php",
      type : "POST",
      cache: false,
      success:function(data){
        $("#gallery").html(data);
      }
    });
  }
  fetchData();

  // Edit Data from Database
  $(document).on("click",".btn-success", function(){
    var editId = $(this).data('id');
    $.ajax({
      url : "edit.php",
      type : "POST",
      cache: false,
      data : {editId:editId},
      success:function(data){
        $("#editForm").html(data);
      }
    });
  });

  // Delete Data from database

  $(document).on('click','.delete-btn', function(){
    var deleteId = $(this).data('id');
    if (confirm("Are you sure want to delete this image")) {
      $.ajax({
        url  : "delete.php",
        type : "POST",
        cache:false,
        data:{deleteId:deleteId},
        success:function(data){
          fetchData();
          alert("Image is deleted successfully");
        }
      });
    }
  });

  // Update Data from database
  $(document).on("submit", "#editForm", function(e){
  e.preventDefault();
  var formData = new FormData(this);
  $.ajax({
      url  : "update.php",
      type : "POST",
      cache: false,
      contentType : false, // you can also use multipart/form-data replace of false
      processData : false,
      data: formData,
      success:function(response){
        $("#exampleModal").modal('hide');
        alert("Image updated successfully");
        fetchData();
      }
    });
  });
});

</script>-->
</body>
</html>
<?php
  require_once('dbConfig.php');
	
	$query = "SELECT * FROM image where uname='".$_SESSION['uname']."' ORDER BY id DESC";
	
	$result = mysqli_query($db, $query);
	
	$output = "";

	if (mysqli_num_rows($result) > 0) {
		$output .= "<table class='table table-striped'>";
		$output .= "<thead>
			        <tr>
			          <th>S.no</th>
			          <th>Image Name</th>
			          <th>Delete</th>
			        </tr>
				  </thead>";
				  $count=1;
		while ($row = mysqli_fetch_assoc($result)) {
		$images = $row['image'];
		
		$output .=  "<tr>
			          <td>".$count."</td>
			          <td><img src='".$images."' class='img-thumbnail' width='150px' height='150px' /></td>
			          <td><a href='delete.php?id=".$row['id']."'>Delete</a></button></td>
					</tr>";
					$count++;
		}
		$output .="</tbody>
    			</table>";
    	echo $output;
	}else{
		echo "<h3 style='text-align:center'>No Image found</h3>";
	}

  $uname=$_SESSION['uname'];
if(isset($_POST['sub'])){
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
                     echo"<script>window.open('template_edit.php','_self')</script>";
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
<?php 
/*session_start();
if(isset($_POST['logout']))
{
$_SESSION['uname']="";
session_destroy();
echo"<script>window.open('../index1.php','_self')</script>";
}*/
?>