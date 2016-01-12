/*
 * SenpValidate - jQuery validation plugin
 * by OctoD (iamoctod@gmail.com)
 * released under MIT licence
 */
(function($, $window, $document){
  // entering the Strict mode
  'use strict';
  
  //localizing variables
  var window = $window,
    document = $document;
    
  // regexp dictionary
  var regexpLibrary = {
      ip: /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/,
      email: /^\s*[a-zA-Z0-9_%+#&'*/=^`{|}~-](?:\.?[a-zA-Z0-9_%+#&'*/=^`{|}~-])*@(?:[a-zA-Z0-9_](?:(?:\.?|-*)[a-zA-Z0-9_])*\.[a-zA-Z]{2,9}|\[(?:2[0-4]\d|25[0-5]|[01]?\d\d?)\.(?:2[0-4]\d|25[0-5]|[01]?\d\d?)\.(?:2[0-4]\d|25[0-5]|[01]?\d\d?)\.(?:2[0-4]\d|25[0-5]|[01]?\d\d?)])\s*$/,
      // pheeeew'
      onlydigits : /^\D+$/,
      onlynumbers: /^\d+$/,
      commadecimals: /^\d+,\d{2}$/,
      dotteddecimals: /^\d+\.\d{2}$/,
      url: /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/
    },
    // plugins library
    pluginsLibrary = {
      toCall: [],
      plugins: {}
    };
  
  // Validate module  
  var Validate = (function (regexpLibrary) {
    // validation
    var validate = function(string, expected){
      this.string = string;
      if (typeof expected == 'function') {
        this.expected = expected || function(){};
      }else{
        this.expected = this.regexp[expected.toLowerCase().replace(/\s+/g, '')] || false;
      }
      return this;
    },
    // responsible for checking if a string is valid or not
    check = function(){
      if(!this.expected){
        return false;
      }
        
      if (typeof this.expected == 'function'){
        return this.expected.call(this, this.string);  
      }
      return this.expected.test(this.string);
    };
    // prototyping validate
    validate.prototype = {
      check: check,
      regexp: regexpLibrary
    }
    // returning the function as a module
    return function(string, expectedResult){
      return new validate(string, expectedResult || '').check();
    }
  })(regexpLibrary);
  
  // small object which will fire the mass validation
  var ValidateAll = (function(){
    
    var init = function(InitInstance, ValidateFunction){
      this.InitInstance = InitInstance;
      this.Validate = ValidateFunction;
      this.click = InitInstance.object.click || function(){};
      this.notValid = [];
    },
    // returns the not valid elements
    getNotValids = function(){
      return this.notValid;
    },
    // validates all
    validateAll = function(){
      var Validate = this.Validate,
        isValid,
        notValid = this.notValid,
        selector;
      this.InitInstance.each(function(item){
        selector = $(item.selector);
        // this is the jQuery each!
        selector.each(function(){
          isValid = Validate(this.value, $(this).data('senpValidate').validate);
          if(!isValid){
            notValid.push(this);
          }
        });
      });
      return this;
    };
    // prototyping
    init.prototype = {
      getNotValids: getNotValids,
      validateAll: validateAll
    }
    
    // returning function
    return function (InitInstance, ValidateFunction) {
      var _init = new init(InitInstance, ValidateFunction);
      _init.validateAll();
      // adds the not-valid class to all notValids elements
      $(_init.notValid).addClass('not-valid')
      // the module returns the config object click property
      // and the fields which aren't valid; 
      return {
        callback: _init.click,
        notValid: _init.notValid
      }
    }
  })();

  // builder module
  var Init = (function ($) {

    // each helper function. It's an iterator.
    function _each (array, callback) {
      var k = 0;
      while (k < array.length) {
        callback.call(this, array[k], k);
        k++;
      }
      return array;
    };
  
    // will be the data instance id
    var date = new Date,
    // constructor function
    init = function (object) {
      this.instanceId = date.toLocaleString().replace(/\D+/g, '');
      this.events = object.events || 'keyup keydown';
      this.items = object.items || [];
      this.object = object;
      return this;
    },
    // binding for every single element
    bind = function (callback) {
      return this.each (function(item) {
        $(item.selector).unbind(this.events).bind(this.events, function() {
          callback.call(this);
        });
      });
    },
    // a simple iterator
    each = function (callback) {
      _each.call(this, this.items, callback);
      return this;
    },
    // preparing the items (passing jquery datas)
    prepare = function() {
      return this.each(function (item) {
        item.id = this.instanceId;
        item.treshold = item.treshold || 0; 
        $(item.selector).data('senpValidate', item);
      });
    }
    // prototyping Init
    init.prototype = {
      bind : bind,
      each : each,
      prepare : prepare
    }
    // returns as a function
    return function (object) {
      var _init = new init(object || {});
      return _init.prepare();
    }
  })($); 
  
  // tooltip module
  var Tooltip = (function ($, window) {
    
    // caching object
    var _cacheTooltip = {},
      // common tag for tooltips
      tooltipTagName = '<div/>',
      // main tooltip attributes
      tooltipAttributes = {
        'id':'senp_validate_tooltip',
        'class': 'senp-tooltip'
      },
      // tooltip header attributes
      tooltipHeaderAttributes = {
        'class': 'senp-tooltip-header'
      },
      // tooltip content attributes
      tooltipContentAttributes = {
        'class': 'senp-tooltip-content'
      };
    // private functions
    var _createTooltip = function(){
        this.tooltip = _cacheTooltip.tooltip = $(tooltipTagName, tooltipAttributes);
        this.tooltipHeader = _cacheTooltip.tooltipHeader = $(tooltipTagName, tooltipHeaderAttributes);
        this.tooltipContent = _cacheTooltip.tooltipContent = $(tooltipTagName, tooltipContentAttributes);
        // appending the new created elements
        this.tooltip.appendTo('body');
        this.tooltipHeader.appendTo(this.tooltip);
        this.tooltipContent.appendTo(this.tooltip);
      },
      _getElementPosition = function(el){
        
        var el = $(el),
          offset = el.offset();
        
        return {
          height: el.outerHeight(),
          left: offset.left,
          top: offset.top,
          width: el.outerWidth()
        }
      },
      // constructor object for the tooltip
      tooltip = function(){
        this.tooltip = _cacheTooltip.tooltip || '';
        this.tooltipHeader = _cacheTooltip.tooltipHeader || '';
        this.tooltipContent = _cacheTooltip.tooltipContent || '';
        this.createTooltip();
        this.target = 'body';
        return this;
      },
      // creates a tooltip if not exists
      createTooltip = function(){
        if(!this.tooltip.length){
          _createTooltip.call(this);
        }
        return this;
      },
      // gets the current validating element offset
      getElementPosition = function(el){
        this.elementPosition = _getElementPosition(el);
        return this;
      },
      guessTooltipPosition = function(){
        if (!this.elementPosition) {
          return this;
        }

        var windowInstance = $(window),
          returningObject = {};
        
        this.windowDims = {
          height: windowInstance.height(),
          width: windowInstance.width()
        }
        this.tooltipDims = {
          width: this.tooltip.outerWidth(),
          height: this.tooltip.outerHeight()
        }
        
        if (this.elementPosition.left > (windowInstance.width()/2)) {
          returningObject.left = this.elementPosition.left - this.elementPosition.width/2 - this.tooltipDims.width;
        }else{
          returningObject.left = this.elementPosition.left + this.elementPosition.width;
        }

        if (this.elementPosition.top > (windowInstance.height()/2)) {
          returningObject.top = this.elementPosition.top + this.elementPosition.height - this.tooltip.outerHeight();
        }else{
          returningObject.top = this.elementPosition.top;
        }
        return returningObject;
      },
      // sets title, message and footer content
      // to the tooltip
      setMessage = function(title, message){
        this.tooltipHeader.text(title);
        this.tooltipContent.html(message);
        return this;
      };
    // prototyping the constructor
    tooltip.prototype = {
      createTooltip: createTooltip,
      getElementPosition: getElementPosition,
      guessTooltipPosition: guessTooltipPosition,
      setMessage: setMessage
    }
    // returning as a module
    return function(){
      return new tooltip;
    }

  })($, window);//#end of tooltip module
  

  // module for public apis
  var Api = (function (){
    // private functions
    // used for resetting the plugins lib
    var _emptyLib = function () {
        pluginsLibrary = {
          plugins: {},
          toCall: []
        }
        return this;
      },
      // setups new regular expressions for validating
      _newRegexp = function () {
        var args = [].slice.call(arguments);
      
        if(args.length >= 1 && typeof args[0] === 'string'){
          regexpLibrary[args[0].toLowerCase().replace(/\s+/g, '')] = args[1];
          return this;
        }
        for(var n in args[0]){
          regexpLibrary[n] = args[0][n];
        }
        return this;
      },
      // setups a new callable plugin. It will be fired 
      _newPlugin = function () {
        var args = [].slice.call(arguments);
      
        if(args.length >= 1 && typeof args[0] === 'string'){
          if(!pluginsLibrary.plugins[args[0]]) {
            pluginsLibrary.plugins[args[0]] = args[1];
            pluginsLibrary.toCall.push(args[0]);
          }
          return this;
        }
        for(var n in args[0]){
          if(!pluginsLibrary.plugins[n]) {
            pluginsLibrary.plugins[n] = args[0][n];
            pluginsLibrary.toCall.push(args[n]);
          }
        }
        return this;      
      },
      // sets a fixed width for tooltip
      _tooltipWidth = function(){
        var args = [].slice.call(arguments);
      
        args[1].width(args[2]);
        return this;
      };
    
    // public apis module
    var init = function (action, args) {
        this.action = action || '';
        this.args = args;
        return this.apiDispatcher();
      },
      // api actions library
      apiActions = {
        emptyLib: _emptyLib,
        newRegexp: _newRegexp,
        newPlugin: _newPlugin,
        tooltipWidth: _tooltipWidth
      },
      // responsible for dispatching the correct api action
      apiDispatcher = function () {
        if (this.apiActions.hasOwnProperty(this.action)) {
          this.apiActions[this.action].apply(this, this.args);
        }
        return this;
      },
      // this function will call all the plugins in the plugin library
      callPlugins = function (helper) {
        
        if (!pluginsLibrary.toCall.length) {
          return this;
        }
        
        var k = 0, key;
        while(k < pluginsLibrary.toCall.length) {
          key = pluginsLibrary.toCall[k];
          if (typeof pluginsLibrary.plugins[key] == 'function') {
            pluginsLibrary.plugins[key].call(this, helper);
          }
          k++;
        }
        return this;
      };
    
    // prototyping
    init.prototype = {
      apiActions: apiActions,
      apiDispatcher: apiDispatcher,
      callPlugins: callPlugins
    }
      
    // returning api dispatching function
    return function (action, args) {
      return new init (action, args);
    }
  })();
  
  // exposing as a jQuery plugin
  $.senpValidate = $.fn.senpValidate = function (configObject) {
    
    // setting up the main module instance
    var api = Api(),
      initInstance = Init(configObject),
      validateInstance = new Validate,
      tooltip = Tooltip();
    
    // calling the api plugins
    api.callPlugins({
      core: initInstance,
      validate: Validate,
      tooltip: tooltip
    });
    
    // if there are more than one arguments...it will fire the api dispatcher instead
    // of doing the normal jobs.   
    if([].slice.call(arguments).length > 1) {
      // routing to apis module
      api = Api(configObject, [].slice.call(arguments,1));
      return this;
    }
    
    // binding each item
    initInstance.bind(function(){
      
      var self = $(this),
        data = self.data('senpValidate'),
        errorMessage = data.errorMessage,
        isValid = Validate(this.value, data.validate);
      
      if (this.value.length < data.treshold) {
        return;
      }
      
      if(!isValid) {
        if(errorMessage) {
          tooltip.getElementPosition(this);
          tooltip.tooltip.show().css(tooltip.guessTooltipPosition());
          tooltip.setMessage(errorMessage.title || '', errorMessage.text || errorMessage);
        }
        self.addClass('not-valid');
      } else {
        tooltip.tooltip.hide();
        self.removeClass('not-valid');
      }
    });
    
    // if there is a selector, it will be bound to mass validate the items
    if(this.selector){
      this.on('click', function(event){
        
        var _clickValid = ValidateAll(initInstance, Validate),
          notValidElements = _clickValid.notValid;
        
        _clickValid.callback.call(this, {
          valid: !notValidElements.length,
          notValid: notValidElements
        }, event);
        
        tooltip.getElementPosition(this);
      });
    }
    return this;
  }
  // that's all folks :3
  
})(jQuery, window, document);