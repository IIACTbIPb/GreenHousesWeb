<?php 
require "header.php";
		$single = get_single_id($_GET["ID"]);
		$seeds = get_seeds();
		$beds = get_sectors();
	?>
	
	<article>
			<div class="main_content_seeds">
				<div class="container">
					<hr>
					<div class="title_single">
						<h1>теплица "<span><?=$single["Name"]?></span>"</h1> 
					</div>
					<hr>
					<div class="greenhouse_main">
						<div class="seeds">
							<div class="seeds_title">
								<h3>Семена</h3>
							</div>
							<div class="seeds_menu" id="scroll">
								<?php foreach ($seeds as $seed):?>
								<div class="package_seeds" id="bed">
									<div class="name_package">
										<p><?= $seed["Name"] ?></p>
									</div>
									<div class="img_package">
										<p class="time_package">Время выращивания:</p><h3><?= $seed["GrowingTime"];?>сек</h3>
									</div>
								</div>
								
								<?php
								 endforeach;
								?>
							
							</div>
						</div>
						<div class="sectros">
							<div class="img_dom"></div>
							<div class="beds">
								<?php 
								foreach ($beds as $bed):?>
							<div class="graydka">
								<div class="germs_time"></div>
								<div class="beds_item">
									<div class="germs">
										<div class="germs_item"><h3 class="active">
											<?=$bed["ID"]?></h3>
										</div>
									</div>
									<img src="img/gryadka.png" alt="">
								</div>
							</div>	
								<?php endforeach; ?>

							</div>
						</div>
					</div>
				</div>
			</div>
	</article>
	
    <script src="js/script.js"></script>
</body>
</html>