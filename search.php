<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysqli_connect("localhost","root","","hoshan");
    $query=mysqli_query($con, "select * from student where student_id LIKE '%{$key}%'");
    while($row=mysqli_fetch_assoc($query))
    {
      $array[] = $row['student_id'];
    }
    echo json_encode($array);
    mysqli_close($con);
?>
