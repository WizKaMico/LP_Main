<?php 
session_start();
include('../controller/accountController.php'); 

if(!empty($_GET['action']))
{
  switch($_GET['action'])
  { 
    case "FORGOT":
        if(isset($_POST['submit']))
        {
            $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_STRING);
            if(!empty($email))
            {
                try
                {
                    $result = $portCont->validateUser($email);
                    if(!empty($result[0]['agent_id']))
                    {

                        Header('Location:?view=CHANGEPASSWORD&email='.$result[0]['email']);
                    }
                    else
                    {
                        Header('Location:?view=HOME&message=failed');
                    }
                    
                }
                catch(Exception $e)
                {
                    Header('Location:?view=HOME&message=failed');
                }
            }
        }
        break;
    case "CHANGEPASSWORD":
        if(isset($_POST['submit']))
        {
            $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_STRING);
            $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_STRING);
            $hashed = md5($password);
            if(!empty($email) && !empty($password) && !empty($hashed))
            {
                try
                {
                    $result = $portCont->updateAgentCredentials($email,$password,$hashed);
                    Header('Location:?view=HOME&email='.$email.'&message=success');
                }
                catch(Exception $e)
                {
                    Header('Location:?view=CHANGEPASSWORD&email='.$email.'&message=failed');
                }
            }
        }
        break;
      case "LOGIN":
        if(isset($_POST['submit']))
        {
            $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_STRING);
            $password = md5(filter_input(INPUT_POST,"password",FILTER_SANITIZE_STRING));
            if(!empty($email) && !empty($password))
            {
                try 
                {
                    $result = $portCont->loginAgent($email,$password);
                    $adminResult = $portCont->loginAdmin($email,$password);
                    if(!empty($result[0]['agent_id']))
                    {
                        $_SESSION['agent_id'] = $result[0]["agent_id"];
                        $agent_id = $result[0]["agent_id"];
                        $activity = 'LOGGED IN AT '.date('Y-m-d');
                        $portCont->AgentActivityTracker($agent_id,$activity);
                        Header('Location: ./agent/?view=HOME');
                    }
                    else if(!empty($adminResult[0]['admin_id']))
                    {
                        $_SESSION['admin_id'] = $adminResult[0]["admin_id"];
                        $admin_id = $adminResult[0]["admin_id"];
                        $activity = 'LOGGED IN AT '.date('Y-m-d');
                        $portCont->AdminActivityTracker($admin_id,$activity);
                        Header('Location: ./superadmin/?view=HOME');
                    }
                    else
                    {
                        Header('Location:?view=LOGIN&message=failed');
                    }
                }
                catch(Exception $e)
                {
                    Header('Location:?view=LOGIN&message=failed');
                }
            }
        }
        break;
  }
}

?>