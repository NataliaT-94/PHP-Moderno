<?php 
//__invoke(): Le da el poder al objeto creado de ejecutarse como una función.

class Add{
    public function __invoke($a, $b){
        return $a * $b;
    }
}

$add = new Add();//creamos el objeto
echo $add(2, 4);//lo ejecutamos como funcion

class Validator{
    private int $min;
    private int $max;
    public $error;

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }
    public function __invoke($text)
    {
        $long = strlen($text);

        if ($long < $this->min|| $long > $this->max){
            $this->error = "El texto es muy pequeño o muy grande";
            return false;
        }

        return true;
    }
}

$val = new Validator(1,10);//cramos el objeto, con minimo de 1 y maximo de 10
if ($val("dfgjkñ")){
    echo "Todo bien";
} else {
    echo $val->error;
}; //si es menor a 10 es true, sino es false





?>