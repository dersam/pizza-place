/**
 * Confirm that all fields are filled out before form postback
 * @returns {boolean} true if validation is successful, false if it fails
 */
function validateForm(){
    var required = [
        'name',
        'address',
        'city',
        'province',
        'postal_code',
        'phone'
    ];

    var valid = true;

    for(var i=0; i<required.length; i++){
        var id = required[i];
        var loc = jQuery('#'+id);
        loc.css('background','none');

        if(jQuery.trim(loc.val()) == ''){
            loc.css('background-color','#FF6666');
            valid = false;
        }
    }

    return valid;
}