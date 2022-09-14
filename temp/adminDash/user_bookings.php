<?php
session_start();
$uId=$_SESSION['userId'];
include('includes/header.php');
include('includes/navbar.php');
?>

<br><br>
<table class="table table-striped">
  <thead>
    <tr>
        <th>S.No</th>
        <th>Hall name</th>
        <th>Hall Id</th>
        <th>Estimated number of guests</th>
        <th>Date of event</th>
        <th>Booked on</th>
  </thead>
  <tbody>
    <?php 
    include '../../dbCon.php';

    $sql="SELECT * FROM bookings where user_id='$uId'";

    $result = mysqli_query($conn, $sql);
    if($result){
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
            
            $hall_id=$row['hall_id'];
            $hallname= $row['hallname'];
            // $user_name= $row['user_name'];
            // $user_id=$row['user_id'];
            $date_of_event= $row['date_of_event'];
            $booked_on= $row['booked_on'];
            $no_of_people= $row['no_of_people'];
            $i+=1;
            ?>
            <tr>

        <td><?php echo $i?></td>
        <td><?php echo $hallname?></td>
        <td><?php echo $hall_id?></td>
        <!-- <td><?php echo $user_name?></td>
        <td><?php echo $user_id?></td> -->
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




    

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>