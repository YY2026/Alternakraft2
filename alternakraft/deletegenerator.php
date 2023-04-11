<?php
require_once 'db/conn.php';

if (!$_GET['id']) {
    // echo 'error';
    include 'includes/errormessage.php';
} else {
    $id = $_GET['id'];
    //call delete function
    $result = $crud->deleteGenerator($id);
    //redirect to viewrecord
    if ($result) {
        header("Location: appliancelisst.php");
    } else {
        // echo '';
        include 'includes/errormessage.php';
    }
}
