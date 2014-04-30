<div class="sub-nav">
	<div class="logo">
		<img src="<?=get_template_directory_uri()?>/images/logo2.png" >
		<br />
		ShangHai Pyramis Point Ltd
	</div>
	<div class="verticle-center">
		<ul class="nav">
			<li<?php if(strpos($_SERVER['REQUEST_URI'], '/print-press/') !== false){ ?> class="on"<?php } ?>>
				<a href="<?=site_url()?>/category/print-press/">
					Print Press
					<br />
					平面媒体
				</a>
			</li>
			<li<?php if(strpos($_SERVER['REQUEST_URI'], '/online-media/') !== false){ ?> class="on"<?php } ?>>
				<a href="<?=site_url()?>/category/online-media/">
					Online Press
					<br />
					网络媒体
				</a>
			</li>

		</ul>
		<ul class="nav">
			<li<?php if($_GET['tag'] === '2014'){ ?> class="on"<?php } ?>>
				<a href="?tag=2014">2014</a>
			</li>
			<li<?php if($_GET['tag'] === '2013'){ ?> class="on"<?php } ?>>
				<a href="?tag=2013">2013</a>
			</li>
			<li<?php if($_GET['tag'] === '2012'){ ?> class="on"<?php } ?>>
				<a href="?tag=2012">2012</a>
			</li>
			<li<?php if($_GET['tag'] === '2011'){ ?> class="on"<?php } ?>>
				<a href="?tag=2011">2011</a>
			</li>
			<li<?php if($_GET['tag'] === '2010'){ ?> class="on"<?php } ?>>
				<a href="?tag=2012">2010</a>
			</li>
			<li<?php if($_GET['tag'] === 'earlier'){ ?> class="on"<?php } ?>>
				<a href="?tag=earlier">Earlier</a>
			</li>
		</ul>
	</div>
</div>