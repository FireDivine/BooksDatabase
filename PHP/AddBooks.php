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

    <title>Hello, world!</title>
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
    <h1 class="title text-center">Add New <span class="text-primary ">Books</span></h1>
  </div>
  <div class="container">
        <form method="POST">
            <div class="form-group">
            <label>Title</label>
                <input type="text" class="form-control" name="title" required="">
                
            </div>
            <div class="form-group">
            <label>Author</label>
                <input type="text"  class="form-control" name="Author" required="">
              
            </div>
            <div class="form-group">
            <label>ISBN</label>
                <input type="text" class="form-control" name="ISBN" required="">
               
            </div>

            <div class="form-group">
            <label>Book Format</label>
                <input type="text" class="form-control" name="Format" required="">
                
            </div>
            <div class="form-group">
            <label>Book Genre</label>
                <input type="text" class="form-control" name="Genre" required="">
                
            </div>
            <div class="form-group">
            <label>Description</label>
                <input type="textarea" class="form-control" name="Description" required="">
               
            </div>
            <div class="form-group">
            <label>Total Pages / Endtime</label>
                <input type="number" class="form-control" name="total" required="">
           
            </div>
            <div class="form-group">
            <label>Series Name</label>
                <input type="number" class="form-control" name="SName" required="">
             
            </div>
            <div class="form-group">
            <label>Number in Series</label>
                <input type="number" class="form-control" name="STotal" required="">
                
            </div>
            <div class="form-group">
            <label>Publishing Year</label>
                <input type="text" class="form-control" name="PYear" required="">
                
            </div>
            <div class="form-group">
                <Button type="submit" value="Add Book" name="submit" class="btn btn-primary form-control">Add Book</button>
            </div>
    </div>
    </form>
    </div>
    <?php
    require_once('connect.php');

    if (isset($_POST['submit'])) {

        $Name = $_POST['title'];
        $ISBN = $_POST['ISBN'];
        $author= $_POST['Author'];
        $Format = $_POST['Format'];
        $Genre = $_POST['Genre'];
        $Description = $_POST['Description'];
        $total = $_POST['total'];
        $SName = $_POST['SName'];
        $STotal = $_POST['STotal'];
        $PYear = $_POST['PYear'];

        $lolly = "select `ISBN` as bob from `books` where `ISBN` = $ISBN";

        $result = $conn->query($lolly);
        // if (($result ==0 ) && (empty($row['bob']))) {


            // $lolly = "Select max(`PublisherID`) as max from `books`";

            // while ($row = $result->fetch_assoc()) {

            // echo $row['ISBN']."<br>";

            $sql = "INSERT INTO `books` (`BTitle`,  `BAuthor`, `ISBN`, `BFORMAT`, `Bgenre`, `BDESCRIPTION`, `BTOTAL_PAGES`, `bSeries`, `Number_in_Series`, `PublishingYear`) VALUES ('$Name','$author','$ISBN',$Format, $Genre,'$Description',$total,$SName,$STotal,$PYear)";
            //INSERT INTO `books` (`BTitle`, `BSubtitle`, `BAuthor`, `ISBN`, `BFORMAT`, `Bgenre`, `BDESCRIPTION`, `BTOTAL_PAGES`, `bSeries`, `Number_in_Series`, `PublishingYear`) VALUES (NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '')   

            if ($conn->query($sql) === TRUE) {
              echo " 
              <div class=' container alert text-center col-6 alert-success alert-dismissible fade show' role='alert '>
                <strong>Success!</strong> Entry Added. ID is ".$row['bob']."
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button>
                </div> ";
            } else {
                echo "Error: " . $row['bob'] . "<br>" . $lolly . "<br>" . $conn->error;
            }
        // } else {
        //     echo "Book already in Table " . $lolly;
        // }
    }



    $conn->close();
    ?>
       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>