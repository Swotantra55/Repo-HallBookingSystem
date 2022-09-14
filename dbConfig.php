<?php 
include 'dbCon.php';
function filteration($data) {
    foreach($data as $key => $value) {
        $data[$key]= trim($value);
        $data[$key]= stripslashes($value);
        $data[$key]= htmlspecialchars($value);
        $data[$key]= strip_tags($value);
    }
    return $data;
}

function select($sql, $values, $datatypes) {
    $conn =$GLOBALS['conn'];
    if($stmt =mysqli_prepare($conn, $sql)){
        mysqli_stmt_bind_param($stmt, $datatypes,...$values);
        if(mysqli_stmt_execute($stmt)) {
            $res=mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else {
            mysqli_stmt_close($stmt); 
            die("Cannot be executed -SELECT");
        }
    }
    else {
        die("Cannot be prepared -SELECT");
    }
}
?>