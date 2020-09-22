<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author 33950
 */
class Student {
    function __construct() { 
        $this->surname = ''; 
        $this->first_name = ''; 
        $this->status = '';
        $this->emails = array(); 
        $this->grades = array(); 
    }

    
    function add_email($which,$address) { 
        $this->emails[$which] = $address;     
    } 
    
    function add_grade($grade) { 
        $this->grades[] = $grade;       
    }
    
    function average() { 
        $total = 0; 
        foreach ($this->grades as $value) 
            $total += $value; 
        return $total / count($this->grades);      
    } 
    
    function toString() { 
        $result = $this->first_name . ' ' . $this->surname. "\n" . $this->status; 
        $result .= ' ('.$this->average().")\n"; 
        foreach($this->emails as $which=>$what) 
            $result .= $which . ': '. $what. "\n"; 
        $result .= "\n"; 
        return '<pre>'.$result.'</pre>';    
    }
}
