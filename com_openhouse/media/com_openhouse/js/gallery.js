var CCI = CCI || {};
CCI.OpenHouse = CCI.OpenHouse || {};
CCI.OpenHouse.Gallery = new Class({
	Implements: [Options, Events],
	
	options: {
		images: [],
		startIndex: 0,
		wrap: true,
		
		delay: 5000,
		duration: 1000,
		//onReady
		//onChangeStart
		//onChangeDone
	},
	current: null,
	max: 0,
	
	fx: null,
	timer: null,
	running: false,
	
	path: null,
	srcs: null,
	
	container: null,
	image1: null,
	image2: null,
	next_button: null,
	prev_button: null,
	
	initialize: function(container, options) {
		this.setOptions(options);
		this.container = container;
		this.path = container.get('data-path');

		this.images = this.container.getElements('.thumbnails li');
		this.filenames = [];
		this.images.each(function(image, index) {
			this.filenames.push(image.get('data-filename'));
			
			image.addEvent('click', function() {
				this.selectImage(index);
			}.bind(this));
		}.bind(this));
		this.max = this.filenames.length - 1;
		
		this.image1 = this.container.getElement('.image1');
		this.image2 = this.container.getElement('.image2');
		
		this.fx = new Fx.Tween(this.image2, {
			property: 'opacity',
			onComplete: function() {
				this.image1.src = this.image2.src;
				this.fx.set(0);
			}.bind(this)
		});
		
		this.next_button = this.container.getElement('.next-button');
		this.next_button.addEvent('click', function() {
			this.next();
		}.bind(this));
		this.prev_button = this.container.getElement('.prev-button');
		this.prev_button.addEvent('click', function() {
			this.prev();
		}.bind(this));
		
	},
	
	next: function() {
		this.selectImage((this.current < this.max)? this.current + 1 : 0);
	},
	prev: function() {
		this.selectImage((this.current > 0)? this.current - 1 : this.max);
	},
	
	start: function() {
		this.running = true;
		this.timer = this.next.delay(this.options.delay, this);
	},
	stop: function() {
		this.running = false;
		clearTimeout(this.timer);
	},
	
	selectImage: function(index) {
		this.current = index;
		clearTimeout(this.timer);
		
		this.image2.src = this.path + this.filenames[this.current];
		this.fx.start(1);
		
		if (this.running) {
			this.timer = this.next.delay(this.options.delay, this);
		}
	}
});

var gallery;
window.addEvent('domready', function() {
	$$('.openhouse-gallery').each(function(g) {
		gallery = new CCI.OpenHouse.Gallery(g);
		gallery.start();
	})
})