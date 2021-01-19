<?php
class User {
    public $name;
    public $lastname;
    public $age;
    public $email;
    public $subscription = false;
    public $plane_type;

    public function SetEmail($email){
        $this->email = $email;
    }

    public function SetSubscription($subscription){
        if ($subscription) {
            $this->subscription = true;
            $this->plane_type = 'pro';
        } else {
            $this->plane_type = 'guest';
        }
    }

    function __construct($_age){
        $this->age = $_age;
    }
}
?>
