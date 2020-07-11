			<!--botao de login 
			<?php
				if ($_SESSION ['id_usuario'] == false)?> {
					<button type="button" class="btnLog btn-light mt-3 mr-2">
						<a href="html/login.php">
						<?php
							echo $textButton;
						?>
						</a>
					</button>
				}
				<?	
				else {	
					?> 
					<button type="button" class="btnLog btn-light mt-3 mr-2">
						<?php
							echo $textButton;
							$_SESSION ['id_usuario'] = false;
						?>
					</button>
				}	
				-->



								<?php 
				if ($_SESSION ['id_usuario'] == true)?> {	
					<button type="button" class="btnLog btn-light mt-3 mr-2" >
					<a href="index.php">
						<?echo $textButton;
						unset($_SESSION["id_Usuario"]);
						?>		
					</a>	
				}
				<?
				else?>{
					
					<button type="button" class="btnLog btn-light mt-3 mr-2" >
					<a href="html/login.php"><?echo $textButton;?></a>
				}






								<?php
				if (isset($_SESSION['id_Usuario']))?>{	
					<a href="html/login.php">
					<?php
						echo $textButton;
					?>
					</a>	
				<?}
				else{?>
					<a href="index.php">
						<?php 
						echo $textButton;
						unset($_SESSION['id_Usuario']);
						?>		
					</a>
					
				}
