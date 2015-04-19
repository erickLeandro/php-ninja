<?php

namespace ninja\Prices;

use ninja\Product\Product;

interface PriceInterface
{
	public function getValue(Product $product);
}