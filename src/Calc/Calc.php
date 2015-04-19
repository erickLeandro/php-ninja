<?php

namespace ninja\Calc;

use ninja\Delivery\DeliveryInterface;
use ninja\Prices\PriceInterface;
use ninja\Product\Product;

class Calc
{
	private $delivery;
	private $price;
	private $product;
	
	public function __construct(PriceInterface $price, DeliveryInterface $delivery, Product $product)
	{
		$this->delivery = $delivery;
		$this->price = $price;
		$this->product = $product;
	}

	public function calc()
	{
		return $this->getValueForProduct() + $this->getValueForDelivery();
	}

	public function getValueForProduct()
	{
		return $this->price->getValue($this->product);
	}

	public function getValueForDelivery()
	{
		return $this->delivery->getValue($this->product);
	}
}