<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<script src="http://cdn.jsdelivr.net/vue/1.0.26/vue.min.js"></script>
	<style type="text/css">
		#Header{
			background:red;
		}
		#Siderbar{
			background:blue;
			width:50%;
			float:left;
		}
		#Content{
			background:green;
			width:50%;
			float:left;
		}
		#appFooter{
			background:black;
		}
	</style>
</head>
<body>
	<!-- view要渲染的部分 -->
	<div id="app">	
		a = {{a}},b={{b}}
	</div>
</body>
<!-- Vue -->
<script>
	var vm = new Vue({
		el:"#app",
		data:{
			a:1
		},
		computed:{
			b:function(){
				return this.a+1;
			}
		}
	});
</script>
</html> 