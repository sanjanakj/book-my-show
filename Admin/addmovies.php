<?php

require "../db/connect.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
  
  $movieTitle = $_REQUEST['title'];
  $releaseDate = $_REQUEST['releaseDate'];
  $duration = $_REQUEST['duration'];
  $language = $_REQUEST['language'];
  $rating = $_REQUEST['rating'];
  $image = $_FILES['image']['name'];
  $casting = $_REQUEST['casting'];
  $trailer = $_REQUEST['trailer'];

  $query = "INSERT INTO `movies`(`title`, `releaseDate`, `duration`, `language`, `rating`, `image`, `casting`, `trailer`) VALUES('$movieTitle', '$releaseDate', '$duration', '$language', '$rating', '$image', '$casting', '$trailer')";

$result = mysqli_query($connect, $query);

  if($result == 1){

    $destDirectory = "../uploads/";
    $uploadedFile = $destDirectory . basename($_FILES["image"]["name"]);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $uploadedFile)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
          header('Location: index.php?message=Your MOVIE Added Successfully');
      } else {
          echo "Sorry, there was an error uploading your file.";
      }


    // echo "MOVIE ADDED SUCCESSFULLY..";
    //header("Location: index.php");
  }else{
    echo "ERROR IN ADDING MOVIE.";
  }

}

?>

<?php require('header.php') ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <h2>Add New Movie</h2>
      <a class="btn btn-primary pull-right" href="index.php">Back</a>
      
      <div class="container padding-3">
        
        <div class="row">
          
          <div class="col-md-8 col-12 offset-md-2">
            
            <div class="card">
              <div class="card-body">
                
                <form action="" method="post" enctype="multipart/form-data">
                  
                  <div class="form-group">
                      <label for="title">Movie Title</label>
                      <input type="text" class="form-control" id="title" placeholder="Movie Title" name="title">
                  </div>

                  <div class="form-row">
                    
                    <div class="form-group col-md-4">
                      <label for="releaseDate">Release Date</label>
                      <input type="date" class="form-control" id="releaseDate" placeholder="Release Date" name="releaseDate">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="duration">Duration</label>
                      <input type="text" class="form-control" id="duration" placeholder="Duration" name="duration">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="language">Language</label>
                      <select id="language" class="form-control" name="language">
                        <option selected>Choose Language</option>
                        <option>Kannada</option>
                        <option>English</option>
                        <option>Hindi</option>
                        <option>Tamil</option>
                        <option>Malayalam</option>
                        <option>Telugu</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-5">
                      <label for="rating">Rating</label>
                      <input type="text" class="form-control" id="rating" placeholder="Rating" name="rating">
                    </div>
                    <div class="form-group col-md-7">
                      <label for="image">Image</label>
                      <input type="file" class="form-control" id="image" placeholder="Image" name="image">
                    </div>
                  </div>

                  <div class="form-group">
                      <label for="casting">Casting</label>
                      <input type="text" class="form-control" id="casting" placeholder="Movie Cast" name="casting">
                  </div>

                  <div class="form-group">
                      <label for="trailer">Movie Trailer</label>
                      <textarea class="form-control" placeholder="Movie Trailer in IFRAME FROM YOUTUBE" name="trailer"></textarea>
                  </div>

                  <div class="form-group">
                    <button class="btn btn-primary btn-block">Add Movie</button>
                  </div>

                </form>

              </div>
            </div>

          </div>

        </div>

      </div>

    </main>
  </div>
</div>



<?php require('footer.php') ?>
