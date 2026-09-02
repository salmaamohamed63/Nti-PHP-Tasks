<?php
require '../auth.php';

include('../layout/header.php');

require '../dbc.php';
?>

<div class="container mt-5">

    <h2 class="mb-4">Richest 3 Customers</h2>

    <form method="POST" class="mb-4">

        <input
            type="text"
            name="city"
            class="form-control mb-3"
            placeholder="Enter City Name"
            maxlength="100"
            required
        >

        <button type="submit" class="btn btn-success">
            Search
        </button>

    </form>

    <?php

    if (isset($_POST['city'])) {

        $city = $_POST['city'];

        $query = "SELECT name, city, salary
                  FROM customers
                  WHERE city = '$city'
                  ORDER BY salary DESC
                  LIMIT 3";

        $result = mysqli_query($connection, $query);

    ?>

        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Name</th>
                    <th>City</th>
                    <th>Salary</th>
                </tr>
            </thead>

            <tbody>

                <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['city']; ?></td>
                        <td><?php echo $row['salary']; ?></td>
                    </tr>

                <?php } ?>

            </tbody>

        </table>

    <?php } ?>

</div>

<?php
include('../layout/footer.php');
?>