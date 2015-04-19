<?php
namespace ninja\Product;

class Product
{

	private $price;
	private $description;
	private $quantity;
	private $city;

	public function __construct($description, $price, $quantity, $city)
	{
		$this->description = $description;
		$this->price = $price;
		$this->quantity = $quantity;
		$this->city = $city;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function getCity()
	{
		return $this->city;
	}

}