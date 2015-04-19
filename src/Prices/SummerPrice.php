<?php
namespace ninja\Prices;

use ninja\Product\Product;

class SummerPrice implements PriceInterface
{
	public function getValue(Product $product)
	{
		return $product->getPrice() - ($product->getPrice() * 0.20);
	}
}