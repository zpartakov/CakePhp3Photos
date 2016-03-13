<?php
$cakeDescription = 'Recettes de cuisine Fred Radeff';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?php echo $title; ?>
    </title>
		<?= $this->Html->css('print.css', array('media' => 'screen'));?>
		<?= $this->Html->css('print.css', array('media' => 'print'));?>
    <?= $this->fetch('css') ?>
</head>
<body>
    <h1>Recettes de cuisine Fred Radeff&nbsp;<img src="/pics/casserole.png" alt="image casserole"/></h1>
  	  <h2 style="margin-left: 1em"><?php echo $title; ?></h2>

            <div class="row">
                <?= $this->fetch('content') ?>
            </div>
<table>
	<tr>
	<td>
		<a href="/dokuwiki/doku.php?id=cuisine:aide_recettes" title="Aide"><img src="/recettes/img/help.png" alt="Aide" /></a>
	</td>
	<td>
		<a href="/www2/services" title="About"><img src="/recettes/img/linux/tux_che.jpg" alt="About" /></a>
	</td>
	<td>
		<a href="https://github.com/zpartakov/recipesCakePHP" title="github repository"><img src="/recettes/img/github.png" alt="github repository" /></a>
	</td>
	<td>
		<a href="/www2/contact" title="contact"><img src="/recettes/img/ico-contact.gif" alt="contact" /></a>
	</td>
	<td>
		<a href="http://creativecommons.org/licenses/by-sa/2.0/fr/" title="GPL License / CopyLeft"><img src="/recettes/img/copyleft.jpg" style="width: 45; height: 45" alt="GPL License / CopyLeft" /></a></td>
	<td>
		<a href="<? echo CHEMIN; ?>recettes/rss"><img src="/pics/rss-feed.png" alt="Flux RSS" style="width: 15; height: 45"></a>
	</td>	
	<td>
		<img src="/recettes/img/qrcode.png" style="width: 45" alt="Code QR" />
	</td>
	</tr>
</table>
  
</body>
</html>
