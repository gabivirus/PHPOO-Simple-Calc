<?php


/*
 * Objeto Aluno para trabalhar com os dados
*/

class Calc
{
	private $v1 = 0;
	private $v2 = 0;

	public function setNum1($val)
	{
		$this->num1 = $val;
	}
	public function getNum1()
	{
		return $this->num1;
	}

	public function setNum2($val)
	{
		$this->num2 = $val;
	}
	public function getNum2()
	{
		return $this->num2;
	}

	public function sum()
	{
		echo $this->num1. " + ". $this->num2. " = ". ($this->num1 + $this->num2);
	}

	public function sub()
	{
		echo $this->num1. " - ". $this->num2. " = ". ($this->num1 - $this->num2);
	}

	public function mul()
	{
		echo $this->num1. " * ". $this->num2. "=". ($this->num1 * $this->num2);
	}

	public function div()
	{
		echo $this->num1. " / ". $this->num2. "=". ($this->num1 / $this->num2);
	}
}