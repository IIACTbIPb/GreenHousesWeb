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



		$('.package_seeds').draggable({
				helper: "clone",
					start: function(){//Происходит в момент начала перетаскивания
						
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


			var time = 0;
			$('.beds > .graydka > .beds_item').droppable({
					drop: function(){

						var nameId = $('.img_package > h3:last').text();
						var idBeds = 0;
						var bedId = $(this).text();
						if(bedId == 1){
							idBeds = bedId;
							$('.germs_item:first').css({ //first
								display: 'block'
							});
							$('.germs_time:first').css({ //first
								display: 'block'
							});
							getCountdown();
							setInterval(function () { getCountdown(); }, 1000);
							
						}else if (bedId == 3) {
							idBeds = bedId;
							$('.germs_item:last').css({ //last
								display: 'block'
							});
							$('.germs_time:last').css({ //first
								display: 'block'
							});
							getCountdown();
							setInterval(function () { getCountdown(); }, 1000);
							
						}else if(bedId == 2){
							idBeds = bedId;
							$('.germs_item:odd').css({ //odd
								display: 'block'
							});
							$('.germs_time:odd').css({ //first
								display: 'block'
							});
							getCountdown();
							setInterval(function () { getCountdown(); }, 1000);
						}

						$.get(
							'../addSowing.php',
							{nameId: nameId,
							 idBeds: idBeds}
							);
						
					}
			});	

		 var target_date = new Date().getTime() + (5*3600); // установить дату обратного отсчета
		var  seconds; // переменные для единиц времени
		 var countdown = document.querySelectorAll(".germs_time"); // получить элемент тега
		function getCountdown(){
		 
		    var current_date = new Date().getTime();
		    var seconds_left = (target_date - current_date) / 1000;
		           
		    seconds = pad( parseInt( seconds_left % 60 ) );
		 	
		    // строка обратного отсчета  + значение тега
		    for (var i = 0; i < countdown.length; i++) {
		    	countDowns = countdown[i];
		    	countDowns.innerHTML = "<span>" + seconds + "сек</span>"; 
		    	if(seconds==0){
		    		$('.germs_item').css({ 
								background: 'url(../img/gryadka1.png)'
							});
		    		$('.germs_time').hide();
		    	}
		}
		}
		 
		function pad(n) {
		    return (n < 10 ? '0' : '') + n;
		}
	
});