<?php
    $conn = mysqli_connect("localhost","root","","timetable");

    if(isset($_POST["head1"])){
        unset($_POST['head1']);
        $details = implode(',', $_POST);
        
        $sql = "SELECT * FROM `morning`";
        $result=mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result)>0){
            $sql="UPDATE `morning` SET `head`='$details' WHERE 1";
            $result=mysqli_query($conn, $sql);
            if($result){
                echo "nice one";
            }

        }else{
            $sql="INSERT INTO `morning`(`head`) VALUES ('$details')";
            $result=mysqli_query($conn, $sql);
            if($result){
                echo "nice one";
            }
        }
    }elseif (isset($_POST["data1"])) {
        unset($_POST['data1']);
        $details = implode(',', $_POST);

        $sql = "SELECT * FROM `morning`";
        $result=mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)>0){
            $sql="UPDATE `morning` SET `data`='$details' WHERE 1";
            $result=mysqli_query($conn, $sql);
            if($result){
                echo "nice one";
            }

        }else{
            $sql="INSERT INTO `morning`(`data`) VALUES ('$details')";
            $result=mysqli_query($conn, $sql);
            if($result){
                echo "nice one";
            }
        }
    }
?>