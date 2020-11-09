<?php
Class A {
    public function line ($a,$b){

        if($a = 0) {
            return null;
        }

        return $this->x=(-$b)/$a;
    }
    
    protected $x;
}

Class B extends A {
    protected function discrim ($ab,$bb,$cb){

        $DIS=$bb**2-4*$ab*$cb;
        return $DIS;
    }
    public function quatro ($a,$b,$c,$DIS){

        if ($a == 0){
            return $this->line($b,$c);
        }

        if ($DIS > 0){
            return $this->x=array(
                ((-$b)+$DIS)/2*$a,
                ((-$b)-$DIS)/2*$a
            );
        }

        if ($DIS == 0){
            return $this->x=(-$b)/2*$a;
        }

        return $this->x=null;
    }
}
$q = new A ();
$w = new B ();
$q->line(2,2);
$w->quatro(5,-14,17);
?>