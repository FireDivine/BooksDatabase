<?php
        require_once('../connect.php');
        if(!empty($_POST)){
        $id = $_POST['userid'];
        $name = $_POST['name2'];
        $total = $_POST['lang'];
        $response='';
        $response='';
              
  
                $sql= "UPDATE `publisher` SET `PName` = '".$name."', `Planguage` = '".$total."' WHERE `PublisherID` = ".$id;
    $result = mysqli_query($conn, $sql);
   
    $query = "select * from publisher";
      $result = mysqli_query($conn, $query);

      $response .= "  <div id='Publisher'>
      
  <table class='table table-striped table-dark table-hover table-responsive-sm'>
          <thead class='table-primary text-uppercase '><tr>
          <td></td>
      
          <td>Publisher Name</td>
      
          <td>Language</td>
  
          </thead>";
      while($row =$result->fetch_assoc()){
          
          $response.= "<tr>
          <td><button type='button' class='btn select' data-id='" . $row['PublisherID'] . "'>Select <i class='fas fa-angle-right fa-1x'> </i></button> </td>
         
          <td>" .$row['PName']."</td>
         
          <td>".$row['Planguage']."</td>
         
          </tr>";
          }
          $response.=" </tbody></table></div>";
      

    //   <div class='alert col-12 alert-success alert-dismissible fade show' role='alert '>
    //     <strong>Success!</strong>
    //     <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    //       <span aria-hidden='true'>&times;</span>
    //     </button>
    //   </div> ";

echo $response;
        }
