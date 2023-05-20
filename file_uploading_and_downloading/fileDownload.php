<!-- 2 Ways to download files -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download file</title>
</head>
<body>
    <p>Download file</p>
    <a href="./uploads/new.png" download>File</a>
</body>
</html>

<?php
    $targetFolder = './uploads/';
    if(file_exists($targetFolder.'new.png')){

        // verify the user is logged
        // accept payment
        // === 

         // headers
    header('Pragma: public'); 	// required
    header('Expires: 0');		// no cache
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Cache-Control: private',false);
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="new.png');
    header('Content-Transfer-Encoding: binary');
    header('Content-Length: '.filesize('./uploads/new.png'));	// provide file size
    header('Connection: close');
    readfile('./uploads/new.png');

    } else{
        exit('The file does not exit');
    }
   
?>