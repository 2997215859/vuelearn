<html>
<head>
	<title>简单架构</title>
	<meta charset="utf-8">
	<script src="http://cdn.jsdelivr.net/vue/1.0.26/vue.min.js"></script>
</head>
<body>
	<div id="app">
		<input v-model="newTodo" @keyup.enter="addTodo">
		<ul>
			<li v-for="todo in todos">
				<span>{{ todo.text }}</span>
				<button @click="removeTodo($index)">X</button>
			</li>
		</ul>
	</div>
</body>
<script>
	new Vue({
		el:'#app',
		data:{
			newTodo:"asdf",
			todos:[]
		},
		methods:{
			addTodo:function(){
				console.log(this.newTodo.trim());
				this.todos.push({text:this.newTodo.trim()});
			},
			removeTodo:function(index){
				this.todos.splice(index,1);
			}
		}
	})
</script>
</html>