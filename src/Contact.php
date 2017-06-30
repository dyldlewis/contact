<?php
class Contact
{
    private $user_name;
    private $number;
    private $address;

    function __construct($user_name, $number, $address)
    {
        $this->user_name = $user_name;
        $this->number = $number;
        $this->address = $address;
    }

    function setUserName($new_user_name)
    {
        $this->user_name = (string) $new_user_name;
    }

    function getUserName()
    {
        return $this->user_name;
    }

    function setNumber($new_number)
    {
        $this->number = $new_number;
    }

    function getNumber()
    {
        return $this->number;
    }

    function setAdress($new_address)
    {
        $this->address = (string) $new_address;
    }

    function getAddress()
    {
        return $this->address;
    }

    function save()
    {
        array_push($_SESSION['list_of_contacts'], $this);
    }

    static function getAll()
    {
        return $_SESSION['list_of_contacts'];
    }

    static function deleteAll()
    {
        $_SESSION['list_of_contacts'] = array();
    }
}
?>
