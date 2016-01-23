app.controller('resultsController', function($scope, $routeParams){
	if ($routeParams.typ === "bid") {
		$scope.typ = $routeParams.typ;
		$scope.bid = $routeParams.id;
	} else if ($routeParams.typ === "gid") {
		$scope.typ = $routeParams.typ;
		$scope.gid = $routeParams.id;
	} else {
		console.log("Error!1!");
	}
	console.log($scope.typ);

	$scope.itemsByPage="6";

	$scope.rowCollection = [
		{tradeid: 'TR112358', bulkid: 'BU121', groupid: 'GR123', quantity: 102, status: 'Grouped'},
		{tradeid: 'TR112454', bulkid: 'BU121', groupid: 'GR123', quantity: 154, status: 'Grouped'},
		{tradeid: 'TR143786', bulkid: 'BU121', groupid: 'GR123', quantity: 102, status: 'Grouped'},
		{tradeid: 'TR746447', bulkid: 'BU121', groupid: 'GR123', quantity: 102, status: 'Grouped'},
		{tradeid: 'TR087464', bulkid: 'BU121', groupid: 'GR123', quantity: 102, status: 'Grouped'},
		{tradeid: 'TR747478', bulkid: 'BU121', groupid: 'GR123', quantity: 102, status: 'Grouped'},
		{tradeid: 'TR987434', bulkid: 'BU121', groupid: 'GR123', quantity: 102, status: 'Grouped'},
		{tradeid: 'TR838738', bulkid: 'BU121', groupid: 'GR123', quantity: 102, status: 'Grouped'},
		{tradeid: 'TR373733', bulkid: 'BU121', groupid: 'GR123', quantity: 102, status: 'Grouped'},
		{tradeid: 'TR112358', bulkid: 'BU121', groupid: 'GR123', quantity: 102, status: 'Grouped'},
		{tradeid: 'TR112358', bulkid: 'BU121', groupid: 'GR123', quantity: 102, status: 'Grouped'},
		{tradeid: 'TR112358', bulkid: 'BU121', groupid: 'GR123', quantity: 102, status: 'Grouped'},
		{tradeid: 'TR112358', bulkid: 'BU121', groupid: 'GR123', quantity: 102, status: 'Grouped'},
		{tradeid: 'TR112358', bulkid: 'BU121', groupid: 'GR123', quantity: 102, status: 'Grouped'},
		{tradeid: 'TR112358', bulkid: 'BU121', groupid: 'GR123', quantity: 102, status: 'Grouped'},
		{tradeid: 'TR112358', bulkid: 'BU121', groupid: 'GR123', quantity: 102, status: 'Grouped'},
		{tradeid: 'TR112358', bulkid: 'BU121', groupid: 'GR123', quantity: 102, status: 'Grouped'},
		{tradeid: 'TR112358', bulkid: 'BU121', groupid: 'GR123', quantity: 102, status: 'Grouped'},
		{tradeid: 'TR112358', bulkid: 'BU121', groupid: 'GR123', quantity: 102, status: 'Grouped'},
		{tradeid: 'TR118344', bulkid: 'BU121', groupid: 'GR123', quantity: 194, status: 'Grouped'}
	];
});