<!DOCTYPE html>
<html>
<head>
	<title>Test Vue.js</title>

	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>
<body>
	<style type="text/css">
	body{
		margin-top: 50px;
	}
</style>
<div class="container">



	<div id="app">

		Name: <input type="text" class="form-control" v-model="name">
								<div class="form-group form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="checkbox" value="One" v-model="numbers"> One
			</label>
		</div>
		<div class="form-group form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="checkbox" value="Two" v-model="numbers"> Two
			</label>
		</div>
		<div class="form-group form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="checkbox" value="Three" v-model="numbers"> Three
			</label>
		</div>
		
		<hr>
		<h1>Name: {{ name }}</h1>
		<h1>Number: {{numbers}}</h1>
		<h2><a v-bind:href="website">{{website}}</a></h2>
		<h3>Age: {{age}}</h3>
		<input type="text" class="form-control" v-on:keyup="addCount">
		<h3>Count: {{count}}</h3>
		<button class="btn btn-success" name="button" v-on:click="addAge">Add</button>
		<button class="btn btn-danger" name="button" v-on:click="SubtractAge">Subtract</button>


	</div>
	<br>

	<div id="app2">

		<button class="btn btn-info" v-on:click="like=!like">like</button>
		<h1 v-if="like">Hello I'm v-if condition</h1>
		<ul>
			<li v-for="result in product">{{result}}</li>
		</ul>
		<ul>
			<li v-for="emp in employee">{{emp.name}},{{emp.age}}</li>

		</ul>
	</div>





</div>





<script type="text/javascript" src="app.js"></script>
</body>
</html>
