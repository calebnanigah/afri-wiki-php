<?php
// print_r($_FILES);

// print_r(count($_FILES['image']['name']));

// die();

    // 03. number of files check
    // $NumberOfFilesUploaded = count($_FILES['image']['name']);
    // if($NumberOfFilesUploaded > 1){
    //     //$fileUploadErr['fileUploadNumberErr'] = $fileUploadNumberErr;
    //     die('Only one file can be uploaded.');
    // }

    // File details
    $fileHTMLName = 'image';
    $fileName = $_FILES[$fileHTMLName]['name'];
    $fileType = $_FILES[$fileHTMLName]['type'];
    $fileTpmName = $_FILES[$fileHTMLName]['tmp_name'];
    $fileSize = $_FILES[$fileHTMLName]['size']/1000000; // returned in bytes. Converted to MB

    // Validations
    // 01. Check file size || Allowed file size is 5 MB
    $fileSizeAllowed = 5; // meaning 5 MB
    $fileSizeErr = "The allowed file size is 5 MB. Your filesize is $fileSize MB.";
    // 02. Check file types that can be uploaded
    $fileTypeErr = 'The uploaded file type is not supported.';
    // 03. Ensure only file is uploaded at a time
    $fileUploadNumberErr = 'Only one file can be uploaded.';

    $fileUploadErr = [];

    // check to ensure file upload is from a post method
    if( $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){
        
        // 01. Filesize check
        if($fileSize > $fileSizeAllowed){
            $fileUploadErr['fileSizeErr'] =  $fileSizeErr;
        }

        // 02. file type check
        $allowedFileTypes = ['image/png', 'image/jpeg', 'image/jpg'];
        if(!in_array($fileType, $allowedFileTypes)){
            $fileUploadErr['fileTypeErr'] = $fileTypeErr;
        }

        if(count($fileUploadErr) == 0){
            move_uploaded_file($fileTpmName, './uploads/'.time().'_'.$fileName);
            echo 'the file was uploaded';
        } else{
            print_r( $fileUploadErr);
        }


    } else{
        echo 'Bad form input';
    }


    // echo 'Form data received';

    // print_r($_FILES);
    
    // // File details
    // $fileHTMLName = 'image';
    // $fileName = $_FILES[$fileHTMLName]['name'];
    // $fileType = $_FILES[$fileHTMLName]['type'];
    // $fileTpmName = $_FILES[$fileHTMLName]['tmp_name'];

    // print_r($_FILES['image']['name']); // prints name of the file

    // //  01. Receive the file from the $_FILE
    // $fileName;

    // //  02. Move the file from the temp location to the desired location
    // move_uploaded_file($fileTpmName, "./uploads/newFolder/new.png");