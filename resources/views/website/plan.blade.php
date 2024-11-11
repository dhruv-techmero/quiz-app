<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Content Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/website-assets/css/main.css">

    <style>
        .bg-custom {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .img-thumbnail {
            max-width: 100%;
            height: auto;
        }

        h4 {
            font-size: 1.25rem;
            margin-bottom: 10px;
        }

        .top-button {
            background-color: #5653fe;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-weight: bold;
            width: 100%;
            animation: anime 2s infinite;
            border-radius: 5px;
        }

        @keyframes anime {
            0% {
                box-shadow: 0 0 0 0 rgba(86, 83, 254, 0.7);
            }

            50% {
                box-shadow: 0 0 0 20px rgba(86, 83, 254, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(86, 83, 254, 0);
            }
        }

        .header-button {
            background-color: #5653fe;
            color: white;
            font-weight: bold;
            padding: 12px 30px;
            border-radius: 8px;
            text-align: center;
            display: block;
            margin: 20px auto;
            width: 200px;
            text-transform: uppercase;
        }

        .timer-section {
            text-align: center;
            font-size: 1.25rem;
            color: #333;
            margin-top: 20px;
        }

        .timer-section span {
            color: #ff6b6b;
        }

        .plan-container {
            /* max-width: 25%; */
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            /* border-radius: 10px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
        }

        .plan {
            padding: 15px;
            margin-bottom: 15px;
            border: 2px solid transparent;
            border-radius: 10px;
            position: relative;
            display: flex;
            border: 1px solid #c4c7cc;
            align-items: center;
            cursor: pointer;
        }

        .plan:hover,
        .plan input:checked+label {
            border-color: #5653fe;
            background-color: #eef0ff;
        }

        .plan input {
            appearance: none;
            margin: 0;
        }

        .plan input:checked+label::before {
            background-color: #5653fe;
            border-color: #5653fe;
        }

        .plan label {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-left: 40px;
            position: relative;
        }

        .plan label::before {
            content: "";
            position: absolute;
            left: 15px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 2px solid #ccc;
            background-color: white;
        }

        .plan h5 {
            font-size: 1.25rem;
            font-weight: bold;
            margin: 0;
            color: #333;
        }

        .plan-price {
            font-size: 1.2rem;
            color: #5653fe;
            font-weight: bold;
        }

        .badge-popular {
            background-color: #5653fe;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.9rem;
            margin-left: 10px;
        }

        .note {
            font-size: 0.85rem;
            color: #555;
            text-align: center;
            margin-top: 15px;
        }

        .footer-button {
            background-color: #5653fe;
            color: white;
            font-weight: bold;
            padding: 15px;
            border-radius: 8px;
            width: 100%;
            text-align: center;
            display: block;
            margin-top: 20px;
            text-transform: uppercase;
        }

        .custom-img {
            padding: 0 !important;
            background-color: transparent;
            border: 0 !important;
        }

        .text-\[\#7ABF4C\] {
            --tw-text-opacity: 1;
            color: rgb(122 191 76 / var(--tw-text-opacity));
        }

        @media (min-width: 968px) {
            .responsive-div {
                width: 29%;
            }
        }

        /* For screens smaller than 768px (mobile and smaller tablets) */
        @media (max-width: 967px) {
            .responsive-div {
                width: 67%;
            }
        }

        .modal-content {
            background: #ffffff;
            /* Pure white background */
            border-radius: 20px;
            /* Rounded corners for a soft, modern look */
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            /* Richer shadow for depth */
            border: none;
            /* No border to give a cleaner look */
        }

        .modal-body {
            padding: 3rem;
            /* Add generous padding for spacing */
        }

        .modal-header {
            display: none;
            /* Hide the modal header */
        }

        /* Rich login button */
        .btn-gradient {
            background: linear-gradient(45deg, #28a745, #218838);
            /* Green gradient background */
            border: none;
            font-weight: bold;
            color: #fff;
            transition: all 0.3s ease;
        }

        .btn-gradient:hover {
            background: linear-gradient(45deg, #218838, #1e7e34);
            /* Darker gradient on hover */
            transform: translateY(-3px);
            /* Slight lift effect */
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            /* Add shadow for hover */
        }

        .btn-gradient:active {
            transform: translateY(0);
            /* Return button to original position when clicked */
            box-shadow: none;
            /* Remove shadow on click */
        }

        /* Footer and modal dialog */
        .modal-footer {
            border-top: none;
            /* Remove border between footer and body */
        }

        .modal-dialog-centered {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /* Full height of the viewport */
        }

        .modal-dialog {
            max-width: 550px;
            /* Modal width with extra space */
        }

        /* Rich icons */
        .fas {
            transition: all 0.3s ease;
        }

        .fas:hover {
            transform: scale(1.1);
            /* Slight enlargement of the icon on hover */
        }

        /* Modal body text */
        .modal-body p {
            color: #555555;
            /* Dark gray text for clarity */
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center full-height">
    <div class="text-center">
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
        <!-- Top Section -->
        <form action="{{ route('stripe.checkout') }}" method="get">
            @csrf
            <div class=" mx-auto responsive-div">
                <div class="row d-flex align-items-center mt-5">
                    <div class="col-md-6 text-start">
                        <img src="{{ url('website-assets/images/logo.svg') }}" alt="Logo" class="logo-img" style="width: 142px;">
                    </div>
                    <div class="col-md-6 text-end">
                        <button class="top-button px-8 py-3 text-uppercase">Get My Plan</button>
                    </div>
                </div>

                <!-- Content Section -->
                <div class="bg-light mt-3" style="border-radius:10px">
                    <div class="bg-custom" style="background: url('website-assets/images/bg4.webp');    background-size: cover;    background-position: center !important;">
                        <div class="row text-center">
                            <div class="col-12 col-md-6">
                                <h4 style="font-size:1rem;font-weight:700">Now</h4>
                                <img src="{{ url('website-assets/images/user1.webp') }}" alt="Now" class="img-thumbnail custom-img ">
                            </div>
                            <div class="col-12 col-md-6">
                                <h4 style="font-size:1rem;font-weight:700">Goal</h4>
                                <img src="{{ url('website-assets/images/user2.webp') }}" alt="Goal" class="img-thumbnail custom-img">
                            </div>
                        </div>
                    </div>
                    <div class="bg-custom">
                        <div class="row text-center">
                            <div class="col-12 col-md-6">
                                <h4>Freelance Skills</h4>
                                <img src="{{ url('website-assets/images/moderate.webp') }}" alt="Freelance Skills" class="img-thumbnail">
                            </div>
                            <div class="col-12 col-md-6">
                                <h4>Freelance Skills</h4>
                                <img src="{{ url('website-assets/images/high.webp') }}" alt="Freelance Skills" class="img-thumbnail">
                            </div>
                        </div>
                    </div>
                    <div class="bg-custom">
                        <div class="row text-center">
                            <div class="col-12 col-md-6">
                                <h4>Income Potential</h4>
                                <img src="{{ url('website-assets/images/mode.svg') }}" alt="Income Potential" class="img-thumbnail">
                            </div>
                            <div class="col-12 col-md-6">
                                <h4>Income Potential</h4>
                                <img src="{{ url('website-assets/images/high.svg') }}" alt="Income Potential" class="img-thumbnail">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="plan-container">

                    @foreach ($plans as $index => $plan )
                    <div class="plan">
                        <input type="radio" id="plan{{ $index }}" name="id" value="{{ $plan->plan_id }}">
                        <label for="plan{{ $index }}">
                            <div class="text-center">
                                <h5 class="text-uppercase text-center">{{ $plan->interval_count }}-{{ $plan->billing_method }} Plan</h5>
                                <small> ${{ $plan->price }}</small>
                            </div>
                        </label>
                    </div>
                    @endforeach

                    <p class="note">People using the 3-month plan achieve twice as many results as for 1 month.</p>

                </div>
                <button type="submit" class="top-button px-8 py-3 text-uppercase">Get My Plan</button>
                <!-- </form> -->
                <p style="color:#6b7280;font-size:.875rem;line-height:21px" class="mt-3">Extended every 4-week at the price of $39.99 if you do not cancel 24 hours before the renewal date in your account settings. Subscription Terms.</p>

            </div>
        </form>

    </div>
    </div>

    <div class="modal fade" id="paidPlanModal" tabindex="-1" aria-labelledby="paidPlanModalLabel" aria-hidden="true"
        data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow-lg rounded-4">
                <div class="modal-body text-center p-5">
                    <!-- Add a success icon (thumbs-up) with some padding -->
                    <i class="fas fa-thumbs-up fa-5x text-success mb-4"></i>
                    <!-- Add a message with a slightly larger font -->
                    <p class="fs-4 fw-bold text-dark">You have already paid for your plan.</p>
                    <p class="fs-5 text-muted mb-4">Please try logging in with your account.</p>
                </div>
                <div class="modal-footer justify-content-center border-0">
                    <!-- Login button with an icon -->
                    <a href="{{ route('website-login') }}" class="btn btn-lg btn-gradient rounded-pill shadow-lg px-5 py-3">
                        <i class="fas fa-sign-in-alt me-2"></i>Login
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    let user = @json(session('user', [])); // Get user from session

    if (user && user.id) { // Check if user exists and has an id
        // If user is logged in, do not show the login section
        // document.getElementById('login-section').style.display = 'none';

        // Perform the AJAX request to get payment status or any other details
        $.ajax({
            url: "{{ route('user-payment-status-api') }}", // The URL where you want to send the request
            type: 'GET', // The type of request (GET, POST, etc.)
            data: {
                user_id: user.id // Send the user_id to the server
            },
            dataType: 'json', // Expected data type
            success: function(response) { // Success callback
                if (response.success) {
                
                    $('#paidPlanModal').modal('show'); // Trigger modal display using Bootstrap 5
                } else {
                    console.log('User has not paid yet.');
                }
            },
         
        });

    } else {
        // If no user found (i.e., user is not logged in), show the login section
        document.getElementById('login-section').style.display = 'block';
    }
</script>




</html>