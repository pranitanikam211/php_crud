<?php
  session_start();
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
    <?php include('msg.php');
    ?>

   <div class="row">
     <div class="col-md-12">
      <div class="card">
        <div class="card header">
          <h4> Add Client
            <a href="index1.php" class="btn btn-danger float-end">BACK</a>
          </h4>
        </div>
        <div class="card-body">
          <form action="code.php" method="post">
            <div class="mb-3">
              <label>Client Name</label>
              <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
              <label>Client Email</label>
              <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
              <label>Client Contact</label>
              <input type="text" name="phone" class="form-control">
            </div>
            <div class="mb-3">
              <label>Client Company</label>
              <input type="text" name="company" class="form-control">
            </div>
            <div class="mb-3">
              <button type="submit" name="submit" class="btn btn-primary">Save Client</button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>

</div>









<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>