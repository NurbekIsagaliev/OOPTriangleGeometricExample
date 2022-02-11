<?php

class Triangle{
private $a;
private $b;
private $c;
 public function __construct($a,$b,$c){
     $this->a=$a;
     $this->b=$b;
     $this->c=$c;
}
public function is_valid(){
return $this->a+$this->b>$this->c &&
$this->a+$this->c>$this->b &&$this->b+$this->c>$this->a;
}}
$triangle=new Triangle(1,2,3);
if($triangle->is_valid()){
         echo "yes"."<br>";}
         else { echo "error"."<br>";}
$triangle=new Triangle(12,5,13);
if($triangle->is_valid()){
         echo "yes"."<br>";}
         else { echo "error"."<br>";}


