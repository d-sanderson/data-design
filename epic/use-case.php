<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>User Story, Use Case, Interaction Flow</title>
	</head>
	<body>
		<div class="UserStory">
			<h2>User Story</h2>
			<blockquote>"As a user, I want to be able to quickly access market conditions in order to make informed investment decisions."</blockquote>
		</div>
		<div class="Use Case">
			<h2>Use Case:</h2>
			<p>
				<strong>Title:</strong>
				Ralph's routine morning market assessment.
			</p>
			<p>
				<strong>Description:</strong>
				Ralph has 15 minutes before work to check the day's market and set any buys, sells, or stop-losses.
			</p>
			<p>
				<strong>Name of user and their role:</strong>
				Ralph; Part-time crypto trader who uses CoinMarketCap to stay informed of potential market opportunities.
			</p>
			<p>
				<strong>Usage preconditions:</strong>
				Must have access to internet and site must not be blocked.
			</p>
			<p>
				<strong>Usage postconditions:</strong>
				Must have access to exchanges to set stop-losses, limit order and execute buys/sells.
			</p>
		</div>
		<div class="InteractionFlow">

			<h2>Interaction Flow</h2>

			<ul>
				<li>Ralph enters <a href="https://coinmarketcap.com/">CoinMarketCap.com</a> into his web browser.</li>
				<li>Server receives request and returns CoinMarketCap's front page.</li>
				<li>Ralph Reviews coins by Market Capitalization and clicks on the "Watchlist" tab.</li>
				<li>Server receives request and returns Ralph's customized Watchlist.</li>
				<li>Ralph reviews his portfolio and decides whether to HODL, buy, or sell crypto assets. </li>
				<li>Ralph's largest holding is ETH, Ralph clicks on Ethereum to do examine 24h Volume.</li>
				<li>Server receives request and loads current data for Ethereum.</li>
				<li>Ralph decides that Ethereum is at a good level to buy and leaves CoinmarketCap to place trades that dollar cost avg. into ETH.</li>
			</ul>
		</div>

		<a href="RalphHODLCryptopherson.php">Back</a> <br/>
		<a href="conceptual-model.php">Next</a> <br/>
		<a href="index.php">Return to Home Page</a>
	</body>
</html>