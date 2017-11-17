$(document).ready(function() {
 /*   //Only numbers are allowed for example mobile phones, nif, etc.//
    $('.numeric').keypress(function(e) {
        if (event.which != 32 && event.which < 48 && event.which != 8 || event.which > 57) {
            alert("Only numers are allowed");
            return false;
        }
    });

    //Only numbers separated by hyphens are allowed for example zip code//
    $('.numeric-dash').keypress(function(e) {
        if (event.which < 48 && event.which != 8 && event.which != 45 || event.which > 57) {
            alert("Only numbers and numbers separated by hyphens are allowed");
            return false;
        }
    });

    //Only alphanumeric characters are allowed for example address, locations, etc//
    $('.numeric-letters').keypress(function(e) {
        if(event.which >= 33 && event.which <= 43 || event.which >= 58 && event.which <= 64 || event.which >= 91 && event.which <= 96 || event.which >= 123 && event.which <= 126 || event.which==47) {
            alert("Apenas letras");
            return false;
        }
    });
*/

    //Only email are allowed//
    $('.email').keypress(function(e) {
        if(event.which >= 33 && event.which <= 43 || event.which >= 58 && event.which <= 63 || event.which >= 91 && event.which <= 94 || event.which >= 123 && event.which <= 126 || event.which==47) {
            alert("Only email type is allowed");
            return false;
        }
    });

    //Only letters are allowed for exemple names, also can be used to filter the search box and text areas//
    $('.letters').keypress(function(e) {
        if(event.which == 13 || event.which == 32 || event.which >= 65 && event.which <= 90 || event.which >= 97 && event.which <= 122 || event.which >= 192 && event.which <= 250 || event.which == 192)
        {
            return true;
        }

        else
        {
            alert("Only letters are allowed")
            return false;
        }
    });
});