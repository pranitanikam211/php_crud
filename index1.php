<?php 
      session_start(); 
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

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container mt-4">
      <?php include('msg.php');?>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Client Details
              <a href="client.php" class="btn btn-primary float-end">Add Client</a>
              </h4>
            </div>
             <div class="card-body">

               <table class="table table-bordered table-stripped">
                 <thead>
                   <tr>
                     <th>ID</th>
                     <th> Client name</th>
                     <th>Email</th>
                     <th>Phone</th>
                     <th>Company</th>
                     <th>Action</th>
                   </tr>
                 </thead>
                 <tbody>
                  <?php
                     $query="select * from client";
                     $query_run=mysqli_query($con,$query);
                     if(mysqli_num_rows($query_run)>0) {
                      foreach ($query_run as $client) {
                        //echo $client['name'];
                        ?>
                        <tr>
                          <td><?=$client['id'];?></td>
                          <td><?=$client['name'];?></td>
                          <td><?=$client['email'];?></td>
                          <td><?=$client['phone'];?></td>
                           <td><?=$client['company'];?></td>
                           <td>
                              <a href="view_client.php?id=<?=$client['id'];?>" class="btn btn-info btn-sm">View</a>
                               <a href="client_edit.php?id=<?=$client['id'];?>" class="btn btn-success btn-sm">Edit</a>
                               <form action="code.php" method="POST" class="d-inline">
                                 <button type="submit" name="delete_client" value="<?=$client['id'];?>"class="btn btn-danger btn-sm">Delete</button> 
                               </form>
                           </td>

                         </tr>

                        <?php
                      }
                       # code...
                     }
                     else{
                      echo "no records";
                     }
                  ?>
                   
                 </tbody>
               </table>
             </div>
          </div>
        </div>
      </div>
    </div>       

  </body>
</html>