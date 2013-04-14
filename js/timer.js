var timer = {

    // beeps in seconds
    beepTime: 0,

    // interval processes
    beepProcess: null,
    timeProcess: null,

    putTime: function() {
        var ohYeahTime = new Date();
        $('#h').html(ohYeahTime.getHours());
        $('#m').html(ohYeahTime.getMinutes());
        $('#s').html(ohYeahTime.getSeconds());
    },

    beep: function() {
        $('#audio').get(0).play();
        console.log("beep");
    },

    start: function() {
        this.beepProcess.play();
        $('#start-pause').html('PAUSE');
    },

    pause: function() {
        this.beepProcess.pause();
        $('#start-pause').html('CONTINUE');
    },

    reset: function() {
        this.beepProcess.stop();
        $('#start-pause').html('START');
        $('#interval').prop('disabled', false);
    },

    calculateInterval: function() {
        var timeString = $('#interval').val();
        var hours = 0,
            minutes = 0,
            seconds = 0;

        var hr = /\d+(?=h)/,
            mr = /\d+(?=m)/,
            sr = /\d+(?=s)/;

        if (hr.test(timeString)) { hours = timeString.match(/\d+(?=h)/)[0]; }
        if (mr.test(timeString)) { minutes = timeString.match(/\d+(?=m)/)[0]; }
        if (sr.test(timeString)) { seconds = timeString.match(/\d+(?=s)/)[0]; }

        this.beepTime = (hours*3600)+(minutes*60)+(seconds*1);
    },

    startTimer: function() {
        this.timeProcess = jQuery.timer(this.putTime, 1000, true);
    },

    startBeeper: function() {
        this.calculateInterval();
        this.beepProcess = jQuery.timer(this.beep, this.beepTime*1000, false);
        $('#interval').prop('disabled', true);
    },
};

timer.startTimer();

// triggers for the beeping process
$('#start-pause').click(function() {
    if (! /^((\d+)(h|m|s)){1,3}$/.test($('#interval').val())) { 
        $('#error').show();
        throw "Interval of improper format, stop execution";
    }

    var contents = $(this).html();
    if (contents == 'START') { timer.startBeeper(); timer.start(); }
    else if (contents == 'CONTINUE') { timer.start(); }
    else { timer.pause(); }
});

$('#reset').click(function() { timer.reset(); });
$('#hide-error').click(function() { $('#error').hide(); });