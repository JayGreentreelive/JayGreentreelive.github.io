<script>
    $( document ).ready(function() { 
        $.ajax({url: "/countdown.json", success: function(result){
            
            // if CCV live is, well, live, then just show a link to it
            if( result.response.item.isLive == true ) {
                showCountdownCompletion();

                // hide the 'next event' text, since the next event is NOW
                $(".lead-text").css("display", "none");
            }
            else {
                // otherwise parse the next start time out, and display the countdown
                var timeInMS = new Date(result.response.item.eventStartTime).getTime();
                startTimer( timeInMS );

                // show the 'next event' text, since the next event is NOW
                $(".lead-text").css("display", "block");
            }
        }}) 
    });
</script>

<div class="ccv-live-countdown">
    <?php include("util-countdown-timer.inc");?>
</div>