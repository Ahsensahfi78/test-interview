<?php

require '../backend/dbroot.php';
require '../backend/attandance.php';

$sql = "SELECT * FROM attandancetab ORDER BY id";
$res = $link->query($sql);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <title>East Best</title>
</head>

<body>


    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="bg-dark col-auto col-md-2 min-vh-100">
                <div class="flex-wrap">
                    <div class="bg-dark">
                        <ul class="nav nav-tabs flex-column mt-4">
                            <li class="nav-item mb-3">
                                <a class="nav-link text-white" href="#dashboard">
                                    <i class="fs-5 fa fa-house"></i><span
                                        class="fs-4 ms-1 d-none d-sm-inline">Dashboard</span>
                                </a>
                            </li>

                            <li class="nav-item mb-3">
                                <a class="nav-link text-white" href="#assignment">
                                    <i class="fs-5 fa-solid fa-book"></i><span
                                        class="fs-4 ms-1 d-none d-sm-inline">Assignment</span>
                                </a>
                            </li>

                            <li class="nav-item mb-3">
                                <a class="nav-link text-white" href="attandence.html" target="_parent">
                                    <i class="fs-5 fa-solid fa-check"></i><span
                                        class="fs-4 ms-1 d-none d-sm-inline">Staff Attandence</span>
                                </a>
                            </li>

                            <li class="nav-item mb-3">
                                <a class="nav-link text-white" href="courses.html">
                                    <i class="fs-5 fa-solid fas fa-book-open"></i>
                                    <span class="fs-4 ms-1 d-none d-sm-inline">Courses</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container position-relative" id="dashboard">
        <div class="row">

            <div class="col-6 col-md-4 col-xl-3" style="margin-left: 150px; margin-top: -850px;">
                <div class="card bg-info order-card">
                    <div class="card-body">
                        <h6 class="m-b-20">Students</h6>
                        <h2 class="text-right"><i class="fa fa-person f-left"></i><span>15</span></h2>
                        <p class="m-b-0">Present<span class="f-right"></span></p>
                        <h2 class="text-right"><i class="fa fa-person ml-2"><span>5</span></i></h2>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-xl-3" style="margin-top: -850px;">
                <div class="card bg-warning order-card">
                    <div class="card-body">
                        <h6 class="m-b-20">Students Assignment Received</h6>
                        <h2 class="text-right"><i class="fa fa-book f-left"></i><span>15</span></h2>
                        <p class="m-b-0">Checked Assignments<span class="f-right"></span></p>
                        <h2 class="text-right"><i class="fa fa-check"><span>5</span></i></h2>
                    </div>
                </div>
            </div>


            <div class="col-6 col-md-4 col-xl-3 position-relative" style="margin-top: -850px">
                <div class="card bg-danger order-card">
                    <div class="card-body">
                        <h6 class="m-b-20">Staff Absent Count</h6>
                        <h2 class="text-right"><i class="fa fa-person f-left"></i><span style="margin-left:5px;"><?php $absent = mysqli_num_rows($res);
                        echo $absent ?></span>
                        </h2>
                        <p class="m-b-0">Staffs Name<span class="f-right"></span></p>
                        <?php while ($absent1 = mysqli_fetch_assoc($res)) {
                            ?>
                            <h2 class="text-right"><i class="fas fa-id-card">
                                    <h5><span style="margin-left:5px;"><?php echo $absent1['firstname']; ?></span></h5>
                                </i></h2>
                            <?php
                        } ?>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="row">
        <div class="col-6 col-md-4 col-xl-2" style="margin-left: 1080px; margin-top:-850px;">
            <div class="card bg-success order-card">
                <div class="card-body">
                    <h6 class="m-b-20">Monthly Achivement</h6>
                    <?php
                    $res123 = "SELECT SUM(amount) as `sumamount`FROM transaction";
                    $monthtarget = 100000;
                    $percentage = "SELECT SUM(amount) / $monthtarget as `percent` FROM transaction";
                    $result1 = $link->query($res123);
                    $checkper = $link->query($percentage);
                    while($row = mysqli_fetch_assoc($result1)){?>
                    <h2 class="text-right"><i class="fas fa-chart-pie f-left"></i><span><?php echo $row['sumamount'];?></span></h2>
                    <?php }?>
                    <!-- <p class="m-b-0">Achievment<span class="f-right"></span></p> -->
                    <?php
                    $per = mysqli_fetch_assoc($checkper);
                     if($per){
                        $per_val = round($per['percent'],2);
                     }
                    ?>
                    <p>Monthky Target<span class="f-right"></span></p>
                    <h5 class="text-right"><i class="fas fa-chart-line"><span style="margin-left:5px;"><?php echo '100000'.''.'<br>' .$per_val. '%';?></span></i></h5>
                    
                </div>
            </div>
        </div>

        <div class="d-flex col-6 col-md-1" style="margin-left: 1080px; margin-top:-650px; height: 100px;">
            <button id="addtransaction" class="btn btn-primary"><i class="fa fa-cc-visa"> Add Transaction</i></button>
        </div>
    </div>

    <div class="card bg-white order-card" id="transactioncard"
        style="display:none; margin-top:-500px; width: 400px; height:400px; margin-left:550px;">
        <div class="card-body">
            <form id="transaction" action="../backend/transaction.php" method="post">
                <div class="form-floating mb-3">
                    <select class="form-select" name="transactionse">
                        <option selected>Choose The Type</option>
                        <option value="Expense">Expense</option>
                        <option value="Income">Income</option>
                    </select>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="description" class="form-control"
                        placeholder="Description About Transaction">
                    <label for="description">Description</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" name="amount" class="form-control" placeholder="Amount">
                    <label for="amount">Amount</label>
                </div>

                <div class="d-flex">
                    <button id="add" type="submit" class="btn btn-success">Add</button>
                </div>

                <div class="d-flex" style="margin-left:300px; margin-top:-30px;">
                    <button id="close" type="button" class="btn btn-danger">Close</button>
                </div>

            </form>
        </div>
    </div>

    <div class="" style="width:1000px; margin-left: 250px; margin-top:-500px;">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="col">ID</th>
                    <th class="col">Transaction Method</th>
                    <th class="col">Description</th>
                    <th class="col">Amount</th>
                    <th class="col">Edit</th>
                    <th class="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $res12 = "SELECT * from transaction";
                $res1 = $link->query($res12);
                while ($row1 = mysqli_fetch_assoc($res1)) {
                    ?>
                    <tr>
                        <td><?php echo $row1['id']; ?></td>
                        <td><?php echo $row1['transaction_method']; ?></td>
                        <td><?php echo $row1['description']; ?></td>
                        <td><?php echo $row1['amount']; ?></td>
                        <td><a href="#" class="btn btn-primary">Edit</a></td>
                        <td><a href="#" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>



    <!-- <div class="d-flex justify-content-center" id="assignment" style="margin-top: -500px;">
        <form id="userdetails" action="#" method="post">
            <div class="form-floating mb-3">
                <inputcop"text" id="fname" name="firstname" class="form-control " style="width:300px;"
                    placeholder="First Name">
                <label for="fname">First Name</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" id="lname" name="lastname" class="form-control" style="width:300px;"
                    placeholder="Last Name">
                <label for="lname">Last Name</label>
            </div>

            <div class="form-floating mb-3">
                <input type="email" id="email" name="email" class="form-control" style="width:300px;"
                    placeholder="Email">
                <label for="email">Email</label>
            </div>

            <div class="form-floating mb-3">
                <input type="file" id="file" name="file" class="form-control" style="width:300px;"
                    placeholder="Choose File">
                <label for="file">Choose File</label>
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" name="attandance" class="btn btn-success">Submit</button>
            </div>

        </form>
    </div> -->



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
        $("#addtransaction").click(function () {
            $("#transactioncard").show();
        });

        $("#close").click(function () {
            $("#transactioncard").hide();
        });
    });
</script>

</html>

