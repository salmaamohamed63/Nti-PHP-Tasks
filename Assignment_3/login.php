<?php

session_start();

include('layout/header.php');
require 'dbc.php';

if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 100) {

        echo "<div class='container mt-3'>
                <div class='alert alert-danger'>
                    Please enter a valid email.
                </div>
              </div>";

        exit();
    }

    // Password validation
    if ($password === '' || strlen($password) > 100) {

        echo "<div class='container mt-3'>
                <div class='alert alert-danger'>
                    Please enter a valid password.
                </div>
              </div>";

        exit();
    }

    // Check email and password
    $query = "SELECT * FROM customers
              WHERE email = '$email'
              AND password = '$password'";

    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {

        $customer = mysqli_fetch_assoc($result);

        $_SESSION['customer_id'] = $customer['id'];

        header("Location: /NTI/Assignment_3/index.php");
        exit();

    } else {

        echo "<div class='container mt-3'>
                <div class='alert alert-danger'>
                    Invalid email or password.
                </div>
              </div>";
    }
}

?>

<div class="container mt-5">

    <h2 class="mb-4">Login</h2>

    <form method="POST">

        <div class="mb-3">

            <label class="form-label">Email</label>

            <input
                type="email"
                name="email"
                maxlength="100"
                required
                class="form-control"
            >

        </div>

        <div class="mb-3">

            <label class="form-label">Password</label>

            <input
                type="password"
                name="password"
                maxlength="100"
                required
                class="form-control"
            >

        </div>

        <button type="submit" class="btn btn-success">
            Login
        </button>

    </form>

</div>

<?php

include('layout/footer.php');

?>
