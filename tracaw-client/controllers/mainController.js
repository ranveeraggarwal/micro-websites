app.controller('mainController', ['$cookieStore', function($cookieStore){
	this.tab = 1;

	this.isSet = function(checkTab) {
		return $cookieStore.get('naVal') === checkTab;
	};

	this.setTab = function(activeTab) {
		this.tab = $cookieStore.put('naVal', activeTab);
	};
}]);