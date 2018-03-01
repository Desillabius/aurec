jQuery(function() {
	new TradingView.MediumWidget({
	"container_id": "tv-medium-widget-it",
	"symbols": [
		[
			"Oro",
			"FX_IDC:XAUEUR/31.1034768|1m"
		],
		[
			"Argento",
			"FX_IDC:XAGEUR/31.1034768|1m"
		],
		[
			"Platino",
			"FX_IDC:XPTEUR/31.1034768|1m"
		],
		[
			"Palladio",
			"FX_IDC:XPDEUR/31.1034768|1m"
		]
	],
	"greyText": " ",
	"gridLineColor": "#e9e9ea",
	"fontColor": "#83888D",
	"underLineColor": "#dbeffb",
	"trendLineColor": "#4bafe9",
	"width": "100%",
	"height": "500px",
	"locale": "it"
	});

	new TradingView.MediumWidget({
	"container_id": "trading-view-en",
	"symbols": [
		[
			"Gold",
			"FX_IDC:XAUEUR/31.1034768|1m"
		],
		[
			"Silver",
			"FX_IDC:XAGEUR/31.1034768|1m"
		],
		[
			"Platinum",
			"FX_IDC:XPTEUR/31.1034768|1m"
		],
		[
			"Palladium",
			"FX_IDC:XPDEUR/31.1034768|1m"
		]
	],
	"greyText": " ",
	"gridLineColor": "#e9e9ea",
	"fontColor": "#83888D",
	"underLineColor": "#dbeffb",
	"trendLineColor": "#4bafe9",
	"width": "100%",
	"height": "500px",
	"locale": "en"
	});

});