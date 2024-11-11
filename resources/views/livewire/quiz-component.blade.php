<div class="container">
    <!-- Logo Section -->
    <div class="row text-center mt-3">
        <div class="col-md-12">
            <img src="{{ url('website-assets/images/logo.svg') }}" alt="Logo" class="logo-img">
        </div>
    </div>

    <!-- Quiz Container -->
    <div class="quiz-container ">

        <!-- Career Freedom Challenge Heading -->
        @if ($showHome || $showAgeSection)
            <h2 class="text-center mb-4" style="font-weight: 700; font-size: 2.1rem;">
                CAREER FREEDOM <br> CHALLENGE
            </h2>
        @endif

        <!-- Gender Selection Section -->
        @if($showHome)
            <div class="gender-section text-center">
                <h5 class="text-uppercase mb-3" style="color: #6b7280;">Select Your <b>Gender</b></h5>
                <p class="text-uppercase mb-5" style="font-size: .75rem;"><b>1-minute quiz</b></p>

                <div class="option-section d-flex justify-content-center">
                    <div class="option text-center mx-3">
                        <img src="{{ url('website-assets/images/male.webp') }}" alt="Male" class="option-img overlap-img">
                        <button class="btn theme-btn text-white" wire:click="selectGender('male')"><b>MALE <i class="fa-solid fa-chevron-right"></i></b></button>
                    </div>
                    <div class="option text-center mx-3">
                        <img src="{{ url('website-assets/images/female.webp') }}" alt="Female" class="option-img overlap-img">
                        <button class="btn theme-btn text-white" wire:click="selectGender('female')"><b>FEMALE <i class="fa-solid fa-chevron-right"></i></b></button>
                    </div>
                </div>
            </div>

        <!-- Age Selection Section -->
        @elseif($showAgeSection)
            <div class="age-section text-center">
                <h5 class="text-uppercase mb-3" style="color: #6b7280;">Select Your <b>Age</b></h5>
                <p class="text-uppercase mb-5" style="font-size: .75rem;"><b>2-minute quiz</b></p>

                <div class="option-section d-flex flex-wrap justify-content-center">
                    <div class="option text-center mx-3 mb-4">
                        <img src="{{ url('website-assets/images/male.webp') }}" alt="Age 18-24" class="option-img overlap-img">
                        <button class="btn theme-btn text-white" wire:click="storeAge('18-24')"><b>Age: 18-24 <i class="fa-solid fa-chevron-right"></i></b></button>
                    </div>
                    <div class="option text-center mx-3 mb-4">
                        <img src="{{ url('website-assets/images/male-2.webp') }}" alt="Age 25-34" class="option-img overlap-img">
                        <button class="btn theme-btn text-white" wire:click="storeAge('25-34')"><b>Age: 25-34 <i class="fa-solid fa-chevron-right"></i></b></button>
                    </div>
                    <div class="option text-center mx-3 mb-4">
                        <img src="{{ url('website-assets/images/male-3.webp') }}" alt="Age 35-44" class="option-img overlap-img">
                        <button class="btn theme-btn text-white" wire:click="storeAge('35-44')"><b>Age: 35-44 <i class="fa-solid fa-chevron-right"></i></b></button>
                    </div>
                    <div class="option text-center mx-3 mb-4">
                        <img src="{{ url('website-assets/images/male-4.webp') }}" alt="Age 45+" class="option-img overlap-img">
                        <button class="btn theme-btn text-white" wire:click="storeAge('45+')"><b>Age: 45+ <i class="fa-solid fa-chevron-right"></i></b></button>
                    </div>
                </div>
            </div>

        <!-- Info Component Section -->
        @elseif($showInfoComponent)
            <div class="info-component text-center">
                <livewire:info-component />
            </div>

        <!-- Continue Section -->
        @else
            <div class="continue-section text-center mt-5">
                <h1 class="text-primary font-weight-bold" style="font-size: 28px;">More than 100,000</h1>
                <p class="font-weight-light text-secondary" style="font-size: 1.8rem; line-height: 1.75rem;">people have chosen Coursiv</p>
                
                <div class="text-center mt-5 mx-auto" style="width: 50%;">
                    <img src="{{ url('website-assets/images/intro.webp') }}" class="continue-img img-fluid" alt="Continue">
                    <button class="btn theme-btn text-white mt-3 p-4 text-uppercase" style="background:#5653fe; border-radius:.5rem;font-size:1rem" wire:click="continueToNextStep">
                        <b>Continue</b>
                    </button>
                </div>
            </div>
        @endif

        @if(!$showInfoComponent)
        <!-- Footer Section -->
        <div class="text-center mt-4 footer-text">
            <p style="font-size: 0.9rem;">
                By clicking "Male" or "Female", you agree with <a href="" style="text-decoration: underline;">Terms and Conditions, Privacy Policy, Subscription Terms</a>.<br>
                Quiz App. <br> 2024 © All Rights Reserved.
            </p>
        </div>
        @endif
    </div>
</div>


    <!-- JavaScript for local storage -->
    <script>
        Livewire.on('storeGenderInLocalStorage', (gender) => {
            localStorage.setItem('selectedGender', gender);
        });

        Livewire.on('storeAgeInLocalStorage', (age) => {
            localStorage.setItem('selectedAge', age);
        });
    </script>
</div>
