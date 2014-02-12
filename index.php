<!doctype html>
<html lang="cn">
<head>
	<meta charset="UTF-8">
	<title>我的个人简历</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="icon.css">
</head>
<body>
	<div class="wrap-out">
		<a href="" id="btn-toggle">MORE</a>
		<div class="container">
			<div id="resume">
				<div class="front">
					<div class="mod-l">
						<h3 class="name">曾海平</h3>
						<div class="avatar">
							<img src="avatar.png" alt="">
						</div>
						<h4 class="title">与我联系</h4>
						<ul class="contact">
							<li><span class="icon-mobile"></span>138 1899 5047</li>
							<li><span class="icon-directions"></span>广东省 广州市</li>
							<li><span class="icon-mail"></span>286030975@qq.com</li>
							<li><span class="icon-feather"></span>http://www.cnblogs.com/WhiteCusp/</li>
							<li><span class="icon-github"></span>https://github.com/WhiteCusp</li>
						</ul>
						<h4 class="title">关于我</h4>
						<p class="introduction">您好！我目前就读于广州市华南师范大学，软件工程专业。和大家一样，因为热衷于编程技术带来的无限乐趣而成为了一名互联网开发者。</p>
					</div>
					<div class="mod-r">
						<div class="title"><span class="icon-lab"></span>工作经历</div>
						<div class="experience">
							<div class="item">
								<div class="dt"><strong>2013年9月</strong></div>
								<div class="dd"><strong>上海市携程旅行网</strong></div>
								<div class="dt">职位</div>
								<div class="dd">前端开发工程师（实习）</div>
								<div class="dt">内容</div>
								<div class="dd">就职于技术研发中心UED部门，负责携程首页、我的携程以及内部offline系统的项目与变更。</div>
							</div>
							<div class="item">
								<div class="dt"><strong>2013年7月</strong></div>
								<div class="dd"><strong>广州市博汇数码科技有限公司</strong></div>
								<div class="dt">职位</div>
								<div class="dd">javascript开发工程师（实习）</div>
								<div class="dt">内容</div>
								<div class="dd">负责前端JS/CSS组件维护与开发，参与公司核心产品Easy Monitor的维护和功能研发。以及外包项目Web系统的开发</div>
							</div>
						</div>
						<div class="title"><span class="icon-pencil"></span>教育</div>
						<div class="item">
							<div class="dt"><strong>2010年9月</strong></div>
							<div class="dd"><strong>广东省华南师范大学</strong></div>
							<div class="dt"><strong>2013年9月</strong></div>
							<div class="dd"><strong>广州市天河中学</strong></div>
						</div>
						<div class="title"><span class="icon-wrench"></span>技能</div>
						<ul class="skills">
							<li class="s08" style="top: 158px;left: 150px;">CSS3</li>
							<li class="s08" style="top: 40px;left: 196px;">HTML5</li>
							<li class="s06" style="top: 25px;left: 319px;">php</li>
							<li class="s05" style="top: 99px;left: 390px;">node.js</li>
							<li class="s09" style="top: 20px;left: 60px;">CSS</li>
							<li class="s10" style="top: 150px;left:;">HTML</li>
							<li class="s07" style="top: 122px;left: 285px;">Javascript</li>
						</ul>
					</div>
				</div>
				<div class="back">
					<ul class="gallery">
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		var btnToggle = document.getElementById("btn-toggle");
		var resume =  document.getElementById("resume");
		btnToggle.onclick = function(ev) {
			ev.preventDefault();
			resume.className = resume.className === 'detial' ? resume.className = '' : resume.className = 'detial';
		}
	</script>
</body>
</html>