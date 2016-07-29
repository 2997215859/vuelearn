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
		<app-header></app-header>
		<app-sidebar></app-sidebar>
		<app-content></app-content>
		<div style="clear:both"></div>
		<app-footer></app-footer>
	</div>
</body>
<!-- Vue -->
<script>
	// 定义组件构造器
	var appHeader = Vue.extend({
		template:'<div id="Header">上方列</div>'
	});
	var appSidebar = Vue.extend({
		template:'<div id="Siderbar">侧边栏</div>'
		// 子组件
	});
	var appContent = Vue.extend({
		template:'<div id="Content">appContent</div>'
		// 子组件
	});
	var appFooter = Vue.extend({
		template:'<div id="appFooter">appFooter</div>'
	});
	// 注册
	Vue.component('app-header',appHeader);
	Vue.component('app-sidebar',appSidebar);
	Vue.component('app-content',appContent);
	Vue.component('app-footer',appFooter);
	//创建实例
	new Vue({
		el:"#app"
	});
</script>
</html>