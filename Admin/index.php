
<?php require('../db/connect.php');


$query="SELECT * FROM `movies`";

$moviesList=mysqli_query($connect, $query);

?>
<?php require('header.php') ?>


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        
      </div>

      <h2>Movies List</h2>

      
      
      <a class="btn btn-primary pull-right" href="addmovies.php">Add New Movie</a>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Movie Title</th>
              <th>Release Date</th>
              <th>Language</th>
              <th>Duration</th>
              <th>Options</th>
            </tr>
          </thead>
          <tbody>

            <?php

              foreach($moviesList as $movieKey=>$movieVal){
                echo "<tr>
                  <td>".$movieVal['id']."</td>
                  <td>".$movieVal['title']."</td>
                  <td>".$movieVal['releaseDate']."</td>
                  <td>".$movieVal['language']."</td>
                  <td>".$movieVal['duration']."</td>
                  <td>
                    <a href='editmovies.php?id=".$movieVal['id']."' class='btn btn-primary'><i class='fa fa-pencil'></i></a>
                    <a href='deletemovies.php?id=".$movieVal['id']."' class='btn btn-danger'><i class='fa fa-trash'></i></a>
                  </td>
                </tr>";
              }

            ?>
            
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>




<?php require('footer.php') ?>
