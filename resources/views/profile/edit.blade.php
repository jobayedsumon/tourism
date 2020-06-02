@extends('layouts.master')
@section('title', '| Profile Edit')
@section('content')
    <div class="px-content">
        <div class="page-header m-b-0 p-b-0 b-b-0">
            <h1>Account <span class="text-muted font-weight-light">Settings</span></h1>

            <ul class="nav nav-tabs page-block m-t-4" id="account-tabs">
                <li class="active">
                    <a href="#account-profile" data-toggle="tab">
                        Profile
                    </a>
                </li>
                <li>
                    <a href="#account-password" data-toggle="tab">
                        Password
                    </a>
                </li>
            </ul>
        </div>
        <div class="tab-content p-y-4">
            @include('profile.profile')
            @include('profile.password')
        </div>
    </div>

    @push('custom_js')
        <style>
            .password_message {
                color: #b05b59;
                padding-top: 3px;
            }
        </style>
        <script>
            $(function () {
                $('.select2-example').select2({
                    placeholder: 'Select Department',
                });
                $('#validation-form').pxValidate({
                    focusInvalid: false,
                    rules: {
                        'name': {
                            required: true,
                            minlength: 3
                        },
                        'email': {
                            required: true,
                            email: true,
                        },
                    },
                });


                $('#validation-form1').pxValidate({
                    focusInvalid: false,
                    rules: {
                        'current_password': {
                            required: true,
                            minlength: 6
                        },

                        'password': {
                            required: true,
                            minlength: 6
                        },
                        'password_confirmation':
                            {
                                required: true,
                                equalTo: '#password'
                            }
                    },
                });
            });
            //onclick password-error state change
            $(document).keypress(function (e) {
                $('.password_message').hide();
            });

            // profile picture
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#blah')
                            .attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }

        </script>
    @endpush
@endsection