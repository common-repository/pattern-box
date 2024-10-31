// jQuery(document).ready(function($) {

//     function toggleContent() {
//         $('.category-checkbox').each(function() {
//             var checkbox = $(this);
//             var category = checkbox.data('category');
//             var contentId = '#' + category + '-content';

//             if (checkbox.is(':checked')) {
//                 $(contentId).show().css('opacity', 1); 
//             } else {
//                 $(contentId).css('opacity', 0).hide(); 
//             }
//         });
//     }

//     toggleContent();

//     $('.category-checkbox').change(function() {
//         toggleContent();
//     });
// });


jQuery(document).ready(function($) {
    // Function to check the status of the checkboxes and toggle the CSS
    function toggleContent() {
        $('.category-checkbox').each(function() {
            var checkbox = $(this);
            var category = checkbox.data('category');
            var contentId = '#' + category + '-content';

            if (checkbox.is(':checked')) {
                $(contentId).removeClass('pp-content-hide').css('opacity', 1);
            } else {
                $(contentId).addClass('pp-content-hide').css('opacity', 0);
            }
        });
    }

    // Initial check on page load
    toggleContent();

    // Check on checkbox change
    $('.category-checkbox').change(function() {
        toggleContent();
    });

    // Ensure visibility on form submission (including after page reload)
    $(window).on('load', function() {
        toggleContent(); // Reapply visibility settings after page reload
    });

    setTimeout(function(){
        $('.pp-form-submit').show();
    },100);
});
