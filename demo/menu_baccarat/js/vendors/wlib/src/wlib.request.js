/*!
 * Weinto JavaScript Library - wlib
 * http://www.weinto.com/
 *
 *
 * Copyright 20011, 2013 Weinto, Nicolas Bages
 * nicolas.bages@weinto.com
 *
 */

var wlib = wlib || {};

(function()
{
	function Request()
	{
		var vars = [], hash;
	    var hashes = window.location.href.slice( window.location.href.indexOf('?') + 1 ).split('&');
	    for(var i = 0; i < hashes.length; i++){
	        hash = hashes[i].split('=');
	        vars.push(hash[0]);
	        vars[hash[0]] = hash[1];
	    }

	    this.get_param = function(key)
	    {
	    	return vars[key];
	    };

	}


	wlib.request = new Request();

})();