<?php
$title = 'Household';

require_once 'lib/header.php';
require_once 'db/conn.php';

// $results = $crud->getSpecialties();
if (isset($_POST['submit'])) {
  //extract values from the $_POST array
  $email = $_POST['email'];
  $postal_code = $_POST['postal_code'];
  $square_footage = $_POST['square_footage'];
  $household_type = $_POST['household_type'];
  $heating_setting = $_POST['heating_setting'];
  $cooling_setting = $_POST['cooling_setting'];
  //call function to insert and track if success or not
  $isSuccess = $crud->insertHouseholds($email, $postal_code, $square_footage, $household_type, $heating_setting, $cooling_setting);

  if ($isSuccess) {
    // echo '<h1 class="text-center text-success">You Have Been Registered!</h1>';
    include 'includes/successmessage.php';
  } else {
    // echo '<h1 class="text-center text-danger">There was an error in processing!</h1>';
    include 'includes/errormessage.php';
  }
}

?>
<h1>Enter household info</h1>
<form action="appliance.php" class="form" method="post">

  <div class="mb-3">
    <label for="email" class="form-label">Pleasse enter your email address:</label>
    <input type="email" name="email" id="email" required class="form-control" />
  </div>
  <div class="mb-3">
    <label for="postal_code" class="form-label">Please enter your five digit postal code:</label>
    <input type="text" name="postal_code" maxlength="5" pattern="[0-9]{5}" id="postal_code" required class="form-control" />
  </div>
  <div class="mb-3">
    <label for="househod_type" class="form-label">Home Type: </label>
    <select type="text" name="household_type" id="household_type" required class="form-control">
      <option value="House">House</option>
      <option value="apartment">apartment</option>
      <option value="townhouse">townhouse</option>
      <option value="condominium">condominium</option>
      <option value="mobile home">mobile home</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="square_footage" class="form-label">Square footage:</label>
    <input type="number" name="square_footage" min="1" max="100000" id="square_footage" required class="form-control" />
  </div>
  <div class="mb-3">
    <label for="heating_setting" class="form-label">Thermostat setting for heating:</label>
    <input type="number" name="heating_setting" min="70" max="90" id="heating_setting" class="form-control" value="72" />
  </div>
  <div class="mb-3">
    <label for="cooling_setting" class="form-label">Thermostat setting for cooling:</label>
    <input type="number" name="cooling_setting" min="60" max="75" id="cooling_setting" class="form-control" value="68" />
  </div>

  <div class="">
  <button type="submit" class="btn btn-primary btn-block" name="submit">Next</button>
  </div>


</form>


<br />
<br />
<?php require_once 'lib/footer.php'; ?>
