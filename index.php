<?php

Class A
{
}

Class B extends A
{
    protected $a;
    protected $b;
    protected $c;
    protected $d;

    public function _construct($a,$b,$c,$d)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->d = $d;
    }


}

$a1 = new A();
$a2 = new A();
$a3 = new A();
$a4 = new A();
$b1 = new B($a1,$a2,$a3,$a4);
