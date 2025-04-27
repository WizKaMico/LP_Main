<?php
include('./connection/connection.php');

class webCont extends DBController
{

    function blogPost()
    {
        $query = "SELECT * FROM lp_blogs LB";
        $result = $this->getDBResult($query);
        return $result;
    }

    function insertNewsLetter($email)
    {
        $query = "INSERT INTO lp_newsletter (email) VALUES (?)";
        
        $params = array(
            array("param_type" => "s", "param_value" => $email)
        );
    
        $this->insertDB($query, $params);
    }

    function insertTalkToUs($name, $email, $message, $phone)
    {
        $query = "INSERT INTO lp_talkToUs (name, email, phone, message) VALUES (?,?,?,?)";
        
        $params = array(
            array("param_type" => "s", "param_value" => $name),
            array("param_type" => "s", "param_value" => $email),
            array("param_type" => "s", "param_value" => $phone),
            array("param_type" => "s", "param_value" => $message)
        );
    
        $this->insertDB($query, $params);
    }

    function step1Consultation($firstname, $lastname, $email, $phone, $code)
    {
        $query = "INSERT INTO lp_consultation (firstname, lastname, email, phone, code) VALUES (?, ?, ?, ?, ?)";

        $params = array(
        array("param_type" => "s", "param_value" => $firstname),    
        array("param_type" => "s", "param_value" => $lastname),  
        array("param_type" => "s", "param_value" => $email),  
        array("param_type" => "s", "param_value" => $phone),  
        array("param_type" => "i", "param_value" => $code)
        );

        $this->insertDB($query, $params);
    }

    function checkConsultation($code)
    {
        $query = "SELECT * FROM lp_consultation LC WHERE LC.code = ?";

        $params = array(
        array("param_type" => "i", "param_value" => $code)
        );

        $result = $this->getDBResult($query, $params);
        return $result;
    }

    function step2Consultation($code, $credit_goals, $credit_score, $employment_status, $housing_status)
    {
        $query = "UPDATE lp_consultation SET credit_goals = ?, credit_score = ?, employment_status = ?, housing_status = ? WHERE code = ?";

        $params = array(
        array("param_type" => "s", "param_value" => $credit_goals),    
        array("param_type" => "s", "param_value" => $credit_score),  
        array("param_type" => "s", "param_value" => $employment_status),  
        array("param_type" => "s", "param_value" => $housing_status),  
        array("param_type" => "i", "param_value" => $code)
        );

        $this->updateDB($query, $params);
    }

    function step3Consultation($code, $holding_credit_back, $disputed, $money_invest, $message, $consultation_time)
    {
        $query = "UPDATE lp_consultation SET holding_credit_back = ?, disputed = ?, money_invest = ?, message = ?, consultation_time = ? WHERE code = ?";

        $params = array(
        array("param_type" => "s", "param_value" => $holding_credit_back),    
        array("param_type" => "s", "param_value" => $disputed),  
        array("param_type" => "s", "param_value" => $money_invest),  
        array("param_type" => "s", "param_value" => $message),  
        array("param_type" => "s", "param_value" => $consultation_time),  
        array("param_type" => "i", "param_value" => $code)
        );

        $this->updateDB($query, $params);
    }
}

$portCont = new webCont();

?>