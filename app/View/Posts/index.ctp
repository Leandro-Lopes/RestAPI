<div class="cent" ng-controller="RestController">

	<!-- link to json-->
	<a target="blank" href="https://polar-inlet-99136.herokuapp.com/posts.json"><button class="btn btn-primmary">Link to Json</button></a><br>
	<br>
	<br>
	<h3>Add New Post</h3>
	<hr>
	

	<!-- start form -->
	<form class="form bordered" name="myForm">
		<input class="form-control" type="text" ng-model="newPost.title">
			<br>
		<textarea class="form-control" ng-model="newPost.body">		
		</textarea>
			<br>
		<button class="btn btn-success" ng-click="addPost();"> Enviar</button>
	</form>
	<!-- show all posts -->
	<div ng-repeat="post in posts">
		<div class="bd-l" ng-repeat="dado in post">

			<h2>{{dado.title}}</h2>
			<p>{{dado.body}}</p>
			<hr>
		</div>
	</div>

</div>