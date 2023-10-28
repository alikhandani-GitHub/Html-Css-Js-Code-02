<?php
$province_id = ( empty($province_id) ? 0 : $province_id );
$city_id = ( empty($city_id) ? 0 : $city_id );
?>
<div class="row px-3">
	<div class="col-md-2"></div>
	<div class="col-md-8 text-center mb-3 mt-3 slider-container">
		<button dir="ltr" class="forward-btn">>></button>
		<button dir="ltr" class="backward-btn"><<</button>
		<div class="slider" id="slider1" style="opacity:0;">
			<img src="<?php echo get_root_url(); ?>dist/img/slider/slider1.jpg" class="body-background logo-img-slider">
			<!--h2 class="h6sm">به سامانه فدراسیون بوکس جمهوری اسلامی ایران خوش آمدید</h2-->
		</div>
		<div class="slider" id="slider2" style="opacity:0;">
			<img src="<?php echo get_root_url(); ?>dist/img/slider/slider2.jpg" class="body-background logo-img-slider">
		</div>
		<div class="slider" id="slider3" style="opacity:0;">
			<img src="<?php echo get_root_url(); ?>dist/img/slider/slider3.jpg" class="body-background logo-img-slider">
		</div>
		<div class="slider" id="slider4" style="opacity:0;">
			<img src="<?php echo get_root_url(); ?>dist/img/slider/slider10.jpg" class="body-background logo-img-slider">
		</div>
		<div class="slider" id="slider5" style="opacity:0;">
			<img src="<?php echo get_root_url(); ?>dist/img/slider/slider11.jpeg" class="body-background logo-img-slider">
		</div>
		<div class="slider" id="slider6" style="opacity:0;">
			<img src="<?php echo get_root_url(); ?>dist/img/slider/slider12f.jpg" class="body-background logo-img-slider">
		</div>
		<div class="slider" id="slider7" style="opacity:0;">
			<img src="<?php echo get_root_url(); ?>dist/img/slider/slider13.jpg" class="body-background logo-img-slider">
		</div>
	</div>
	<div class="col-md-2"></div>
</div>
<script>
	var i = 2;
	$('#slider1').animate({
		opacity: '1',
	});
	var timerInterval = setInterval(function(){
		$(".slider").each(function() {
			if($(this).css('opacity') == '1'){
				$(this).animate({
					opacity: '0',
				});
			}
		});
		$('#slider' + i).animate({
			opacity: '1',
		});
		i++;
		if(i==7){
			i = 1;
		}
	}, 4000);
	$('.slider-container .forward-btn').click(function(){
		clearInterval(timerInterval);
		$(".slider").each(function() {
			if($(this).css('opacity') == '1'){
				$(this).animate({
					opacity: '0',
				});
				$('#slider' + i).animate({
					opacity: '1',
				});
				i++;
				if(i==7){
					i = 1;
				}
			}
		});
	});
	var firstTimeFlag = 0;
	$('.slider-container .backward-btn').click(function(){
		if(firstTimeFlag == 0){
			i = i - 2;
		}
		if(i==0){
			i = 7;
		}
		firstTimeFlag = 1;
		clearInterval(timerInterval);
		$(".slider").each(function() {
			if($(this).css('opacity') == '1'){
				$(this).animate({
					opacity: '0',
				});
				$('#slider' + i).animate({
					opacity: '1',
				});
				i--;
				if(i==0){
					i = 7;
				}
			}
		});
	});
</script>