<nav class="navbar navbar-expand-lg py-3 fixed-top">
    <div class="container">
        <a class="navbar-brand text-uppercase" id="logo" href="index.php">
            <img src="image/bsu-logo.png" alt="bsu-logo.png" height="42px">
            Resource Generation Office
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about-us.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact-us.php">Contact Us</a>
                </li>
            </ul>
            <?php
            if (isset($_SESSION['sr_code'])) {
            ?>
            <div class="dropdown">
                <button class="btn btn-primary rounded-0 dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="bi bi-person-circle"></i>
                    <?php echo $student['first_name']; ?>
                </button>
                <ul class="dropdown-menu rounded-0">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Transactions</a></li>
                    <li><a class="dropdown-item" href="#">Appointment</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </div>
            <?php
            } else {
            ?>
            <a class="btn  btn-primary rounded-0" data-bs-toggle="modal" data-bs-target="#loginModal">
                <i class="bi bi-box-arrow-in-right"></i>
                Login
            </a>
            <?php
            }
            ?>
        </div>
    </div>
</nav>



<?php
/*
<thead>
    <tr>
        <th colspan="3" class="text-center"><?php echo date('N, m-d-Y', strtotime($_POST['date'])); ?></th>
</tr>
<tr>
    <th scope="col" class="text-center">Date</th>
    <th scope="col" class="text-center">Available Slots</th>
    <th scope="col" class="text-center">Action</th>
</tr>
</thead>
<tbody>
    <tr>
        <td>
            <p class="text-center m-0">Morning (8:00 AM - 11:30 AM)</p>
        </td>
        <td>
            <p class="text-center m-0"> 49 / 100</p>
        </td>
        <td>
            <button type="button" class="btn btn-dark btn-sm rounded-0 w-100">Book</button>
        </td>
    </tr>
    <tr>
        <td>
            <p class="text-center m-0">Afternoon (12:30 PM - 4:30 PM)</p>
        </td>
        <td>
            <p class="text-center m-0"> 49 / 100</p>
        </td>
        <td>
            <button type="button" class="btn btn-dark btn-sm rounded-0 w-100">Book</button>
        </td>
    </tr>
</tbody>


echo '<td>';
    if ($j == 0 || $j == 6) {
    echo '<button type="button" class="btn btn-primary btn-sm rounded-5 disabled date-btn">' . $day . '</button>';
    } else {
    echo '<button type="button" class="btn btn-primary btn-sm rounded-5 date-btn" id="' . $id . '">' . $day .
        '</button>';
    }
    echo '</td>';
*/
?>