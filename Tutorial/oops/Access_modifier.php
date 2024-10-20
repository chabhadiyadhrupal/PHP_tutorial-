<?php
class teacher{
    private function qui()
    {
        echo "important data";
    }
 function exam()
    {
        echo $this->qui();
    }
    protected function date()
    {
        echo " exam date is somthing ". $this->qui();
    }
}
class management extends teacher
{
    public function display()
    {
    echo $this->date();
    }
}
$call= new teacher;
 //$call->exam();
$man=new management;
// $man->exam()
$man->display();
?>