var s = skrollr.init(
{
	smoothScrolling: true,
    smoothScrollingDuration: 200,
    
	render: function(data)
	{
	  document.getElementById('dashboard-skrollr-x').innerHTML = data.curTop;
	},
	beforerender: function(data) {
		//return data.curTop > data.lastTop;
	}
});
