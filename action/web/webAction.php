<?php 
session_start();
include('./controller/webController.php'); 

if(!empty($_GET['action']))
{
  switch($_GET['action'])
  { 
     case "STEP1":
        if(isset($_POST['submit']))
        {
            $firstname = filter_input(INPUT_POST, "firstname", FILTER_SANITIZE_STRING);
            $lastname = filter_input(INPUT_POST, "lastname", FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
            $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING);
            $code = rand(6666,9999);
            if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($phone) && !empty($code))
            {
                try 
                {
                    $portCont->step1Consultation($firstname, $lastname, $email, $phone, $code);
                    Header('Location:?view=CONSULTATION&step=STEP2&code='.$code.'&message=success');
                }
                catch(Exception $e)
                {
                    Header('Location:?view=CONSULTATION&message=failed');
                }
            }
        }
        break;
        case "STEP2":
            if(isset($_POST['submit']))
            {
                $code = filter_input(INPUT_POST, "code", FILTER_SANITIZE_STRING);
                $credit_goals = filter_input(INPUT_POST, "credit_goals", FILTER_SANITIZE_STRING);
                $credit_score = filter_input(INPUT_POST, "credit_score", FILTER_SANITIZE_STRING);
                $employment_status = filter_input(INPUT_POST, "employment_status", FILTER_SANITIZE_STRING);
                $housing_status = filter_input(INPUT_POST, "housing_status", FILTER_SANITIZE_STRING);
                if(!empty($code) && !empty($credit_goals) && !empty($credit_score) && !empty($employment_status) && !empty($housing_status))
                {
                    try 
                    {
                        $portCont->step2Consultation($code, $credit_goals, $credit_score, $employment_status, $housing_status);
                        Header('Location:?view=CONSULTATION&step=STEP3&code='.$code.'&message=success');
                    }
                    catch(Exception $e)
                    {
                        Header('Location:?view=CONSULTATION&message=failed');
                    }
                }
            }
        break;
        case "STEP3":
            if(isset($_POST['submit']))
            {
                $code = filter_input(INPUT_POST, "code", FILTER_SANITIZE_STRING);
                $holding_credit_back = filter_input(INPUT_POST, "holding_credit_back", FILTER_SANITIZE_STRING);
                $disputed = filter_input(INPUT_POST, "disputed", FILTER_SANITIZE_STRING);
                $money_invest = filter_input(INPUT_POST, "money_invest", FILTER_SANITIZE_STRING);
                $message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING);
                $consultation_time = filter_input(INPUT_POST, "consultation_time", FILTER_SANITIZE_STRING);
                if(!empty($code) && !empty($holding_credit_back) && !empty($disputed) && !empty($money_invest) && !empty($message) && !empty($consultation_time))
                {
                    try 
                    {
                        $portCont->step3Consultation($code, $holding_credit_back, $disputed, $money_invest, $message, $consultation_time);
                        Header('Location:?view=CONSULTATION&step=FINAL&code='.$code.'&message=success');
                    }
                    catch(Exception $e)
                    {
                        Header('Location:?view=CONSULTATION&message=failed');
                    }
                }
            }
        break;
        case "NEWSLETTER":
        if(isset($_POST['submit']))
        {
            $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
            if(!empty($email))
            {
                try
                {
                    $portCont->insertNewsLetter($email);
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

?>