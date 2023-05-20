<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload and downloading of files</title>
</head>
<body>
    <form action="formProcessor.php" method="POST" enctype="multipart/form-data"> 
        <label for="">Select an image</label>
        <input type="file" name="image" id="">
        <br>
        <input type="submit" name="submit" value="Send Image">
    </form>
</body>
</html>