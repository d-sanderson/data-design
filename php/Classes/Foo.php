<?php

/**
 ** @author David Sanderson <sanderdj90@gmail.com>
 *
 * Namespacing does for functions and classes what scope does for variables.
 **/
namespace dsanderson3\DataDesign;

require_once(dirname(__DIR__,2) . "/vendor/autoload.php");

use



class Currency {

	/**
	 * Id for a specific currency; this is the primary key.
	 **/

	private $currencyId;
	/**
	 * 24hr change of specific currency.
	 **/
	private $currencyChange;
	/**
	 * Total circulating supply of specific currency.
	 **/
	private $currencyCircSupply;
	/**
	 * Market Capitalization of specific currency.
	 **/
	private $currencyMarketCap;
	/**
	 * Current price of specific currency.
	 **/
	private $currencyPrice;
	/**
	 * PriceGraph of specific currency.
	 **/
	private $currencyPricegraph;
	/**
	 * Volume of specific currency.
	 **/
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

}


?>