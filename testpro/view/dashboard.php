<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <title>East Best</title>
</head>

<body>
    <h1>Student Attandence</h1>

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
                                        class="fs-4 ms-1 d-none d-sm-inline">Attandence</span>
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
        </div>
    </div>

    <div class="d-flex justify-content-center" id="assignment" style="margin-top: -500px;">
        <form id="userdetails" action="#" method="post">
            <div class="form-floating mb-3">
                <input type="text" id="fname" name="firstname" class="form-control " style="width:300px;"
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
    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>