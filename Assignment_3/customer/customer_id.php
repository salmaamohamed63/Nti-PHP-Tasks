<?php
require '../auth.php';

include('../layout/header.php');

require '../dbc.php';
?>

<div class="container mt-5">

    <h2 class="mb-4">Search by ID</h2>

    <!-- Search Form -->
    <form class="d-flex mb-4" method="POST">

        <input type="number" name="id" min="1" max="100000" required class="form-control">  <!-- Validation -->

        <button class="btn btn-outline-success" type="submit">
            Search
        </button>

    </form>


    <?php

    if (isset($_POST['id'])) {

        $id = $_POST['id'];


        // Validation
        if (!filter_var($id, FILTER_VALIDATE_INT) || $id < 1) {
            echo "<div class='container mt-3'>
                <div class='alert alert-danger'>
                    Please enter a valid ID.
                </div>
              </div>";
            exit();
        }
        $query = "SELECT * FROM customers WHERE id = $id";

        $result = mysqli_query($connection, $query);


        if (mysqli_num_rows($result) == 0) {

            echo "<div class='alert alert-danger'>";
            echo "Customer not found";
            echo "</div>";

        } else {

            $customer = mysqli_fetch_assoc($result);

            ?>

            <!-- Customer Data -->
            <table class="table table-bordered">

                <tr>
                    <th>ID</th>
                    <td><?php echo $customer['id']; ?></td>
                </tr>

                <tr>
                    <th>Name</th>
                    <td><?php echo $customer['name']; ?></td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td><?php echo $customer['email']; ?></td>
                </tr>

                <tr>
                    <th>Salary</th>
                    <td><?php echo $customer['salary']; ?></td>
                </tr>

                <tr>
                    <th>City</th>
                    <td><?php echo $customer['city']; ?></td>
                </tr>

            </table>

            <?php
        }
    }

    ?>

</div>
<?php
include('../layout/footer.php');
?>