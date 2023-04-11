<?php
$title = 'Index';

require_once 'lib/header.php';
require_once 'db/conn.php';

// $results = $crud->getSpecialties();
session_start()
?>


<h1>Welcome to Alternakraft!</h1>
<br/>
<h3>Please choose what you'd like to do:</h3>
<br/>
<div class="navbar-nav">
    <a class="nav-link active" aria-current="page" href="household.php">Enter my household info</a>
    <a class="nav-link" href="viewreports.php">View reports/query data</a>

</div>

<br />
<br />
<?php require_once 'lib/footer.php'; ?>
