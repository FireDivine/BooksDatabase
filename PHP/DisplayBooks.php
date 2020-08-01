<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
    <!-- <link href="../CSS/nav.css" rel="stylesheet" type="text/css">-->
    <!-- <link href="../CSS/display.css" rel="stylesheet" type="text/css">  -->
    <!-- <link rel="stylesheet" href="./Books2/CSS/main.css"> -->
    <title>My Books DataBase - display series</title>
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
        <h1><span class="text-primary">Display</span> Books </h1>
    </div>
<div class="container book2">
<div id ="books" >
                
                
                <?php
                require_once('connect.php');
                
       $query= "select b.BTitle, b.BSubtitle, b.BAuthor, b.ISBN, f.FormatName, g.GenreName,b.BDESCRIPTION, b.BTOTAL_PAGES, s.SeriesName ,b.Number_in_Series, b.PublishingYear
from books b, series s,  Book_Format f,Book_Genre g 
where b.bSeries = s.SeriesID and f.FormatID = b.BFORMAT and g.GenreID = b.Bgenre order by b.BAuthor asc";
        $result = mysqli_query($conn, $query);
    
            echo "<table class='table table-striped table-dark  table-hover table-responsive'>
            <thead  class='table-primary text-uppercase text-center'>
            <tr>
            <td></td>
            <td>BTitle</td>
            <!-- <td>Books Subtitle</td>-->
            <td>Series Author</td>
            <td>ISBN</td>
            <td>Books Format</td>
            <td>Books Genre</td>
            <td>Books Descrption</td>
            <td>Total Pages / Endtime</td>
            <td>Series Name</td>
            <td>Number in series</td>
            <td>Publishing Year</td>
            </tr>
           </thead>
           <tbody>";
        while($row =$result->fetch_assoc()){
            
            echo "<tr>
            <td>
            <button type='button' class='btn select' data-id='" . $row['ISBN'] . "'>Select <i class='fas fa-angle-right fa-1x'> </i></button>
            </td>
            <td>".$row['BTitle']."</td>
            
            <td>".$row['BAuthor']."</td>
            <td>".$row['ISBN']."</td>
            <td>".$row['FormatName']."</td>
            <td>".$row['GenreName']."</td>
            <td>".$row['BDESCRIPTION']."</td>
            <td>".$row['BTOTAL_PAGES']."</td>
            <td>".$row['SeriesName']."</td>
            <td>".$row['Number_in_Series']."</td>
            <td>".$row['PublishingYear']."</td>
            </tr>";
            }
            echo "</tbody></table>";
                
                ?>
            </div>
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
                alert(id);
                // AJAX request
                $.ajax({
                    type: "post",
                    url: 'editfiles/ajaxfileBooks.php',
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
               var name2= booksform.elements["title"].value;
              var  author= booksform.elements["author"].value;
              var format= booksform.elements["Format"].value;
              var  genre= booksform.elements["Genre"].value;
              var description= booksform.elements["Description"].value;
              var  pages= booksform.elements["total"].value;
              var series= booksform.elements["SName"].value;
              var  numberseries= booksform.elements["STotal"].value;
              var pubyear= booksform.elements["PYear"].value;
             

                $.ajax({
                    type: "post",
                    url: 'editfiles/editBooks.php',
                    // url: 'deletefiles/EditSeries.php',
                    data: {
                        userid: id,
                        name2: name2,
                        author: author,
                        format: format,
                        genre: genre,
                        desp: description,
                        pages: pages,
                        series: series,
                        number: numberseries,
                        year: pubyear
                    },

                    success: function(response) {
                        
                        $('#exampleModal').modal('hide');
                        
                        $('.book2').html(response);
                       
                    }
                       

                });


            
        });
        $(document).on('click', '.delete', function(){
            var id = $(this).data('id');


                $.ajax({
                    type: "post",
                    url: 'editfiles/deleteBooks.php',
                    // url: 'deletefiles/EditSeries.php',
                    data: {
                        userid: id
                        
                    },

                    success: function(response) {
                        
                        $('#exampleModal').modal('hide');
                        
                        $('.book2').html(response);
                       
                    }
                       

                });
        });
        
        });
   
    </script>

</body>

</html> 