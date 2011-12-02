var CCI = CCI || {};
CCI.Rollover = new Class({
    Implements: Options,
     
    options: {
        normal_text: '-normal.',
        over_text: '-over.'
    },
 
    initialize: function (selector, options) {
        this.setOptions(options);
        var images = $$(selector), i;
         
        for (i = images.length - 1; i >= 0; i = i - 1) {
            this._setupImage(images[i]);
        }
         
    },

    _setupImage: function (image) {
        var normal, over, index;
         
        normal = image.src;
        index = normal.lastIndexOf(this.options.normal_text); 
        if (index === -1) {
            return;
        }
             
        over = normal.substr(0, index) + 
            this.options.over_text + 
            normal.substr(index + this.options.normal_text.length);
         
        image.addEvents({
            mouseenter: function () {
                image.src = over;
            },
            mouseleave: function () {
                image.src = normal;
            }
        });
    }
     
});
 
window.addEvent('domready', function () {
    new CCI.Rollover('.rollover img, img.rollover');
});