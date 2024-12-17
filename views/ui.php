<?php
session_start();

$fnameerr = isset($_SESSION["fnameerr"]) ? $_SESSION["fnameerr"] : '';
$lnameerr = isset($_SESSION["lnameerr"]) ? $_SESSION["lnameerr"] : '';
$emailerr = isset($_SESSION["emailerr"]) ? $_SESSION["emailerr"] : '';
$phoneerr = isset($_SESSION["phoneerr"]) ? $_SESSION["phoneerr"] : '';
$messageerr = isset($_SESSION["messageerr"]) ? $_SESSION["messageerr"] : '';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movie Library</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body class="m-0 p-0" style="width: 100vw;">
    <header>
        <div class="min-vw-100" style="margin:0; padding:0;">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand me-auto text-white" href="#">eBEYONDS</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header bg-dark">
                            <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">eBEYONDS</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body bg-dark">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link active text-white" aria-current="page" href="#">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">OUR SCREENS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">SCHEDULE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">MOVIE LIBRARY</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <section style="width: 100vw">
        <!-- hero section -->
        <div class="bg-image"
            style="background-image: url(../img/headerimage.jpg); background-size: cover; background-position: center; width: 100vw; height: 75vh;">
        </div>
        <!-- movie library -->
        <div class="text-white bg-black">
            <div class="text-wrap p-5" style="max-width: 35rem;">
                <h1 class="fs-1 fw-bold">MOVIES LIBRARY</h1>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                    sed diam nonumy eirmod tempor invidunt ut labore et
                    dolore magna aliquyam erat, sed diam voluptua. </p>
            </div>
        </div>
        <!-- collect favourite -->
        <div class="bg-dark text-white">
            <div class="p-5">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <p class="fs-2">Collect your favourite</p>
                    </div>
                    <div class="col-12 col-md-6" style="margin-top: 6px;">
                        <div class="input-group border border-secondary rounded-1">
                            <div class="input-group-text bg-dark border-0"><i class="fa fa-search text-white"></i></div>
                            <input type="text" id="searchbar" class="form-control bg-dark border-0 text-white"
                                placeholder="Search title and add to grid">
                        </div>
                    </div>
                </div>
                <hr style="border-top: 3px solid #fff;">
                <div class="mt-4" id="movieGrid">
                    <div class="row g-3">
                        <div id="bat" class="card rounded-0 border-0 text-white col-12 col-md-6 col-lg-4 bg-dark mb-3">
                            <div style="background-color: #3C3C3C;">
                                <div class="position-relative">
                                    <img src="../img/batman.jpg" class="card-img-top"
                                        style="object-fit: cover; height: 420px;" alt="Batman Image">
                                    <button id="close" type="button" class="btn position-absolute rounded-0 top-0 end-0 m-2 p-1"
                                        style="background-color: #1D1D1D;" aria-label="Close"><i
                                            class="fa fa-close pe-1 ps-1 text-secondary"></i></button>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title fw-light fs-2">Batman Returns</h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet,
                                        consetetur sadipscing elitr, sed diam
                                        nonumy eirmod tempor invidunt ut…
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="wid" class="card rounded-0 border-0 text-white col-12 col-md-6 col-lg-4 bg-dark mb-3">
                            <div style="background-color: #3C3C3C;">
                                <div class="position-relative">
                                    <img src="../img/wild.jpg" class="card-img-top"
                                        style="object-fit: cover; height: 420px;" alt="Batman Image">
                                    <button type="button" class="btn position-absolute rounded-0 top-0 end-0 m-2 p-1"
                                        style="background-color: #1D1D1D;" aria-label="Close"><i
                                            class="fa fa-close pe-1 ps-1 text-secondary"></i></button>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title fw-light fs-2">Wild Wild West</h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet,
                                        consetetur sadipscing elitr, sed diam
                                        nonumy eirmod tempor invidunt ut…
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="spi" class="card rounded-0 border-0 text-white col-12 col-md-6 col-lg-4 bg-dark mb-3">
                            <div style="background-color: #3C3C3C;">
                                <div class="position-relative">
                                    <img src="../img/spiderman.jpg" class="card-img-top"
                                        style="object-fit: cover; height: 420px;" alt="Batman Image">
                                    <button type="button" class="btn position-absolute rounded-0 top-0 end-0 m-2 p-1"
                                        style="background-color: #1D1D1D;" aria-label="Close"><i
                                            class="fa fa-close pe-1 ps-1 text-secondary"></i></button>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title fw-light fs-2">The Amazing Spiderman</h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet,
                                        consetetur sadipscing elitr, sed diam
                                        nonumy eirmod tempor invidunt ut…
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact -->
        <div class="bg-black text-white">
            <div class="p-5">
                <p class="fs-3 mb-0">How to reach us</p>
                <p class="fs-6 fw-normal text-secondary">Lorem ipsum dolor sit amet, consetetur</p>
                <div class="row">
                    <div class="col-12 col-md-6 d-flex">
                        <form action="../backend/backend.php" method="post" class="w-100">
                            <div class="row">
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="first" class="text-secondary">First Name*</label>
                                    <input type="text" id="first" name="firstname" value="<?php echo $fnameerr; ?>"
                                        class="form-control bg-dark text-white border-secondary">
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="last" class="text-secondary">Last Name*</label>
                                    <input type="text" id="last" name="lastname" value="<?php echo $lnameerr; ?>"
                                        class="form-control bg-dark text-white border-secondary">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="text-secondary">Email*</label>
                                <input type="email" id="email" name="email" value="<?php echo $emailerr; ?>"
                                        class="form-control bg-dark text-white border-secondary">
                            </div>
                            <div class="mb-3">
                                <label for="telephone" class="text-secondary">Telephone*</label>
                                <input type="text" id="telephone" name="telephone" value="<?php echo $phoneerr; ?>"
                                    class="form-control bg-dark text-white border-secondary">
                            </div>
                            <div class="">
                                <label for="message" class="text-secondary">Message*</label>
                                <textarea id="message" name="message" class="form-control bg-dark text-white border-secondary"
                                 rows="5"><?php echo $messageerr; ?></textarea>
                            </div>
                            <label class="text-secondary">*required fileds</label>
                            <div class="mt-3">
                                <input type="checkbox" id="agree" class="form-check-input rounded-0 bg-dark">
                                <label for="agree" class="fw-light ms-2 text-secondary">I agree to the <a href=""
                                        class="text-white">Terms & Conditions</a></label>
                            </div>
                            <div class="mt-3 d-flex justify-content-end">
                                <button class="btn text-white w-50" style="background-color: #CC9601;">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-md-6 d-flex">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.3812075643614!2d79.9404323!3d6.844821199999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25069caa2f53b%3A0xe7eae3a8b1f1214d!2seBEYONDS%20eBusiness%20%26%20Digital%20Solutions!5e0!3m2!1sen!2slk!4v1734429983040!5m2!1sen!2slk"
                            style="border:0;" allowfullscreen="" loading="lazy" class="w-100 "
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-dark text-white">
        <div class="d-flex justify-content-between ps-5 pe-5 pt-4">
            <div>
                <p><span class="fw-bold">IT Group</span><br>
                    C. Salvador de Madariaga, 1<br>
                    28027 Madrid<br>
                    Spain</p>
            </div>
            <div>
                <p>
                    Follow us on

                </p>
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-between ps-2 pe-2">
            <div>
                <p>Copyright © 2022 IT Hote ls. All rights reserved.</p>
            </div>
            <div>
                <p>Photos by Felix Mooneeram & <a href="" class="text-white">Serge Kutuzov</a> on <a href=""
                        class="text-white">Unsplash</a></p>
            </div>
        </div>
    </div>
    <!-- movile filtering api algorithm -->
    <script>
        $(document).ready(function () {
            var basic = null;
            $('#searchbar').on('input', async function () {
                if (!basic) {
                    $('#movieGrid').children().each(function() {
                        basic = $(this);
                    });
                }
                $('#movieGrid').text('');
                const query = $(this).val();
                if (query) {
                    try {
                        const url = `https://api.tvmaze.com/search/shows?q=${$(this).val()}`;
                        const response = await fetch(url);
                        const moviesJSON = await response.json();
                        $.each(moviesJSON, function (idx, movie) {
                            const newGrid = $(`
                                <div class="row g-3">
                                </div>
                            `);
                            const newMovie = $(`
                                <div class="card rounded-0 border-0 text-white col-12 col-md-6 col-lg-4 bg-dark mb-3">
                                    <div style="background-color: #3C3C3C;">
                                        <div class="position-relative">
                                            <img class="card-img-top" id="movie-image"
                                                style="object-fit: cover; height: 420px;" alt="Batman Image">
                                            <button type="button" class="btn position-absolute rounded-0 top-0 end-0 m-2 p-1"
                                                style="background-color: #1D1D1D;" aria-label="Close"><i
                                                    class="fa fa-close pe-1 ps-1 text-secondary"></i></button>
                                        </div>
                                        <div class="card-body" id="body">
                                            <h5 class="card-title fw-light fs-2" id="movie-title"></h5>
                                        </div>
                                    </div>
                                </div>
                            `);

                            newMovie.find('button').click(function() {
                                newMovie.remove();
                            });

                            $.each(movie.show, function (key, value) {
                                if (key == 'name') {
                                    newMovie.find('h5').text(value);
                                }
                                if (key == 'summary') {
                                    const desc = value.substring(0, 120);
                                    newMovie.find('#body').append(desc + "...");
                                }
                                if (key == 'image') {
                                    $.each(value, function (image_type, source) {
                                        if (image_type == 'medium') {
                                            newMovie.find('#movie-image').attr('src', source);
                                        }
                                    });
                                }
                            });
                            newGrid.append(newMovie);
                            var added = false;
                            if ($('#movieGrid').children() == 0) {
                                $('#movieGrid').append(newGrid);
                                added = true;
                            } else {
                                $('#movieGrid').children().each(function() {
                                    if ($(this).children().length < 3) {
                                        $(this).append(newMovie);
                                        added = true;
                                    }
                                });
                            }
                            if (!added) {
                                $('#movieGrid').append(newGrid);
                            }
                        });
                    } catch (error) {
                        console.log(error);
                    }
                } else {
                    $('#movieGrid').append(basic);
                }
            });
            $('#bat').find('button').click(function() {
                $('#bat').remove();
            });
            $('#wid').find('button').click(function() {
                $('#wid').remove();
            });
            $('#spi').find('button').click(function() {
                $('#spi').remove();
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
<?php 
unset($_SESSION['fnameerr']);
unset($_SESSION['lnameerr']);
unset($_SESSION['emailerr']);
unset($_SESSION['phoneerr']);
unset($_SESSION['messageerr']);

$fnameerr = '';
$lnameerr = '';
$emailerr = '';
$phoneerr = '';
$messageerr = '';
?>