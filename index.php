<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Lessone 13</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<header>
			<nav class="container">
				<ul id = "menu">
                    <?php for($i=1;$i<6;$i++){
                        ?>
                    <li><a href="">Item<?php echo $i;?></a></li>
                    <?php
                    }?>
				</ul>

			</nav>
		</header>
		<div class = "container">
			<div class="post-list">
				<article id ="post-1" class= "post" >
					<div class="post-content">
						<div class="category">
							<a href="">Первая категория контента</a>

						</div>
						<h2 class= "post-title">Первый пост</h2>
						<p>Содержание(какое-то) поста </p>

					</div>
				</article>
			</div>

		</div>
		<footer>
			<div class="container">
				<div class="footer-col"><span>Мой сайт от "Synergy" jule 2022</span></div>
			</div>
		</footer>
	</body>
</html>