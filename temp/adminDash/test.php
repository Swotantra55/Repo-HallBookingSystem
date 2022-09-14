<?php
require('../../Admin/inc/essentials.php');
userLogin();
include('includes/header.php');
include('includes/navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('../../Admin/inc/links.php');?>
    <title>Document</title>
</head>

<body>
<div class="tab-content" id="v-pills-tabContent">

    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
    <br><br>
    <h3>My Profile</h3>
    <?php
if (isset($_SESSION['status'])){
  ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data updated successfully!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
  <?php
  unset($_SESSION['status']);
}
?>

<br><br>
<table class="table table-striped">
  <thead>
    <tr>
        <th>User id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Contact number</th>
        <th>Email</th>
        <th>Profile Picture</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    include('../../dbCon.php');
    $uId=$_SESSION['userId'];
    $sql = "SELECT * FROM USER WHERE user_id='$uId'";
    $result = $conn->query($sql);
    if($result-> num_rows > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $user_name=$row['user_name'];
            $address= $row['address'];
            $phone=$row['phone'];
            $email= $row['email'];
            $img= $row['profile_picture']
            ?>
            <tr>
        <td><?php echo $uId?></td>
        <td><?php echo $user_name?></td>
        <td><?php echo $address?></td>
        <td><?php echo $phone?></td>
        <td><?php echo $email?></td>
        <td><?php echo '<img src="'.$img.'" width="100px;" height="100px;">'?></td>
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
        Are you sure you want to delete your account?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="delete_user.php?hid=<?php echo $uId;?>">Delete</a>
        <!-- <button type="button" class="btn btn-primary">Delete</button> -->
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit your personal information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="update_user.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body">

           <input type="hidden" name="id" id="id" value="<?php echo $uId ?>">

            <div class="form-group">
                <label> Name </label>
                <input type="text" name="username" value="<?php echo $user_name ?>" class="form-control" placeholder="Enter your name">
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
                <label>Select image to upload:</label>
                <input type="file" name="upload" value="<?php echo $img ?>">
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


<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#logoutMdl">
          Logout</button> -->


<!-- <div class="modal fade" id="logoutMdl" tabindex="-1" role="dialog" aria-labelledby="logoutMdlLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm logout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to log out?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="user_logout.php?hid=<?php echo $uId;?>">Log out</a>
      </div>
    </div>
  </div>
</div> -->



  </div>
  <!-- second tab -->
    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
    <br><br>
    <h3>My Bookings</h3>
    <table class="table table-striped">
      <thead>
        <tr>
            <th>S.No</th>
            <th>Hall name</th>
            <th>Hall Id</th>
            <th>Booked by</th>
            <th>Client's Id</th>
            <th>Estimated number of guests</th>
            <th>Date of event</th>
            <th>Booked on</th>
      </thead>
      <tbody>
        <?php 
        include '../../dbCon.php';

        $sql="SELECT * FROM bookings WHERE user_id='$uId'";

        $result = mysqli_query($conn, $sql);
        if($result){
            $i=0;
            while($row = mysqli_fetch_assoc($result)){
                
                $hall_id=$row['hall_id'];
                $hallname= $row['hallname'];
                $user_name= $row['user_name'];
                $user_id=$row['user_id'];
                $date_of_event= $row['date_of_event'];
                $booked_on= $row['booked_on'];
                $no_of_people= $row['no_of_people'];
                $i+=1;
                ?>
                <tr>

            <td><?php echo $i?></td>
            <td><?php echo $hallname?></td>
            <td><?php echo $hall_id?></td>
            <td><?php echo $user_name?></td>
            <td><?php echo $user_id?></td>
            <td><?php echo $no_of_people?></td>
            <td><?php echo $date_of_event?></td>
            <td><?php echo $booked_on?></td>
            </tr>
                <?php
            }
            
        }
        ?>
      </tbody>
    </table>
        </div>


<!-- 3rd tab -->
    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
</div>


    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
  </div>

 <!-- Log out modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#LogoutModal">
Log out
</button>

<!-- Modal -->
<div class="modal fade" id="LogoutModal" tabindex="-1" aria-labelledby="LogoutModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Log out</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       Are you sure you want to log out?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="user_logout.php?hid=<?php echo $uId;?>">Log out</a>
      </div>
    </div>
  </div>
</div>

  
  
  
  
  
  <?php require('../../Admin/inc/scripts.php');?>

  <script>
$(document).ready(function() {
    $('.editbtn').on('click', function(){
          $('#editModal').modal('show');
    });
});
</script>
</body>
</html>





    

<?php
// include('includes/scripts.php');
include('includes/footer.php');
?>