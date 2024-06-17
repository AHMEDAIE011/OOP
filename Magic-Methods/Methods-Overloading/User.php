<?php



class User
{

    public function welcome()
    {
        return 'welcome';
    }

    // protected function hello()
    // {
    //     return 'hello';
    // }

    protected function hello($args)
    {
       var_dump($args);
    }


    public function __call($name,$args)
    {
      // var_dump($name,$args);
    ////////////////////////////////////
    if (method_exists($this,$name)) {
    //    return $this->$name($args); //اول طريقه
      call_user_func_array([$this,$name],$args); //تاني طريقه
    }
    }

}














