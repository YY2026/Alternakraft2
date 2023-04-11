<?php
$title = 'Appliance';

require_once 'lib/header.php';
require_once 'db/conn.php';

$results = $crud->getAppliances();

?>
<h1>Appliances</h1>
<h2>You have added the following appliances to your household:</h2>


<table class="table">
    <tr>
        <th>Appliance #</th>
        <th>Type</th>
        <th>Manufacturer</th>
        <th>Model</th>
        <th> </th>
    </tr>

    <?php
    while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo $r['appliance_num']; ?></td>
            <td><?php echo $r['appliance_type']; ?></td>
            <td><?php echo $r['manufacturer_name']; ?></td>
            <td><?php echo $r['model_name']; ?></td>
            <td>
                <a onclick="return confirm('Are you sure you want to delete this appliance?')" href="deleteappliance.php?id=<?php echo $r['attendee_id']; ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php } ?>


</table>
<div class="Input-Group">
    <a href="appliance.php" class="btnNext" id="appList-lnkAddMore">+Add another appliance</a>
</div>
<div class="">
    <a href="powergenerator.php" class="btn btnNext width-50 ml-auto"  id="appList-btnNext">Next</a>
</div>

<br />
<br />
<?php require_once 'lib/footer.php'; ?>
