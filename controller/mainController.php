<?php
include('../../connection/connection.php');

class accountCont extends DBController
{
    function accountAgent($agent_id)
    {
        $query = "SELECT * FROM lp_agent LA WHERE LA.agent_id = ?";

        $params = array(
        array("param_type" => "i", "param_value" => $agent_id)
        );

        $result = $this->getDBResult($query, $params);
        return $result;
    }

    function accountAdmin($admin_id)
    {
        $query = "SELECT * FROM lp_admin LA WHERE LA.admin_id = ?";

        $params = array(
        array("param_type" => "i", "param_value" => $admin_id)
        );

        $result = $this->getDBResult($query, $params);
        return $result;
    }

    function getAaccountActivity($agent_id)
    {
        $query = "SELECT * FROM lp_agent_activity LAA WHERE LAA.agent_id = ?";

        $params = array(
        array("param_type" => "i", "param_value" => $agent_id)
        );

        $result = $this->getDBResult($query, $params);
        return $result;
    }

    function getAaccountActivityAdmin($admin_id)
    {
        $query = "SELECT * FROM lp_admin_activity LAA WHERE LAA.admin_id = ?";

        $params = array(
        array("param_type" => "i", "param_value" => $admin_id)
        );

        $result = $this->getDBResult($query, $params);
        return $result;
    }

    function uploadDisposition($fullname, $phone, $email, $disposition, $created_by)
    {
        $query = "INSERT INTO lp_agent_disposition  (fullname, phone, email, disposition, created_by) VALUES (?,?,?,?,?)";

        $params = array(
        array("param_type" => "s", "param_value" => $fullname),
        array("param_type" => "s", "param_value" => $phone),
        array("param_type" => "s", "param_value" => $email),
        array("param_type" => "s", "param_value" => $disposition),
        array("param_type" => "i", "param_value" => $created_by)
        );

        $this->insertDB($query, $params);
    }

    function myAgentSpecificDisposition($agent_id)
    {
        $query = "SELECT LAD.*, LA.email as agent FROM lp_agent_disposition LAD LEFT JOIN lp_agent LA ON LAD.created_by = LA.agent_id WHERE LA.agent_id = ?";

        $params = array(
        array("param_type" => "i", "param_value" => $agent_id)
        );

        $result = $this->getDBResult($query, $params);
        return $result;
    }

    function myDisposition()
    {
        $query = "SELECT LAD.*, LA.email as agent FROM lp_agent_disposition LAD LEFT JOIN lp_agent LA ON LAD.created_by = LA.agent_id";
        $result = $this->getDBResult($query);
        return $result;
    }

    
}

$portCont = new accountCont();
