<?php
namespace User;

class User
{
    public $id;
    public $name;
    public $email;
    public $accountID;
    public $accountName;
    public $accountDescription;
    public function __construct($id, $name, $email, $accountID, $accountName, $accountDescription)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->account = new Account($accountID, $accountName, $accountDescription);
    }
}

class Account
{
    public $id;
    public $name;
    public $description;

    public function __construct($id, $name, $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    }
}