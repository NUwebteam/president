// global variables 
var compareWidth, //previous width used for comparison
    detector, //the element used to compare changes
    smallScreen; // Size of maximum width of single column media query
jQuery(document).ready(function(){

    //set the initial values
    detector = jQuery('.js');
    compareWidth = detector.width();
    smallScreen = '768'; 

    if (jQuery(window).width() < smallScreen) {
        jQuery("body").addClass("one-column");      
    }
    else {
        jQuery("body").addClass("two-column");  
    }

    // Toggle for nav menu
    jQuery('.js .menu-button').click(function() {
        jQuery('[role="navigation"]').slideToggle('fast', function() {});           
    }); 
    // Toggle click for sub-menus on touch and or small screens
    jQuery('.touch .northeasternwebteam-menu-item-parent, .one-column .northeasternwebteam-menu-item-parent').click(function() {
        jQuery(this).find('.sub-menu').slideToggle('fast', function() {});
    }); 
    // Credit: http://webdeveloper2.com/2011/06/trigger-javascript-on-css3-media-query-change/
    jQuery(window).resize(function(){
        //compare everytime the window resize event fires
        if(detector.width()!=compareWidth){

            //a change has occurred so update the comparison variable
            compareWidth = detector.width();
            
            if (compareWidth < smallScreen) {
                jQuery("body").removeClass("two-column").addClass("one-column");                
            }
            else {
                jQuery("body").removeClass("one-column").addClass("two-column");    
            }
            if (compareWidth >= smallScreen) {
                jQuery('[role="navigation"]').show();
            }
        }

    }); 
    
 });