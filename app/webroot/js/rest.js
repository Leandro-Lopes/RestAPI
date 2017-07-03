'use strict'

app.controller('RestController',function($scope,$http){

	$scope.posts = [];
	$scope.newPost = {};
	$scope.reverse = true;
	$http.get("https://polar-inlet-99136.herokuapp.com/posts.json")
	.success(function(data){
		$scope.posts = data;
	}).
	error(function(err){
		alert(err);
	});
	$scope.addPost = function(){
		//post data in db using method post 
		$http.post("https://polar-inlet-99136.herokuapp.com/posts.json",{
			//data
			title: $scope.newPost.title,
			body : $scope.newPost.body
		}).success(function(data,status,header,config){
			//reset fields
			$scope.newPost.title = null;
			$scope.newPost.body = null ;

		})
		.error(function(err,status,header,config){
			alert("error");
		});
	}
});