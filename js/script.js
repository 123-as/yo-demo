$(document).ready(function () {

    // Load JSON file
    let openingAnimWindow = document.querySelector('#openingLottie');
    let openingAnimData = {
      container: openingAnimWindow,
      animType: 'svg',
      loop: false,
      prerender: true,
      autoplay: true,
      path: 'animate.json'
      // path: 'https://assets4.lottiefiles.com/packages/lf20_sDnu5h.json'
    };
    // set bodymovin
    let openingAnim = bodymovin.loadAnimation(openingAnimData);
  
  
    $('#lottie-start').click(function () {
      openingAnim.play();
    });
  
    $('#lottie-pause').click(function () {
      openingAnim.pause();
    });
  
    $('#lottie-stop').click(function () {
      openingAnim.stop();
    });
  
  });