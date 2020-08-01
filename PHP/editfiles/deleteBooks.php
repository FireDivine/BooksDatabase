<?php
    require_once('../connect.php');
    if(!empty($_POST)){
    $id = $_POST['userid'];
   
    $sql="DELETE FROM `books` WHERE `ISBN`= ".$id;

    $result = mysqli_query($conn, $sql);
$message .= $sql;
    $query = "select b.BTitle, b.BSubtitle, b.BAuthor, b.ISBN, f.FormatName, g.GenreName,b.BDESCRIPTION, b.BTOTAL_PAGES, s.SeriesName ,b.Number_in_Series, b.PublishingYear
    from books b, series s,  Book_Format f,Book_Genre g 
    where b.bSeries = s.SeriesID and f.FormatID = b.BFORMAT and g.GenreID = b.Bgenre order by b.BAuthor asc";
    $result = mysqli_query($conn, $query);


    $response .= " <div id='books'>
    <table class='table table-striped table-dark  table-hover table-responsive'>
            <thead  class='table-primary text-uppercase text-center'>
            <tr>
            <td></td>
            <td>BTitle</td>
           
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
            
            $response.= "<tr>
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
            $response .= "</tbody></table></div>";
  //   $response.=" 

  //   <div class='alert col-12 alert-success alert-dismissible fade show' role='alert '>
  //     <strong>Success!</strong>
  //     <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
  //       <span aria-hidden='true'>&times;</span>
  //     </button>
  //   </div> ";

echo $response;
      }