<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<script src="http://cdn.jsdelivr.net/vue/1.0.26/vue.min.js"></script>
	<style type="text/css">
		#myDiv{
			margin:25px;
			width:440px;
			height:100px;
			background:orange;
			position:relative;
			font-size:20px;
		}
		@keyframes mymove{
			from {
				top:0px;
			}
			to{
				top:200px;
			}
		}
	</style>
</head>
<body>
	<p>

	</p>
	<!-- view要渲染的部分 -->
	<div id="app">
	</div>
	<div id="myDiv" onclick="myFunction()">点击我开始动画</div>
	<!-- Vue -->
	<script>
		var x = document.getElementById("myDiv");
		var myFunction = function(){
			x.style.animation = "mymove 4s 2"
		}
		x.addEventListener('animationstart',myStartFunction);
		x.addEventListener('animationiteration',myIterationFunction);
		x.addEventListener('animationend',myEndFunction);
		function myStartFunction(){
			console.log("asdf");
			this.innerHTML  = "animationStart 事件触发 - 动画已经开始";
			this.style.backgroundColor = "pink";
		}
		function myIterationFunction(){
			this.innerHTML = "animationIteration 事件触发 - 动画重新播放";
			this.style.backgroundColor = "lightblue";
		}
		function myEndFunction(){
			this.innerHTML = "animatinoEnd 事件触发 - 动画已经完成";
			this.style.backgroundColor = "lightgray";
		}
	</script>
</body>

</html> 