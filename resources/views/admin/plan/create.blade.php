<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Plan</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Create a New Plan</h2>
        <form action="{{ route('plan.store') }}" method="POST">
            <!-- CSRF Token for Laravel -->
            @csrf
            <!-- <div class="form-group">
                <label for="plan_id">Plan ID</label>
                <input type="number" class="form-control" id="plan_id" name="plan_id" placeholder="Enter Plan ID" required>
            </div> -->

            <div class="form-group">
                <label for="name">Plan Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Plan Name" required>
            </div>

            <div class="form-group">
                <label for="billing_method">Billing Method</label>
                <select class="form-control" id="billing_method" name="billing_method" required>
                    <option value="" disabled selected>Select Billing Method</option>
                    <option value="month">Monthly</option>
                    <option value="week">Weekly</option>
                    <option value="year">Yearly</option>
                </select>
            </div>

            <div class="form-group">
                <label for="interval_count">Interval Count</label>
                <input type="number" class="form-control" id="interval_count" name="interval_count" placeholder="Enter Interval Count" value="1" required>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price" required>
            </div>


            <button type="submit" class="btn btn-primary">Create Plan</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>