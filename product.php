<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="icon" href="image/bsu-logo.png" type="image/x-icon" />
    <title>RGO Appointment System</title>
</head>

<body>
    <?php include("include/navbar.php"); ?>

    <?php
    $page = "products";
    include("include/header.php");
    ?>

    <section class="product-section">
        <div class="container h-100 py-5">
            <div class="row">
                <div class="col-12 py-2">
                    <form class="d-flex justify-content-end" role="search">
                        <input class="form-control me-2 border border-2 border-dark rounded-0" type="search"
                            placeholder="Search" aria-label="Search" style="width: 25%;">
                        <button class="btn btn-dark  rounded-0" type="submit">
                            <i class="bi bi-search"></i>
                            Search
                        </button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row pb-5">
                <?php
                for ($i = 0; $i < 20; $i++) {
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6 py-2">
                    <div class="card shadow-sm border-0 rounded-0">
                        <img src="image/bsu.jpg" class="card-img-top rounded-0" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Product</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-dark btn-sm rounded-0" data-bs-toggle="modal"
                                data-bs-target="#productModal">
                                <i class="bi bi-eye"></i>
                                View Details</a>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-3">
                    <a href="#" class="btn btn-dark rounded-0">
                        <i class="bi bi-journal-bookmark-fill"></i>
                        Make an Appointment</a>
                </div>
            </div>
        </div>
    </section>

    <?php include("include/footer.php"); ?>
    <?php include("include/login-modal.php"); ?>
    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="productModalLabel">Product</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="image/bsu.jpg" alt="bsu.jpg" width="50%">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_SESSION['error'])) {
        if ($_SESSION['error'] == true) {
            echo '<script>
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Invalid SR Code or Password!",
                    });
                    </script>';
        } else {
            echo '<script>
                    Swal.fire({
                        icon: "success",
                        title: "Success!",
                        text: "You have successfully logged in!",
                    });
                    </script>';
        }
        unset($_SESSION['error']);
    }
    ?>
    <script>
    var current_page = "products";
    </script>
    <script src="js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
</body>

</html>