jQuery(function() {
	new TradingView.MediumWidget({
	"container_id": "trading-view",
	"symbols": [
		[
			"Oro",
			"AMEX:GLD|1d"
		],
		[
			"Argento",
			"AMEX:SLV|1d"
		],
		[
			"Platino",
			"AMEX:PPLT|1d"
		],
		[
			"Palladio",
			"AMEX:PALL|1d"
		]
	],
	"greyText": "",
	"gridLineColor": "#e9e9ea",
	"fontColor": "#83888D",
	"underLineColor": "#dbeffb",
	"trendLineColor": "#4bafe9",
	"width": "100%",
	"height": "500px",
	"locale": "en"
	});

});