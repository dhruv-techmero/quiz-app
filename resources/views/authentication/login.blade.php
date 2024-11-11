<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            /* align-items: center; */
            height: 100vh;
            margin: 0;
            background-color: #ffffff;
        }

        .login-card {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            border-radius: 8px;
            text-align: center;
        }

        .login-card img {
            width: 100px;
            margin-bottom: 20px;
        }

        .login-card h3 {
            font-weight: bold;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: #1f1f1f;
        }

        .form-control {
            border-radius: 30px;
            padding: 0.75rem 1.5rem;
            border: 1px solid #ddd;
            font-size: 1rem;
        }

        .form-group.position-relative {
            margin-bottom: 1.25rem;
        }

        .password-toggle {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #6c757d;
        }

        .forgot-password,
        .signup-link {
            font-size: 0.9rem;
        }

        .forgot-password {
            text-align: right;
            margin-top: -10px;
            margin-bottom: 1rem;
            display: block;
            color: #6c757d;
        }

        .forgot-password:hover {
            color: #5b59f6;
            text-decoration: none;
        }

        .btn-primary {
            background-color: #5b59f6;
            border: none;
            border-radius: 30px;
            padding: 0.75rem;
            font-size: 1rem;
            font-weight: bold;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #4a48d9;
        }

        .signup-link {
            font-size: 0.9rem;
            color: #6c757d;
        }

        .signup-link a {
            color: #5b59f6;
            text-decoration: none;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }

        .form-control {
            border-radius: 0;
            padding: 1.9rem 1.5rem;
            border: 1px solid #ddd;
            font-size: 1rem;
        }
    </style>
    <link rel="stylesheet" href="/website-assets/css/main.css">

</head>

<body>
    <div id="app-loader">
        <img id="loader-img" class="fade-animation" alt="Loading..." src="{{ url('website-assets/images/logo.svg') }}">
    </div>
    <div class="login-card">
        <!-- Display Validation Errors -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Display Session Messages -->
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <img src="{{  url('website-assets/images/logo.svg')  }}" alt="Logo"> <!-- Replace with your logo URL -->
        <h3 class="text-capitalize text-left">Welcome Back</h3>
        <form method="POST">
            @csrf
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="example@gmail.com" required>
            </div>
            <div class="form-group position-relative">
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                <span class="password-toggle">
                    <i class="fas fa-eye"></i> <!-- Placeholder icon -->
                </span>
            </div>
            <a href="#" class="forgot-password">Forgot password?</a>
            <button type="submit" class="btn btn-primary" style="border-radius:10px">Sign In</button>
            <div class="signup-link mt-3">
                <p>Don't have an account? <a href="{{ route('website-home') }}">Start the quiz</a></p>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- Font Awesome for icons -->
    <script src="/website-assets/js/main.js"></script>

</body>

</html>