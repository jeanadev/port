$(function(){
// Can't feature detect as this is a bug in various browsers implementations
  if(!/Firefox\/4/.test(navigator.userAgent))
    {
        // Add elements to replace the :before & :after pseudo elements
            $('h3').append('<span class="after"></span>').prepend('<span class="before"></span>');
    }
});

