<?php
class User extends CI_Controller
{
    public function index()
    {
        echo "Hi You";
    }
    public function adduser()
    {
        echo "This is add user ";
    }
    public function saymyname($name = "Thamnoon", $lastname ="Boonmai")
    {
     
        echo "Your name is : ".$name, " " .$lastname;
    }
    
}
