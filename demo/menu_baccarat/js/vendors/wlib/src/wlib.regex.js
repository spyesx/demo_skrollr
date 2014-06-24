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
	function Regex()
	{
		var _regex = {
			email : /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,})+$/,
			url : /(http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/,
			number : /[0-9]|\./,
			twitterusername : /(^|[^@\w])@(\w{1,15})\b/
		};

		this.add = function(name, regex)
		{
			_regex[name] = regex;
		};

		this.check = function(regex, value)
		{
			return _regex[regex].test(value);
		};

		this.isNumber = function(value)
		{
			return !isNaN(parseFloat(value)) && isFinite(value);
		};

		this.strlenMin = function(mixed_var, limit)
		{
			return (mixed_var.length >= limit ? true : false);
		};

		this.strlenMax = function(mixed_var, limit)
		{
			return (mixed_var.length <= limit ? true : false);
		};

		this.nbvalMin = function(nb, limit)
		{
			return (nb >= limit ? true : false);
		};

		this.nbvalMax = function(nb, limit)
		{
			return (nb <= limit ? true : false);
		};

		this.not_empty = function(mixed_var)
		{
			var undef, key, i, len;
			var emptyValues = [undef, null, false, 0, '', '0'];

			for (i = 0, len = emptyValues.length; i < len; i++)
			{
				if (mixed_var === emptyValues[i])
				{
					return true;
				}
			}

			if (typeof mixed_var === "object")
			{
				for (key in mixed_var) {
					// TODO: should we check for own properties only?
					//if (mixed_var.hasOwnProperty(key)) {
					return false;
					//}
				}
				return true;
			}
			return false;
		};

		this.same_as = function(str, challenge)
		{
			return (str === challenge ? true : false);
		};

	}

	wlib.regex = new Regex();

})();