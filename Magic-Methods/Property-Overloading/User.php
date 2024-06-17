<?php



class User
{
    public $ahmed;
    protected $ali;
    private $sayed = 11 ;
    ///////////////////
    public $key; //  //new property اول طريقه انك تعمل 
    public $Overloading = [];
    //////////////////////
  


///////////////// كل دا بينطبق علي المتغيرات ((اللي مش موجوده والبروتيكتت وال برايفت  ///////////////
  public function __set($key,$value)
      {
        var_dump($key,$value);
        $this->key = $value; //new property اول طريقه انك تعمل 
        array_push($this->Overloading ,[$key => $value]);  // new array تاني طريقه انك تعمل 
        $this->Overloading[$key] = $value; //اللي تحتarray _key خاصه بال  
    }



    

///////////////
//  في هذا المثال نقوم بطباعه المتغيرات من النوع  برايفت وبروتيكتت

    public function __get($key)
    {
       // var_dump($key); 
        if (property_exists($this ,$key)) 
        {
           return $this->$key;
        }
        ///////////////////////////////////////////////////

        // if (in_array($this->Overloading)) 
        // {
        //    return $this->Overloading[$key];
        // }

        ///////////////////////////////////////////////////

        if (array_key_exists($key, $this->Overloading)) 
        {
           return $this->Overloading[$key];

        }else {
            return 'dos not exists';

        }
        ///////////////////////////////////////////////////
    }


}














