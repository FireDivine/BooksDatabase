<?php
        require_once('../connect.php');
$id = $_POST['userid'];
        $query = "select b.BTitle, b.BSubtitle, b.BAuthor,b.ISBN, f.FormatName, g.GenreName,b.BDESCRIPTION, b.BTOTAL_PAGES, s.SeriesName ,b.Number_in_Series, b.PublishingYear
        from books b, series s,  Book_Format f,Book_Genre g 
        where b.bSeries = s.SeriesID and f.FormatID = b.BFORMAT and g.GenreID = b.Bgenre AND ISBN =".$id;
        $result = mysqli_query($conn, $query);

     $row = $result->fetch_assoc();
//            
        $response .= "ISBN: ".$row['ISBN']."<br>";
        // Series Name: ".$row['SeriesName'] ." <br>Total: " . $row['Stotal'] . "
        //   ";
       $response.=" <form id='booksform'>
       <div class='form-group'>
       <label>Title</label>
           <input type='text' class='form-control' name='title' required='' value='".$row['BTitle']."'>
           
       </div>
       
    
       <div class='form-group'>
       <label>Author</label>
           <input type='text' class='form-control' name='author' required='' value='".$row['BAuthor']."'>
           
       </div>

       <div class='form-group'>
       <label>Book Format</label>
           <input type='text' class='form-control' name='Format' required='' value='".$row['FormatName']."'>
           
       </div>
       <div class='form-group'>
       <label>Book Genre</label>
           <input type='text' class='form-control' name='Genre' required='' value='".$row['GenreName']."'>
           
       </div>
       <div class='form-group'>
       <label>Description</label>
           <input type='textarea' class='form-control' name='Description' required='' value='".$row['BDESCRIPTION']."'>
          
       </div>
       <div class='form-group'>
       <label>Total Pages / Endtime</label>
           <input type='number' class='form-control' name='total' required='' value='".$row['BTOTAL_PAGES']."'>
      
       </div>
       <div class='form-group'>
       <label>Series Name</label>
           <input type='number' class='form-control' name='SName' required='' value='".$row['SeriesName']."'>
        
       </div>
       <div class='form-group'>
       <label>Number in Series</label>
           <input type='number' class='form-control' name='STotal' required='' value='".$row['Number_in_Series']."'>
           
       </div>
       <div class='form-group'>
       <label>Publishing Year</label>
           <input type='text' class='form-control' name='PYear' required='' value='".$row['PublishingYear']."'>
           
       </div>
       
      </div>
      <button type='button' class='btn btn-primary  editpage' data-id='" . $row['ISBN'] ."'>Update Entry</button>
      <button type='button' class='btn  btn-danger delete' data-id='" . $row['ISBN'] ."'>Delete Entry</button>
      </form>
        ";
        //  $response .= "</tbody></table>";
        echo $response;
  

      ?>

      