var s = skrollr.init(
{
	smoothScrolling: false,
	render: function(data)
	{
	  $('#dashboard-skrollr-x').text(data.curTop);
	  document.getElementById('dashboard-skrollr-x').innerHTML = data.curTop;
	},
	beforerender: function(data) {
		//return data.curTop > data.lastTop;
	}
});
