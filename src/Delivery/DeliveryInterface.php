<?php

namespace ninja\Delivery;

use ninja\Product\Product;

interface DeliveryInterface
{
	public function getValue(Product $product);
}