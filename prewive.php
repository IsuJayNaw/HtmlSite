<?php

include "config.php";
session_start();

    $title = $_SESSION['title'];
    $category = $_SESSION['category'];
    $topic = $_SESSION['topic'];
    $contact = $_SESSION['contact'];
    $description = $_SESSION['description'];
    $price = $_SESSION['price'];
  

 

if(isset($_POST['submit'])){
  
  

  //$query= mysqli_query($con,  "INSERT INTO addetails VALUES ('', '$title', '$category','$topic','$contact','$description','$price')");
}


$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/Services.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Document</title>

</head>
<body>
    <section class="postform">
        <div class="hero animate-top">
            <h2>Create Post</h2>
        </div>
    </section>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 mx-auto">
                <form action="adform.php" method="POST">
                  <div class="form-row">
                    <div class="col-md-12 mb-3 animate-right">
                        <label for="description">Title</label>
                        <input class="form-control" name="title" type="text" id="description" placeholder="Title" value="<?php echo $title; ?>"></input> 
                    </div>
                  </div>

                    <div class="form-row">
                      <div class="col-md-6 mb-3 animate-right">
                        <label for="Category">Category</label>
                        <input class="form-control" name="title" type="text" id="description" placeholder="Title" value="<?php echo $category; ?>"></input> 
                           
                      </div>
                      <div class="col-md-6 mb-3 animate-right">
                        <label for="topic">Topic</label>
                        <input type="text" class="form-control" name="topic" id="validationDefault03" placeholder="Enter your Topic" required>
                      </div>
                    </div>
                    <div class="form-row">
                    <div class="col-md-12 mb-3 animate-right">
                      <label for="topic">Contact</label>
                      <input type="text" class="form-control" name="contact" id="validationDefault03" placeholder="Enter your Contact" required>
                    </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3 animate-right">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" placeholder="Enter your Details" required></textarea> 
                        </div>
                    </div>

                    <div class="form-row">
                      <div class="col-md-12 mb-3 animate-right">
                        <label for="validationDefault03">Price</label>
                        <input type="text" class="form-control" name="price" id="validationDefault03" placeholder="$ 100" required>
                      </div>
                      <div class="col-md-12 mb-4">
                        <div class="input-group mb-3 animate-right">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input btn-success" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                              <label class="custom-file-label " for="inputGroupFile01">Upload Image</label>
                            </div>
                        </div>
                      </div>
                    </div>

                    <button class="btn btn-success" name="submit">submit</button>
                    
                </form>
            </div>
        </div>
    </div>


  
    <script src="./js/Services.js"></script>
    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    
</body>
</html>