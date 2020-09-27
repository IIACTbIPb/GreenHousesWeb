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
								<?php
								$mas = array();
								$img = array();
								$i=0; $j=0;
								 foreach ($seeds as $seed):?>
								<div class="package_seeds" id="bed" data-num="<?=$i?>">
									<div class="name_package" >
										<p><?= $seed["Name"] ?></p>
									</div>
									<div class="img_package">
										<p class="time_package" >Время выращивания:</p><h3><?= $seed["GrowingTime"];?>сек</h3>
									</div>
								</div>
								<?php
									$img[$j] = $seed["image"];
									$mas[$i] = $seed["GrowingTime"];
									$i++; $j++;
								 endforeach;
								  $json = json_encode($mas);
								  $image = json_encode($img);
								?>
							<script type="text/javascript">
									var img = JSON.parse('<?php echo $image?>');
									var GrowingTime = JSON.parse('<?php echo $json?>');
								</script>
							</div>
						</div>
						<div class="sectros">
							<div class="img_dom"></div>
							<div class="beds">
								
							<div class="graydka">
								<div class="germs_time1" data-timeNum="1"></div>
								<div class="beds_item">
									<div class="germs">
										<div class="germs_item1"><h3 class="active">
											1</h3>
										</div>
										
									</div>

									<img src="img/gryadka.png" alt="">
								</div>
							</div>

							<div class="graydka">
								<div class="germs_time2" data-timeNum="2"></div>
								<div class="beds_item">
									<div class="germs">
										<div  class="germs_item2"><h3 class="active">2</h3>
										</div>
										
									</div>
									
									<img src="img/gryadka.png" alt="">
								</div>
							</div>

							<div class="graydka">
								<div class="germs_time3" data-timeNum="3"></div>
								<div class="beds_item">
									<div class="germs">
										<div class="germs_item3" ><h3 class="active">
											3</h3>
										</div>
										
									</div>
									
									<img src="img/gryadka.png" alt="">
								</div>
							</div>		
								

							</div>
						</div>
					</div>
				</div>
			</div>
	</article>
	
    <script src="js/script.js"></script>
</body>
</html>