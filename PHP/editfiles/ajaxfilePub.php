<?php
        require_once('../connect.php');
$id = $_POST['userid'];
        $query = "select PublisherID,PName,Planguage  from `publisher` where `PublisherID` = '". $id."'";
        $result = mysqli_query($conn, $query);

     $row = $result->fetch_assoc();
//            
        $response .= "Publisher ID: ".$row['PublisherID']."<br>";
        // Series Name: ".$row['SeriesName'] ." <br>Total: " . $row['Stotal'] . "
        //   ";
       $response.=" <form id='pubform'>
         <div class='form-group'>
          <label>Publisher Name</label>
          <input type='text' name='namee' class='form-control' required='' value='".$row['PName']."'>

      </div>
      <div class='form-group'>
          <label>Language</label>
          <input type='text' name='lang' class='form-control' required=''value='".$row['Planguage']."'>

      </div>
      <button type='button' class='btn btn-primary  editpage' data-id='" . $row['PublisherID'] ."'>Update Entry</button>
      <button type='button' class='btn  btn-danger delete' data-id='" . $row['PublisherID'] ."'>Delete Entry</button>
      </form>
        ";
        //  $response .= "</tbody></table>";
        echo $response;
  

      ?>

      