<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<br><br>
<table class="table table-striped">
  <thead>
    <tr>
        <th>S.No</th>
        <th>id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    include '../../dbCon.php';

    $sql="SELECT * FROM user";

    $result = mysqli_query($conn, $sql);
    if($result){
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
            $user_id=$row['user_id'];
            $user_name= $row['user_name'];
            $address= $row['address'];
            $phone=$row['phone'];
            $email= $row['email'];
            $i+=1;
            ?>
            <tr>

        <td><?php echo $i?></td>
        <td><?php echo $user_id?></td>
        <td><?php echo $user_name?></td>
        <td><?php echo $address?></td>
        <td><?php echo $phone?></td>
        <td><?php echo $email?></td>
        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deleteModal">
          Delete</button></td>
        </tr>
            <?php
        }
        
    }
    ?>
  </tbody>
</table>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete the user?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="deleteUser.php?uid=<?php echo $user_id;?>">Delete</a>
        <!-- <button type="button" class="btn btn-primary">Delete</button> -->
      </div>
    </div>
  </div>
</div>




    

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>