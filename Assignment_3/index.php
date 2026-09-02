<?php

session_start();

include('layout/header.php');

include('layout/navbar.php');
?>


<!-- Hero -->
<header 
    class="text-center text-white d-flex align-items-center justify-content-center"
    style="
        height: 500px;
        background-image: url('images/BG3.jpeg');
        background-size: cover;
        background-position: center;
    "
>

    <div>
        <h1 class="display-1 fw-bold">
            Welcome to MySQL
        </h1>

        <p class="fs-4">
            Explore our database
        </p>
    </div>

</header>


<?php
include('layout/footer.php');
?>