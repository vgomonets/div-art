
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');



$(document).ready(function() {
    $('#login-form button[type=submit]').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();

        var postData = {
            'email': $('input[name=email]').val(),
            'password': $('input[name=password]').val(),
            '_token': $('input[name=_token]').val()
        };

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': data['_token']
            }
        });


        $.ajax({
            type:'POST',
            url:'/login',
            data: postData,
            success: function (response) {
                console.log( response);
            },

            error: function (response) {
                console.log('Ajax error:', response);
            }

        })
    })

    $('#register-form button[type=submit]').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();

        var registerData = {
            'name': $('input[name=name]').val(),
            'email': $('input[name=email]').val(),
            'password': $('input[name=password]').val(),
            'password_confirmation': $('input[name=password_confirmation]').val(),
            '_token': $('input[name=_token]').val()
        }

        $.ajax({
            type:'POST',
            url:'/register',
            data: registerData,
            success: function (response) {
                console.log( response);
            },

            error: function (response) {
                console.log('Ajax error:', response);
            }

        })
    })
});