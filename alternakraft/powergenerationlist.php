<?php
$title = 'Appliance';

require_once 'lib/header.php';
require_once 'db/conn.php';

$results = $crud->getGenerators();

?>
<h1>Power Generation</h1>
<h2>You have added these to your household:</h2>


<table class="table">
    <tr>
        <th>Num</th>
        <th>Type</th>
        <th>Monthly kWh</th>
        <th>Battery kWh</th>
        <th> </th>
    </tr>

    <?php
    while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo $r['generator_num']; ?></td>
            <td><?php echo $r['generator_type']; ?></td>
            <td><?php echo $r['monthly_kWh']; ?></td>
            <td><?php echo $r['battery_kWh']; ?></td>
            <td>
                <a onclick="return confirm('Are you sure you want to delete this generator?')" href="deletegenerator.php?id=<?php echo $r['attendee_id']; ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php } ?>


</table>
<div class="Input-Group">
    <a href="powergenerator.php" class="btnNext" id="appList-lnkAddMore">+Add more power</a>
</div>
<div class="">
    <a href="success.php" class="btn btnNext width-50 ml-auto"  id="appList-btnNext">Finish</a>
</div>

<br />
<br />
<?php require_once 'lib/footer.php'; ?>
