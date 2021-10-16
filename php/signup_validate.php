<?php

include 'connection.php';

$full_name = trim(mysqli_real_escape_string($con, $_POST['full_name']));
$reg_no = trim(mysqli_real_escape_string($con, $_POST['reg_no']));
$DOB = trim(mysqli_real_escape_string($con, $_POST['DOB']));
$phone_no = trim(mysqli_real_escape_string($con, $_POST['phone_no']));
$email_id = trim(mysqli_real_escape_string($con, $_POST['email_id']));

if ($email_id == "" || $reg_no == "" || $DOB == "" || $phone_no == "" || $full_name == "") {
    echo "fieldempty";
} else if (!filter_var($email_id, FILTER_VALIDATE_EMAIL)) {
    echo "emailwrongformat";
}  else if (preg_match("/[0-9]/", $full_name)) {
    echo "nameinvalid";
} else if (preg_match("/[a-zA-Z]/", $phone_no)) {
    echo "contactinvalid";
} else if (strlen($phone_no) < 10) {
    echo "shortcontact";
} else {

    $query = "SELECT * FROM Members WHERE email_id = '$email_id'";
    $check = mysqli_query($con, $query);

    if (mysqli_num_rows($check) > 0) {
        echo "existingmember";
    } else {
        $query = "INSERT INTO Members (full_name, reg_no, DOB, phone_no, email_id) VALUES('$full_name', '$reg_no', '$DOB', '$phone_no', '$email_id')";

        if (mysqli_query($con, $query) == true) {
            echo "registrationsuccess";
        } else {
            echo "servererror";
        }
    }
}
?>
