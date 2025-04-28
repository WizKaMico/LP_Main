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
           $id = $_POST['id']; 
           $status = $_POST['disposition'];
           $agent_id = $account[0]['agent_id'];
           if(!empty($id) && !empty($status) && !empty($agent_id))
           {
            try
            {
                $portCont->uploadDisposition($id, $status, $agent_id);
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
