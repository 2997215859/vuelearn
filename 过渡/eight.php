<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<script src="http://cdn.jsdelivr.net/vue/1.0.26/vue.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<style type="text/css">
		ul{
			padding-left:0;
		}
		.staggered-transition{
			transition:all .5s ease;
			overflow:hidden;
			margin:0;
			height:20px;
		}
		.staggered-enter,
		.staggered-leave{
			opacity:0;
			height:0;
		}
	</style>
</head>
<body>
	<!-- view要渲染的部分 -->
	<div id="app">
		<input v-model="query">		
		<ul>
			<li v-for="item in items | filterBy query" transition="staggered" stagger="100">
				{{item.msg}}
			</li>
		</ul>
	</div>
	<!-- Vue -->
	<script>
		var vm = new Vue({
			el:"#app",
			data:{
				items:[{
					msg:"ruiy"
				},{
					msg:"adf"
				},{
					msg:"asfgqasdf"
				}]
			}
		});
	</script>
</body>

</html>  