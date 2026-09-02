<?php
require '../auth.php';

include('../layout/header.php');

require '../dbc.php';
?>

<div class="container mt-5">

    <h2 class="mb-4">Product Sales Details</h2>

    <form method="POST" class="d-flex mb-4">

        <input type="number" name="product_id" min="1" max="100000" required class="form-control">

        <button type="submit" class="btn btn-success">
            Search
        </button>

    </form>

    <?php

    if (isset($_POST['product_id'])) {

        $product_id = $_POST['product_id'];

        if (!filter_var($product_id, FILTER_VALIDATE_INT) || $product_id < 1) {
            echo "<div class='alert alert-danger'>
            Please enter a valid Product ID.
          </div>";
            exit();
        }

        $query = "SELECT name
                  FROM products
                  WHERE id = $product_id";

        $product_result = mysqli_query($connection, $query);

        if (mysqli_num_rows($product_result) == 0) {

            echo "<div class='alert alert-danger'>
                    Product not found
                  </div>";

        } else {

            $product = mysqli_fetch_assoc($product_result);

            $query = "SELECT
                        orders.id AS order_id,
                        customers.name AS customer_name,
                        customers.salary
                      FROM order_details
                      JOIN orders
                        ON order_details.order_id = orders.id
                      JOIN customers
                        ON orders.customer_id = customers.id
                      WHERE order_details.product_id = $product_id
                      ORDER BY customers.salary DESC";

            $result = mysqli_query($connection, $query);

            $times_sold = mysqli_num_rows($result);
            ?>

            <h4 class="mb-3">
                Product: <?php echo $product['name']; ?>
            </h4>

            <p>
                <strong>Number of times sold:</strong>
                <?php echo $times_sold; ?>
            </p>

            <table class="table table-bordered table-striped">

                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer Name</th>
                        <th>Salary</th>
                    </tr>
                </thead>

                <tbody>

                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                        <tr>
                            <td><?php echo $row['order_id']; ?></td>
                            <td><?php echo $row['customer_name']; ?></td>
                            <td><?php echo $row['salary']; ?></td>
                        </tr>

                    <?php } ?>

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