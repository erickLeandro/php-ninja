<?php

namespace test\Calc;

use PHPUnit_Framework_TestCase as PHPUnit;
use ninja\Calc\Calc;
use ninja\Prices\SummerPrice;
use ninja\Prices\WinterPrice;
use ninja\Delivery\PacDelivery;
use ninja\Delivery\SedexDelivery;
use ninja\Product\Product;

class CalcTest extends PHPUnit
{
	private $summer;
	private $winter;
	private $sedex;
	private $pac;

	public function __construct()
	{
		$this->summer = new SummerPrice();
		$this->winter = new WinterPrice();
		$this->sedex = new SedexDelivery();
		$this->pac = new PacDelivery();
	}

	public function testSummerPriceAndSedexDelivery()
	{
		$calc = new Calc($this->summer, 
						 $this->sedex, 
						 new Product('Bola de volei', 100.00, 1, 'CBA'));

		$this->assertEquals(80.00, $calc->getValueForProduct());				 		
		$this->assertEquals(200.00, $calc->getValueForDelivery());				 		
		$this->assertEquals(280.00, $calc->calc());
	}
}