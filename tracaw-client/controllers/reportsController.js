app.controller('reportsController', ['$scope', function($scope){
	$scope.data1 = [
	  {label: "Active", value: 10, color: "#263238"}, 
	  {label: "Initiated", value: 23, color: "#455a64"},
	  {label: "Bulked", value: 35, color: "#607d8b"},
	  {label: "Amalgamated", value: 42, color: "#cfd8dc"}
	];
	$scope.options1 = {thickness: 70};
	$scope.data2 = [
	  {label: "Active", value: 5, color: "#263238"}, 
	  {label: "Initiated", value: 22, color: "#455a64"},
	  {label: "Bulked", value: 28, color: "#607d8b"},
	  {label: "Amalgamated", value: 45, color: "#cfd8dc"}
	];
	$scope.options2 = {thickness: 70};
}]);