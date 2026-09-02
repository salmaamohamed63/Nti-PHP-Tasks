<?php
require '../auth.php';

include('../layout/header.php');

require '../dbc.php';
?>

<div class="container mt-5">

    <h2 class="mb-4">Search Customer by Name</h2>

    <form method="POST" class="d-flex mb-4">


        <input type="text" name="name" maxlength="100" required class="form-control">  <!-- Validation -->

        <button type="submit" class="btn btn-outline-success">
            Search
        </button>

    </form>

    <?php

    if (isset($_POST['name'])) {

    // Validation
    
        $name = trim($_POST['name']);

        if ($name === '' || strlen($name) > 100) {
            echo "<div class='alert alert-danger'>
            Please enter a valid name.
          </div>";
            exit();
        }
        $query = "SELECT *
                  FROM customers
                  WHERE name LIKE '%$name%'";

        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result) == 0) {

            echo "<div class='alert alert-danger'>
                    No customers found
                  </div>";

        } else {
            ?>

            <table class="table table-bordered table-striped">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Salary</th>
                        <th>City</th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                    while ($customer = mysqli_fetch_assoc($result)) {
                        ?>

                        <tr>
                            <td><?php echo $customer['id']; ?></td>
                            <td><?php echo $customer['name']; ?></td>
                            <td><?php echo $customer['email']; ?></td>
                            <td><?php echo $customer['salary']; ?></td>
                            <td><?php echo $customer['city']; ?></td>
                        </tr>

                        <?php
                    }
                    ?>

                </tbody>

            </table>

            <?php
        }
    }
    ?>

</div>

<?php
include('../layout/footer.php');
?>