window.theme = {};


// Theme Common Functions
window.theme.fn = {

    getOptions: function(opts) {

        if (typeof(opts) == 'object') {

            return opts;

        } else if (typeof(opts) == 'string') {

            try {
                return JSON.parse(opts.replace(/'/g,'"').replace(';',''));
            } catch(e) {
                return {};
            }

        } else {

            return {};

        }

    }

};


// Parallax
(function(theme, $) {

    theme = theme || {};

    var instanceName = '__parallax';

    var PluginParallax = function($el, opts) {
        return this.initialize($el, opts);
    };

    PluginParallax.defaults = {
        speed: 1.5,
        horizontalPosition: '50%',
        verticalPosition: '0%',
        offset: 0,
        parallaxHeight: '180%'
    };

    PluginParallax.prototype = {
        initialize: function($el, opts) {
            if ($el.data(instanceName)) {
                return this;
            }

            this.$el = $el;

            this
                .setData()
                .setOptions(opts)
                .build();

            return this;
        },

        setData: function() {
            this.$el.data(instanceName, this);

            return this;
        },

        setOptions: function(opts) {
            this.options = $.extend(true, {}, PluginParallax.defaults, opts, {
                wrapper: this.$el
            });

            return this;
        },

        build: function() {
            var self = this,
                $window = $(window),
                offset,
                yPos,
                bgpos,
                background;

            // Create Parallax Element
            background = $('<div class="parallax-background"></div>');

            // Set Style for Parallax Element
            background.css({
                'background-image' : 'url(' + self.options.wrapper.data('image-src') + ')',
                //'background-size' : 'cover',
                'position' : 'absolute',
                'top' : 0,
                'left' : 0,
                'width' : '100%',
                'background-repeat': 'no-repeat',
                'background-size': 'cover',
                'height' : self.options.parallaxHeight
            });

            // Add Parallax Element on DOM
            self.options.wrapper.prepend(background);

            // Set Overlfow Hidden and Position Relative to Parallax Wrapper
            self.options.wrapper.css({
                'position' : 'relative',
                'overflow' : 'hidden'
            });

            // Parallax Effect on Scroll & Resize
            var parallaxEffectOnScrolResize = function() {
                $window.on('scroll resize', function() {
                    offset  = self.options.wrapper.offset();
                    yPos    = -($window.scrollTop() - (offset.top - 100)) / ((self.options.speed + 2 ));
                    plxPos  = (yPos < 0) ? Math.abs(yPos) : -Math.abs(yPos);
                    background.css({
                        'transform' : 'translate3d(0, '+ ( (plxPos - 50) + (self.options.offset) ) +'px, 0)',
                        'background-position-x' : self.options.horizontalPosition,
                        'background-position-y' : self.options.verticalPosition
                    });
                });

                $window.trigger('scroll');
            }

            parallaxEffectOnScrolResize();

            return this;
        }
    };

    // expose to scope
    $.extend(theme, {
        PluginParallax: PluginParallax
    });

    // jquery plugin
    $.fn.themePluginParallax = function(opts) {
        return this.map(function() {
            var $this = $(this);

            if ($this.data(instanceName)) {
                return $this.data(instanceName);
            } else {
                return new PluginParallax($this, opts);
            }

        });
    }

}).apply(this, [window.theme, jQuery]);

