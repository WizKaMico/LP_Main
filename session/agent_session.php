<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['agent_id']) || (trim($_SESSION['agent_id']) == '')) {
    header("location: ../?view=HOME");
    exit();
}
$agent_id=$_SESSION['agent_id'];

?>