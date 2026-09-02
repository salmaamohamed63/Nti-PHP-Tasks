<?php
require '../auth.php';

include('../layout/header.php');

require '../dbc.php';

?>

<div class="container mt-5">

    <h2 class="mb-4">Products by Quantity</h2>

    <form method="POST" class="d-flex mb-4">

        <input type="number" name="quantity" class="form-control me-2" placeholder="Enter number" min="10" max="50"
            required>

        <button type="submit" class="btn btn-success">
            Submit
        </button>

    </form>

    <?php

    if (isset($_POST['quantity'])) {

        $quantity = $_POST['quantity'];

        $query = "SELECT 
                        products.name,
                        SUM(order_details.quantity) AS total_quantity
                  FROM products
                  JOIN order_details
                  ON products.id = order_details.product_id
                  GROUP BY products.id, products.name
                  HAVING SUM(order_details.quantity) > $quantity";

        $result = mysqli_query($connection, $query);

        ?>

        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Total Quantity Sold</th>
                </tr>
            </thead>

            <tbody>

                <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['total_quantity']; ?></td>
                    </tr>

                <?php } ?>

            </tbody>

        </table>

    <?php } ?>

</div>

<?php
include('../layout/footer.php');
?>