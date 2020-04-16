<html lang="en"><head>
<meta charset="UTF-8">
<title>JaiPun 404 Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='shortcut icon' href='/jaipunround.ico' type='image/x-icon'>  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');

:root {
	--pink1: #EF73CB;
	--pink2: #DC5F89;
}

body, html {
	margin: 0;
	overflow: hidden;
	position: relative;
}

body {
	align-items: center;
	background-image: linear-gradient(to bottom right, var(--pink1), var(--pink2));
	color: #fff;
	display: flex;
	flex-direction: column;
	font-family: 'Roboto', sans-serif;
	justify-content: center;
	height: 100vh;
	text-align: center;
}

.container h1 {
	font-size: 10em;
	margin: 0 0 0.5em;
	line-height: 10px;
}

.container p {
	font-size: 1.2em;
	line-height: 26px;
}

.container small {
	opacity: 0.7;
}

.container a {
	color: #eee;
}

.circle {
	background-image: linear-gradient(to top right, var(--pink1), var(--pink2));
	border-radius: 50%;
	position: absolute;
	z-index: -1;
}

.circle.small {
	top: 200px;
	left: 150px;
	width: 100px;
	height: 100px;
}

.circle.medium {
	background-image: linear-gradient(to bottom left, var(--pink1), var(--pink2));
	bottom: -70px;
	left: 0;
	width: 200px;
	height: 200px;
}

.circle.big {
	top: -100px;
	right: -50px;
	width: 400px;
	height: 400px;
}

@media screen and (max-width: 480px) {
	.container h1 {
		font-size: 8em;
	}
	
	.container p {
		font-size: 1em;
	}
}

footer {
	background-color: #222;
	color: #fff;
	bottom: 0;
	position: fixed;
	left: 0;
	right: 0;
	letter-spacing: 1px;
	text-align: center;
}

footer p {
	font-size: 1em;
	margin: 5px 0;
}

footer i {
	color: red;
}

footer a {
	color: #3C97BF;
	text-decoration: none;
}
</style>
<script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
</head>
<body translate="no">
<div class="container">
<h1>404</h1>
<p>
The link you clicked may be broken or the <br> page may have been removed.
</p>
<small>Visit the <a href="https://florin-pop.com" target="_blank">home page</a> or <a href="https://florin-pop.com/contact" target="_blank">contact</a> me</small>
<div class="circle small"></div>
<div class="circle medium"></div>
<div class="circle big"></div>
</div>
<footer>
<p>
Created with <i class="fa fa-heart"></i> by
<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
</p>
</footer>


</body></html>