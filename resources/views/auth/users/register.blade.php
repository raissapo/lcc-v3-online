<!DOCTYPE html>
<html>

<head>
    <title>LCC - Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('auth/images/logo.png') }}" />
    <link href="{{ asset('auth/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('auth/css/responsive.css') }}" rel="stylesheet">

    <style>
        body {
            background-image: url('{{ asset('auth/images/login-banner.jpg') }}') !important;
            background-size: cover !important;
            background-attachment: fixed !important;
            background-repeat: no-repeat !important;
            padding: 0 !important;
        }

        .my-form-row {
            background-color: rgba(0, 0, 0, 1);
            background-image: url('{{ asset('auth/images/login-banner.jpg') }}') !important;
            background-size: 70% 100% !important;
            background-position: -100px bottom !important;
            position: relative !important;
            background-repeat: no-repeat !important;
        }

        .error-message {
            background-color: rgba(255, 0, 0, 0.1);
            border-left: 5px solid #e74c3c;
            color: #c0392b;
            padding: 12px 15px;
            margin-bottom: 20px;
            border-radius: 4px;
            font-weight: 500;
            font-size: 15px;
        }

        #loadingOverlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    color: #fff;
    font-size: 18px;
}

    </style>
</head>

<body id="sign-in">

<div class="flex-container">
    <div class="container">
        <div class="row row-inner-container">
            <div class="col-md-12">
                <div class="row my-form-row">

                    <!-- LEFT IMAGE -->
                    <div class="col-md-6 my-col"></div>

                    <!-- FORM -->
                    <div class="col-md-6 my-col">
                        <div class="my-form-container">
                            <div class="my-form-inner-container">

                                    <div class="panel-header">
                                        <h2 style="font-size: 35px;" class="text-center">
                                            <img class="img-logo" src="{{ asset('auth/images/logo.png')}}"> <br> ASSISTments
                                        </h2>
                                    </div>

                                <div class="panel-body">
                                    <h3 style="font-weight:bold;margin-bottom:25px;">REGISTRATION</h3>

                                    {{-- SUCCESS MESSAGE --}}
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    <form method="POST" action="{{ route('users.register.request') }}">
                                        @csrf

                                        <!-- Email -->
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email"
                                                   class="form-control form-control-lg"
                                                   name="email"
                                                   value="{{ old('email') }}"
                                                   placeholder="Enter email"
                                                   required>
                                            @error('email')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <!-- Full Name -->
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text"
                                                   class="form-control form-control-lg"
                                                   name="fullname"
                                                   value="{{ old('fullname') }}"
                                                   placeholder="Enter fullname"
                                                   required>
                                            @error('fullname')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <!-- Gender -->
                                        <div class="form-group">
                                            <label>Sex</label><br>
                                            <label class="me-3">
                                                <input type="radio" name="gender" value="male"
                                                    {{ old('gender','male') == 'male' ? 'checked' : '' }}> Male
                                            </label>
                                            <label>
                                                <input type="radio" name="gender" value="female"
                                                    {{ old('gender') == 'female' ? 'checked' : '' }}> Female
                                            </label>
                                            @error('gender')
                                                <br><small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <!-- AGE & BIRTHDAY -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Age</label>
                                                    <input type="number"
                                                           min="1"
                                                           class="form-control form-control-lg"
                                                           name="age"
                                                           value="{{ old('age') }}"
                                                           required>
                                                    @error('age')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Birthday</label>
                                                    <input type="date"
                                                           class="form-control form-control-lg"
                                                           name="birthday"
                                                           value="{{ old('birthday') }}"
                                                           required>
                                                    @error('birthday')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Strand -->
                                        <div class="form-group">
                                            <label>Strand</label>
                                                <select class="form-control" name="strand" required>
                                                    <option value="">Select Strand</option>
                                                    <option value="HUMSS">Humanities and Social Science (HUMSS)
                                                    </option>
                                                    <option value="ABM">Accountancy, Business and Management (ABM)
                                                    </option>
                                                    <option value="STEM">Science, Technology, Engineering, and
                                                        Mathematics (STEM)</option>
                                                    <option value="GAS">General Academics (GAS)</option>
                                                    <option value="ICT">Information and Communications Technology
                                                        (ICT)</option>
                                                    <option value="HE">Home Economics (HE)</option>
                                                    <option value="IA">Industrial Arts (IA)</option>
                                                </select>
                                            @error('strand')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group text-right">
                                            <a href="{{ route('users.login.page') }}" style="color:#000080;">
                                                Already have an account? Login here.
                                            </a>
                                        </div>

                                        <div class="form-group mt-4">
                                            <button type="submit"
                                                    class="btn btn-primary btn-lg btn-block">
                                                REGISTER
                                            </button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p style="margin:10px 0;">
                    <a href="/" style="color:white;font-weight:900;">
                        <small>&larr; Back to Homepage</small>
                    </a>
                </p>
            </div>
        </div>

    </div>
</div>
<!-- Loading Overlay -->
<div id="loadingOverlay" style="display:none;">
    <div class="spinner-border text-light" role="status">
        <span class="sr-only">Loading...</span>
    </div>
    <p class="mt-3">Processing, please wait...</p>
</div>


<script src="{{ asset('auth/js/jquery.min.js') }}"></script>
<script src="{{ asset('auth/js/bootstrap.min.js') }}"></script>
<script>
    $('form').on('submit', function () {
        // Show loading overlay
        $('#loadingOverlay').fadeIn(200);

        // Disable submit button to prevent double click
        $(this).find('button[type="submit"]').prop('disabled', true);
    });
</script>

</body>
</html>
