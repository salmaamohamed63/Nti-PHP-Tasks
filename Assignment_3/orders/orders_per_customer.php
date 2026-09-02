<?php
require '../auth.php';

include('../layout/header.php');

require '../dbc.php';

$query = "SELECT 
                customers.name,
                COUNT(orders.id) AS orders_count
          FROM customers
          LEFT JOIN orders
          ON customers.id = orders.customer_id
          GROUP BY customers.id, customers.name";

$result = mysqli_query($connection, $query);

?>

<div class="container mt-5">

    <h2 class="mb-4">Orders per Customer</h2>

    <table class="table table-bordered table-striped">

        <thead>
            <tr>
                <th>Customer Name</th>
                <th>Number of Orders</th>
            </tr>
        </thead>

        <tbody>

            <?php

            while ($row = mysqli_fetch_assoc($result)) {

            ?>

                <tr>
                    <td><?php echo $row['name']; ?></td>

                    <td><?php echo $row['orders_count']; ?></td>
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