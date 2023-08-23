$(document).ready(function() {
    $('#registrationForm').validate({
        rules: {
            username: 'required',
            password: 'required',
            email: {
                required: true,
                email: true
            },
            phone: 'required',
            birthdate: 'required'
            // Add more rules as needed
        },
        messages: {
            username: 'Please enter your username',
            password: 'Please enter your password',
            email: {
                required: 'Please enter your email address',
                email: 'Please enter a valid email address'
            },
            phone: 'Please enter your phone number',
            birthdate: 'Please enter your birthdate'
            // Add more custom messages as needed
        },
        submitHandler: function(form) {
            const formData = new FormData(form);

            fetch('register.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Registration successful!');
                    form.reset();
                } else {
                    alert('Registration failed. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    });
});
