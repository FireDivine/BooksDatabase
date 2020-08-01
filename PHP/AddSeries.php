<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
    <link href="../CSS/add.css" rel="stylesheet" type="text/css">

    <title>Add Series</title>
  </head>
  <body>
      <!-- NavBar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
          <a class="dropdown-item" href="DisplaySeries.php">DisplaySeries</a>
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
        <a class="nav-link" href="Displaytest.php">Testing Page <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <!-- search bar -->
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-- Jumbotron -->
  <div class="jumbotron">
    <h1 class="title text-center">Add New <span class="text-primary ">Series</span> </h1>
  </div>

  <div class="container">
    <!-- <div class="box bg-secondary"> -->
     
        <form method="POST" >
            <div class="form-group">
            <label>Series Name</label>
                <input type="text" name="name" class="form-control" required="">
                
            </div>
            <div class="form-group"> 
            <label>Series Total</label>
                <input type="number" name="total" class="form-control" required="">
              
            </div>
            <div class="form-group"> 
                <input type="submit" class="btn btn-primary form-control" value="Add Series" name="submit">
            </div>
            </form>
    </div>
    <?php
require_once('connect.php');

if(isset($_POST['submit'])){
$SName = $_POST['name'];
$Total = $_POST['total'];
$lolly = "Select max(`SeriesID`) as max from `series`";
$result = $conn->query($lolly);
while ($row = $result->fetch_assoc()) {
 
    echo $row['max']++."<br>";
   
    $sql = "INSERT INTO `series` (`SeriesID`, `SeriesName`, `Stotal`) VALUES (".$row['max' ]++.",'$SName', '$Total') ";
     
       if ($conn->query($sql) === TRUE) {
       // echo "New records created successfully";
        // header("Location: DisplaySeries.php");
        echo " 
         <div class=' container alert text-center col-6 alert-success alert-dismissible fade show' role='alert '>
           <strong>Success!</strong> Entry Added. ID is ".$row['max']."
             <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
               <span aria-hidden='true'>&times;</span>
             </button>
           </div> ";
      //      "
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}
     
      $conn->close();}
      ?>
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>