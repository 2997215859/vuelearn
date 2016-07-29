<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<script src="http://cdn.jsdelivr.net/vue/1.0.26/vue.min.js"></script>
	<style type="text/css">
		.blue{color:blue;}
	</style>
</head>
<body>
	<!-- view要渲染的部分 -->
	<div id="app">
		<input id="jack" type="checkbox" v-model="checkname" value="h1"/>
		<input id="ruiy" type="checkbox" v-model="checkname" value="h1">
		<p>{{ checkname }}</p>
	</div>
	<!-- Vue -->
	<script>
		var vm = new Vue({
			el:"#app",
			data:{
				checkname:[],
				real:"checked",
				jia:"unchecked"
			},
			methods:{
				
			}
		});
	</script>
</body>

</html> 