
		$(document).ready(function(){
    	$('.top-progress-block').viewportChecker({
				callbackFunction: function(elem, action){

					var circle = new ProgressBar.Circle('#progress25', {
							color: '#2c93d5',
							duration: 3000,
							easing: 'easeInOut',
							strokeWidth: 2,
							trailColor: '#b3b3b3',
							trailWidth: 2,
					});

					var circle2 = new ProgressBar.Circle('#progress50', {
							color: '#2c93d5',
							duration: 3000,
							easing: 'easeInOut',
							strokeWidth: 2,
							trailColor: '#b3b3b3',
							trailWidth: 2,
					});
					var circle3 = new ProgressBar.Circle('#progress75', {
							color: '#2c93d5',
							duration: 3000,
							easing: 'easeInOut',
							strokeWidth: 2,
							trailColor: '#b3b3b3',
							trailWidth: 2,
					});
					var circle4 = new ProgressBar.Circle('#progress100', {
							color: '#2c93d5',
							duration: 3000,
							easing: 'easeInOut',
							strokeWidth: 2,
							trailColor: '#b3b3b3',
							trailWidth: 2,
					});

					circle.animate(0.25);
					circle2.animate(0.50);
					circle3.animate(0.75);
					circle4.animate(1.00);

				 },

});

    });

		jQuery(document).ready(function() {
    jQuery('.vozmojnosty4th-block-cnt').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInUp',
        offset: 300
       });
});

jQuery(document).ready(function() {
jQuery('.study-3th-block-cnt').addClass("hidden").viewportChecker({
		classToAdd: 'visible animated bounceInRight',
		offset: 300
	 });
});

$(document).on('click', '#menu-toggle', function() {
  $(this).toggleClass('menu-burger--is-active');
});



$(document).ready(function () {

        $('#menu-toggle').click(function() {
            $('.overlay').toggleClass('anim');
        });

        $('.animation').click(function(){
            $('.anim').toggleClass('reverse-animation');
        })
});



var check = true;
$(window).on('load scroll', function()
{
try {

if($(window).scrollTop() + $(window).height() >= $('.static-univers').offset().top)
{
	if (check) {
		check = false;

		$('.st-cfr').each(function () {
			$(this).prop('Counter',0).animate({
				Counter: $(this).text()
			}, {
				duration: 4000,
				easing: 'swing',
				step: function (now) {
					$(this).text(Math.ceil(now));
				}
			});
		});
	}
}
}
catch(e) {
console.warn("Cannot find elements '.numb-back'");
}
});




////////timer///////
var timer;

var compareDate = new Date();
compareDate.setDate(compareDate.getDate() + 7); //just for this demo today + 7 days

timer = setInterval(function() {
  timeBetweenDates(compareDate);
}, 1000);

function timeBetweenDates(toDate) {
  var dateEntered = toDate;
  var now = new Date();
  var difference = dateEntered.getTime() - now.getTime();

  if (difference <= 0) {

    // Timer done
    clearInterval(timer);

  } else {

    var seconds = Math.floor(difference / 1000);
    var minutes = Math.floor(seconds / 60);
    var hours = Math.floor(minutes / 60);

    hours %= 24;
    minutes %= 60;
    seconds %= 60;

    $("#hours").text(hours);
    $("#minutes").text(minutes);
    $("#seconds").text(seconds);
  }
}
