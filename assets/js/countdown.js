function showCountdownTimer() {
    $(".show-timer").css("display", "block");
    $(".show-live").css("display", "none");

    // show my dashboard button while timer is displayed
    $(".btn-my-dashboard").css("display", "block");
}

function showCountdownCompletion() {
    $(".show-timer").css("display", "none");
    $(".show-live").css("display", "block");

    // hide my dashboard button while watch live now button is displayed
    $(".btn-my-dashboard").css("display", "none");
}

function startTimer(countdownTargetDateMS) {
    x = setInterval(function () { tickTimer(countdownTargetDateMS); }, 1000);
}

// countdownTargetDateMS should be a full epoch date in milliseconds
function tickTimer(countdownTargetDateMS) {

    var nowDateMS = new Date().getTime();

    // get the delta from now to the target time (all in milliseconds)
    var deltaTime = countdownTargetDateMS - nowDateMS;

    // calc needed values to break out the time parts
    var dayInMilliseconds = (1000 * 60 * 60 * 24);
    var hourInMilliseconds = (1000 * 60 * 60);
    var minutesInMilliseconds = (1000 * 60);

    var days = Math.floor(deltaTime / dayInMilliseconds);
    var hours = Math.floor(deltaTime % dayInMilliseconds / hourInMilliseconds);
    var minutes = Math.floor(deltaTime % hourInMilliseconds / minutesInMilliseconds);
    var seconds = Math.floor(deltaTime % minutesInMilliseconds / 1000);

    // update the actual markup, and there're always two digits
    $(".days").text(addLeadingZero(days));
    $(".hours").text(addLeadingZero(hours));
    $(".minutes").text(addLeadingZero(minutes));
    $(".seconds").text(addLeadingZero(seconds));

    if ((days + hours + minutes + seconds) > 0) {
        showCountdownTimer();
    }
    else {
        showCountdownCompletion();

        clearInterval(x);
    }
}

function addLeadingZero(value) {
    if (value < 10) {
        return "0" + value
    };

    return value;
}