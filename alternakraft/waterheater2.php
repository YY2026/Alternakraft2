<?php
$title = 'Appliance';

require_once 'lib/header.php';
require_once 'db/conn.php';

$results = $crud->getManufacturers();

?>

<h1>Add Appliance</h1>
<h2>Please provide the water heater details for the appliance.</h2>
<form action="appliancelist.php" class="form" method="post">


    <div class="mb-3">
        <label for="appliance_type" class="form-label">Appliance Type: </label>
        <select type="text" name="appliance_type" id="appliance_type" required class="form-control">

            <option selected="true" disabled="disabled" value="Water heater">Water heater</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="manufacturer_name" class="form-label">Manufacturer:</label>
        <select class="form-select" id="manufacturer_name" name="manufacturer_name">
            <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                <option value="<?php echo $r['manufacturer_name']; ?>"><?php echo $r['manufacturer_name']; ?></option>
            <?php } ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="model_name" class="form-label">Model Name:</label>
        <input type="text" name="model_name" id="model_name" required class="form-control" />
    </div>
    <div class="mb-3">
        <label for="energy_source" class="form-label">Energy Source:</label>
        <!-- <input type="number" step="0.01" min='0' max="20" name="energy_source" id="energy_source" -->
        <!-- class="form-control" /> -->
        <select name="energy_source" id="energy_source">
            <option value="0">Select</option>
            <option value="electric">Electric</option>
            <option value="gas">Gas</option>
            <option value="thermosolar">Thermosolar</option>
            <option value="heat_pump">Heat Pump</option>
        </select>
        <?php
        if(isset($_GET['energy_source']) == '0') {
          echo 'Please select a energy source.';
        }
        ?>
    </div>
    <div class="mb-3">
        <label for="capacity" class="form-label">Capacity:</label>
        <input type="number" name="capacity" id="capacity" required class="form-control"  />
    </div>
    <div class="mb-3">
        <label for="BTU_rating" class="form-label">BTU Rating:</label>
        <input type="number" name="BTU_rating" id="BTU_rating" class="form-control" value="1540" />
    </div>

    <div class="mb-3">
        <label for="temperature_setting	" class="form-label">Temperature:</label>
        <input type="number" name="BTU_rating" id="temperature_setting	" class="form-control" value="" />
    </div>

    <div class="">
        <button type="submit" class="btn btn-primary btn-block" name="submit">Add</button>
    </div>


</form>


<br />
<br />
<?php require_once 'lib/footer.php'; ?>
