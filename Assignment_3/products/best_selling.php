<?php
require '../auth.php';

include('../layout/header.php');

require '../dbc.php';

$query = "SELECT
                products.name,
                SUM(order_details.quantity) AS total_quantity,
                SUM(order_details.quantity * products.price) AS revenue
          FROM products
          JOIN order_details
          ON products.id = order_details.product_id
          GROUP BY products.id, products.name
          ORDER BY total_quantity DESC";

$result = mysqli_query($connection, $query);

?>

<div class="container mt-5">

    <h2 class="mb-4">Best Selling Products</h2>

    <table class="table table-bordered table-striped">

        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity Sold</th>
                <th>Revenue</th>
            </tr>
        </thead>

        <tbody>

            <?php

            while ($row = mysqli_fetch_assoc($result)) {

            ?>

                <tr>

                    <td>
                        <?php echo $row['name']; ?>
                    </td>

                    <td>
                        <?php echo $row['total_quantity']; ?>
                    </td>

                    <td>
                        <?php echo $row['revenue']; ?>
                    </td>

                </tr>

            <?php

            }

            ?>

        </tbody>

    </table>

</div>

<?php

include('../layout/footer.php');

?>