$(function(){
	$("#wizard").steps({
        headerTag: "h4",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        transitionEffectSpeed: 300,
        labels: {
            
            finish: 'Submit'
        },
        onStepChanging: function (event, currentIndex, newIndex) { 
            if ( newIndex >= 1 ) {
                $('.steps ul li:first-child a img').attr('src','front/images/step-1.png');
            } else {
                $('.steps ul li:first-child a img').attr('src','front/images/step-1-active.png');
            }

            if ( newIndex === 1 ) {
                $('.steps ul li:nth-child(2) a img').attr('src','front/images/step-2-active.png');
            } else {
                $('.steps ul li:nth-child(2) a img').attr('src','front/images/step-2.png');
            }

           
            return true; 
        }
    });
    // Custom Button Jquery Steps
   
    // Click to see password 
  
 
    // Create Steps Image
    $('.steps ul li:first-child').append('<img src="front/images/step-arrow.png" alt="" class="step-arrow">').find('a').append('<img src="front/images/step-1-active.png" alt=""> ').append('<span class="step-order">Buy</span>');
    $('.steps ul li:nth-child(2').append('<img src="front/images/step-arrow.png" alt="" class="step-arrow">').find('a').append('<img src="front/images/step-2.png" alt="">').append('<span class="step-order">Sell</span>');
   
    // Count input 
    $(".quantity span").on("click", function() {

        var $button = $(this);
        var oldValue = $button.parent().find("input").val();

        if ($button.hasClass('plus')) {
          var newVal = parseFloat(oldValue) + 1;
        } else {
           // Don't allow decrementing below zero
          if (oldValue > 0) {
            var newVal = parseFloat(oldValue) - 1;
            } else {
            newVal = 0;
          }
        }
        $button.parent().find("input").val(newVal);
    });
})
