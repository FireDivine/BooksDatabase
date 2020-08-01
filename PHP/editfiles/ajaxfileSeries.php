<?php
        require_once('../connect.php');
$id = $_POST['userid'];
        $query = "select * from `series` where `SeriesID` = '". $id."'";
        $result = mysqli_query($conn, $query);

     $row = $result->fetch_assoc();
//            
        $response .= "Series ID: ".$row['SeriesID']."<br>";
        // Series Name: ".$row['SeriesName'] ." <br>Total: " . $row['Stotal'] . "
        //   ";
       $response.=" <form id='seriesform'>
      
       <div class='form-group'>
       <label>Title</label>
           <input type='text' class='form-control' name='title' required=''>
           
       </div>
       <!-- <div>
           <input type='text' name='' required=''>
           <label>Subtitle</label>
       </div> -->
       <div class='form-group'>
       <label>ISBN</label>
           <input type='text' class='form-control' name='ISBN' required=''>
          
       </div>

       <div class='form-group'>
       <label>Book Format</label>
           <input type='text' class='form-control' name='Format' required=''>
           
       </div>
       <div class='form-group'>
       <label>Book Genre</label>
           <input type='text' class='form-control' name='Genre' required=''>
           
       </div>
       <div class='form-group'>
       <label>Description</label>
           <input type='textarea' class='form-control' name='Description' required=''>
          
       </div>
       <div class='form-group'>
       <label>Total Pages / Endtime</label>
           <input type='number' class='form-control' name='total' required=''>
      
       </div>
       <div class='form-group'>
       <label>Series Name</label>
           <input type='number' class='form-control' name='SName' required=''>
        
       </div>
       <div class='form-group'>
       <label>Number in Series</label>
           <input type='number' class='form-control' name='STotal' required=''>
           
       </div>
       <div class='form-group'>
       <label>Publishing Year</label>
           <input type='text' class='form-control' name='PYear' required=''>
           
       </div>
       <div class='form-group'>
           <Button type='submit' value='Add Book' name='submit' class='btn btn-primary form-control'>Add Book</button>
       </div>
</div>

      <button type='button' class='btn btn-primary  editpage' data-id='" . $row['SeriesID'] .">Update Entry</button>
      <button type='button' class='btn  btn-danger delete' data-id='" . $row['SeriesID'] ."'>Delete Entry</button>
      </form>
        ";
        //  $response .= "</tbody></table>";
        echo $response;
  

      ?>

      