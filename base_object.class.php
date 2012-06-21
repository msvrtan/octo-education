<?php

class base_object
{

    public function load($user_id)
    {

        $this->user_id  = $user_id;
        $this->active   = 1;
        $this->username = 'Miro';
        $this->password = '123';

        return true;

    }

    public function save()
    {

        return true;
    }

}

?>
