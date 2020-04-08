<?php


class QuadraticEquation
{
    private $a, $b, $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function get_a()
    {
        return $this->a;
    }

    public function get_b()
    {
        return $this->b;
    }

    public function get_c()
    {
        return $this->c;
    }

    public function getDiscriminant(){
        return $this->b*$this->b-(4*$this->a*$this->c);
    }


    public function getRoot1(){
        return $r1= (-$this->b+pow($this->getDiscriminant(),0.5))/(2*$this->a);
    }

    public function getRoot2(){
        return $r1= (-$this->b-pow($this->getDiscriminant(),0.5))/(2*$this->a);
    }

}