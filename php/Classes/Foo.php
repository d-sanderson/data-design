<?php
namespace dsanderson3\DataDesign;

require_once(dirname(__DIR__,2) . "/vendor/autoload.php");

use



class Currency {

	private $currencyChange;

	private $currencyCircSupply;

	private $currencyId;


	private $currencyMarketCap;


	private $currencyPrice;


	private $currencyPricegraph;


	private $currencyVolume;



public function __consturct($newCurrencyChange, $newCurrencyCircSupply, $newCurrencyId, $newCurrencyMarketCap, $newCurrencyPrice, $newCurrencyPriceGraph, $newCurrencyVolume) {

	try {
		$this->setCurrencyChange($newCurrencyChange);
		$this->setCurrencyCircSupply($newCurrencyCircSupply);
		$this->setCurrencyId($newCurrencyId);
		$this->setCurrencyMarketCap($newCurrencyMarketCap);
		$this->setCurrencyPrice($newCurrencyPrice);
		$this->setCurrencyPriceGraph($newCurrencyPriceGraph);
		$this->setCurrencyVolume($newCurrencyVolume);
	}
	catch($exception) {
		$exceptionType = get_class($exception);
		throw(new $exceptionType($exception->getMessage(), 0, $exception));
	}
}

public function
?>