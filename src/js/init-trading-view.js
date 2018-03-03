jQuery(function() {
	new TradingView.MediumWidget({
	"container_id": "trading-view-it",
	"symbols": [
		[
			"Oro",
			"FX_IDC:XAUEUR|1d"
		],
		[
			"Argento",
			"FX_IDC:XAGEUR|1d"
		],
		[
			"Platino",
			"FX_IDC:XPTEUR|1d"
		],
		[
			"Palladio",
			"FX_IDC:XPDEUR|1d"
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

});