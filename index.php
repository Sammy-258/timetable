<?php  

    $conn = mysqli_connect("localhost", "root", "", "timetable");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="index.css">
</head>
<body style="background-color:rgba(0,0,0,0.8);">
    <div class="container-fluid">
        <div class="row">

        <div class="col-3 mt-5">
            <div class="d-flex">
                <button class="add btn btn-primary text-light">Add</button>
                <button class="subtract btn btn-danger text-light mx-1">delete</button>
            </div>
        </div>

        <div class="col-12 mt-5">

            <table class="table table-bordered">
                <thead>
                    <tr class="first-tr">
                        <form action="process.php" method="post" id="first-form">
                            <?php
                                $sql= "SELECT * FROM `morning`";
                                $result=mysqli_query($conn, $sql);

                                if(mysqli_num_rows($result)>0){
                                    $head=mysqli_fetch_assoc($result);
                                    $head=$head["head"];
                                    // echo $head["head"];
                                    $array=explode(",", $head);
                                    ?>
                                    <th class="text-light fs-5" scope="col"><input type="text" class="head" name="head1" value="Time"></th>
                                    <?php
                                    foreach ($array as $key) {
                                        # code...?>
                                        <th class="text-light fs-5" scope="col">
                                            <input type="text" class="head" name="<?php echo $key?>" value="<?php 
                                            if($key===""){
                                                echo "null";
                                            }else{
                                                echo $key;
                                            }?>">
                                            
                                            </div>
                                        </th>
                                        <?php
                                    }
                                }
                            ?>
                            
                        </form>
                    </tr>
                </thead>
                <tbody>
    
                    
                    <tr class="second-tr">
                        <form action="process.php" method="post" id="second-form">
                            <?php
                                $sql= "SELECT * FROM `morning`";
                                $result=mysqli_query($conn, $sql);

                                if(mysqli_num_rows($result)>0){
                                    $head=mysqli_fetch_assoc($result);
                                    $head=$head["data"];
                                    // echo $head["head"];
                                    $array=explode(",", $head);
                                    ?>
                                    <td class="text-light py-4"><input type="text" class="data" name="data1" value="doing"></td>
                                    <?php
                                    foreach ($array as $key) {
                                        # code...?>
                                        <td class="text-light py-4">
                                            <input type="text" class="data dataResult" name="<?php echo $key?>" 
                                            value="<?php 
                                                    if($key===""){
                                                        echo "";
                                                    }else{
                                                        echo $key;
                                                    }
                                                ?> 
                                            " style="display:none;">
                                            <div class="displayData" id="<?php echo $key?>">
                                                <?php 
                                                    if($key===""){
                                                        echo "";
                                                    }else{
                                                        echo $key;
                                                    }
                                                ?> 
                                            </div>
                                        </td>
                                        <?php
                                    }
                                }
                            ?>
                           
                        </form>
                    </tr>
                       
    
    
                </tbody>
            </table>
        </div>
        </div>
    </div>


    <script src="index.js"></script>
    
</body>
</html>