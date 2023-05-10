<?php
  
  require 'dbcon.php';
?>
<!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>client data</title>
  </head>

  <body>  <div class="container mt-5">

   <div class="row">
     <div class="col-md-12">
      <div class="card">
        <div class="card header">
          <h4>  Student View Details
            <a href="index1.php" class="btn btn-danger float-end">BACK</a>
          </h4>
        </div>
        <div class="card-body">
            <?php
              if ( isset($_GET['id'])) {
                $client_id= mysqli_real_escape_string($con,$_GET['id']);
                $query="select * from client where id='$client_id' ";
                $query_run=mysqli_query($con,$query);
                if (mysqli_num_rows($query_run)>0)
                 {
                  
                  $client = mysqli_fetch_array($query_run);
                  ?>
              <div class="mb-3">
              <label>Client Name</label>
              <p class="form-control">
                  <?=$client['name'];?>
              </p>
            </div>
            <div class="mb-3">
              <label>Client Email</label>
               <p class="form-control">
                  <?=$client['email'];?>
              </p>
            </div>
            <div class="mb-3">
              <label>Client Contact</label>
               <p class="form-control">
                  <?=$client['phone'];?>
              </p>
            </div>
            <div class="mb-3">
              <label>Client Company</label>
               <p class="form-control">
                  <?=$client['company'];?>
              </p>
            </div>

                  <?php
                           
                }
                else{
                  echo "no such id found";
                }
                
              }

            ?>  
        </div>
      </div>

    </div>
  </div>

</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>