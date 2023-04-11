<?php
$title = 'Index';

require_once 'lib/header.php';

require_once 'db/conn.php';

$results = $crud->getHouseholds();

?>
<table class="table">
<?php
        while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
    <tr>
        <td><?php echo $r['email']; ?></td>
        <td><?php echo $r['postal_code']; ?></td>
        <td><?php echo $r['household_type']; ?></td>


        <!-- <td>
            <a href="view.php?id=<?php //echo $r['attendee_id']; ?>" class="btn btn-primary">View</a>
            <a href="edit.php?id=<?php //echo $r['attendee_id']; ?>" class="btn btn-warning">Edit</a>
            <a onclick="return confirm('Are you sure you want to delete this record?')"
             href="delete.php?id=<?php //echo $r['attendee_id']; ?>" class="btn btn-danger">Delete</a>


        </td> -->
    </tr>
<?php } ?>

</table>


<br />
<br />
<?php require_once './lib/footer.php'; ?>
