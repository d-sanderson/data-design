INSERT INTO currency (currencyChange, currencyCircSupply, currencyId, currencyMarketCap, currencyPrice, currencyPricegraph, currencyVolume) VALUES (.25, 17323875, unhex("9fbbf860d0c711e8a8d5f2801f1b9fd1"), 114088706185, 6585.54, 3.98, 7194983687);

INSERT INTO currency (currencyChange, currencyCircSupply, currencyId, currencyMarketCap, currencyPrice, currencyPricegraph, currencyVolume) VALUES (.0328, 102591301, unhex("ae12d5bed0c711e8a8d5f2801f1b9fd1"), 21136490228, 206.03, 3.98, 2789406388);

INSERT INTO exchange (exchangeAdjVolumeDay, exchangeChangeDay, exchangeCurrency, exchangeDateOfLaunch, exchangeId, exchangeNumofMarkets, exchangeVolumeDay, exchangeVolGraphWeek, exchangeVolumeMonth, exchangeVolumeWeek) VALUES (1958359964, 180.21, unhex("ae12d5bed0c711e8a8d5f2801f1b9fd1"), "2017-07-01", unhex("e76ba50cd0c711e8a8d5f2801f1b9fd1"), 389, 1958359965, 652139584, 31906143488, 6562139585);

UPDATE currency SET currencyCircSupply = 1  WHERE currencyId = unhex("945fb09ed0c011e8a8d5f2801f1b9fd1");

-- DELETE FROM exchange WHERE exchangeNumofMarkets = 389; <<This works but breaks the line below

INSERT INTO watchlist(watchlistCurrencyChangeDay, watchlistCurrencyCircSupply, watchlistCurrencyId, watchlistCurrencyMarketCap, watchlistCurrencyPrice, watchlistCurrencyPriceGraph, watchlistCurrencyVolumeDay, watchlistExchangeId) VALUES (.0335, 18890618683, unhex("ae12d5bed0c711e8a8d5f2801f1b9fd1"), 4148124331, .219, .0335, 71662711, unhex("e76ba50cd0c711e8a8d5f2801f1b9fd1"));


-- Write and execute a select statement for a row using its primary key as the selector.
SELECT currencyChange, currencyCircSupply, currencyMarketCap FROM currency WHERE currencyId = unhex("ae12d5bed0c711e8a8d5f2801f1b9fd1");

-- Write and execute a select statement that incorporates both a where clause and an inner-join on both tables used in this assignment.
SELECT exchange.exchangeId, exchange.exchangeCurrency, exchange.exchangeAdjVolumeDay, exchange.exchangeChangeDay from exchange inner join currency on currency.currencyId = exchange.exchangeId where currencyId = unhex("9fbbf860d0c711e8a8d5f2801f1b9fd1");
-- Write a select statement based of off DDC-Twitter that counts the number of likes for a specific tweet.

SELECT COUNT(likeProfileId) FROM `like` WHERE `like`.likeTweetId = "851d8c88d19111e8a8d5f2801f1b9fd1";
