(function(){
	var app = angular.module('guestbook', []);

	app.controller('GuestBookCtrl', [ '$scope', '$http', function($scope, $http) {
		setInterval(function() {
			$http.get('api/guestbooks').success(function(data) {
	    	$scope.guestbooks = data;
	    });
    }, 100);

		$scope.addGuestBook = function () {
			$http.post('guestbook',
			{
				name: $scope.gbName,
				comments: $scope.gbComments
			}).success(function(data, status, headers, config) {
					$scope.guestbooks.push(data);
				});
			// Clear input fields after push
			$scope.gbName = "";
			$scope.gbComments = "";
		};

    }]);

})();
