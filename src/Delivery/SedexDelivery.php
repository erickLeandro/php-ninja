<?php
namespace ninja\Delivery;

use ninja\Product\Product;

class SedexDelivery implements DeliveryInterface
{
	private $cities = [
		'CBA' => 200.00,
		'VG' => 300.00
	];

	public function getValue(Product $product)
	{
		return $this->cities[$product->getCity()];
	}
}