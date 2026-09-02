<?php
require '../auth.php';

include('../layout/header.php');

require '../dbc.php';

$query = "SELECT name, salary
          FROM customers
          WHERE salary > 20000";

$result = mysqli_query($connection, $query);

?>

<table class="table table-striped">

    <thead>
        <tr>
            <th>Name</th>
            <th>Salary</th>
        </tr>
    </thead>

    <tbody>

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>

            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['salary']; ?></td>
            </tr>

        <?php
        }
        ?>

    </tbody>

</table>

<?php
include('../layout/footer.php');
?>
