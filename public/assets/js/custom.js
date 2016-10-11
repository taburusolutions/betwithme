// Countdown
$(function () {
    $('.countdown').each(function () {
        var count = $(this);
        $(this).countdown({
            zeroCallback: function (options) {
                var newDate = new Date(),
                    newDate = newDate.setHours(newDate.getHours() + 130);

                $(count).attr("data-countdown", newDate);
                $(count).countdown({
                    unixFormat: true
                });
            }
        });
    });
});

$(document).ready(function () {
    $('.carousel').carousel({
        interval: 6000
    });
});


$(window).load(function () {
    $('#nivo-slider').nivoSlider({
        prevText: '',
        nextText: ''
    });
});


$(function () {
    $('#flexnav').flexNav();
});

// Lighbox gallery
$('#popup-gallery').each(function () {
    $(this).magnificPopup({
        delegate: 'a.popup-gallery-image',
        type: 'image',
        gallery: {
            enabled: true
        }
    });
});

// Lighbox gallery
$('#popup-gallery').each(function () {
    $(this).magnificPopup({
        delegate: 'a.popup-gallery-image',
        type: 'image',
        gallery: {
            enabled: true
        }
    });
});

// Lighbox image
$('.popup-image').magnificPopup({
    type: 'image'
});

// Lighbox text
$('.popup-text').magnificPopup({
    removalDelay: 500,
    closeBtnInside: true,
    callbacks: {
        beforeOpen: function () {
            this.st.mainClass = this.st.el.attr('data-effect');
        }
    },
    midClick: true
});

// Lightbox iframe
$('.popup-iframe').magnificPopup({
    dispableOn: 700,
    type: 'iframe',
    removalDelay: 160,
    mainClass: 'mfp-fade',
    preloader: false
});


// Bootstrap tooltips

// Bootstrap accordion
$('.accordion').on('show', function (e) {
    $(e.target).prev('.accordion-heading').find('.accordion-toggle').addClass('active');
});

$('.accordion').on('hide', function (e) {
    $(e.target).prev('.accordion-heading').find('.accordion-toggle').removeClass('active');
});

$("#accordion-toggle .collapse").collapse();


$(function ($) {
    $("#twitter").tweet({
        username: "betwithme",
        count: 3
    });
});


$(function ($) {
    $("#twitter-ticker").tweet({
        username: "remtsoy", //!paste here your twitter username!
        page: 1,
        count: 20
    });
});

$(document).ready(function () {
    var ul = $('#twitter-ticker').find(".tweet-list");
    var ticker = function () {
        setTimeout(function () {
            ul.find('li:first').animate({marginTop: '-9em', opacity: 0}, 700, function () {
                $(this).detach().appendTo(ul).removeAttr('style');
            });
            ticker();
        }, 5000);
    };
    ticker();
});
$(function () {
    $('#gmap').gmap3({
        marker: {
            address: "Windhoek,Namibia" // ENTER YOUR ADDRESS HERE!
        },
        map: {
            options: {
                zoom: 14
            }
        }
    });
});
$(function () {
    $('#wilto-slider-wrap').wiltoSlider();
});
// Self Hosted video plugin
$('audio,video').mediaelementplayer();
// Responsive videos
$(document).ready(function () {
    $("body").fitVids();
});


// Sticky navigation
$(document).ready(function () {
    if ($('body').hasClass('sticky-header')) {
        var theLoc = $('header.main').position().top;
        $(window).scroll(function () {
            if (theLoc >= $(window).scrollTop()) {
                if ($('header.main').hasClass('fixed')) {
                    $('header.main').removeClass('fixed');
                }
            } else {
                if (!$('header.main').hasClass('fixed')) {
                    $('header.main').addClass('fixed');
                }
            }
        });
    }
});

$(document).ready(function () {
    if ($('body').hasClass('sticky-search')) {
        var theLoc = $('.search-area').position().top;
        if ($('body').hasClass('sticky-header')) {
            var header_h = $('header.main').outerHeight();
        } else {
            header_h = 0;
        }

        $(window).scroll(function () {
            if (theLoc >= $(window).scrollTop()) {
                if ($('.search-area').hasClass('fixed')) {
                    $('.search-area').removeClass('fixed').css({top: 0});
                }
            } else {
                if (!$('.search-area').hasClass('fixed')) {
                    $('.search-area').addClass('fixed').css({top: header_h});
                }
            }
        });
    }
});

/*$(document).ready(function () {
 var form = $("#login_form");
 $.post({
 url     : form.attr("action"),
 type    : form.attr("method"),
 data    : form.serialize(),
 dataType: "json",
 success : function ( json )
 {
 alert( json.message , "Notifications" );
 },
 error   : function ( jqXhr, json, errorThrown )
 {
 var errors = jqXhr.responseJSON;
 var errorsHtml= '';
 $.each( errors, function( key, value ) {
 errorsHtml += '<li>' + value[0] + '</li>';
 });
 alert( errorsHtml , "Error " + jqXhr.status +': '+ errorThrown);
 }
 })
 .done(function(response)
 {
 //
 })
 .fail(function( jqXHR, json )
 {
 //
 });
 return false;
 });*/
/*
 $(document).ready(function() {
 var form = $("#login_form");
 // process the form
 $('#login_form').submit(function(e) {
 // get the form data
 // there are many ways to get this data using jQuery (you can use the class or id also)
 var formData = {
 'email'             : $('input[name=email]').val(),
 'password'          : $('input[name=password]').val(),
 '_token'            : $('input[name=_token]').val(),
 'remember'          : $('input[name=remember]').val()
 };

 $.post({
 type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
 url         : e.currentTarget.action, // the url where we want to POST
 data        : formData, // our data object
 dataType    : 'json', // what type of data do we expect back from the server
 encode      : true,
 // using the done promise callback
 success:function(data) {
 // log data to the console so we can see
 console.log(data.message);
 alert(data.message);
 // here we will handle errors and validation messages
 },
 error: function (data) {
 alert("FAIL"+data.message);
 }
 })
 // stop the form from submitting the normal way and refreshing the page
 e.preventDefault();
 });

 });*/

$(document).ready(function () {
    $(".alert").hide();
    $("#login-form").submit(function (e) {
        //get the action-url of the form
        //do your own request an handle the results
        $.post({
            type: "POST",
            url: e.currentTarget.action,
            data: $("#login-form").serialize(),
            success: function(data) {
                if(data.fail){
                    $("#login-alert").show();
                }else{
                    window.location = data.url;
                }
            }
        });
        e.preventDefault();
    });
});

$(document).ready(function () {
    $(".alert").hide();
    $("#login-form-page").submit(function (e) {
        //get the action-url of the form
        //do your own request an handle the results
        $.post({
            type: "POST",
            url: e.currentTarget.action,
            data: $("#login-form-page").serialize(),
            success: function(data) {
                if(data.fail){
                    $("#login-page-alert").show();
                }else{
                    window.location = data.url;
                }
            }
        });
        e.preventDefault();
    });
});
