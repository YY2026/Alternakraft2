<?php
$title = 'Appliance';

require_once 'lib/header.php';
require_once 'db/conn.php';

$results = $crud->getManufacturers();

?>

<h1>Add Appliance</h1>
<h2>Please provide the air handler details for the appliance.</h2>
<form action="appliancelist.php" class="form" method="post">


    <div class="mb-3">
        <label for="household_type" class="form-label">Appliance Type: </label>
        <select type="text" name="household_type" id="household_type" required class="form-control" >
            <option selected="true" disabled="disabled" value="Air handler"  >Air handler</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="manufacturer_name" class="form-label">Manufacturer:</label>
        <select class="form-select" id="manufacturer_name" name="manufacturer_name">
            <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                <option value="<?php echo $r['manufacturer_name']; ?>"><?php echo $r['manufacturer_name']; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class ="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="air_conditioner" id="air_conditioner">
            <label class="form-check-label ml-2" for="air_conditioner">
                Air Conditioner
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="heater" id="heater">
            <label class="form-check-label ml-2" for="heater">
                Heater
            </label>
        </div>
        
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="heat_pump" id="heat_pump">
            <label class="form-check-label ml-2" for="heat_pump">
                Heat Pump
            </label>
        </div>
    </div>
    
    <div class="mb-3">
        <label for="model_name" class="form-label">Model Name:</label>
        <input type="text" name="model_name" id="model_name" class="form-control"  />
    </div>
    <div class="mb-3">
        <label for="EER" class="form-label">Energy Efficiency Ratio:</label>
        <input type="number" step="0.01"  min='0' max="20" name="EER" id="EER" class="form-control"  />
    </div>
    <div class="mb-3">
        <label for="BTU_rating" class="form-label">BTU Rating:</label>
        <input type="number" name="BTU_rating" id="BTU_rating" class="form-control" value="1540" />
    </div>

    <div class="">
        <button type="submit" class="btn btn-primary btn-block" name="submit">Add</button>
    </div>


</form>


<br />
<br />
<?php require_once 'lib/footer.php'; ?>
