/**
 * JQuery plugin that shows an accordion effect
 * Author: Mahmut Gurbuz(mahmut@lokaalgevonden.nl)
 * Version: 0.1
 */
;
(function($, window, document, undefined) {
  var pluginName = "lgAccordion";
  var cardWidth;
  var mouseIsOverCard = false;
  var mouseIsOverContainer = false;
  var animationFinished = true;
  var originalPosition = null;
  var currentCard = null;
  var defaults = {
    'speed': 2000,
    'gutter': 0.05 //percentage

  };

  function LgAccordionPlugin(element, options) {
    this.element = element;
    this.settings = $.extend({}, defaults, options);
    this._defaults = defaults;
    this._name = pluginName;


    this.init();
  }

  LgAccordionPlugin.prototype = {
    init: function() {
      var elt = $(this.element);
      this.settings.numCards = elt.children().length;
      elt.children().addClass('lg-accordioncard');
      
      var numGuts = this.settings.numCards - 1;
      var totalGutterWidth = numGuts * this.settings.gutter;
      cardWidth = (1-totalGutterWidth) / this.settings.numCards; //0.30 for 3 divs by default

      elt.css('position', 'relative');

      this.initCards(cardWidth);
      this.bindEvents();
    },
    initCards : function(width) {
      var elt = $(this.element);
      elt.children().css('width', (width * 100) + '%')
      						 .css('float', 'left')
      						 .css('position', 'static');
      elt.children().css('margin-right', (this.settings.gutter * 100) +'%');
      elt.children().last().css('margin-right', '0px');
      $('.overlay').css('display', 'none');

    },
    bindEvents : function(){
    	var self = this;
      $(document).on({
          mouseenter: function (event) {
            if(!animationFinished) {
              self.resetCard(currentCard);
            }
            mouseIsOverCard = true;

            self.handleHover(event);
          },
          mouseleave: function (event) {
            if(animationFinished) {
              self.handleHoverOut(event);
            }
            mouseIsOverCard = false;
          }
      }, ".lg-accordioncard");

      $(document).on({
        mouseenter : function(event){
          mouseIsOverContainer = true;
        },
        mouseleave: function(event){
          mouseIsOverContainer = false;
        }
      }, '.lg-accordion');

    },
    handleHover : function(event) {
    	var cardElement = $(event.currentTarget);
      currentCard = cardElement;
      var self = this;
      animationFinished = false;
    	self.moveCardLeft(cardElement, function(){
    		self.inflateCard(cardElement, function(){
    			self.overlayCard(cardElement, function(){
            animationFinished = true;
            if(!mouseIsOverContainer){
              self.resetCard(cardElement);
            }  
          });		
    		});	
    	});
    },
    handleHoverOut : function(event) {
    	var cardElement = $(event.currentTarget);
    	this.resetCard(cardElement);
    },


    moveCardLeft : function(cardElement, callback) {
      //positie
      var position = cardElement.position();
      originalPosition = position;
      //get sibling
      cardElement.next().css('margin-left', (this.settings.gutter + cardWidth) * 100 +'%');
      var gutterAbs = $(this.element).width() * this.settings.gutter;
      cardElement
            .css('top', position.top)
            .css('left', position.left + gutterAbs)
            .css('position', 'absolute');
  		cardElement.animate({
  			top: 0,
  			left: 0,
        "z-index" : 9999
		  }, this.settings.speed, callback);    			   
    },
    inflateCard : function(cardElement, callback) {
      cardElement.animate({
        top: 0,
        left: 0, 
        width: '100%'
      }, this.settings.speed, callback); 
    },
    overlayCard : function(cardElement, callback) {
      cardElement.children('.overlay').fadeIn("slow", callback);

    },
	 resetCard : function(cardElement) {
      var neighbour = cardElement.next();
      var overlay = cardElement.children('.overlay');
      overlay.css('display', 'none');
      cardElement.css('position', 'static');
      neighbour.css('margin-left', '0px');

     /* cardElement.animate({
        'width' : (cardWidth * 100) + '%',
        'left'  : originalPosition.left,
        'top'   : originalPosition.top

      }, this.settings.speed, function(){ 
          cardElement.css('position', 'static');
          neighbour.css('margin-left', '0px');
      });*/
    },
    /**
     * Want to call a plugin function later than on initialization (as a public method)?
     * $('#someElement').shoppingCart();
     * and then later:
     * $('#someElement').shoppingCart('test');
     */
      test: function() {
      return this.each(function() {
        var $this = $(this);
        var data = $this.data('shoppingCart'); //gets the data out of the element. 
      });
    }
  }

  $.fn[pluginName] = function(options) {
    return this.each(function() {
      if (!$.data(this, "plugin_" + pluginName)) {
        $.data(this, "plugin_" + pluginName, new LgAccordionPlugin(this, options));
      }
    });
  };
})(jQuery, window, document);
