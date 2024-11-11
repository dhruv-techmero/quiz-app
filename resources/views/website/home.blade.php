<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Quiz App</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="/website-assets/css/main.css">

    @livewireStyles

</head>
@include('sweetalert::alert')

<body>
    <div id="app-loader">
        <img id="loader-img" class="fade-animation" alt="Loading..." src="{{ url('website-assets/images/logo.svg') }}">
    </div>


    <livewire:info-component />

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>
    <!-- jQuery (required for Slick) -->


    @livewireScripts
    <script>



    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="/website-assets/js/main.js"></script>
</body>
<script>
    Livewire.on('continueToNextStep', event => {
        updatgoalImages();
        // startProgress();
        // sendEmail();
        updateAgeImages();
    });
    Livewire.on('emailBtnClicked', () => {
        sendEmail();
    });
    Livewire.on('stepChanged', () => {
        // alert('clicked')
        updatgoalImages();
        // startProgress();

        // updateAgeImages();
    });
    Livewire.on('startProgress', () => {
        // Trigger your progress function here
        startProgress();
    });
    Livewire.on('updateAgeImage', () => {
        updateAgeImages()

    });
    Livewire.on('sendEmail', () => {
        sendEmail();
    });
</script>


</html>