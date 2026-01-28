
var arabicLang = false;

// Theme Toggle Functionality
(function() {
    // Get theme from localStorage or default to 'light'
    const getTheme = () => {
        const savedTheme = localStorage.getItem('theme');
        return savedTheme || 'light';
    };

    // Set theme
    const setTheme = (theme) => {
        document.documentElement.setAttribute('data-theme', theme);
        localStorage.setItem('theme', theme);
    };

    // Initialize theme on page load
    const initTheme = () => {
        const theme = getTheme();
        setTheme(theme);
    };

    // Toggle theme
    const toggleTheme = () => {
        const currentTheme = document.documentElement.getAttribute('data-theme') || 'light';
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        setTheme(newTheme);
    };

    // Initialize theme immediately (before DOM ready to prevent flash)
    initTheme();

    // Add event listeners when DOM is ready
    $(function() {
        // Desktop toggle
        $('#themeToggle').on('click', function(e) {
            e.preventDefault();
            toggleTheme();
        });

        // Mobile toggle
        $('#themeToggleMobile').on('click', function(e) {
            e.preventDefault();
            toggleTheme();
        });
    });
})();

$(function(){

    if($('html').attr('dir') == 'rtl'){arabicLang = true}


    var lazyLoadInstance = new LazyLoad({
        // Your custom settings go here
      });

    Fancybox.bind("[data-fancybox]", {
        //hideScrollbar: false,
        on: {
            reveal: (fancybox, key) => {
                console.log(fancybox,key);

                if($(key.triggerEl).hasClass('speaker')){
                    speakerSlider($(key.triggerEl).attr('data-slide'));
                }
            },
            close: (fancybox, key) => {
                //console.log(key);
                $('.speakerPopupSlider').slick('unslick');
            }
        }
    });

    slickSliderAll(arabicLang);
    cardShuffleSlider();
    aosAnim();
    stepForm();

    $('[href="#"]').attr('href','javascript:;');

    if($('body').hasClass('home')){
        // countdownTimer("dec 15, 2024 00:00:00");
    }


    var curentUrl = location.href;
    if(curentUrl.indexOf('en/') > 0){
        $('.lang-link').attr('href',curentUrl.replace('en/','ar/'));
    }else{
        $('.lang-link').attr('href',curentUrl.replace('ar/','en/'));
    }


    $('.loader').on('click', function(){
        $(this).remove();
    });
    var lod = setInterval(function(){
        if($('.loader').css('opacity') == '0'){$('.loader').remove(); clearInterval(lod);}
    },100);

    var curentUrl = location.href;
    if(curentUrl.indexOf('en/') > 0){
        $('.ar-link').attr('href',curentUrl.replace('en/','ar/'));
    }else{
        $('.en-link').attr('href',curentUrl.replace('ar/','en/'));
    }

   

    $('body').on('click','.menuSwitch',function(){
        $('body').toggleClass('menuOpen');
    }).on('click','.mobileMenu nav ul li a',function(){
        $('body').removeClass('menuOpen');
    });

    var hd = $('.viewSection header').clone();
    $('.stickyHeader').append(hd);
    hd = $('.viewSection header nav').clone();
    $('.mobileMenu nav').html(hd);

    $('.vidSec .vidDv button').on('click',function(){
        if($('.vidSec').hasClass('playing')){
            $('.vidSec').removeClass('playing');
            $('.vidSec .vidDv video')[0].pause();
        }else{
            $('.vidSec').addClass('playing');
            $('.vidSec .vidDv video')[0].play();
        }
    });
    // Add an event listener to detect when the video is paused
    var videoEl = document.querySelector('.vidSec .vidDv video');
    if (videoEl) {
        videoEl.addEventListener('pause', function() {
            // Example: remove playing class if paused manually
            document.querySelector('.vidSec').classList.remove('playing');
            // You can do anything you want here when video is paused
        });
    }

    

    setTimeout(()=>{equalHeightFromTablet();},500);
    setInterval(()=>{equalHeightFromTablet();},5000);


    $(document).on('click', '#back-to-top, .back-to-top', () => {
        $('html, body').animate({ scrollTop: 0 }, '500');
        return false;
    });

    $(window).on('scroll', () => {
        if ($(window).scrollTop() > 500) {
            $('#back-to-top').addClass('show');
        } else {
            $('#back-to-top').removeClass('show');
        }
        
        
        if ($(window).scrollTop() > 200) {
         $('body').addClass('sticky');
        }else{
         $('body').removeClass('sticky');
        }


        
    });




   

    
});

window.onload = ()=>{
    //$('body>header').css('top','0px');
}


function countdownTimer(deadlinedate){
    let deadline = new Date(deadlinedate).getTime();

    let x = setInterval(function () {
        let now  = new Date().getTime();
        let t = deadline - now;
        let days = Math.floor(t/(1000*60*60*24));
        let hours = Math.floor((t%(1000*60*60*24))/(1000*60*60));
        let minutes = Math.floor((t%(1000*60*60))/(1000*60));
        let seconds = Math.floor((t%(1000*60))/1000);

        hours = hours < 10 ? "0" + hours : hours;
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        var timerHtml = "<p>"+days+"<span>Days</span></p>:<p>"+hours+"<span>Hours</span></p>:<p>"+minutes+"<span>Minutes</span></p>:<p>"+seconds+"<span>Seconds</span></p>";
        if(arabicLang){
            timerHtml = "<p>"+days+"<span class='txt-ar'>ايام</span></p>:<p>"+hours+"<span class='txt-ar'>ساعات</span></p>:<p>"+minutes+"<span class='txt-ar'>دقائق</span></p>:<p>"+seconds+"<span class='txt-ar'>ثواني</span></p>";
        }
        document.getElementById('timer').innerHTML =  timerHtml;
        // Output for over time
        if (t < 0) {
            clearInterval(x);
            document.getElementById("timer").innerHTML = "EXPIRED";
        }
    }, 1000);
}


function counterAnimation(tgt, upto){
    let init = 0;
    let counts = setInterval(function(){
        //let count = document.getElementById("counter");
        tgt.parent().width(tgt.parent().outerWidth());
        init = init + (upto/100);
        tgt.html(parseInt(init));
        //console.log(init + parseInt(10/upto));
        if (upto <= init) {
            //tgt.html(upto);
            tgt.parent().removeAttr('style');
            clearInterval(counts);
        }
    },20);
}

var eqHt = {};
function equalHeight(){
    var tgtids = [];
    $('[data-equal-height]').each(function(){
        if(tgtids.indexOf($(this).attr('data-equal-height')) < 0){
            tgtids.push($(this).attr('data-equal-height'));
        }
    });
    if(tgtids.length>0){
        var cssTxt = false;
        $.each(tgtids, function(i,j){
            var tgtht = 0;
            $('[data-equal-height="'+j+'"]').each(function(){
                if($(this).height() > tgtht){
                    tgtht = $(this).height();
                }
            });
            if(!eqHt[j] || eqHt[j] != tgtht){
                eqHt[j] = tgtht;
                cssTxt = true;
            }
        });
        if(cssTxt){
            $('#eqheight').remove();
            $('head').append('<style id="eqheight" />');
            $.each(eqHt, (k,v)=>{
                $('#eqheight').append('[data-equal-height="'+k+'"]{min-height:'+v+'px;}');
            });
        }
    }
}

function equalHeightFromTablet(){
    if($(window).width() > 514){equalHeight();}
}


function slickSliderAll(){

    var slickSettings = {
        dots: false,
        infinite: true,
        arrows: false,
        speed: 5000, // Increased speed for smoother ticker effect
        autoplay: true,
        autoplaySpeed: 0, // Set to 0 for continuous scrolling
        cssEase: 'linear', // Linear animation for constant speed
        lazyLoad: 'progressive',
        pauseOnHover: false, // Keep scrolling on hover
        pauseOnFocus: false, // Keep scrolling on focus
        slidesToShow: 6, // Adjust based on your design needs
        slidesToScroll: 1,
        variableWidth: false, // Set to true if items have different widths
        centerMode: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2
                }
            }
        ]
    };
    
    
    if(arabicLang){ 
        slickSettings.rtl = true;
    }
    
    // Choose which ticker style you prefer:
    $('.carouselSlider').slick(slickSettings);


    var slickSettings = {
        dots: false,
        infinite: true,
        arrows: false,
        speed: 300,
        autoplay: true,
        autoplaySpeed: 5000,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<div class="slick-arrow slick-prev"><i class="fa-solid fa-chevron-left"></i></div>',
        nextArrow: '<div class="slick-arrow slick-next"><i class="fa-solid fa-chevron-right"></i></div>',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    };

    if(arabicLang){ 
        slickSettings.rtl = true;
    }
    $('.testimonialsDv .sliderDv').slick(slickSettings);







    // var slickSettings = {
    //     dots: false,
    //     infinite: true,
    //     arrows: false,
    //     speed: 300,
    //     autoplay: false,
    //     lazyLoad: 'progressive'
    // };

    // if(arabicLang){ 
    //     slickSettings.rtl = true;
    // }
    // $('.pillarsSec .imgSlider').slick(slickSettings);


    // var slickSettings = {
    //     dots: false,
    //     infinite: true,
    //     arrows: true,
    //     speed: 300,
    //     autoplay: true,
    //     autoplaySpeed: 5000,
    //     prevArrow: '<div class="slick-arrow slick-prev"><i class="fa-solid fa-chevron-left"></i></div>',
    //     nextArrow: '<div class="slick-arrow slick-next"><i class="fa-solid fa-chevron-right"></i></div>',
    //     asNavFor: '.pillarsSec .imgSlider'
    // };

    // if(arabicLang){ 
    //     slickSettings.rtl = true;
    // }
    // $('.pillarsSec .contentSlider').slick(slickSettings);





}

function aosAnim(){
}



document.addEventListener("DOMContentLoaded", () => {
    // Elements to animate (using a placeholder class 'aos-init' or 'aos-pending')
    const elements = document.querySelectorAll("[data-aos]");
    const keerey = document.querySelectorAll(".vec-design");

    // Function to add animation class on scroll
    const handleScroll = () => {
      elements.forEach((el) => {
        const rect = el.getBoundingClientRect();
        const windowHeight = window.innerHeight || document.documentElement.clientHeight;

        //console.log(rect);

        // Check if element is in the viewport
        if (rect.top <= windowHeight * 0.9) {
          el.classList.add("aos-animate"); // Add the AOS animation class
        } else {
          el.classList.remove("aos-animate"); // Remove it when out of view (optional)
        }
      });
      keerey.forEach((el) => {
        const rectk = el.getBoundingClientRect();
        const windowHeightk = window.innerHeight || document.documentElement.clientHeight;

        //console.log(rect);

        // Check if element is in the viewport
        if (rectk.top <= 0) {
            //console.log(rectk);
          el.classList.add("vec-animate"); // Add the AOS animation class
        } else {
          el.classList.remove("vec-animate"); // Remove it when out of view (optional)
        }
      });
    };

    // Initialize the observer function on scroll
    window.addEventListener("scroll", handleScroll);

    // Trigger on page load in case elements are already in view
    handleScroll();
  });



// function stepForm(){
//     if($('#stepForm').length > 0){
//         var qna = [];
//         var step = 1;
//         var totalSteps = $('#stepForm .formDv .steps').length;
//         stepChange();
//         $('#stepForm .formDv .steps input:radio').on('click', function(){
//             var i = {
//                 q: $(this).parents('.steps').find('h3').text().trim(),
//                 a: $(this).siblings('.option-title').text()
//             };
//             qna.push(i);
//             step++;
//             if(step > totalSteps){
//                 // $('#stepForm .formDv .completedDv').removeClass('d-none');
//                 $('#stepForm .formDv .steps.step'+(step-1)).addClass('d-none done').removeClass('active');
//                 $('#stepForm .formDv .completeForm').removeClass('d-none');
//                 $('#stepForm .formDv .backBtn, #stepForm .formDv .continueBtn').addClass('d-none');
//                 $('#stepForm .formDv .submitBtn').removeClass('d-none');
//                 stepChange(step);
//             }else{
//                 if($('#stepForm .formDv .steps.active').next().hasClass('d-none')){
//                     $('#stepForm .formDv .steps.step'+(step-1)).addClass('d-none done').removeClass('active');
//                     $('#stepForm .formDv .steps.step'+step).removeClass('d-none').addClass('active');
//                 }
//                 stepChange(step);
//             }
//         });
//         $('#stepForm .formDv .backBtn').on('click', function(){
//             if(step > 1){
//                 step--;
//                 $('#stepForm .formDv .steps.step'+step).removeClass('d-none').addClass('active');
//                 $('#stepForm .formDv .steps.step'+(step+1)).addClass('d-none done').removeClass('active');
//                 stepChange(step);
//             }
//         });
//         $('#stepForm .formDv .continueBtn').on('click', function(){
//             if(step <= totalSteps){
//                 if($('#stepForm .formDv .steps.step'+(step+1)).hasClass('done')){
//                     $('#stepForm .formDv .steps.step'+step).addClass('d-none').removeClass('active');
//                     $('#stepForm .formDv .steps.step'+(step+1)).removeClass('d-none').addClass('active');
//                     step++;
//                     stepChange(step);
//                 }
//             }
//         });
//         $('#stepForm .formDv .submitBtn').on('click', function(){
//             var error = false;
//             $('#stepForm .formDv .completeForm .fieldDv').each(function(){
//                 if($(this).children('.field').val() == ''){
//                     $(this).addClass('error');
//                     error = true;
//                 }else{
//                     $(this).removeClass('error');
//                 }
//             });
//             if(!error){
//                 formSubmit(qna);
//             }
//         });
//     }
// }

// function stepChange(step){
//     var totalSteps = $('#stepForm .formDv .steps').length;
//     var completedSteps = $('#stepForm .formDv .steps.done').length;
//     var percent = parseInt((completedSteps / totalSteps) * 100);
//     $('#stepForm .progressDv .progressBarInner').css('width', percent+'%');
//     $('#stepForm .progressDv .progressBarInner .progressCount').text(percent+'%');
//     $('#stepForm .headerDv .step span').text(step);
// }


function stepForm() {
    if (!$('#stepForm').length) return;

    const answers = {};
    const history = [];

    function goToStep(stepKey) {
        const $current = $('.steps.active');
        const $next = $('.steps[data-step="' + stepKey + '"]');

        if ($current.length) {
            history.push($current.data('step'));
            $current.addClass('d-none done').removeClass('active');
        }

        $next.removeClass('d-none').addClass('active');
        updateProgress();
    }

    function goBack() {
        if (!history.length) return;
        
        const $currentStep = $('.steps.active, .completeForm');

        // Hide complete form if currently visible
        if ($currentStep.hasClass('completeForm')) {
            $('.submitBtn').addClass('d-none');
            $('.continueBtn').removeClass('d-none');
            $currentStep.addClass('d-none').removeClass('active');
        } else {
            $currentStep.addClass('d-none').removeClass('active');
        }

        const prevStep = history.pop();
        $('.steps[data-step="' + prevStep + '"]').removeClass('d-none').addClass('active');
        updateProgress();
    }

    function goForward() {
        const $currentStep = $('.steps.active');
        const $checkedRadio = $currentStep.find('input[type="radio"]:checked');

        // Guard: no selection yet
        if (!$checkedRadio.length) {
            alert('Please select an option to continue');
            return;
        }

        $checkedRadio.trigger('click');
    }

    // Radio click handler
    $('#stepForm').on('click', 'input[type="radio"]', function () {
        const name      = this.name;
        const next      = $(this).data('next');
        const question  = $(this).closest('div.steps').find('h3').first().text().trim() || this.name;
        const answer    = this.value;
        const value       = {
            q: question,
            a: answer,
        };

        answers[name] = value;

        if (next === 'completeForm') {
            showCompleteForm();
        } else {
            goToStep(next);
        }
    });

    // Back button
    $('.backBtn').on('click', function () {
        goBack();
    });

    // Continue button
    $('.continueBtn').on('click', function () {
        goForward();
    });

    // Submit
    $('.submitBtn').on('click', function () {
        formSubmit(answers);
    });

    function showCompleteForm() {
        $('.steps.active').addClass('d-none').removeClass('active');
        $('.completeForm').removeClass('d-none');
        $('.continueBtn').addClass('d-none');
        $('.submitBtn').removeClass('d-none');
        updateProgress(true);
    }

    function updateProgress(isComplete = false) {
        const total = $('.steps').length;
        const done = $('.steps.done').length + (isComplete ? 1 : 0);
        const percent = Math.round((done / total) * 100);

        $('.progressBarInner').css('width', percent + '%');
        $('.progressCount').text(percent + '%');
    }
}

function formSubmit(qna){
    $('#stepForm').addClass('loading');
    $.ajax({
        url: 'inc/sentMail.php',
        type: 'POST',
        data: {
            sendmail: 1,
            formdata: qna,
            fullname: $('#stepForm .formDv [name="fname"]').val(),
            email: $('#stepForm .formDv [name="email"]').val(),
            phone: $('#stepForm .formDv [name="phone"]').val(),
            nationality: $('#stepForm .formDv [name="nationality"]').val()
        },
        success: function(response) {
            // Redirect to thank you page
            window.location.href = 'thankyou';
            $('#stepForm').removeClass('loading');
            console.log(response);
        },
        error: function(xhr, status, error) {
            $('#stepForm #formError').html('<h2>Error</h2><p>There was a problem submitting your responses. Please try again later.</p>');
        }
    });
}


function cardShuffleSlider(){
    //https://codepen.io/maleekcodes/pen/MNWVQK
    var $card = $('#cardShuffleSlider .card');
    var lastCard = $("#cardShuffleSlider .card-list .card").length - 1;

    $('#cardShuffleSlider .next').click(function(){ 
        var prependList = function() {
            if( $('#cardShuffleSlider .card').hasClass('activeNow') ) {
                var $slicedCard = $('#cardShuffleSlider .card').slice(lastCard).removeClass('transformThis activeNow');
                $('#cardShuffleSlider ul').prepend($slicedCard);
            }
        }
        $('#cardShuffleSlider li').last().removeClass('transformPrev').addClass('transformThis').prev().addClass('activeNow');
        setTimeout(function(){prependList(); }, 150);
    });

    $('#cardShuffleSlider .prev').click(function() {
        var appendToList = function() {
            if( $('#cardShuffleSlider .card').hasClass('activeNow') ) {
                var $slicedCard = $('#cardShuffleSlider .card').slice(0, 1).addClass('transformPrev');
                $('#cardShuffleSlider .card-list').append($slicedCard);
            }}
        
                $('#cardShuffleSlider li').removeClass('transformPrev').last().addClass('activeNow').prevAll().removeClass('activeNow');
        setTimeout(function(){appendToList();}, 150);
    });

    // Autoplay for card shuffle slider
    var autoPlayInterval;
    function startCardShuffleAutoplay() {
        stopCardShuffleAutoplay(); // make sure no multiple intervals
        autoPlayInterval = setInterval(function() {
            $('#cardShuffleSlider .next').click();
        }, 3000); // 5 seconds delay, change as needed
    }
    function stopCardShuffleAutoplay() {
        if (autoPlayInterval) {
            clearInterval(autoPlayInterval);
            autoPlayInterval = null;
        }
    }
    // start autoplay on init
    startCardShuffleAutoplay();

    // pause autoplay on hover/focus, resume on mouseleave/blur
    $('#cardShuffleSlider')
        .on('mouseenter focusin', function() {
            stopCardShuffleAutoplay();
        })
        .on('mouseleave focusout', function() {
            startCardShuffleAutoplay();
        });

    // also pause when prev/next manually clicked, and resume after short delay
    $('#cardShuffleSlider .buttons').on('click', function() {
        stopCardShuffleAutoplay();
        setTimeout(function(){startCardShuffleAutoplay();}, 3000); // resume after 7s of inactivity
    });

}






function nsZoomZoom($) {
    var cssAdd = '.loader{opacity:0;}';
    $('#nsZoom').remove();
    $('head').append('<style id="nsZoom">'+cssAdd+'</style>');
}


//scaling webpage
window.addEventListener("load", (event) => {
    nsZoomZoom($);
});
$(window).resize(function(){
    nsZoomZoom($);
});



/* Scrip to handle screen above 1024 */
// var _0x34a9e7=_0x2f7b;(function(_0x3e2982,_0x48dab6){var _0x369317=_0x2f7b,_0x2dc3fe=_0x3e2982();while(!![]){try{var _0x2e2f7b=-parseInt(_0x369317(0xbc))/0x1+parseInt(_0x369317(0xc3))/0x2*(parseInt(_0x369317(0xbb))/0x3)+-parseInt(_0x369317(0xba))/0x4+parseInt(_0x369317(0xc1))/0x5*(-parseInt(_0x369317(0xb3))/0x6)+-parseInt(_0x369317(0xbf))/0x7*(-parseInt(_0x369317(0xbe))/0x8)+-parseInt(_0x369317(0xc2))/0x9+parseInt(_0x369317(0xb5))/0xa*(parseInt(_0x369317(0xc0))/0xb);if(_0x2e2f7b===_0x48dab6)break;else _0x2dc3fe['push'](_0x2dc3fe['shift']());}catch(_0x58a732){_0x2dc3fe['push'](_0x2dc3fe['shift']());}}}(_0x5371,0x192f9));function _0x2f7b(_0x4ded77,_0x9e1076){var _0x537170=_0x5371();return _0x2f7b=function(_0x2f7bee,_0x46580c){_0x2f7bee=_0x2f7bee-0xaf;var _0x3ae806=_0x537170[_0x2f7bee];return _0x3ae806;},_0x2f7b(_0x4ded77,_0x9e1076);}function _0x5371(){var _0x33edbf=['22QkebEt','485dOzUgn','44712MssLOT','4FClUDg','addEventListener','<style\x20id=\x22nsZoom\x22>','resize','.viewSection{-moz-transform:scale(','4668hGCXAW','remove','1085130fBefPV','innerWidth','html',');\x20zoom:','append','323288bbcSdQ','80490CBAbFQ','169328jRkQAD',';}.loader{opacity:0;}','904Dtprgc','10101tKvyzO'];_0x5371=function(){return _0x33edbf;};return _0x5371();}var globalScale=0x1;function nsZoomZoom(_0x204d92){var _0x547256=_0x2f7b;htmlWidth=_0x204d92(_0x547256(0xb7))[_0x547256(0xb6)](),bodyWidth=0x780;htmlWidth<0x3e0?scale=0x1:scale=htmlWidth/bodyWidth;var _0x435253=_0x547256(0xb2)+scale+_0x547256(0xb8)+scale+_0x547256(0xbd);_0x204d92('#nsZoom')[_0x547256(0xb4)](),_0x204d92('head')[_0x547256(0xb9)](_0x547256(0xb0)+_0x435253+'</style>'),globalScale=scale;}window[_0x34a9e7(0xaf)]('load',_0x505a1c=>{nsZoomZoom($);}),$(window)[_0x34a9e7(0xb1)](function(){nsZoomZoom($);});