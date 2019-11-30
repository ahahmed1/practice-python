<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

    class people {

           public $brother;
           public $sister;
           public $father;
           public $sheikh = "bin Faqi";


    

    public function relation(){

        return "called yesterday";
    }


    public function __construct($x, $y, $z){

            $this->brother=$x;
            $this->sister=$y;
            $this->father=$z;


    }

    public function __destruct(){

        
       echo " removed $this->brother ";
       echo " removed $this->sister" ;
       
    }

}

$in1 = new people("same mother", "same father", "same sister");

echo $in1 -> brother."<br>". "and". "  ";
echo $in1 -> sister. "<br>";
echo $in1 -> sheikh. "<br>";
echo "<h1>below is a new class</h1>"."<br>";
echo"*****************************"."<br>";
echo"<h3>inherited class.</h3>"."<br>";



class closerelated extends people{

    public $grandy;
    public $sheikh = "bin faqiyyi";
    
    public function __construct($x, $y, $z, $h){

        $this -> grandy = $h;
        

        parent:: __construct($x, $y, $z,);

    }



}

$in3 = new closerelated("Abdul", "salim", "rashid", "grand woman");
echo $in3-> brother."<br>";
echo $in3-> sister."<br>";
echo $in3-> father."<br>";
echo $in3-> grandy."<br>";
echo $in3 ->sheikh."<br>";



//unset($brother);















    /*

class inlaws extends people{

    public $grandmother;

    public function __construct($x, $y, $z, $w){

        $this -> grandmother = $w;
        parent:: __construct($x, $y, $z);


    }


}

$in2 = new inlaws("sister-in-law", "brother-in-law", "Cousin-in-law","granny");

echo $in2 -> sister;
echo $in2 -> grandmother;









class people2 extends people{

    public $fatherinlaw;

    public function __construct($x, $y, $z, $g){

        $this-> fatherinlaw = $g;

        parent:: __construct($x, $y, $z,);


    }


}


$in2 = new people2("Eid", "Ramadan", "wow", "joey");
echo $in2 -> brother. "<br>";
echo $in2 -> fatherinlaw;











class cars{

    public $toyota;
    public $nissan;
    public $acura;

    public function __construct($x, $y, $z){

        $this-> toyota=$x;
        $this-> nissan=$y;
        $this-> acura=$z;

    }



   private function oil(){
        return "$this->toyota is made from japan";
    }
   public function oil1(){
        return "$this->nissan is made from china";
    }

   public function oil2(){
        return "$this->nissan is made from USA";
    }


    public function gett(){
        return $this-> toyota;
    }


    
    public function gett1(){
        return $this-> oil();
    }
}


$instan1 = new cars("corolla","Altima","Legend");
/*
//echo $instan1 -> gett()."<br>";
echo $instan1 -> gett1()."<br>";
//echo $instan1 -> nissan."<br>";
echo $instan1 -> oil1()."<br>";
//echo $instan1 -> acura."<br>";
echo $instan1 -> oil2()."<br>";

*/






/*
class trucks extends cars{

    //public $trucks = "monster trucks";
}


$instan6 = new trucks("corolla","Altima");

echo $instan6 -> toyota; */












































        
/*


class apartment{
    private $unitone;
    public $unitethree;
    public $unitefour;

    public function workorder(){

        return "$this->unitone what would like to fix ?";
        return "$this->unitegthree This is reserved for family";

    }

    
    public function __construct($x, $y, $z){

      $this-> unitone = $x;
      $this-> unitethree = $y;
      $this-> unitefour = $z;


    }

    public function gettor(){
       return $this->unitone;
    }

    public function getter(){
       return $this->unitone;

    }

    public function setter(){

    }


}





class condo extends apartment{

public $playgrond;

public function __construct($g){
    $this ->playground=$g;
}

parent::__construct($x, $y,);
}


//inheriter initiator is below 

$condo = new condo("new playgrohnd");

$instan1  = new apartment("single bed", " Two bedroom", "three bedroom");
$instan2  = new apartment("four bed", " five bedroom", "six bedroom");
$instan3  = new apartment("townhome bed", " condo bedroom", "duplex bedroom");

//echo $instan1 -> workorder(); 
//echo $instan2 -> workorder();
//echo $instan1 -> unitone. "<br>";
//echo $instan1 -> getter();
//echo $instan2 -> unitethree;

































class bike{

            protected $brakes;
            private $wheels;
            private $helmet;

            public function cycling(){

                
                return " $this->brakes Would like one?";
            }


                public function __construct($x, $y){

                    $this->brakes = $x;
                    $this->wheels = $y;

                }

                function gett(){
                    return "$this->brakes";
                }

               
                
        }

        $initial = new bike("$5 black wheels for bike", " $7 blue helmet ");
       // echo $initial->brakes."<br>";
       // echo $initial->wheels;
        //echo $initial->cycling();
        echo $initial->gett();*/
    ?>



    
</body>
</html>



