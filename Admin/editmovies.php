<?php

require "../db/connect.php";

$id = $_REQUEST['id'];

$movieTitle = "";
$releaseDate = "";
$duration = "";
$language = "";
$rating = "";
$image = "";
$casting = "";
$trailer = "";

//FETCH EXISTING DATA TO EDIT//
$query = "SELECT * FROM `movies` WHERE id=".$id;
$result = mysqli_query($connect, $query);

foreach ($result as $key => $value) {
  # code...
  $movieTitle = $value['title'];
  $releaseDate = $value['releaseDate'];
  $duration = $value['duration'];
  $language = $value['language'];
  $rating = $value['rating'];
  $image = $value['image'];
  $casting = $value['casting'];
  $trailer = $value['trailer'];

}

//UPDATE THE DATA//
if($_SERVER['REQUEST_METHOD'] == "POST"){
  
  $movieTitle = $_REQUEST['title'];
  $releaseDate = $_REQUEST['releaseDate'];
  $duration = $_REQUEST['duration'];
  $language = $_REQUEST['language'];
  $rating = $_REQUEST['rating'];
  $image = $_FILES['image']['name'];
  $casting = $_REQUEST['casting'];
  $trailer = $_REQUEST['trailer'];

  $query = "UPDATE `movies` SET `title`='".$movieTitle."', `releaseDate`='".$releaseDate."', `duration`='".$duration."', `language`='".$language."', `rating`='".$rating."', `image`='".$image."', `casting`='".$casting."', `trailer`='".$trailer."' WHERE `id`=".$id ;

  

$result = mysqli_query($connect, $query);

  if($result == 1){
    // echo "MOVIE ADDED SUCCESSFULLY..";
    header("Location: index.php");
  }else{
    echo "ERROR IN ADDING MOVIE.";
  }

}

?>

<?php require('header.php') ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <h2>Edit Movie</h2>
      <a class="btn btn-primary pull-right" href="addmovies.php">Back</a>
      
      <div class="container padding-3">
        
        <div class="row">
          
          <div class="col-md-8 col-12 offset-md-2">
            
            <div class="card">
              <div class="card-body">
                
                <form action="" method="post" enctype="multipart/form-data">
                  
                  <div class="form-group">
                      <label for="title">Movie Title</label>
                      <input type="text" class="form-control" id="title" placeholder="Movie Title" name="title" value="<?php echo $movieTitle; ?>">
                  </div>

                  <div class="form-row">
                    
                    <div class="form-group col-md-4">
                      <label for="releaseDate">Release Date</label>
                      <input type="date" class="form-control" id="releaseDate" placeholder="Release Date" name="releaseDate" value="<?php echo $releaseDate; ?>">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="duration">Duration</label>
                      <input type="text" class="form-control" id="duration" placeholder="Duration" name="duration" value="<?php echo $duration; ?>">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="language">Language</label>
                      <select id="language" class="form-control" name="language" value="<?php echo $language; ?>">
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
                      <input type="text" class="form-control" id="rating" placeholder="Rating" name="rating" value="<?php echo $rating; ?>">
                    </div>
                    <div class="form-group col-md-7">
                      <label for="image">Image</label>
                      <input type="file" class="form-control" id="image" placeholder="Image" name="image">
                    </div>
                  </div>

                  <div class="form-group">
                      <label for="casting">Casting</label>
                      <input type="text" class="form-control" id="casting" placeholder="Movie Cast" name="casting" value="<?php echo $casting; ?>">
                  </div>

                  <div class="form-group">
                      <label for="trailer">Movie Trailer</label>
                      <textarea class="form-control" placeholder="Movie Trailer in IFRAME FROM YOUTUBE" name="trailer" value="<?php echo $trailer; ?>"></textarea>
                  </div>

                  <div class="form-group">
                    <button class="btn btn-primary btn-block">Update Movie</button>
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
