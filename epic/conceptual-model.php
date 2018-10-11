<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Conceptual Model</title>
	</head>
	<body>

		<h1>Conceptual Model</h1>

		<h2>Entities & Attributes</h2>
		<div class="entities">
			<h2>Cryptocurrencies:</h2>
			<ul>
				<li>currencyId</li>
				<li>currencyIdMarketCap</li>
				<li>currencyIdPrice</li>
				<li>currencyIdVolume</li>
				<li>currencyIdCircSupply</li>
				<li>currencyIdChange</li>
				<li>currencyPriceGraph</li>
			</ul>
		</div>


		<div class="entities">
			<h2>Exchanges</h2>
			<ul>
				<li>exchangeId</li>
				<li>exchangeIdAdjVolumeDay</li>
				<li>exchangeIdVolumeDay</li>
				<li>exchangeIdVolumeWeek</li>
				<li>exchangeIdVolumeMonth</li>
				<li>exchangeIdNumofMarkets</li>
				<li>exchangeIdChange24h</li>
				<li>exchangeIdVolGraph7D</li>
				<li>exchangeIdDateOfLaunch</li>
			</ul>
		</div>

		<div class="entities">
		<h2>Watchlist</h2>
		<ul>
			<li>watchlistCurrencyId</li>
			<li>watchlistCurrencyIdMarketCap</li>
			<li>watchlistCurrencyIdPrice</li>
			<li>watchlistCurrencyIdVolume24Hour</li>
			<li>watchlistCurrencyIdCircSupply</li>
			<li>watchlistCurrencyIdChange24Hour</li>
			<li>watchlistCurrencyIdPriceGraph</li>
		</ul>

		</div>

		<div class="relationships">
			<h2>Relationships</h2>
			<ul>
				<li>One exchangeId may belong to multiple currencyIds</li>
				<li>currencyId has a 1:1 relationship to currencyIdVolume</li>
				<li>currencyId has a 1:1 relationship with currencyIdCircSupply</li>
				<li>currencyId has a 1:1 relationship with currencyIdPrice</li>
			</ul>
		</div>

		<a href="use-case.php">Back</a> <br/>
		<a href="index.php">Return to Home Page</a>

	</body>