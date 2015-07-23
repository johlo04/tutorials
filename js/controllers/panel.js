quotationList.controller('PanelController', function() {
	//TABS
	this.tab = 1;

	this.selectTab = function(setTab) {
		this.tab = setTab;
	}

	this.isSelected = function(checkTab) {
		//console.log(this.tab === checkTab);
		return this.tab === checkTab;
	}

});