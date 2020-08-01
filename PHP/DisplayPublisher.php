<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     <script src="https://kit.fontawesome.com/f94a32bd93.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
    <!-- <link href="../CSS/nav.css" rel="stylesheet" type="text/css">-->
    <!-- <link href="../CSS/display.css" rel="stylesheet" type="text/css">  -->
    <!-- <link rel="stylesheet" href="./Books2/CSS/main.css"> -->
    <title>My Books DataBase - display Publisher</title>
</head>

<body>
     <!-- NavBar -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-secondary ">
  <a class="navbar-brand" href="#">My Books Database</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.html">Home </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Author
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="DisplayAuthor.php">DisplayAuthor</a>
          <a class="dropdown-item" href="AddAuthor.php">Add New Author</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Series
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="DisplaySeries.php">DisplaySeries<span class="sr-only">(current)</span></a>
          <a class="dropdown-item" href="AddSeries.php">Add New Series</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Publisher
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="DisplayPublisher.php">DisplayPublisher</a>
          <a class="dropdown-item" href="AddPublisher.php">Add New Publisher</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Books
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="DisplayBooks.php">DisplayBooks</a>
          <a class="dropdown-item" href="AddBooks.php">Add New Books</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Displaytest.php">Testing Page </a>
      </li>
    </ul>
    <!-- search bar -->
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
 <!-- Button trigger modal -->

 <div class="modal fade" id="exampleModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Comfirming Entry for Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron text-center ">
        <h1><span class="text-primary">Display</span> Publisher </h1>
    </div>
<div class="container Publisher2">
<div id ="Publisher" >
                
                
                 <?php
             require_once('connect.php');
                
       $query= "select * from Publisher";
        $result = mysqli_query($conn, $query);
    
            echo "<table class='table table-striped table-dark table-hover table-responsive-sm'>
            <thead class='table-primary text-uppercase text-center'><tr>
            <td></td>
        
            <td>Publisher Name</td>
        
            <td>Language</td>
    
            </thead>";
        while($row =$result->fetch_assoc()){
            
            echo "<tr>
            <td><button type='button' class='btn select' data-id='" . $row['PublisherID'] . "'>Select <i class='fas fa-angle-right fa-1x'> </i></button></td>
           
            <td>" .$row['PName']."</td>
           
            <td>".$row['Planguage']."</td>
           
            </tr>";
            }
           echo "</tbody></table>";
            
    
                ?>
 
</div>

   
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {

            $(document).on('click','.select',function(){
         //   $('.select').click(function() {

                var id = $(this).data('id');

                // AJAX request
                $.ajax({
                    type: "post",
                    url: 'editfiles/ajaxfilePub.php',
                    // url: 'deletefiles/EditSeries.php',
                    data: {
                        userid: id
                    },

                    success: function(response) {
                        // Add response in Modal body
                        $('.modal-body').html(response);

                        // Display Modal
                        $('#exampleModal').modal('show');
                    }

                });
            });
            
       
        $(document).on('click','.editpage',function(){
  
                var id = $(this).data('id');
               var name2= pubform.elements["namee"].value;
              var  lang= pubform.elements["lang"].value;

                $.ajax({
                    type: "post",
                    url: 'editfiles/editPub.php',
                    // url: 'deletefiles/EditSeries.php',
                    data: {
                        userid: id,
                        name2: name2,
                        lang: lang,
                    },

                    success: function(response) {
                        
                        $('#exampleModal').modal('hide');
                        
                        $('.Publisher2').html(response);
                       
                    }
                       

                });


            
        });
        $(document).on('click', '.delete', function(){
            var id = $(this).data('id');


                $.ajax({
                    type: "post",
                    url: 'editfiles/deletePub.php',
                    // url: 'deletefiles/EditSeries.php',
                    data: {
                        userid: id
                        
                    },

                    success: function(response) {
                        
                        $('#exampleModal').modal('hide');
                        
                        $('.Publisher2').html(response);
                       
                    }
                       

                });
        });
        
        });
   
    </script>
</body>

</html>