<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<script src="http://cdn.jsdelivr.net/vue/1.0.26/vue.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/animate.css">
</head>
<body>
	<!-- view要渲染的部分 -->
	<div id="app">
		<div v-show="ok" class="animated" transition="bounce1">Watch me bouncee</div>
		<button @click="ok=!ok">ok:{{ok}}</button>
	</div>
	<!-- Vue -->
	<script>
		Vue.transition('bounce1',{
			enterClass:'rubberBand',
			leaveClass:'lightSpeedOut'
		});
		var vm = new Vue({
			el:"#app",
			data:{
				ok:true
			}
		});
	</script>
</body>

</html> 