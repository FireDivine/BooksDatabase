<?php
        require_once('../connect.php');
        if(!empty($_POST)){
        $id = $_POST['userid'];
        
        $sql="DELETE FROM `author` WHERE `AuthorID`= ".$id;
  

    $result = mysqli_query($conn, $sql);
   
    $query = "select * from Author";
      $result = mysqli_query($conn, $query);

      
      $response .= "  <div id='Author'>
      
  <table class='table table-striped table-dark table-hover table-responsive-sm'>
          <thead class='table-primary text-uppercase'><tr>
          <td></td>
      
          <td>Author Name</td>
          <td>URL</td>
          <td>Location</td>
          <td>Details</td></tr>
          </thead>
          <tbody>";
      while($row =$result->fetch_assoc()){
          
        $response .= "
          <tr>
          <td>
          <button type='button' class='btn select' data-id='" . $row['AuthorID'] . "'>Select</button>
           </td>
          
          <td>" .$row['AuthorName']."</td>
          <td>".$row['AURL']."</td>
          <td>".$row['ALocation']."</td>
          <td>".$row['ADetails']."</td>
          </tr>";
          }
          $response .= "</tbody></table>";
      

 

echo $response;
        }
