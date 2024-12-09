<?php
trait Logger
{
    public function log($mess)
    {
        echo "Logging ... : $mess" . "<br>";
    }
}

trait FileUpload
{
    public function Upload($mess)
    {
        echo "Uploading ... : $mess"  . "<br>";
    }
}


class User 
{
    use Logger , FileUpload ;

    public function createUser () {
        $this->log('logging');
        $this->Upload('333333');
    }
}

$user = new User();
$user->createUser();