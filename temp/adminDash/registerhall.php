<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add a hall</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Name of the hall </label>
                <input type="text" name="hallname" class="form-control" placeholder="Enter the name of hall">
            </div>
            <div class="form-group">
                <label> Name of the owner </label>
                <input type="text" name="owner" class="form-control" placeholder="Enter the name of owner">
            </div>
            <div class="form-group">
                <label> Address </label>
                <input type="text" name="address" class="form-control" placeholder="Enter Address">
            </div>
            <div class="form-group">
                <label>Contact number</label>
                <input type="tel" class="form-control" name="phone" placeholder="+977-9846012345" pattern="+977-[0-9]{10}" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control checking_email" placeholder="Enter Email">
                <small class="error_email" style="color: red;"></small>
            </div>

            <div class="form-group">
            <label for="Capacity">Capacity</label>
            <br>
            <input type="number" id="capacity" class="form-control" placeholder="Capacity of the hall" name="capacity" min="50">
            </div>

            <div class="form-group">
            <label>Price per person</label>
            <br>
            <input type="number" id="price" class="form-control" placeholder="Enter the price per person" name="price">
            </div>

            <div class="form-group">
            <label for="Details">Details</label>
            <br>
            <textarea id= "textarea" name="details" class="form-control" rows="5" cols="30" 
            placeholder="Details about the hall"></textarea>
            </div>
            


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
       Add a hall
</button>
<br><br>
<table class="table table-striped">
  <thead>
    <tr>
        <th>S.No</th>
        <th>Hall id</th>
        <th>Name</th>
        <th>Owned by</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Capacity</th>
        <th>Price</th>
        <th>Details</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    include '../../dbCon.php';

    $sql="SELECT * FROM halls";

    $result = mysqli_query($conn, $sql);
    if($result){
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
          $hall_id=$row['hall_id'];
          $hallname=$row['hallname'];
          $owner= $row['owner'];
          $address= $row['address'];
          $phone=$row['phone'];
          $email= $row['email'];
          $capacity=$row['capacity'];
          $price=$row['price'];
          $details=$row['details'];
          $i+=1;
            ?>
            <tr>

        <td><?php echo $i?></td>
        <td><?php echo $hall_id?></td>
        <td><?php echo $hallname?></td>
        <td><?php echo $owner?></td>
        <td><?php echo $address?></td>
        <td><?php echo $phone?></td>
        <td><?php echo $email?></td>
        <td><?php echo $capacity?></td>
        <td><?php echo $price?></td>
        <td><?php echo $details?></td>
        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
          Edit</button></td>
        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deleteModal">
          Delete</button></td>
        </tr>
            <?php
        }
        
    }
    ?>
  </tbody>
</table>


<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit the hall information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="update_hall.php" method="POST">
        <div class="modal-body">

           <input type="hidden" name="id" id="id" value="<?php echo $hall_id ?>">

            <div class="form-group">
                <label> Name of the hall </label>
                <input type="text" name="hallname" value="<?php echo $hallname ?>" class="form-control" placeholder="Enter the name of hall">
            </div>
            <div class="form-group">
                <label> Name of the owner </label>
                <input type="text" name="owner" value="<?php echo $owner ?>" class="form-control" placeholder="Enter the name of owner">
            </div>
            <div class="form-group">
                <label> Address </label>
                <input type="text" name="address" value="<?php echo $address ?>" class="form-control" placeholder="Enter Address">
            </div>
            <div class="form-group">
                <label>Contact number</label>
                <input type="tel" class="form-control" value="<?php echo $phone ?>" name="phone" placeholder="+977-9846012345" pattern="+977-[0-9]{10}" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $email?>" class="form-control checking_email" placeholder="Enter Email">
                <small class="error_email" style="color: red;"></small>
            </div>

            <div class="form-group">
            <label for="Capacity">Capacity</label>
            <br>
            <input type="number" id="capacity" value="<?php echo $capacity?>"  class="form-control" placeholder="Capacity of the hall" name="capacity" min="50">
            </div>

            <div class="form-group">
            <label>Price per person</label>
            <br>
            <input type="number" id="price" value="<?php echo $price?>" class="form-control" placeholder="Enter the price per person" name="price">
            </div>

            <div class="form-group">
            <label for="Details">Details</label>
            <br>
            <textarea id="textarea"  name="details" class="form-control" rows="5" cols="30" 
            placeholder="Details about the hall"><?php echo $details ?></textarea>
            </div>
            

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>




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
        Are you sure you want to delete the hall?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="delete_hall.php?hid=<?php echo $hall_id;?>">Delete</a>
        <!-- <button type="button" class="btn btn-primary">Delete</button> -->
      </div>
    </div>
  </div>
</div>





    

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>