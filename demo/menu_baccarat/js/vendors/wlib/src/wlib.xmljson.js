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

wlib.xmljson = wlib.xmljson || {};


wlib.xmljson.xml2json = function(xml)
{
	// Create the return object
	var obj = {};

	if (xml.nodeType === 1)  // element
	{
		// do attributes
		if (xml.attributes.length > 0)
		{
			obj["@attributes"] = {};
			for (var j = 0; j < xml.attributes.length; j++)
			{
				var attribute  = xml.attributes.item(j);
				obj["@attributes"][attribute.nodeName] = attribute.nodeValue;
			}
		}
	}
	else if(xml.nodeType === 3) // text
	{
		obj = xml.nodeValue;
	}

	// do children
	if (xml.hasChildNodes())
	{
		for(var i = 0; i < xml.childNodes.length; i++)
		{
			var item     = xml.childNodes.item(i);
			var nodeName = item.nodeName;
			if (typeof(obj[nodeName]) === "undefined")
			{
				obj[nodeName] = xmlToJson(item);
			}
			else
			{
				if (typeof(obj[nodeName].push) === "undefined")
				{
					var old       = obj[nodeName];
					obj[nodeName] = [];
					obj[nodeName].push(old);
				}
				obj[nodeName].push(xmlToJson(item));
			}
		}
	}
	return obj;
};
