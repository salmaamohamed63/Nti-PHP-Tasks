<?php
require '../auth.php';

include('../layout/header.php');

require '../dbc.php';

$query = "SELECT 
                e.name AS Employee,
                m.name AS Manager
          FROM employees e
          LEFT JOIN employees m
          ON e.manager_id = m.id";

$result = mysqli_query($connection, $query);
?>

<div class="container mt-5">

    <h2 class="mb-4">Employees and Managers</h2>

    <table class="table table-bordered table-striped">

        <thead>
            <tr>
                <th>Employee</th>
                <th>Manager</th>
            </tr>
        </thead>

        <tbody>

            <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                <tr>
                    <td>
                        <?php echo $row['Employee']; ?>
                    </td>

                    <td>
                        <?php 
                        echo $row['Manager'] ?? 'No Manager'; 
                        ?>
                    </td>
                </tr>

            <?php } ?>

        </tbody>

    </table>

</div>

<?php
include('../layout/footer.php');
?>