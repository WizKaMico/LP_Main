<?php 

include('../../controller/mainController.php');
include('../../session/admin_session.php'); 
$account = $portCont->accountAdmin($admin_id);
$admin_id = $account[0]['admin_id'];
if(!empty($_GET['action']))
{
  switch($_GET['action'])
  { 
    
  }
}
