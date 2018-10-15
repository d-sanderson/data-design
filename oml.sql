--(3) Insert Statements:

INSERT INTO currency(currencyChange, currencyCircSupply, currencyId, currencyMarketCap, currencyPrice, currencyPricegraph, currencyVolume) VALUES (.25, 17323875, "BTC", 114088706185, 6585.54, 3.98, 7194983687);

INSERT INTO currency(currencyChange, currencyCircSupply, currencyId, currencyMarketCap, currencyPrice, currencyPricegraph, currencyVolume) VALUES (.0328, 102591301, "ETH", 21136490228, 206.03, 3.98, 2789406388);

INSERT INTO exchange(exchangeAdjVolumeDay, exchangeChangeDay, exchangeCurrency, exchangeDateOfLaunch, exchangeId, exchangeNumofMarkets, exchangeVolumeDay, exchangeVolGraphWeek, exchangeVolumeMonth, exchangeVolumeWeek) VALUES (1958359964, 180.21, "BTC", "2017-07-01", "Binance", 389, 1958359965, 652139584, 31906143488, 6562139585);


--(1) UPDATE Statement

UPDATE currency SET currencyCircSupply = 1  where currencyId = "ETH";

--(1) DELETE Statement

DELETE exchange where exchangeNumofMarkets = 389;

--Write and execute an insert statement on a table with a foreign key from the original table.

INSERT INTO watchlist