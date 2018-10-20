<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="styles.css">
		<title>Conceptual Model</title>
	</head>
	<body>

		<h1>Conceptual Model</h1>

		<h2>Entities & Attributes</h2>
		<div class="entities">
			<h2>Currency:</h2>
			<ul>
				<li>currencyId</li>
				<li>currencyMarketCap</li>
				<li>currencyPrice</li>
				<li>currencyVolume</li>
				<li>currencyCircSupply</li>
				<li>currencyChange</li>
				<li>currencyPriceGraph</li>
			</ul>
		</div>


		<div class="entities">
			<h2>Exchange</h2>
			<ul>
				<li>exchangeId</li>
				<li>exchangeCurrency</li>
				<li>exchangeAdjVolumeDay</li>
				<li>exchangeVolumeDay</li>
				<li>exchangeVolumeWeek</li>
				<li>exchangeVolumeMonth</li>
				<li>exchangeNumofMarkets</li>
				<li>exchangeChangeDay</li>
				<li>exchangeVolGraphWeek</li>
				<li>exchangeDateOfLaunch</li>
			</ul>
		</div>

		<div class="entities">
		<h2>Watchlist</h2>
		<ul>
			<li>watchlistCurrencyId</li>
			<li>watchlistExchangeId</li>
			<li>watchlistCurrencyMarketCap</li>
			<li>watchlistCurrencyPrice</li>
			<li>watchlistCurrencyVolumeDay</li>
			<li>watchlistCurrencyCircSupply</li>
			<li>watchlistCurrencyChangeDay</li>
			<li>watchlistCurrencyPriceGraph</li>
		</ul>
		</div>

		<div class="relationships">
			<h2>Relationships</h2>
			<ul>
				<li>One Currency may belong to many exchanges</li>
				<li>one Watchlist may have multiple Cryptocurrencies </li>
				<li>One Watchlist may have multiple Exchanges</li>
				<li>One Exchange may have multiple cryptocurrencies.</li>
			</ul>
		</div>


		<div class="container"></div>


		<a href="use-case.php">Back</a> <br/>
		<a href="index.php">Return to Home Page</a>

	</body>