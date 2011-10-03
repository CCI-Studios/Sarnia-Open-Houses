var cci = cci || {};
cci.openhouse = cci.openhouse || {};
cci.openhouse.gallery = new Class({
	Implements: [Options, Events],
	
	options: {
		images: [],
		startIndex: 0,
		wrap: true,
		
		delay: 3000
		//onReady
		//onChangeStart
		//onChangeDone
	},
	images: [],
	current: null,
	index: 0,
	
	initialize: function(options) {
		this.setOptions(options);
	},
	
	addImage: function() {},
	addImages: function() {},
	
	selectImage: function() {}
});

