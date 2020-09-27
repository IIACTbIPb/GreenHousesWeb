$(function(){

	$('.single_add').click(function(){
		$('.modal_window_single').toggleClass('active');
	});
	

	// 3d карточки
	const singles = document.querySelectorAll('.single');
	for (var i = 0; i < singles.length; i++) {
		const single = singles[i];
		single.addEventListener('mousemove',rotate);
		single.addEventListener('mouseleave',stoprotate);
	}
	
	function rotate(event){
		const singleItem = this.querySelector('.single_item');
		const halfHeight = singleItem.offsetHeight / 2;
		const halfWidth = singleItem.offsetWidth / 2;

		singleItem.style.transform = `rotateX(${-(event.offsetY - halfHeight) / 5}deg) rotateY(${
		(event.offsetX - halfWidth) / 10}deg)`
	}
	function stoprotate(){
		const singleItem = this.querySelector('.single_item');
		singleItem.style.transform = 'rotateX(0deg) rotateY(0deg)';
	}

		$('#auth').click(function(){
			$('.modal_window_single1').toggleClass('active');
		});

	let numberSeeds;
		$('.package_seeds').draggable({
				helper: "clone",
					start: function(){//Происходит в момент начала перетаскивания
						numberSeeds = $(this).attr('data-num');
						//console.log(numberSeeds);
						$('.seeds_menu').css({
							overflow: 'visible',

						});
					},
					stop: function(){//в момент остановки
						
						$('.seeds_menu').css({
							overflow: 'scroll'
						});
					}
				});

				function gardenCheck(germs_item, germs_time){
						$(germs_item).css({
							display: 'block'
						});
						$(germs_time).css({
							display: 'block'
						});
						timer(GrowingTime[numberSeeds], germs_time);
					}
			var SectorsSeeds = {
				gryadka0:0,
				gryadka1:0,
				gryadka2:0
			}
			$('.beds > .graydka > .beds_item').droppable({
					drop: function(){
						var bedId = $(this).text();
						if(bedId == 1){
						SectorsSeeds.gryadka0 = numberSeeds;	
						gardenCheck('.germs_item1','.germs_time1');
						}else if(bedId == 2){
						SectorsSeeds.gryadka1 = numberSeeds;
						gardenCheck('.germs_item2','.germs_time2');
						}else if (bedId == 3) {
						SectorsSeeds.gryadka2 = numberSeeds;
						gardenCheck('.germs_item3','.germs_time3');
						
						}

						// $.get(
						// 	'../addSowing.php',
							
						// 	);
					}
			});	
			

		
			
			console.log(img); //Массив картинок семян
			function timer(seconds,selector) {
			let NumSeeds=0;
			var seconds_timer_id = setInterval(function() {
				if (seconds > 0) {
					seconds--;
				if (seconds < 10) {
					seconds = 0 + seconds;
				}
				$(selector).text(seconds);
				//console.log($(selector).text());
					if($(selector).text()==0){
					let nomer = $(selector).attr('data-timeNum');
					//console.log(nomer);
		    		if(nomer == 1){
		    		$('.germs_item1').css({
								background: 'url(../img/'+img[SectorsSeeds.gryadka0]+')'
							});
		    		}
		    		if(nomer == 2){
		    		$('.germs_item2').css({
								background: 'url(../img/'+img[SectorsSeeds.gryadka1]+')'
							});
		    		}
		    		if(nomer == 3){
		    		$('.germs_item3').css({
								background: 'url(../img/'+img[SectorsSeeds.gryadka2]+')'
							});
		    		}

		    		

		    		$(selector).hide();
		    		$('.germs_item'+nomer).addClass("ReadyProduct");
		    		$('.germs_item'+nomer).click(function(){
		    			$(this).hide();
		    			$(this).css({
								background: 'url(../img/gryadka2.png) no-repeat center'
							});
		    			$(this).toggleClass("ReadyProduct");
		    		});
		     		}
				} else {
					clearInterval(seconds_timer_id);
				}
			}, 1000);
		}

	
});