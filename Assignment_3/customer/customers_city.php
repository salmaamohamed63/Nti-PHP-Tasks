<?php
require '../auth.php';

include('../layout/header.php');

require '../dbc.php';
?>

<div class="container mt-5">

    <h2 class="mb-4">Customers by City</h2>

    <form method="POST" class="mb-4">

        <select name="city" class="form-select mb-3" required>

            <option value="">Select City</option>

            <option value="Cairo">Cairo</option>
            <option value="Giza">Giza</option>
            <option value="Alexandria">Alexandria</option>

        </select>
        <input type="text" name="city" maxlength="100" required class="form-control">

        <button type="submit" class="btn btn-success">
            Submit
        </button>

    </form>

    <?php

    if (isset($_POST['city'])) {

        $city = trim($_POST['city']);

        if ($city === '' || strlen($city) > 100) {
            echo "<div class='alert alert-danger'>
            Please enter a valid city.
          </div>";
            exit();
        }

        $query = "SELECT name, city
                  FROM customers
                  WHERE city = '$city'
                  ORDER BY name";

        $result = mysqli_query($connection, $query);

        ?>

        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Name</th>
                    <th>City</th>
                </tr>
            </thead>

            <tbody>

                <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['city']; ?></td>
                    </tr>

                <?php } ?>

            </tbody>

        </table>

    <?php } ?>

</div>

<?php
include('../layout/footer.php');
?>