function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.max(0, Math.floor((t / 1000) % 60));
  var minutes = Math.max(0, Math.floor((t / 1000 / 60) % 60));
  var hours = Math.max(0, Math.floor((t / (1000 * 60 * 60)) % 24));
  var days = Math.max(0, Math.floor(t / (1000 * 60 * 60 * 24)));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    console.log(t.total);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
      $("#registerLabel").css('display', 'none');
      $("#registerButton").css('display', 'block');
      if($("#registerButton2").length != 0)
        $("#registerButton2").css('display', 'block');
      $("#clockdiv").css('display', 'none');
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}


var deadline = new Date('February 28, 2018 8:10:00');
initializeClock('clockdiv', deadline);


// Load the IFrame Player API code asynchronously.
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// Replace the 'ytplayer' element with an <iframe> and
// YouTube player after the API code downloads.
var player;

function onYouTubePlayerAPIReady() {
  player = new YT.Player('ytplayer', {
    videoId: '2XPZ1hID85Q',
    events:
       {
        'onStateChange': function (event){
          onPlayerStateChange(event);
        }
      }
  });
}


function onPlayerStateChange(event) {
  if (event.data == 2 || event.data == 0) {

    $("h1").animate({
      transform: "scale(1,1)",
      opacity: 1
    },{ duration: 500, queue: false });


    $("h2").animate({
      transform: "scale(1,1)",
      opacity: 1
    },{ duration: 500, queue: false });


    $("#clockdiv").animate({
      transform: "scale(1,1)",
      opacity: 1
    },{ duration: 500, queue: false });


    $("#buttonContainer").animate({
      transform: "scale(1,1)",
      opacity: 1
    },{ duration: 500, queue: false });


    $("#ytplayer").animate({
      opacity: 0,
      duration: 500,
      queue: false },500,function() {
        $("#ytplayer").css({visibility: 'hidden'});
      });
  }
}

$(document).keyup(function(e) {
     if (e.keyCode == 27) { // escape key maps to keycode `27`
        var event = new Event("Video change");
        event.data = 2;
        onPlayerStateChange(event);
        player.stopVideo();
    }
});

function playVideo(){
  $("#ytplayer").css({visibility: 'visible'});

  $("h1").animate({
    transform: "scale(2,2)",
    opacity: 0
  },{ duration: 500, queue: false });


  $("h2").animate({
    transform: "scale(2,2)",
    opacity: 0
  },{ duration: 500, queue: false });


  $("#clockdiv").animate({
    transform: "scale(2,2)",
    opacity: 0
  },{ duration: 500, queue: false });


  $("#buttonContainer").animate({
    transform: "scale(2,2)",
    opacity: 0
  },{ duration: 500, queue: false });


  $("#ytplayer").animate({
    opacity: 1,
    duration: 500,
    queue: false },500,function() {
      player.playVideo();
    });
}