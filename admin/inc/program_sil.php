<?php echo !defined("ADMIN") ? die("Hacking?") : null;?>
<article style="padding-bottom: 20px" class="module width_full">
	<header><h3>İçerik Sil</h3></header>
	<?php
			
		$id = g("id");
		$delete = query("DELETE FROM programlar WHERE prog_id = '$id'");
		if ($delete){
			echo '<h4 class="alert_success">Program başarıyla silindi.. Yönlendiriliyorsunuz..</h4>';
			go(URL."/admin/index.php?do=programlar", 1);
		}else {
			echo '<h4 class="alert_error">Mysql Hatası: '.mysql_Error().'</h4>';
		}
		
	?>
</article>

<div class="spacer"></div>