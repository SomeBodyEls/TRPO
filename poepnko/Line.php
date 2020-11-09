<?php
namespace poepnko;
Class Line{
    public function line ($a,$b){

        if(0 === $a) {
            return null;
        }

        return $this->x=-($b/$a);
    }

    protected $x;
}
?>