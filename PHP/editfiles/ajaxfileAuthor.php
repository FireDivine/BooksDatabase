<?php
       require_once('../connect.php');
        $id = $_POST['userid'];
        $query = "select * from `author` where `AuthorID` = '". $id."'";
        $result = mysqli_query($conn, $query);

     $row = $result->fetch_assoc();
//            
        $response .= "<form id='authorform'>
        <div class='form-group'>
        <label>Author Name</label>
            <input type='text' class='form-control' name='Name' required='' value='".$row['AuthorName']."'>
           
        </div>
        <div  class='form-group'>
        <label>Authors URL</label>
            <input type='text' name='URL' class='form-control' required='' value='".$row['AURL']."'>
            
        </div>
        <div  class='form-group'>
        <label>Location</label>
            <input type='text' name='Location' class='form-control' required='' value='".$row['ALocation']."'>
        
        </div>
        <div  class='form-group'>
        <label>Details</label>

            <input type='textarea' name='Details'  class='form-control' required='' value='".$row['ADetails']."'>
            
        </div>
        <button type='button' class='btn btn-primary  editpage' data-id='" . $row['AuthorID'] ."'>Update Entry</button>
      <button type='button' class='btn  btn-danger delete' data-id='" . $row['AuthorID'] ."'>Delete Entry</button>
      </form>";
        
          //$response .= "</tbody></table>";
        echo $response;
      exit;