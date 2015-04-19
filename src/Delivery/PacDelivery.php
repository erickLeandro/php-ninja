<?php
namespace ninja\Delivery;

use ninja\Product\Product;

class PacDelivery implements DeliveryInterface
{
	private $cities = [
		'CBA' => 50.00,
		'VG' => 70.00
	];

	public function getValue(Product $product)
	{
		return $this->cities[$product->getCity()];
	}
}