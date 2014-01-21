/*--------------------------------------------------------------------------
 * ModulePattern Bootstrap
 *
 * Created      : 21/01/2013
 * Modified     : 04/01/2015
 * Version      : 2.0
 * UI Developer : Guilherme Pontes
 * Notes        : Copy and reproduce as much as you want.
 * URL			: https://github.com/guilhermepontes/module-pattern-bootstrap/
---------------------------------------------------------------------------*/

/**
* This is MyApp, it makes something awesome.
* It's an self invokated function that runs automatically/immediately.
*
* @class MyApp
* @constructor
*/

var MyApp = window.MyApp || (function(document, window){
	"use strict";

	var app, _private;

	_private = {
		_config: {
			background: {
				color: "white"
			}
		},

		setBGColor: function(color) {
			app.body.style.background = color || this._config.background.color;
		},

		makeBackgroundBlue: function() {
			_private.setBGColor("blue");
		},

		makeBackgroundRed: function() {
			_private.setBGColor("red");
		}
	};

	var app = {

		init: function() {
			this._cache();
			this._bind();

			//the background must be blue first..
			_private.makeBackgroundBlue();
		},

		_cache: function(){
			this.body = document.body;
			this.makeMeRed = document.querySelector('.makeBodyRed');
		},

		_bind: function() {
			this.makeMeRed.addEventListener('click', _private.makeBackgroundRed , false);
		}
	};

	// make app visible by the MyApp;
	return app;

})(document, window);


// another self invokated function to executes the app.
(function(){
	MyApp.init();
})();