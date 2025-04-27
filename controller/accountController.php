<?php
include('../connection/connection.php');

class accountCont extends DBController
{
    function validateUser($email)
    {
        $query = "SELECT * FROM lp_agent LA WHERE LA.email = ?";

        $params = array(
        array("param_type" => "s", "param_value" => $email)
        );

        $result = $this->getDBResult($query, $params);
        return $result;
    }

    function loginAgent($email,$password)
    {
        $query = "SELECT LA.* FROM lp_agent LA WHERE LA.email = ? AND LA.password = ?";

        $params = array(
        array("param_type" => "s", "param_value" => $email),
        array("param_type" => "s", "param_value" => $password)
        );

        $result = $this->getDBResult($query, $params);
        return $result;
    }

    function loginAdmin($email,$password)
    {
        $query = "SELECT LA.* FROM lp_admin LA WHERE LA.email = ? AND LA.password = ?";

        $params = array(
        array("param_type" => "s", "param_value" => $email),
        array("param_type" => "s", "param_value" => $password)
        );

        $result = $this->getDBResult($query, $params);
        return $result;
    }

    function updateAgentCredentials($email,$password,$hashed)
    {
        $query = "UPDATE lp_agent SET password = ?, unhashed = ? WHERE email = ?";

        $params = array(
        array("param_type" => "s", "param_value" => $hashed),    
        array("param_type" => "s", "param_value" => $password),  
        array("param_type" => "s", "param_value" => $email)
        );

        $this->updateDB($query, $params);
    }

    function AgentActivityTracker($agent_id,$activity)
    {
        $query = "INSERT INTO lp_agent_activity (agent_id,activity) VALUES (?,?)";

        $params = array(
        array("param_type" => "i", "param_value" => $agent_id),    
        array("param_type" => "s", "param_value" => $activity)
        );

        $this->insertDB($query, $params);
    }

    function AdminActivityTracker($admin_id,$activity)
    {
        $query = "INSERT INTO lp_admin_activity (admin_id,activity) VALUES (?,?)";

        $params = array(
        array("param_type" => "i", "param_value" => $admin_id),    
        array("param_type" => "s", "param_value" => $activity)
        );

        $this->insertDB($query, $params);
    }
}

$portCont = new accountCont();
