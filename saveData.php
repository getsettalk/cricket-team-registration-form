<?php
require('./conn.php');

// print_r($_POST);

$teamName = mysqli_real_escape_string($conn, $_POST['teamName']);
$teamLeader = mysqli_real_escape_string($conn, $_POST['teamLeader']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$Otherphone = mysqli_real_escape_string($conn, $_POST['Otherphone']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
if ($teamName !== '' || $teamLeader !== '' || $phone !== '') {

    $sqlCheck = " Select * from cric_team where phone = '$phone' ";
    $run = mysqli_query($conn, $sqlCheck) or die($conn->error);
    if (mysqli_num_rows($run) > 0) {
        $output['msg'] = "A team with this Phone Number $phone already registered. you can't do registration again.";
        $output['code'] = 999;
    } else {
        $sql = "INSERT INTO `cric_team`(`teamName`, `teamLeader`, `phone`, `otherPhone`, `address`, `reg_date`, `reg_time`, `ip`) 
            VALUES ('$teamName','$teamLeader','$phone','$Otherphone','$address','$date','$time','$ip')";

        if (mysqli_query($conn, $sql) or die($conn->error)) {
            $output['teamLeader'] = $teamLeader;
            $output['regDate'] = $date;
            $output['code'] = 222;
        } else {
            $output['msg'] = "faild to registration,something wrong ??";
            $output['code'] = 333;
        }
    }
} else {
    $output['msg'] = "Enter Team Name";
    $output['code'] = 777;
}
echo json_encode($output);
