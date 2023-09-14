<?php
if(isset($_POST['submit'])){
    $filename = $_FILES['file']['name'];
    $filetmp = $_FILES['file']['tmp_name'];

    // Directory to upload photos
    $dir = "uploads/";
    
    // Move the uploaded photo to the specified directory
    move_uploaded_file($filetmp, $dir.$filename);
    echo "Photo Uploaded Successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>IsleRev Motor Shop</title>
</head>
<body>

<h2>Welcome to IsleRev Motor Shop</h2>
<p>Show off your motorcycle! Upload a picture and share with the community.</p>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select your motorcycle's photo to upload:
    <input type="file" name="file" id="file">
    <input type="submit" value="Upload Photo" name="submit">
</form>

</body>
</html>


