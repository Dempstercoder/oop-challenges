<?php

// Create a class, Stringy in the App\Redux namespace, that performs a series of transformations on a string. You can use the get() method to get the final result.

namespace App\Redux; 

class Stringy
{
    private $string; // add property 


    public function __construct($string)
    {
        $this->string =$string;
    }


    public function lower()
    {
        $this->string = strtolower($this->string);
        return $this;
    }

    public function upper()
    {
        $this->string = strtoupper($this->string);
        return $this;
    }

    public function append($string)
    {
        $this->string .= $string; // 
        return $this;
    }

    public function repeat($num)
    {
        $output = ""; //empty string

        for ($i = 0; $i < $num; $i += 1) {
            $output .= $this->string; //
        }

        $this->string = $output; // equal to string $output = "", so creates it into a string
        return $this;
    }

    public function get()
    {
       return $this->string; //
    }

}