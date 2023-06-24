@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" id="myForm" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="name" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                            <input type="radio" id="male" class="form-check-input @error('gender') is-invalid @enderror" name="gender" value="male">
                                <label for="male">Male</label><br>
                                <input type="radio" id="female" class="form-check-input @error('gender') is-invalid @enderror" name="gender" value="female">
                                <label for="female">Female</label><br>
                                <input type="radio" id="other" class="form-check-input @error('gender') is-invalid @enderror" name="gender" value="other">
                                <label for="other">Other</label><br>

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Age') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="name" autofocus>

                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('DOB') }}</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required autocomplete="name" autofocus>

                                @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Bio') }}</label>

                            <div class="col-md-6">
                                <textarea id="bio" class="form-control @error('bio') is-invalid @enderror" name="bio" value="{{ old('bio') }}" required autocomplete="name" autofocus></textarea>
                                @error('bio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
<style>
    .error {
    color: red;
}
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script>
    $(document).ready(function(){
        $('#myForm').validate({
            rules: {
         first_name: {
        required: true
      },
      last_name: {
        required: true
      },
      email: {
        required: true
      },
      phone: {
        required: true,
        phoneUS: true
      },
      password: {
        required: true,
        strongPassword: true

      },
      password_confirmation: {
        required: true,
        equalTo: '#password'
      }, 
      gender: {
        required: true
      },
      age: {
        required: true,
        digits: true,
        min: 18
      },
      birthdate: {
        required: true,
        date: true
      },
      bio: {
        required: true,
        minlength: 10
      }
    },
    messages: {
        phone: {
        required: "Please enter your phone number",
        
      },    
    email: {
        required: "Please enter your email address",
        email: "Please enter a valid email address"
      },
    password: {
        required: "Please enter a password",
        minlength: "Password must be at least 8 characters long",
        strongPassword: "Password must contain at least one uppercase letter, one lowercase letter, one digit, and one special character"
      },
    password_confirmation: {
        required: "Please confirm your password",
        equalTo: "Passwords do not match"
      },
    gender: "Please select your gender",
    age: {
        required: "Please enter your age",
        digits: "Please enter a valid numeric age",
        min: "Age must be at least 18"
      },
      birthdate: {
        required: "Please enter your birthdate",
        date: "Please enter a valid date"
      },
      bio: {
        required: "Please enter your bio",
        minlength: "Bio must be at least 10 characters long"
      }
    }

    
      });

      $.validator.addMethod('strongPassword', function(value, element) {
    // Password must contain at least one uppercase letter, one lowercase letter, one digit, and one special character
    return /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]/.test(value);
  }, 'Password must contain at least one uppercase letter, one lowercase letter, one digit, and one special character');

  $.validator.addMethod("phoneUS", function(phone_number, element) {
    phone_number = phone_number.replace(/\s+/g, ""); // Remove whitespace
    return this.optional(element) || phone_number.length === 10 && phone_number.match(/^\d{10}$/);
  }, "Please enter a valid 10-digit phone number");

    })
  </script>




