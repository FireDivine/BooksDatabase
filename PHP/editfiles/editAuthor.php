<?php
        require_once('../connect.php');
        if(!empty($_POST)){
        $id = $_POST['userid'];
        $name = $_POST['name2'];
        $url = $_POST['url'];
        $location = $_POST['location'];
        $details = $_POST['details'];
        $response='';
                $sql= "UPDATE `author` SET `AuthorName` =  '".$name."', `AURL` = '".$url."', `ALocation` = '".$location."', `ADetails` = '".$details."'  WHERE `AuthorID` = ".$id;
  
$message= $sql;
    $result = mysqli_query($conn, $sql);
   
    $query = "select * from author";
      $result = mysqli_query($conn, $query);


      $response .= "  <div id='Author'>
      <table class='table table-striped table-dark  table-hover table-responsive'>
      <thead  class='table-primary text-uppercase '>
      <tr>
      <td></td>
  
      <td>Author Name</td>
      <td>URL</td>
      <td>Location</td>
      <td>Details</td></tr>
      </thead>
      <tbody>";
  while($row =$result->fetch_assoc()){
      
      $response.= "
      <tr>
      <td>
      <button type='button' class='btn select'
      data-id='" . $row['AuthorID'] . "'>Select <i class='fas fa-angle-right fa-1x'> </i></button>
       </td>
      
      <td>" .$row['AuthorName']."</td>
      <td>".$row['AURL']."</td>
      <td>".$row['ALocation']."</td>
      <td>".$row['ADetails']."</td>
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
