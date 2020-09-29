////////////////////////////////////////////////////////////////////     smooze animations    ///////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////        Jquery           ///////////////////////////////////////////////////////////////////
$('a[href^="#"]').on('click', function(event) {
  var target = $( $(this).attr('href') );
  if( target.length ) {
      event.preventDefault();
      $('html, body').animate({
          scrollTop: target.offset().top
      }, 500);
  }
});
$("#myBtn").click(function(){ 
  $("html, body").animate({ scrollTop: 0 }, 1000); 
  return false; 
});
////////////////////////////////////////////////////////////////////     play & pause    ////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////        Vanila js           ////////////////////////////////////////////////////////////////
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtne");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
////////////////////////////////////////////////////////////////////        Fixed Nav    //////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////        Vanila js           ////////////////////////////////////////////////////////////////
if ($(window).width() > 992) {
  $(window).scroll(function(){  
     if ($(this).scrollTop() > 0) {
        $('#navbar_top').addClass("fixed-top");
        // add padding top to show content behind navbar
        $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
      }else{
        $('#navbar_top').removeClass("fixed-top");
         // remove padding top from body
        $('body').css('padding-top', '0');
      }   
  });
}

////////////////////////////////////////////////////////////////////        scroll top     //////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////        Vanila js           ////////////////////////////////////////////////////////////////
var mybutton = document.getElementById("myBtn");
window.onscroll = function scrollFunction() {
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
  mybutton.style.display = "block";
} else {
  mybutton.style.display = "none";
}
}
////////////////////////////////////////////////////////////////////        choose schadule     /////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////           Jquery           ////////////////////////////////////////////////////////////////
// first
$("#first-butn").click(function(){
  $("#first-butn").addClass("colo");
  $("#firstDay").addClass("animation-schd");
  $("#second-butn").removeClass("colo");
  $("#third-butn").removeClass("colo");
  $("#forth-butn").removeClass("colo");
  $("#firstDay").fadeIn("slow");
  $("#secondDay").hide();
  $("#forthDay").hide();
});
// second and third
$("#second-butn").click(function(){
  $("#second-butn").addClass("colo");
  $("#secondDay").addClass("animation-schd");
  $("#third-butn").removeClass("colo");
  $("#first-butn").removeClass("colo");
  $("#forth-butn").removeClass("colo");
  $("#secondDay").fadeIn("slow");
  $("#firstDay").hide();
  $("#forthDay").hide();
});
// second and third
$("#third-butn").click(function(){
  $("#third-butn").addClass("colo");
  $("#secondDay").addClass("animation-schd-left");
  $("#first-butn").removeClass("colo");
  $("#second-butn").removeClass("colo");
  $("#forth-butn").removeClass("colo");
  $("#secondDay").fadeIn("slow");
  $("#firstDay").fadeOut("slow");
  $("#forthDay").fadeOut("slow");
});
// forth
$("#forth-butn").click(function(){
  $("#forth-butn").addClass("colo");
  $("#forthDay").addClass("animation-schd");
  $("#first-butn").removeClass("colo");
  $("#third-butn").removeClass("colo");
  $("#second-butn").removeClass("colo");
  $("#forthDay").fadeIn("slow");
  $("#firstDay").hide();
  $("#secondDay").hide();
});
////////////////////////////////////////////////////////////////////        ON TYPING TEXT     //////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////        Vanila js           ////////////////////////////////////////////////////////////////
var words = [
 "MFN Family is a private owned network for all companies size. We are different from most of the other networks in the market as we offer to our members the revolution of freight forwarders network services. We are definitely a neutral organization, dealing with all members equally and do not provide any forwarding activity at all, but we are providing the administrative management of the network in accordance with the top professional standards."
];
var letters = "MFN",
    speed = 30,
    steps = 1,
    loader = document.querySelector('#loader');

function getRandomWord(){
  var randomWord = words[Math.floor(Math.random() * words.length)];
  return randomWord;
}
function getRandomLetter(){
  var randomLetter = letters[Math.floor(Math.random() * letters.length)];
  return randomLetter;
}
function randomWordLoop(){
  var word = getRandomWord();
  var textLength = word.length;
  for(var i = 0; i < textLength; i++) {    
    (function(i,word){
      letterAppear(i, word);
    })(i,word)
  }
  
  function letterAppear(i, word) {
    setTimeout(function() {
      randomLetters(i, word);
    }, speed*i);  
  }

  function randomLetters(i, word) {
    for (var j = 0; j <= steps; j++) {
      charsAnim(i, word, j);
    }
  }

  function charsAnim(i, word, j) {
    setTimeout(function() {
      var count = j; 
      if (j < steps) {           
        randomChar(i, word, count, j);
      } else {
        goodChar(i, word, count, j);
      }
    }, ((speed/steps)*j) - (speed/steps));
  }

  function randomChar(i, word, count, j) {
    var letter = getRandomLetter();    
    if (j > 0) {
      var oldText = loader.textContent.slice(0, -1);
    } else {
      var oldText = loader.textContent;
    }
    loader.textContent = oldText + letter;    
  }
  function goodChar(i, word, count, j) {
    var oldText = loader.textContent.slice(0, -1);  
    loader.textContent = oldText + word[i];
    if (i == textLength - 1 ) {
      removeWord();
    }
  }
  
  function removeWord() {
    setTimeout(function() {
      for (var k = 0; k < textLength; k++) {
         removeLetters(k);
      }
    }, speed*2);
  }
  function removeLetters(k) {
    setTimeout(function() {
      removeLetter(k);
    }, 75*k);
  }
  function removeLetter(k) {
    var actualText = loader.textContent.slice(0, -1);
    loader.textContent = actualText;
    if (k == textLength - 1) {
      randomWordLoop();
    }
  }
}
randomWordLoop();

