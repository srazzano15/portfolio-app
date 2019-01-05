$( document ).ready(function() {

/**
 * Set up AJAX header
 */

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

}); // end ready function