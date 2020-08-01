<?php
    require_once('../connect.php');
    if(!empty($_POST)){
    $id = $_POST['userid'];

    $sql="DELETE FROM `series` WHERE `SeriesID`= ".$id;

    $result = mysqli_query($conn, $sql);
$message .= $sql;
    $query = "select * from series";
    $result = mysqli_query($conn, $query);


    $response .= " <div id='Series'>
    <table class='table table-striped table-dark table-hover table-responsive-sm serirestable'>
    <thead class='table-primary text-uppercase '>
    <tr>
        <td></td>
        <td>Series Name</td>
        <td>Series Total</td>
        </tr></thead>
        <tbody>";
    while ($row = $result->fetch_assoc()) {

      $response .= "<tr><td><button type='button' class='btn select' data-id='" . $row['SeriesID'] . "'>Select<i class='fas fa-angle-right fa-1x'> </i></button> </td>
        
        <td>" . $row['SeriesName'] . "</td>
        <td>" . $row['Stotal'] . "</td>
        </tr>";
    } 
    $response .="</tbody></table></div>";
  //   $response.=" 

  //   <div class='alert col-12 alert-success alert-dismissible fade show' role='alert '>
  //     <strong>Success!</strong>
  //     <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
  //       <span aria-hidden='true'>&times;</span>
  //     </button>
  //   </div> ";

echo $response;
      }