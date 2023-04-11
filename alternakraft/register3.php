<?php
include('lib/database.php');
// written by GTusername1

if($showQueries){
  array_push($query_msg, "showQueries currently turned ON, to disable change to 'false' in lib/database.php");
}

//Note: known issue with _POST always empty using PHPStorm built-in web server: Use *AMP server instead
if( $_SERVER['REQUEST_METHOD'] == 'POST') {

  $enteredEmail = mysqli_real_escape_string($databse, $_POST['email']);
  $enteredPostal_code = mysqli_real_escape_string($database, $_POST['postal_code']);


    if (empty($enteredEmail)) {
      array_push($error_msg,  "Please enter an email address.");
    }

	   if (empty($enteredPostal_code)) {
			array_push($error_msg,  "Please enter a postal_code.");
	}

    if ( !empty($enteredEmail) && !empty($enteredPostal_code) )   {
        // Check if the email already exists in the Household table
        $query = "SELECT * FROM Household WHERE email='$enteredEmail'";
        $result = mysqli_query($databse, $query);
        include('lib/show_queries.php');

        if (mysqli_num_rows($result) > 0) {
            echo "The user already exists!";
        }

        // Check if the postal code exists in the Location table
        $result = mysqli_query($database, "SELECT * FROM Location WHERE postal_code='$postal_code'");
        if (mysqli_num_rows($result) == 0) {
            echo "Wrong postal code, please check and enter again";
        }
      }
?>

<?php include("lib/header.php"); ?>
<title>Household info</title>
</head>
<body>
    <div id="main_container">
        <div id="header">
            <div class="logo">
                <img src="img/gtonline_logo.png" style="opacity:0.5;background-color:E9E5E2;" border="0" alt="" title="GT Online Logo"/>
            </div>
        </div>

        <div class="center_content">
            <div class="text_box">

                <form action="login.php" method="post" enctype="multipart/form-data">
                    <div class="title">Enter household info</div>
                    <div class="login_form_row">
                        <label class="login_label">Email:</label>
                        <input type="text" name="email" value="michael@bluthco.com" class="login_input"/>
                    </div>
                    <div class="login_form_row">
                        <label class="login_label">PostalCode:</label>
                        <input type="password" name="password" value="michael123" class="login_input"/>
                    </div>
                    <input type="image" src="img/login.gif" class="login"/>
                    <form/>
                </div>

                <?php include("lib/error.php"); ?>

                <div class="clear"></div>
            </div>

            <!--
			<div class="map">
			<iframe style="position:relative;z-index:999;" width="820" height="600" src="https://maps.google.com/maps?q=801 Atlantic Drive, Atlanta - 30332&t=&z=14&ie=UTF8&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a class="google-map-code" href="http://www.embedgooglemap.net" id="get-map-data">801 Atlantic Drive, Atlanta - 30332</a><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></iframe>
			</div>
             -->
					<?php include("lib/footer.php"); ?>

        </div>
    </body>
</html>
