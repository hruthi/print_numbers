<?php

Class PrintNumber{

    function printNumbers($n = 100)
    {
    	if(isset($n) && is_numeric($n) && $n >=1)
    	{
    		for($i=1;$i<=$n;$i++)
	    	{
	    		$this->isDivisibleBy3and5($i) || 
	    		$this->isDivisibleBy3($i) || 
	    		$this->isDivisibleBy5($i) || 
	    		$this->printValue($i);		
	    	}
	    	return true;
    	}else{
    		return false;
    	}
    	
    }

    public function isDivisibleBy3and5($num)
    {
    	return ($num%3==0 && $num%5==0 && $this->printValue('Linianos'));
    }

    public function isDivisibleBy3($num)
    {
    	return ($num%3==0 && $this->printValue('Linio'));
    }

    public function isDivisibleBy5($num)
    {
    	return ($num%5==0 && $this->printValue('It'));
    }

    public function printValue($value)
    {
    	print($value);
    	echo "\t";
    	return true;
    }	
}
