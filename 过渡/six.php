<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<script src="http://cdn.jsdelivr.net/vue/1.0.26/vue.min.js"></script>
	<style type="text/css">
		.expand-transition{
			transition:all 0.3s ease;
			height:30px;
			padding:10px;
			background-color:#eee;
			overflow:hidden;
		}
		.expand-enter,
		.expand-leave{
			height:0;
			padding:0 10px;
			opacity:0;
		}
	</style>
</head>
<body>
	<!-- view要渲染的部分 -->
	<div id="app">
		<div v-if="show" transition="expand">hello</div>
		<button @click="show=!show">show:{{show}}</button>
	</div>
	<!-- Vue -->
	<script>
		var vm = new Vue({
			el:"#app",
			data:{
				show:true
			}
		});
	</script>
</body>

</html> 