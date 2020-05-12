<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
               <a class="main-logo" href="painel.php?sessao=<?php echo gerar_hash(256); ?>"><img style="height:140px;" src="https://static.wixstatic.com/media/63e3de_c2ad2d98371b4fdc85fcba746ec8aab4~mv2.png/v1/fill/w_317,h_108,al_c,q_85,usm_0.66_1.00_0.01/logopaquetes.webp" class="main-logo img-responsive" alt="<?php echo NOME_IPTV; ?>" title="<?php echo NOME_IPTV; ?>"></a>
            </div>
           
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
               <b><?php echo TXT_BEMVINDO; ?>: <?php echo $user; ?></b><br>
               <?php echo TXT_TELAS; ?>: <?php echo $_COOKIE['xconnm']; ?><br>
               <?php echo TXT_VALIDADE; ?>: <?php echo date('d/m/Y H:i:s', $_COOKIE['xdataexpm']); ?><br>
            <?php echo TXT_RESTAM; ?>: <?php
            	$dsfim = date('Y-m-d', $_COOKIE['xdataexpm']);
            	$data_inicio = new DateTime(date('Y-m-d'));
    			$data_fim = new DateTime($dsfim);
    			$dateInterval = $data_inicio->diff($data_fim);
    			echo $dateInterval->days . ' Dias';
    			?>
            </div>
