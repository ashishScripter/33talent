jQuery(function($) {

 //validate register form
    $("#add-testimonial").validate({
        rules: {
            'JobTestimonialUser[fullname]': {
                required: true
            },
            'JobTestimonialUser[title]': {
                required: true
            },
             'JobTestimonialUser[content]': {
                required: true
            },
            'JobEmployees[email]': {
                required: true,
                email: true,
            },
            'JobTestimonialUser[image]': {
                required: true,
            },
         
        
        },
        messages: {
            'JobTestimonialUser[fullname]': 'Full Name cannot be blank.',
            'JobTestimonialUser[title]': 'Title cannot be blank.',
            'JobTestimonialUser[content]': 'Content cannot be blank.',
            'JobEmployees[email]': {
                required: 'Email address cannot be blank.',
                email: 'Email address is not a valid email address.'
            },
            'JobTestimonialUser[image]': {
                required: 'Image cannot be blank.',
            },
        }
    });
});

