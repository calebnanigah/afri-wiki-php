<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body class="bg-success">

    <div class="container bg-white mt-5 p-5">
        <h2 class="py-2">Submit your comment</h2>
        <form method="POST" action="form_processor.php"  class="row g-3">

            <div class="col-md-6">
                <label for="validationServer01" class="form-label">First name</label>
                <input type="text" 
                class=  
                    <?php 
                        if(!empty($_SESSION['firstName'])){
                            echo '\'form-control is-valid\'';
                          }else{
                            echo '\'form-control is-invalid\'';
                          }
                    ?>
                name="first-name"  id="validationServer01" 
                value=
                    <?php
                      if(!empty($_SESSION['firstName'])){
                        echo $_SESSION['firstName'];
                      } 
                    ?>
                >
                <?php
                if(!empty($_SESSION['firstNameError'])){
                    $error = $_SESSION["firstNameError"];
                    echo "<div class='invalid-feedback'> $error </div>";
                } 
            ?>
            </div>

            <div class="col-md-6">
                <label for="validationServer02" class="form-label">Last name</label>
                <input type="text" class="form-control" name='last-name' id="validationServer02" value="">
            </div>

            <div class="col-md-6">
                <label for="validationServer02" class="form-label">Email</label>
                <input type="email" class="form-control" name='email' id="validationServer02" value="">
            </div>

            <div class="col-md-6">
                <label for="validationServer02" class="form-label">Age</label>
                <input type="number" class="form-control" name="age" id="validationServer02" value="">
            </div>

            <div class="col-md-12">
                <label for="validationServer02" class="form-label">Comment</label>
                <textarea id="comment" class="form-control" name="comment" cols="30" rows="6"></textarea>
            </div>
            
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit Comment</button>
            </div>
        </form>
    </div>
    
</body>
</html>