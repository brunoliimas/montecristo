<script src="<?php echo base_url('js/jquery.js') ?>"></script>

<!-- http://www.inwebson.com/html5/custom-html5-video-controls-with-jquery/ -->

<style>
	video {
		cursor: pointer;
	}

	.video-container {
		margin: auto;
		text-align: center;
	}

	.controls {
		background-color: #fafafa;
		height: 27px;
		padding: 0;
		position: relative;
		z-index: 1000;
		margin: auto;
		margin-top: 8px;
	}

	.controls .video-back {
		position: absolute;
		padding: 5px;
		top: 4px;
		left: 8px;
	}

	.controls .video-play {
		position: absolute;
		padding: 5px;
		top: 4px;
		left: 31px;
	}

	.controls .video-pause {
		position: absolute;
		padding: 5px;
		top: 4px;
		left: 31px;
	}

	.controls .divider {
		width: 1px;
		background-color: #bfbfbf;
		line-height: 5px;
		height: 11px;
	}

	.controls .divider.one {
		position: absolute;
		top: 8px;
		left: 29px;
	}

	.controls .divider.two {
		position: absolute;
		top: 8px;
		left: 51px;
	}

	.controls .video-forward {
		position: absolute;
		padding: 5px;
		top: 4px;
		left: 51px;
	}

	.controls .video-seek {
		position: absolute;
		left: 80px;
		right: 100px;
		height: 5px;
		top: 11px;
		background-color: #ffffff;
	}

	.controls .video-load-progress {
		height: 5px;
		background-color: #e0e0e0;
		z-index: 1;
		width: 0%;
	}

	.controls .video-play-progress {
		height: 5px;
		background-color: #bebebe;
		margin-top: -5px;
		z-index: 2;
		width: 0%;
	}

	.controls .video-playhead {
		position: absolute;
		left: -5px;
		top: 5px;
		xcursor: pointer;
	}

	.controls .video-timer {
		position: absolute;
		width: 50px;
		right: 36px;
		top: 6px;
		font-size: 10px;
		color: #bfbfbf;
		text-align: center !important;
	}

	.controls .video-mute {
		position: absolute;
		padding: 5px;
		top: 1px;
		right: 6px;
	}

	.controls .video-unmute {
		position: absolute;
		padding: 5px;
		top: 1px;
		right: 6px;
	}
</style>
<div class="video-container">

	<video id="videoSite" style="width:100%;max-width:768px; max-height:432px" autoplay>
		<?php if (@$mp4 != '') : ?>
			<source src="<?php echo $mp4 ?>" type="video/mp4" />
		<?php endif; ?>
		<?php if (@$ogg != '') : ?>
			<source src="<?php echo $ogg ?>" type="video/ogg" />
		<?php endif; ?>
	</video>

	<div class="controls" style="max-width: 718px; ">
		<a href="javascript:;" class="video-back" title="Back"><img src="<?php echo base_url('img/video/video-rewind.gif?x=30092014') ?>" width="8" height="8" alt="Back"></a>
		<div class="divider one">&nbsp;</div>
		<a href="javascript:;" class="video-play" title="Play" style="display: block;"><img src="<?php echo base_url('img/video/video-play.gif?x=30092014') ?>" width="8" height="8" alt="Play"></a>
		<a href="javascript:;" class="video-pause" title="Pause" style="display: none;"><img src="<?php echo base_url('img/video/video-pause.gif?x=30092014') ?>" width="8" height="8" alt="Pause"></a>
		<div class="divider two">&nbsp;</div>
		<a href="javascript:;" class="video-forward" title="Forward"><img src="<?php echo base_url('img/video/video-fastforward.gif?x=30092014') ?>" width="8" height="8" alt="Fast Forward"></a>
		<div class="video-seek">
			<div class="video-load-progress" style="width: 0px"> </div>
			<div class="video-play-progress" style="width: 0px"> </div>
			<img style="display:none" class="video-playhead ui-draggable" src="<?php echo base_url('img/video/video-playhead.gif?x=30092014') ?>" width="10" height="5" alt="" style="left: -5px;" style="display:none">
		</div>
		<div class="video-timer">0:00</div>
		<a href="javascript:;" class="video-mute" title="Mute"><img src="<?php echo base_url('img/video/video-mute.gif?x=30092014') ?>" width="13" height="11" alt="Mute"></a>
		<a href="javascript:;" class="video-unmute" title="Unmute" style="display: none;"><img src="<?php echo base_url('img/video/video-unmute.gif?x=30092014') ?>" width="13" height="11" alt="Unmute"></a>
	</div>

</div>

<script>
	//Time format converter - 00:00
	var timeFormat = function(seconds) {
		var m = Math.floor(seconds / 60) < 10 ? "0" + Math.floor(seconds / 60) : Math.floor(seconds / 60);
		var s = Math.floor(seconds - (m * 60)) < 10 ? "0" + Math.floor(seconds - (m * 60)) : Math.floor(seconds - (m * 60));
		return m + ":" + s;
	};

	//return a jQuery object
	var video = $('#videoSite');

	//Play/Pause control clicked
	$('.video-play').on('click', function() {
		if (video[0].paused) {
			video[0].play();
			$('.video-pause').show();
			$('.video-play').hide();
		} else {
			video[0].pause();
		}
		return false;
	});

	$('.video-pause').on('click', function() {
		if (!video[0].paused) {
			video[0].pause();
			$('.video-pause').hide();
			$('.video-play').show();
		} else {
			video[0].play();
			$('.video-play').hide();
			$('.video-pause').show();
		}
		return false;
	});

	$('.video-mute').click(function() {
		video[0].muted = true;
		$('.video-mute').hide();
		$('.video-unmute').show();
		return false;
	});

	$('.video-unmute').click(function() {
		video[0].muted = false;
		$('.video-mute').show();
		$('.video-unmute').hide();
		return false;
	});

	//Fast forward control
	$('.video-back').on('click', function() {
		// console.log(video);
		video[0].playbackrate = 3;
		return false;
	});

	//Rewind control
	$('.video-forward').on('click', function() {
		video[0].playbackrate = -3;
		return false;
	});

	//update HTML5 video current play time
	video.on('timeupdate', function() {
		var currentPos = video[0].currentTime; //Get currenttime
		var maxduration = video[0].duration; //Get video duration
		var percentage = 100 * currentPos / maxduration; //in %
		var percentage_playhead = 538 * currentPos / maxduration; //in %
		$('.video-play-progress').css('width', percentage + '%');

		if (percentage_playhead == 0) {
			$('.video-playhead').css('left', '-5px');
		} else {
			$('.video-playhead').css('left', (percentage_playhead - 5) + 'px');
		}

		$('.video-timer').text(timeFormat(video[0].currentTime));

	});

	video.on('onplaying', function() {
		// console.log(1);
		$('.video-pause').show();
		$('.video-play').hide();
	});

	video.on('click', function() {
		if (video[0].paused) {
			video[0].play();
			$('.video-pause').show();
			$('.video-play').hide();
		} else {
			$('.video-pause').hide();
			$('.video-play').show();
			video[0].pause();
		}
	});

	//loop to get HTML5 video buffered data
	var startBuffer = function() {
		var maxduration = video[0].duration;
		var currentBuffer = video[0].buffered.end(0);
		var percentage = 100 * currentBuffer / maxduration;
		$('.video-load-progress').css('width', percentage + '%');

		if (currentBuffer < maxduration) {
			setTimeout(startBuffer, 500);
		}
	};
	setTimeout(startBuffer, 1000);


	var timeDrag = false; /* Drag status */

	$('.video-playhead').mousedown(function(e) {
		timeDrag = true;
		// console.log(1);
		updatebar(e.pageX);
	});

	$(document).mouseup(function(e) {
		if (timeDrag) {
			timeDrag = false;
			updatebar(e.pageX);
		}
	});
	$(document).mousemove(function(e) {
		if (timeDrag) {
			updatebar(e.pageX);
		}
	});

	//update Progress Bar control
	var updatebar = function(x) {

		var progress = $('.video-playhead');
		var maxduration = video[0].duration; //Video duraiton
		var position = x - progress.offset().left; //Click pos

		// console.log(position);

		// var percentage_playhead = position;

		// var percentage_playhead = 538 * position / 546; //in %

		// if(position > 538) {
		// percentage_playhead = 538;
		// }
		// if(position < 0) {
		// percentage_playhead = 0;
		// }

		// if(percentage_playhead == 0){
		// // $('.video-playhead').css('left', '-5px');
		// }
		// else {
		// // $('.video-playhead').css('left', (percentage_playhead-5)+'px');
		// }

		// $('.video-playhead').css('width', percentage+'%');
		// $('.video-playhead').css('left', (percentage_playhead-5)+'px');


		// var percentage = 100 * position / progress.width();


		/*
		//Check within range
		if(percentage > 100) {
			percentage = 100;
		}
		if(percentage < 0) {
			percentage = 0;
		}
		
		console.log(percentage);

		//Update progress bar and video currenttime
		$('.timeBar').css('width', percentage+'%');
		video[0].currentTime = maxduration * percentage / 100;
		*/
	};
</script>