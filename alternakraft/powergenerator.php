<?php
$title = 'Appliance';

require_once 'lib/header.php';
require_once 'db/conn.php';

// $results = $crud->getManufacturers();

?>

<h1>Add power generation</h1>
<h2>Please provide power generation details.</h2>
<form action="powergenerationlist.php" class="form" method="post">


    <div class="mb-3">
        <label for="generation_type" class="form-label">Type: </label>
        <select type="text" name="generation_type" id="generation_type" required class="form-control">
            <option value="solar-electric">solar-electric</option>
            <option value="wind">wind</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="monthly_kWh" class="form-label">Monthly kWh:</label>
        <input type="text" name="monthly_kWh"  id="monthly_kWh" required class="form-control" value="300" />
    </div>
    <div class="mb-3">
        <label for="bettery_kWh" class="form-label">Storage kWh:</label>
        <input type="text" name="bettery_kWh" pattern="[0-9]" id="bettery_kWh" class="form-control" />
    </div>

    <div class="">
        <a href="success.php" class="btn btnNext" id="addPG-btnSkip">Skip</a>
        <button type="submit" class="btn btn-primary btn-block" name="submit">Add</button>

    </div>




</form>


<br />
<br />
<?php require_once 'lib/footer.php'; ?>
