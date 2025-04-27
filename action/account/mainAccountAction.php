<?php 

include('../../controller/mainController.php');
include('../../session/agent_session.php'); 
$account = $portCont->accountAgent($agent_id);
$agent_id = $account[0]['agent_id'];
if(!empty($_GET['action']))
{
  switch($_GET['action'])
  { 
     case "DISPOSITION":
        if(isset($_POST['submit']))
        {
           $fullname = $_POST['fullname']; 
           $phone = $_POST['phone']; 
           $email = $_POST['email'];
           $disposition = $_POST['disposition'];
           $created_by = $account[0]['agent_id'];
           if(!empty($disposition) && !empty($created_by))
           {
            try
            {
                $portCont->uploadDisposition($fullname, $phone, $email, $disposition, $created_by);
                Header('Location:?view=HOME&message=success');
            }
            catch(Exception $e)
            {
                Header('Location:?view=HOME&message=failed');
            }
           }
        }
        break;  
  }
}
