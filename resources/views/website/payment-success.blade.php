<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .success-message {
            border-radius: 10px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 500px;
        }
        .success-icon {
            font-size: 60px;
            color: #28a745;
        }
        .alert {
            margin-bottom: 20px;
        }
        .logo-img {
            width: 150px; /* Adjust the width as needed */
            margin-bottom: 20px; /* Space between logo and message */
        }
    </style>
</head>
<body>
    <div class="success-message">
        <!-- Logo Section -->
        <img src="{{ url('website-assets/images/logo.svg') }}" alt="Logo" class="logo-img">

        <div class="success-icon">
            <i class="fa fa-check-circle" aria-hidden="true"></i>
        </div>
        <h1>Payment Successful</h1>
        
        <!-- Display the success message, if available -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <p>Your payment has been processed successfully.</p>
        <p>Thank you for your purchase!</p>
        <a href="{{ url('/') }}" class="btn btn-primary mt-3">Return to Homepage</a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
    <script>
        @if(isset($clearLocalStorage) && $clearLocalStorage)
            localStorage.clear(); // Clear all local storage items
            // Alternatively, clear specific items:
            // localStorage.removeItem('selectedGender');
            // localStorage.removeItem('selectedAge');
        @endif
    </script>
</body>
</html>
