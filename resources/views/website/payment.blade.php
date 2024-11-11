<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Payment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .credit-card-box {
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .logo-img {
            width: 142px;
            margin-bottom: 20px;
        }
        .form-control {
            border: 1px solid #ced4da;
            border-radius: 5px;
        }
        .btn-success {
            background-color: #28a745;
            border: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="text-center mb-4">
            <img src="{{ url('website-assets/images/logo.svg') }}" alt="Logo" class="logo-img">
        </div>
        
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card credit-card-box">
                    <div class="card-header text-center">
                        <h4>Secure Payment</h4>
                    </div>
                    <div class="card-body">
                        @if (Session::has('success'))
                            <div class="alert alert-success text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif

                        <form id='checkout-form' method='post' action="{{ route('stripe.post') }}">   
                            @csrf             
                            <input type='hidden' name='stripeToken' id='stripe-token-id'>                              
                            <input type='hidden' name='id' value="{{$plan->id}}">                              

                            <div id="card-element" class="form-control mb-3" style="height: 50px;"></div>
                            
                            <button 
                                id='pay-btn'
                                class="btn btn-success mt-3"
                                type="button"
                                style="width: 100%; padding: 10px;"
                                onclick="createToken()">PAY ${{$plan->price }}
                            </button>
                        </form>
                    </div>
                </div>        
            </div>
        </div>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script type="text/javascript">
        var stripe = Stripe('pk_test_51QGke8CkF9UMHU4z0LsGeK3xuB1Efd1Qa23GrCpF7QLbjlkaaNnOWq4p3Bc4LDOwfTGIYbs3vqYxhzsGnzc3gwbD00doNG9dGv');
        var elements = stripe.elements();
        var cardElement = elements.create('card');
        cardElement.mount('#card-element');

        function createToken() {
            document.getElementById("pay-btn").disabled = true;
            stripe.createToken(cardElement).then(function(result) {
                if (result.error) {
                    document.getElementById("pay-btn").disabled = false;
                    alert(result.error.message);
                } else {
                    document.getElementById("stripe-token-id").value = result.token.id;
                    document.getElementById('checkout-form').submit();
                }
            });
        }
    </script>
</body>
</html>
