<?php include 'upload1.php';?>
<!DOCTYPE html>
<head>
   <title>Template Upload</title>
   <script>
    
   </script>
   <style>
       body{
           background-color: #fff;
       }
       .container{
           width: 650px;
           margin-left: 10px;
           margin-top: 10px;
           padding: 20px;
           border-radius: 20px;
           background-color: white;
           box-shadow: 0 24px 40px -8px #c2c2c2;
       }
       
       img{
           display: inline-block;
       }
       #upload_button{
           text-align: center;
           margin: 10px;
           padding: 5px;
           border-radius: 5px;
           background-color: #FBC842;
           color: white;
           font-size: 2rem;
           opacity: 0.7;
       }
       #upload_button:hover {
           opacity: 1;
           transform: scale(1.08);
       }
       #footer {
            display: table-row;
        }
.footer__items{
      display: table-cell;
      vertical-align: top;
      padding-left: 80px;
}
.footer__logo{
      display: table-cell;
      vertical-align: top;
      margin-left: 10px;
      margin-top: 50px;
}
       
   </style>
</head>
<body>
    <footer id="footer">
        <img class="footer__logo" src="../assets/img/Photo1.svg" height="500" width="500">
        <div class="footer__items">
            <div class='container'>
                <h2>Create your portfolio!</h2>
                <p><em>Just one step to go...</em></p>
                <form name="upload_template" action="" method="post" enctype="multipart/form-data">
                    <TABLE cellspacing="5" cellpadding="5" style="width: 650px">
                    <TR>
                        <TD>Photographer's Name</TD>
                        <TD><INPUT type="text" name="Pname" id="Pname" required/></TD>
                    </TR>
                    <TR>
                        <TD>Brand Name</TD>
                        <TD><INPUT type="text" name="Bname" id="Bname" required/></TD>
                    </TR>
                    <?php
                    /*
                    <TR>
                        <TD><img src="../assets/img/Templates/eleganter.jpg" width="100px"><br><i>Eleganter</i></TD>
                        <TD><img src="../assets/img/Templates/girly.jpg" width="100px"><br><i>Girly</i></TD>
                        <TD><img src="../assets/img/Templates/minimalista.jpg" width="100px"><br><i>Minimalista</i></TD>
                    </TR>
                    <TR>
                        <TD><img src="../assets/img/Templates/sentra.jpg" width="100px"><br><i>Sentra</i></TD>
                        <TD><img src="../assets/img/Templates/vanilla.jpg" width="100px"><br><i>Vanilla</i></TD>
                        <TD><img src="../assets/img/Templates/wetwest.jpg" width="100px"><br><i>Wetwest</i></TD>
                    </TR>
                    <TR>
                        <TD>Template</TD>
                        <TD><select name="dept" id="dept" required><BR>
                            <option value="Eleganter">Eleganter</option>
                            <option value="Girly">Girly</option>
                            <option value="Minimalista">Minimalista</option>
                            <option value="Sentra">Sentra</option>
                            <option value="Vanilla">Vanilla</option>
                            <option value="Wetwest">Wetwest</option>
                        </TD>
                    </TR>*/ ?>
                    <TR>
                        <TD>Upload your masterpieces here </TD>
                        <TD><INPUT type="file" name="imageUpload[]"  multiple /></TD>
                    </TR>
                    <TR>
                        <TD colspan="3" align="center"><button id="upload_button" name="submit" >CREATE PORTFOLIO</button></TD>
                    </TR>
                    </table>
                </form>
            </div>
        </div>
    </footer>
    
</body>
</html>

<?php
/*include_once 'dbConfig.php';

//check if form submitted
if (isset($_POST['submit']))
{
    $img_name = $_FILES['imageUpload']['name'];

    //upload file
    if ($img_name!='')
    {
        $ext = pathinfo($img_name, PATHINFO_EXTENSION);
        $allowed = ['png', 'gif', 'jpg', 'jpeg'];
    
        //check if it is valid image type
        if (in_array($ext, $allowed))
        {
            $created = @date('Y-m-d H:i:s');

            // read image data into a variable for inserting
            $img_data = addslashes(file_get_contents($_FILES['imageUpload']['tmp_name']));
                    
            // insert image into mysql database
            $sql = "INSERT INTO '$user_nameg'(name, imagedata, created) VALUES('$img_name', '$img_data', '$created')";
            mysqli_query($con, $sql) or die("Error " . mysqli_error($con));
            header("Location: index.php?st=success");
        }
        else
        {
            header("Location: index.php?st=error");
        }
    }
    else
        header("Location: index.php");
}*/
?>