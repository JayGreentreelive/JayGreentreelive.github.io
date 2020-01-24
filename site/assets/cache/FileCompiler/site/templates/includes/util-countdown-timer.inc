<div class="countdown-timer">
    <div class="spacer"></div>

    <div class="time">
        <span class="btn-live days">00</span>
        <span class="time-label">days</span>
    </div>
    
    <div class="spacer"></div>
    
    <div class="time">
        <span class="btn-live hours">00</span>
        <span class="time-label">hours</span>
    </div>
    
    <div class="spacer"></div>
    
    <div class="time">
        <span class="btn-live minutes">00</span>
        <span class="time-label">minutes</span>
    </div>
    
    <div class="spacer"></div>

    <div class="time">
        <span class="btn-live seconds">00</span>
        <span class="time-label">seconds</span>
    </div>

    <div class="spacer"></div>
</div>

<div class="countdown-complete">
    <a href="/live/" target="_blank" class="btn btn-primary">Live now</a>
</div>

<script>
     function showCountdownTimer() {
         $(".countdown-timer").css("display","flex");
         $(".countdown-complete").css("display", "none");
     }

     function showCountdownCompletion() {
         $(".countdown-timer").css("display","none");
         $(".countdown-complete").css("display", "flex");
     }

     function startTimer( countdownTargetDateMS ) {
         x = setInterval( function() { tickTimer( countdownTargetDateMS ); }, 1000);
     }
     
     // countdownTargetDateMS should be a full epoch date in milliseconds
     function tickTimer( countdownTargetDateMS ) {
        
        var nowDateMS = new Date().getTime();
        
        // get the delta from now to the target time (all in milliseconds)
        var deltaTime = countdownTargetDateMS - nowDateMS;

        // calc needed values to break out the time parts
        var dayInMilliseconds = (1000 * 60 * 60 * 24);
        var hourInMilliseconds = (1000 * 60 * 60);
        var minutesInMilliseconds = (1000 * 60);

        var days = Math.floor( deltaTime / dayInMilliseconds );
        var hours = Math.floor( deltaTime % dayInMilliseconds / hourInMilliseconds );
        var minutes = Math.floor( deltaTime % hourInMilliseconds / minutesInMilliseconds );
        var seconds = Math.floor( deltaTime % minutesInMilliseconds / 1000 );

        // update the actual markup, and there're always two digits
        $(".days").text( addLeadingZero( days ) ); 
        $(".hours").text( addLeadingZero( hours ) );
        $(".minutes").text( addLeadingZero( minutes ) );
        $(".seconds").text( addLeadingZero ( seconds ) );

        if( (days + hours + minutes + seconds) > 0 )
        {
            showCountdownTimer();
        }
        else {
            showCountdownCompletion();
            
            clearInterval( x );
        }
     }

     function addLeadingZero( value ) {
         if( value < 10 ) { 
             return "0" + value 
         };

         return value;
     }
</script>