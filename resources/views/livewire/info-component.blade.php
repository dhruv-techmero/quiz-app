<div>

    <div class="quiz-container" style="max-width:400px">
        <div class="row text-center  d-flex align-items-center">
            <!-- <div class="col-md- {{ $currentStep < 4 ? 6 : 12 }} mx-auto d-flex justify-content-center">
                <img src="{{ url('website-assets/images/logo.svg') }} " alt="Logo" class="logo-img">
            </div> -->

        </div>
        <div id="error-message"></div>

        <div class="row align-items-center mb-4">
            <div class="col-4 text-left">
                @if ($currentStep > 1)
                <button wire:click="previousStep" class="prev-btn">
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
                @endif
            </div>

            <div class="col-{{ $currentStep < 2 ? '4' : '4' }} mx-auto d-flex justify-content-center">
                <img src="{{ url('website-assets/images/logo.svg') }}" alt="Logo" class="logo-img">
            </div>

            @if ($currentStep < 4)
                <div class="col-md-4 d-flex justify-content-end">
                <nav class="navbar navbar-light">
                    <div class="container-fluid">
                        <button class="btn" type="button" id="sidebarToggle">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </nav>

                <div class="sidebar-overlay" id="sidebar">
                    <button type="button" class="close text-dark" id="sidebarClose" aria-label="Close" style="position: absolute; top: 20px; right: 20px; font-size: 2rem;">&times;</button>
                    <ul class="text-left">
                        <li><a href="javascript:void(0)">Terms & Conditions</a></li>
                        <li><a href="javascript:void(0)">Privacy Policy</a></li>
                        <li><a href="javascript:void(0)">Subscription Terms</a></li>
                        <li><a href="javascript:void(0)">Support Center</a></li>
                    </ul>
                </div>
        </div>
        @endif

        @if ($currentStep > 3)
        <div class="col-4 text-right">
            <p style="margin: 0;"><span style="color:#5653fe;">{{ $currentStep }}</span>/{{ $totalSteps }}</p>
        </div>
        @endif
    </div>

    @if($currentStep < $totalSteps) @if ( ($this->currentStep > 3 && $this->currentStep < 19) || $this->currentStep > 19 && $this->currentStep < 22 )
                <div class="progress mb-3">
                <div class="progress-bar" role="progressbar" style="width: {{ $this->progressPercentage }}%;" aria-valuenow="{{ $this->progressPercentage }}" aria-valuemin="0" aria-valuemax="100"></div>
</div>
@elseif($this->currentStep < 3)
    <h2 class="text-center  mb-4" style="font-weight: 700; font-size: 2.1rem;"> CAREER FREEDOM <br> CHALLENGE </h2>
    @endif
    @if ($this->currentStep == 1)
    <div class="gender-section text-center">
        <h5 class="text-uppercase mb-3 " style="color: #6b7280;">Select Your <b>Gender</b></h5>
        <p class="text-uppercase mb-5" style="font-size: .75rem;"><b>1-minute quiz</b></p>

        <div class="option-section d-flex justify-content-center">
            <div class="option op-rm-p text-center mx-3">
                <img src="{{ url('website-assets/images/male/1.webp') }}" alt="Male" class="option-img overlap-img">
                <button class="btn theme-btn text-white" wire:click="storeGender('male')"><b>MALE <i class="fa-solid fa-chevron-right"></i></b></button>
            </div>
            <div class="option op-rm-p text-center mx-3">
                <img src="{{ url('website-assets/images/female.webp') }}" alt="Female" class="option-img overlap-img">
                <button class="btn theme-btn text-white" wire:click="storeGender('female')"><b>FEMALE <i class="fa-solid fa-chevron-right"></i></b></button>
            </div>
        </div>
    </div>
    @elseif ($this->currentStep == 2)
    <div class="age-section text-center">
        <h5 class="text-uppercase mb-3" style="color: #6b7280;">Select Your <b>Age</b></h5>
        <p class="text-uppercase mb-5" style="font-size: .75rem;"><b>2-minute quiz</b></p>

        <div class="option-section d-flex flex-wrap justify-content-center">
            <div class="option op-rm-p text-center mx-3 mb-4">
                <img alt="Age 18-24" class="option-img overlap-img ageImage">
                <button class="btn theme-btn text-white" wire:click="storeAge('18-24')"><b>Age: 18-24 <i class="fa-solid fa-chevron-right"></i></b></button>
            </div>
            <div class="option op-rm-p text-center mx-3 mb-4">
                <img src="{{ url('website-assets/images/2.webp') }}" alt="Age 25-34" class="option-img overlap-img ageImage">
                <button class="btn theme-btn text-white" wire:click="storeAge('25-34')"><b>Age: 25-34 <i class="fa-solid fa-chevron-right"></i></b></button>
            </div>
            <div class="option op-rm-p text-center mx-3 mb-4">
                <img src="{{ url('website-assets/images/3.webp') }}" alt="Age 35-44" class="option-img overlap-img ageImage">
                <button class="btn theme-btn text-white" wire:click="storeAge('35-44')"><b>Age: 35-44 <i class="fa-solid fa-chevron-right"></i></b></button>
            </div>
            <div class="option op-rm-p text-center mx-3 mb-4">
                <img src="{{ url('website-assets/images/male/4.webp') }}" alt="Age 45+" class="option-img overlap-img ageImage">
                <button class="btn theme-btn text-white" wire:click="storeAge('45+')"><b>Age: 45+ <i class="fa-solid fa-chevron-right"></i></b></button>
            </div>
        </div>
    </div>
    @elseif ($this->currentStep == 3)
    <div class="continue-section text-center mt-5">
        <h1 class="text-primary font-weight-bold" style="font-size: 28px;">More than 100,000</h1>
        <p class="font-weight-light text-secondary" style="font-size: 1.8rem; line-height: 1.75rem;">people have chosen Coursiv</p>

        <div class="text-center mt-5 mx-auto">
            <img src="{{ url('website-assets/images/intro.webp') }}" class="continue-img img-fluid" alt="Continue">
            <button class="btn theme-btn text-white mt-3 p-4 text-uppercase" style="background:#5653fe; border-radius:.5rem;font-size:1rem" wire:click="continueToNextStep">
                <b>Continue</b>
            </button>
        </div>
    </div>
    @elseif ($this->currentStep == 4)
    <div class="container">
        <div class="d-flex justify-content-center align-items-start p-4">
            <div class="col-md-12">
                <h2 class="text-center text-capitalize mb-4 heading-text">What is your main goal?</h2>
                <div class="option-list">
                    <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeGoal('Grow wealth')" style="cursor: pointer;">
                        <img src="{{ url('website-assets/images/goals/1.webp') }}" alt="Grow wealth" class="option-img me-3 goalImage">
                        <h4 class="text-dark mb-0">Grow wealth</h4>
                    </div>
                    <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeGoal('Be my own boss')" style="cursor: pointer;">
                        <img src="{{ url('website-assets/images/goals/2.webp') }}" alt="Be my own boss" class="option-img me-3 goalImage">
                        <h4 class="text-dark mb-0">Be my own boss</h4>
                    </div>
                    <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeGoal('Financial freedom')" style="cursor: pointer;">
                        <img src="{{ url('website-assets/images/goals/3.webp') }}" alt="Financial freedom" class="option-img me-3 goalImage">
                        <h4 class="text-dark mb-0">Financial freedom</h4>
                    </div>
                    <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeGoal('Travel the world')" style="cursor: pointer;">
                        <img src="{{ url('website-assets/images/goals/4.webp') }}" alt="Travel the world" class="option-img me-3 goalImage">
                        <h4 class="text-dark mb-0">Travel the world</h4>
                    </div>
                    <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeGoal('Professional growth')" style="cursor: pointer;">
                        <img src="{{ url('website-assets/images/goals/5.webp') }}" alt="Professional growth" class="option-img me-3 goalImage">
                        <h4 class="text-dark mb-0">Professional growth</h4>
                    </div>
                    <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeGoal('Work life balance')" style="cursor: pointer;">
                        <img src="{{ url('website-assets/images/goals/6.webp') }}" alt="Work life balance" class="option-img me-3 goalImage">
                        <h4 class="text-dark mb-0">Work life balance</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @elseif ($this->currentStep == 5)
    <div class="container">
        <div class="d-flex justify-content-center align-items-start p-4">
            <div class="col-md-12">
                <h2 class="text-center text-capitalize mb-4 heading-text">What is your current income source?</h2>
                <div class="option-list">
                    <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeIncomeSource('Full time job')" style="cursor: pointer;">
                        <img src="{{ url('website-assets/images/income/1.webp') }}" alt="Full time job" class="option-img me-3">
                        <h4 class="text-dark">Full time job</h4>
                    </div>
                    <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeIncomeSource('Passive income')" style="cursor: pointer;">
                        <img src="{{ url('website-assets/images/income/2.webp') }}" alt="Passive income" class="option-img me-3">
                        <h4 class="text-dark">Passive income</h4>
                    </div>
                    <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeIncomeSource('Other')" style="cursor: pointer;">
                        <img src="{{ url('website-assets/images/income/3.webp') }}" alt="Other" class="option-img me-3">
                        <h4 class="text-dark">Other</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @elseif ($this->currentStep == 6)
    <div class="d-flex justify-content-center align-items-start p-4">
        <div class="col-md-12">
            <h2 class="text-center text-capitalize mb-4 heading-text">What is your work schedule like?</h2>
            <div class="option-list">
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeSchedule('9 to 5')" style="cursor: pointer;">
                    <img src="{{ url('website-assets/images/schedule/1.webp') }}" alt="Full time job" class="option-img me-3">
                    <h4 class="text-dark">9 to 5 </h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeSchedule('Night Shifts')" style="cursor: pointer;">
                    <img src="{{ url('website-assets/images/schedule/2.webp') }}" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">Night Shifts</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeSchedule('My hours are flexible')" style="cursor: pointer;">
                    <img src="{{ url('website-assets/images/schedule/3.webp') }}" alt="Other" class="option-img me-3">
                    <h4 class="text-dark">My hours are flexible</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeSchedule('i m retired')" style="cursor: pointer;">
                    <img src="{{ url('website-assets/images/schedule/4.webp') }}" alt="Other" class="option-img me-3">
                    <h4 class="text-dark">i'm retired</h4>
                </div>
            </div>
        </div>
    </div>
    @elseif ($this->currentStep == 7)
    <div class="d-flex justify-content-center align-items-start p-4">
        <div class="col-md-12">
            <h2 class="text-center text-capitalize mb-4 heading-text">What are the challenges with your current job?</h2>

            <div class="option-list">
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="toggleChallenge('Low Income')" style="cursor: pointer;">
                    <img src="{{ url('website-assets/images/challanges/1.webp') }}" alt="Low Income" class="option-img me-3">
                    <h4 class="text-dark">Low Income</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="toggleChallenge('Financial dependence')" style="cursor: pointer;">
                    <img src="{{ url('website-assets/images/challanges/2.webp') }}" alt="Financial dependence" class="option-img me-3">
                    <h4 class="text-dark">Financial dependence</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="toggleChallenge('No free time')" style="cursor: pointer;">
                    <img src="{{ url('website-assets/images/challanges/3.webp') }}" alt="No free time" class="option-img me-3">
                    <h4 class="text-dark">No free time</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="toggleChallenge('Routine')" style="cursor: pointer;">
                    <img src="{{ url('website-assets/images/challanges/4.webp') }}" alt="Routine" class="option-img me-3">
                    <h4 class="text-dark">Routine</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="toggleChallenge('Constant stress')" style="cursor: pointer;">
                    <img src="{{ url('website-assets/images/challanges/5.webp') }}" alt="Constant stress" class="option-img me-3">
                    <h4 class="text-dark">Constant stress</h4>
                </div>
            </div>

            <button class="btn theme-btn text-white mt-3 p-4 text-uppercase" wire:click="storeSelectedChallenges">Next</button>
        </div>
    </div>
    @elseif ($this->currentStep == 8)
    <div class="d-flex justify-content-center align-items-start p-4">
        <div class="col-md-12">
            <h2 class="text-center text-capitalize mb-4 heading-text">How would you describe your financial situation?</h2>


            <div class="option-list">
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeSituation('I m comfortable')" style="cursor: pointer;">
                    <img src="{{ url('website-assets/images/situations/1.webp') }}" alt="Full time job" class="option-img me-3">
                    <h4 class="text-dark">I'm comfortable </h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeSituation('I would like to have more stability')" style="cursor: pointer;">
                    <img src="{{ url('website-assets/images/situations/2.webp') }}" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">I would like to have more stability</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeSituation('I m struggling to meet my financial goals')" style="cursor: pointer;">
                    <img src="{{ url('website-assets/images/situations/3.webp') }}" alt="Other" class="option-img me-3">
                    <h4 class="text-dark">I'm struggling to meet my financial goals</h4>
                </div>
            </div>
        </div>
    </div>
    @elseif ($this->currentStep == 9)
    <div class="d-flex justify-content-center align-items-start p-4">
        <div class="col-md-12" style="background: url('website-assets/images/bg1.webp');background-position: right;background-repeat: no-repeat;background-size: contain;">
            <h2 class="text-center text-capitalize mb-4 heading-text">What annual income level do you want to achieve?</h2>


            <div class="option-list" style="    cursor: pointer;padding: 20px;flex-direction: column;">
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeIncomeGoal('30,000-$50,000')" style="cursor: pointer;">
                    <h4 class="text-dark">30,000-$50,000 </h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeIncomeGoal('$50,000-$100,000')" style="cursor: pointer;">
                    <h4 class="text-dark">$50,000-$100,000</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeIncomeGoal('More then $100,000')" style="cursor: pointer;">
                    <h4 class="text-dark">More then $100,000 </h4>
                </div>
            </div>
        </div>
    </div>
    @elseif ($this->currentStep == 10)
    <div class="d-flex justify-content-center align-items-start p-4">
        <div class="col-md-12">
            <h2 class="text-center text-capitalize mb-4 heading-text">Do you wish you had more control over your work hours and location?</h2>


            <div class="option-list">
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeControl('Yes')" style="cursor: pointer;">
                    <img src="https://d3kigabz1zn79w.cloudfront.net/migrated_d14fbcf1p6wyzn_v3_ai_quiz_control_1.webp" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">Yes</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeControl('No')" style="cursor: pointer;">
                    <img src="https://d3kigabz1zn79w.cloudfront.net/migrated_d14fbcf1p6wyzn_v3_ai_quiz_control_2.webp" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">No</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeControl('Hm,not sure')" style="cursor: pointer;">
                    <img src="https://d3kigabz1zn79w.cloudfront.net/migrated_d14fbcf1p6wyzn_v3_ai_quiz_control_3.webp" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">Hm,not sure</h4>
                </div>
            </div>
        </div>
    </div>
    @elseif ($this->currentStep == 11)


    <div class="d-flex justify-content-center align-items-start p-4">
        <div class="col-md-12">
            <h2 class="text-center text-capitalize mb-4 heading-text">What fields would you personally like to try yourself in?</h2>

            <div class="option-list">
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="toggleField('Graphic design')" style="cursor: pointer;">
                    <img src="{{ url('website-assets/images/fields/1.webp') }}" alt="Graphic design" class="option-img me-3">
                    <h4 class="text-dark">Graphic design</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="toggleField('Content creation')" style="cursor: pointer;">
                    <img src="{{ url('website-assets/images/fields/2.webp') }}" alt="Content creation" class="option-img me-3">
                    <h4 class="text-dark">Content creation</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="toggleField('Web development')" style="cursor: pointer;">
                    <img src="{{ url('website-assets/images/fields/3.webp') }}" alt="Web development" class="option-img me-3">
                    <h4 class="text-dark">Web development</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="toggleField('Digital Marketing')" style="cursor: pointer;">
                    <img src="{{ url('website-assets/images/fields/4.webp') }}" alt="Digital marketing" class="option-img me-3">
                    <h4 class="text-dark">Digital Marketing</h4>
                </div>
            </div>

            <button class="btn theme-btn text-white mt-3 p-4 text-uppercase" wire:click="storeSelectedFields">Next</button>
        </div>
    </div>


    @elseif ($this->currentStep == 12)
    <div class="d-flex justify-content-center align-items-start p-4">
        <div class="col-md-12" style="background: url('website-assets/images/bg2.webp'); z-index: 999999; background-position: right; background-repeat: no-repeat; background-size: cover; height: 63vh;">
            <h2 class="text-center text-capitalize mb-4 heading-text">How do you feel about working whenever and wherever you want?</h2>

            <div class="option-list" style="cursor: pointer; width: 67%; flex-direction: column;">
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeWish('It\'s a dream')" style="cursor: pointer; padding: 8px !important;">
                    <h4 class="text-dark">It's a dream</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeWish('It would be nice')" style="cursor: pointer; padding: 8px !important;">
                    <h4 class="text-dark">It would be nice</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeWish('I haven\'t thought about it')" style="cursor: pointer; padding: 8px !important;">
                    <h4 class="text-dark">I haven't thought about it</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeWish('I am curious')" style="cursor: pointer; padding: 8px !important;">
                    <h4 class="text-dark">I am curious</h4>
                </div>
            </div>
        </div>
    </div>
    @elseif ($this->currentStep == 13)
    <div class="d-flex justify-content-center align-items-start p-4">
        <div class="col-md-12">
            <h2 class="text-center text-capitalize mb-4 heading-text">Have you ever heard of freelance?</h2>

            <div class="option-list">
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeAboutFreelance('Yes, I am a full-time freelancer')" style="cursor: pointer;">
                    <img src="{{  url('website-assets/images/freelance/1.webp')}}" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">Yes, I am a full-time freelancer</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeAboutFreelance('Yes, I would like to try freelancing')" style="cursor: pointer;">
                    <img src="{{ url('website-assets/images/freelance/2.webp') }}" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">Yes, I would like to try freelancing</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeAboutFreelance('Yes, I am familiar with it')" style="cursor: pointer;">
                    <img src="{{ url('website-assets/images/freelance/3.webp') }}" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">Yes, I am familiar with it</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeAboutFreelance('No, but I would like to know more')" style="cursor: pointer;">
                    <img src="{{ url('website-assets/images/freelance/4.webp') }}" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">No, but I would like to know more</h4>
                </div>
            </div>
        </div>
    </div>
    @elseif ($this->currentStep == 14)
    <div class="d-flex justify-content-center align-items-start p-4">
        <div class="col-md-12">
            <h2 class="text-center text-capitalize mb-4 heading-text">Rate your knowledge in content writing</h2>

            <div class="option-list">
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeWriting('Expert')" style="cursor: pointer;">
                    <img src="https://d3kigabz1zn79w.cloudfront.net/migrated_d14fbcf1p6wyzn_v3_quiz_content-writing_1.webp" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">Expert</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeWriting('Proficient')" style="cursor: pointer;">
                    <img src="	https://d3kigabz1zn79w.cloudfront.net/migrated_d14fbcf1p6wyzn_v3_quiz_content-writing_2.webp" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">Proficient</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeWriting('Intermediate')" style="cursor: pointer;">
                    <img src="https://d3kigabz1zn79w.cloudfront.net/migrated_d14fbcf1p6wyzn_v3_quiz_content-writing_3.webp" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">Intermediate</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeWriting('Novice')" style="cursor: pointer;">
                    <img src="https://d3kigabz1zn79w.cloudfront.net/migrated_d14fbcf1p6wyzn_v3_quiz_content-writing_4.webp" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">Novice</h4>
                </div>
            </div>
        </div>
    </div>
    @elseif ($this->currentStep == 15)
    <div class="d-flex justify-content-center align-items-start p-4">
        <div class="col-md-12">
            <h2 class="text-center text-capitalize mb-4 heading-text">Rate your knowledge in digital marketing</h2>

            <div class="option-list">
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeMarketing('Expert')" style="cursor: pointer;">
                    <img src="	https://d3kigabz1zn79w.cloudfront.net/migrated_d14fbcf1p6wyzn_v3_quiz_digital-marketing_1.webp" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">Expert</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeMarketing('Proficient')" style="cursor: pointer;">
                    <img src="	https://d3kigabz1zn79w.cloudfront.net/migrated_d14fbcf1p6wyzn_v3_quiz_digital-marketing_2.webp" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">Proficient</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeMarketing('Intermediate')" style="cursor: pointer;">
                    <img src="https://d3kigabz1zn79w.cloudfront.net/migrated_d14fbcf1p6wyzn_v3_quiz_digital-marketing_3.webp" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">Intermediate</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeMarketing('Novice')" style="cursor: pointer;">
                    <img src="https://d3kigabz1zn79w.cloudfront.net/migrated_d14fbcf1p6wyzn_v3_quiz_content-writing_4.webp" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">Novice</h4>
                </div>
            </div>
        </div>
    </div>
    @elseif ($this->currentStep == 16)
    <div class="d-flex justify-content-center align-items-start p-4">
        <div class="col-md-12">
            <h2 class="text-center text-capitalize mb-4 heading-text">How much do you know about digital business?</h2>

            <div class="option-list">
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeBusiness('I m well-informed about it')" style="cursor: pointer;">
                    <img src="		https://d3kigabz1zn79w.cloudfront.net/migrated_d14fbcf1p6wyzn_v3_ai_quiz_digital-business_1.webp" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">I'm well-informed about it</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeBusiness('I m familiar with some aspects')" style="cursor: pointer;">
                    <img src="		https://d3kigabz1zn79w.cloudfront.net/migrated_d14fbcf1p6wyzn_v3_ai_quiz_digital-business_2.webp" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">I'm familiar with some aspects</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeBusiness('My knowledge is limited')" style="cursor: pointer;">
                    <img src="	https://d3kigabz1zn79w.cloudfront.net/migrated_d14fbcf1p6wyzn_v3_ai_quiz_digital-business_3.webp" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">My knowledge is limited</h4>
                </div>

            </div>
        </div>
    </div>
    @elseif ($this->currentStep == 17)
    <div class="d-flex justify-content-center align-items-start p-4">
        <div class="col-md-12">
            <h2 class="text-center text-capitalize mb-4 heading-text">Rate your readiness to master freelance</h2>

            <div class="option-list">
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeReadiness('All set')" style="cursor: pointer;">
                    <img src="	https://d3kigabz1zn79w.cloudfront.net/migrated_d14fbcf1p6wyzn_v3_quiz_freelancing_1.webp" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">All set</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeReadiness('Ready')" style="cursor: pointer;">
                    <img src="	https://d3kigabz1zn79w.cloudfront.net/migrated_d14fbcf1p6wyzn_v3_quiz_freelancing_2.webp" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">Ready</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeReadiness('Somewhat Ready')" style="cursor: pointer;">
                    <img src="		https://d3kigabz1zn79w.cloudfront.net/migrated_d14fbcf1p6wyzn_v3_quiz_freelancing_3.webp" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">Somewhat Ready</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeReadiness('Not Ready')" style="cursor: pointer;">
                    <img src="	https://d3kigabz1zn79w.cloudfront.net/migrated_d14fbcf1p6wyzn_v3_quiz_freelancing_4.webp" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">Not Ready</h4>
                </div>
            </div>
        </div>
    </div>

    @elseif ($this->currentStep == 18)
    <div class="d-flex justify-content-center align-items-start p-4">
        <div class="col-md-12">
            <h2 class="text-center text-capitalize mb-4 heading-text">Do you find it easy to maintain your focus?</h2>

            <div class="option-list">
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeFocus('Yes, I can easily stay focused')" style="cursor: pointer;">
                    <img src="		https://d3kigabz1zn79w.cloudfront.net/migrated_d14fbcf1p6wyzn_v3_quiz_focus_1.webp" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">Yes, I can easily stay focused</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeFocus('Mostly, but I sometimes get distracted')" style="cursor: pointer;">
                    <img src="	https://d3kigabz1zn79w.cloudfront.net/migrated_d14fbcf1p6wyzn_v3_quiz_focus_2.webp" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">Mostly, but I sometimes get distracted</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeFocus('I often struggle')" style="cursor: pointer;">
                    <img src="https://d3kigabz1zn79w.cloudfront.net/migrated_d14fbcf1p6wyzn_v3_quiz_focus_3.webp" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">I often struggle</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeFocus('No, I frequently procrastinate')" style="cursor: pointer;">
                    <img src="https://d3kigabz1zn79w.cloudfront.net/migrated_d14fbcf1p6wyzn_v3_quiz_focus_4.webp" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">No, I frequently procrastinate</h4>
                </div>
            </div>
        </div>
    </div>
    @elseif ($this->currentStep == 19)
    <div class="h-full w-full">
        <div class="relative flex h-full flex-col" data-sentry-element="unknown" data-sentry-component="Fade" data-sentry-source-file="Fade.tsx" style="opacity: 1;">
            <div class="flex-initial space-y-2 px-4">
                <h1 class="label-text-all-primary m-auto max-w-[100%] text-center text-2xl font-bold leading-9">Here’s Your AI-Driven Income Growth Profile</h1>
            </div>
            <div class="w-full flex-1 px-4 pb-[34px]">
                <div class="mt-4 flex flex-col" data-sentry-component="UserProfileContent" data-sentry-source-file="UserProfile.tsx">
                    <div class="relative mb-[60px] overflow-hidden rounded-lg" style="box-shadow: rgba(0, 0, 0, 0.12) 0px 0px 12px 0px;">
                        <div class="flex flex-1 flex-col gap-4 p-4">
                            <div class="flex items-center justify-between">
                                <p class="font-bold m-0">Readiness score</p>
                                <div class="label-text-all-secondary rounded border px-1.5 text-xs font-medium leading-[21px]">Result: Perfect</div>
                            </div>
                            <div class="random">
                                <div data-sentry-element="Lottie" data-sentry-source-file="UserProfile.tsx">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 888 168" width="888" height="168" preserveAspectRatio="xMidYMid meet" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;">
                                        <defs>
                                            <text font-family="Inter" font-style="normal" font-weight="normal" style="font-size: 100px; font-family: Inter;">t</text>
                                            <clipPath id="__lottie_element_106">
                                                <rect width="888" height="168" x="0" y="0"></rect>
                                            </clipPath>
                                            <linearGradient id="__lottie_element_119" spreadMethod="pad" gradientUnits="userSpaceOnUse" x1="-443.82598876953125" y1="0" x2="443.2619934082031" y2="0">
                                                <stop offset="0%" stop-color="rgb(212,51,51)"></stop>
                                                <stop offset="25%" stop-color="rgb(232,141,36)"></stop>
                                                <stop offset="50%" stop-color="rgb(252,230,21)"></stop>
                                                <stop offset="75%" stop-color="rgb(187,210,48)"></stop>
                                                <stop offset="100%" stop-color="rgb(122,191,76)"></stop>
                                            </linearGradient>
                                        </defs>
                                        <g clip-path="url(#__lottie_element_106)">
                                            <g transform="matrix(1,0,0,1,-0.25,122.23099517822266)" opacity="1" style="display: block;">
                                                <g opacity="1" transform="matrix(1,0,0,1,444.0639953613281,12.25100040435791)">
                                                    <path fill="url(#__lottie_element_119)" fill-opacity="1" d=" M-432.1860046386719,-12.00100040435791 C-437.7869873046875,-12.00100040435791 -442.4909973144531,-8.163000106811523 -443.8139953613281,-2.9749999046325684 C-443.8139953613281,-2.9749999046325684 -443.8139953613281,2.9749999046325684 -443.8139953613281,2.9749999046325684 C-442.4909973144531,8.163999557495117 -437.7869873046875,12.00100040435791 -432.1860046386719,12.00100040435791 C-432.1860046386719,12.00100040435791 431.8139953613281,12.00100040435791 431.8139953613281,12.00100040435791 C438.4419860839844,12.00100040435791 443.8139953613281,6.626999855041504 443.8139953613281,-0.0010000000474974513 C443.8139953613281,-6.627999782562256 438.4419860839844,-12.00100040435791 431.8139953613281,-12.00100040435791 C431.8139953613281,-12.00100040435791 -432.1860046386719,-12.00100040435791 -432.1860046386719,-12.00100040435791z"></path>
                                                </g>
                                            </g>
                                            <g style="display: block;" transform="matrix(1,0,0,1,433.8800048828125,8.229999542236328)" opacity="1">
                                                <g opacity="1" transform="matrix(1,0,0,1,144.25,45.25)">
                                                    <path fill="rgb(64,68,77)" fill-opacity="1" d=" M144,-33 C144,-33 144,15 144,15 C144,21.6299991607666 138.6300048828125,27 132,27 C132,27 21.290000915527344,27 21.290000915527344,27 C21.290000915527344,27 21.5,27.18000030517578 21.5,27.18000030517578 C21.5,27.18000030517578 0.5,45 0.5,45 C0.5,45 -20.5,27.18000030517578 -20.5,27.18000030517578 C-20.5,27.18000030517578 -20.290000915527344,27 -20.290000915527344,27 C-20.290000915527344,27 -132,27 -132,27 C-138.6300048828125,27 -144,21.6299991607666 -144,15 C-144,15 -144,-33 -144,-33 C-144,-39.619998931884766 -138.6300048828125,-45 -132,-45 C-132,-45 132,-45 132,-45 C138.6300048828125,-45 144,-39.619998931884766 144,-33z"></path>
                                                </g>
                                            </g>
                                            <g fill="rgb(235,235,235)" font-size="36" font-family="Inter" font-style="normal" font-weight="normal" aria-label="Moderate" style="display: block;" transform="matrix(1,0,0,1,576.5,57)" opacity="1">
                                                <text stroke-linecap="butt" stroke-linejoin="round" stroke-miterlimit="4" xml:space="preserve" style="display: inherit;" transform="matrix(1,0,0,1,-68.99002075195312,0)" opacity="1">M</text>
                                                <text stroke-linecap="butt" stroke-linejoin="round" stroke-miterlimit="4" xml:space="preserve" style="display: inherit;" transform="matrix(1,0,0,1,-36.971893310546875,0)" opacity="1">o</text>
                                                <text stroke-linecap="butt" stroke-linejoin="round" stroke-miterlimit="4" xml:space="preserve" style="display: inherit;" transform="matrix(1,0,0,1,-18.964672088623047,0)" opacity="1">d</text>
                                                <text stroke-linecap="butt" stroke-linejoin="round" stroke-miterlimit="4" xml:space="preserve" style="display: inherit;" transform="matrix(1,0,0,1,-0.9574539065361023,0)" opacity="1">e</text>
                                                <text stroke-linecap="butt" stroke-linejoin="round" stroke-miterlimit="4" xml:space="preserve" style="display: inherit;" transform="matrix(1,0,0,1,15.027819633483887,0)" opacity="1">r</text>
                                                <text stroke-linecap="butt" stroke-linejoin="round" stroke-miterlimit="4" xml:space="preserve" style="display: inherit;" transform="matrix(1,0,0,1,27.01677894592285,0)" opacity="1">a</text>
                                                <text stroke-linecap="butt" stroke-linejoin="round" stroke-miterlimit="4" xml:space="preserve" style="display: inherit;" transform="matrix(1,0,0,1,43.00205612182617,0)" opacity="1">t</text>
                                                <text stroke-linecap="butt" stroke-linejoin="round" stroke-miterlimit="4" xml:space="preserve" style="display: inherit;" transform="matrix(1,0,0,1,53.00474548339844,0)" opacity="1">e</text>
                                            </g>
                                            <g transform="matrix(1,0,0,1,548.3759765625,104.22999572753906)" opacity="1" style="display: block;">
                                                <g opacity="1" transform="matrix(1,0,0,1,30.25200080871582,30.25200080871582)">
                                                    <path fill="rgb(255,255,255)" fill-opacity="1" d=" M0,-30 C16.569000244140625,-30 30,-16.569000244140625 30,0 C30,16.569000244140625 16.569000244140625,30 0,30 C-16.569000244140625,30 -30,16.569000244140625 -30,0 C-30,-16.569000244140625 -16.569000244140625,-30 0,-30z"></path>
                                                </g>
                                                <g opacity="1" transform="matrix(1,0,0,1,30.25200080871582,30.25200080871582)">
                                                    <path fill="rgb(196,199,204)" fill-opacity="1" d=" M0,-25.5 C0,-25.5 0,-21 0,-21 C5.813000202178955,-20.99799919128418 11.03499984741211,-18.656999588012695 14.848999977111816,-14.848999977111816 C18.6560001373291,-11.03499984741211 20.99799919128418,-5.813000202178955 21,0 C20.99799919128418,5.813000202178955 18.6560001373291,11.03499984741211 14.848999977111816,14.848999977111816 C11.03499984741211,18.656999588012695 5.813000202178955,20.99799919128418 0,21 C-5.813000202178955,20.99799919128418 -11.03499984741211,18.656999588012695 -14.848999977111816,14.848999977111816 C-18.6560001373291,11.03499984741211 -20.99799919128418,5.813000202178955 -21,0 C-20.99799919128418,-5.813000202178955 -18.6560001373291,-11.03499984741211 -14.848999977111816,-14.848999977111816 C-11.03499984741211,-18.656999588012695 -5.813000202178955,-20.99799919128418 0,-21 C0,-21 0,-25.5 0,-25.5 C0,-25.5 0,-30 0,-30 C-8.270000457763672,-30.00200080871582 -15.79800033569336,-26.635000228881836 -21.21299934387207,-21.21299934387207 C-26.635000228881836,-15.79800033569336 -30.00200080871582,-8.270000457763672 -30,0 C-30.00200080871582,8.270000457763672 -26.635000228881836,15.79800033569336 -21.21299934387207,21.21299934387207 C-15.79800033569336,26.635000228881836 -8.270000457763672,30.00200080871582 0,30 C8.270000457763672,30.00200080871582 15.79800033569336,26.635000228881836 21.21299934387207,21.21299934387207 C26.635000228881836,15.79800033569336 30.00200080871582,8.270000457763672 30,0 C30.00200080871582,-8.270000457763672 26.635000228881836,-15.79800033569336 21.21299934387207,-21.21299934387207 C15.79800033569336,-26.635000228881836 8.270000457763672,-30.00200080871582 0,-30 C0,-30 0,-25.5 0,-25.5z"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="mt-1 flex items-center justify-between text-[10px] font-bold uppercase tracking-[0.2px]">
                                    <p>Low</p>
                                    <p>Intermediate</p>
                                    <p>High</p>
                                </div>
                            </div>
                            <div class="surface-primary flex gap-2 rounded-lg py-2 px-2">
                                <div class="h-6 w-6 text-xl">👍</div>
                                <div class="random">
                                    <p class="mb-0.5 text-[10px] font-bold leading-4">Impressive score to succeed in AI</p>
                                    <p class="label-text-all-primary text-[10px] leading-[15px]">A study in 2022 found that workers who use AI tools in their work have&nbsp;10-20% higher&nbsp;hourly rates than those who don't.</p>
                                </div>
                            </div>
                            <div class="flex items-center mt-3">
                                <div class="flex flex-col gap-2" data-sentry-element="unknown" data-sentry-source-file="UserProfile.tsx" style="opacity: 1; transform: translateX(0%) translateZ(0px);">
                                    <div class="flex gap-2">
                                        <div class="h-8 w-8 rounded-md bg-slate-100 " style="padding:.3rem!important">
                                            <img src="	https://d3kigabz1zn79w.cloudfront.net/migrated_d14fbcf1p6wyzn_v3_quiz_profile_1.webp" alt="">
                                        </div>
                                        <div class="random">
                                            <p class="label-text-all-on-secondary text-[10px] font-medium m-0">Motivation</p>
                                            <p class="label-text-all-on-secondary text-xs font-bold m-0">High</p>
                                        </div>
                                    </div>
                                    <div class="flex gap-2">
                                        <div class="h-8 w-8 rounded-md bg-slate-100 " style="padding:.3rem!important">
                                            <img src="https://d3kigabz1zn79w.cloudfront.net/migrated_d14fbcf1p6wyzn_v3_quiz_profile_2.webp" alt="">
                                        </div>
                                        <div class="random">
                                            <p class="label-text-all-on-secondary text-[10px] font-medium m-0">Potential</p>
                                            <p class="label-text-all-on-secondary text-xs font-bold m-0">High</p>
                                        </div>
                                    </div>
                                    <div class="flex gap-2">
                                        <div class="h-8 w-8 rounded-md bg-slate-100 " style="padding:.3rem!important">
                                            <img src="https://d3kigabz1zn79w.cloudfront.net/migrated_d14fbcf1p6wyzn_v3_quiz_profile_3.webp" alt="">
                                        </div>
                                        <div class="random">
                                            <p class="label-text-all-on-secondary text-[10px] font-medium m-0">Focus</p>
                                            <p class="label-text-all-on-secondary text-xs font-bold m-0">Limited</p>
                                        </div>
                                    </div>
                                    <div class="flex gap-2">
                                        <div class="h-8 w-8 rounded-md bg-slate-100 " style="padding:.3rem!important">
                                            <img src="https://d3kigabz1zn79w.cloudfront.net/migrated_d14fbcf1p6wyzn_v3_quiz_profile_4.webp" alt="">
                                        </div>
                                        <div class="random">
                                            <p class="label-text-all-on-secondary text-[10px] font-medium m-0">AI Knowledge</p>
                                            <p class="label-text-all-on-secondary text-xs font-bold m-0">Low</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex h-[148px] flex-1 items-center justify-end" data-sentry-element="unknown" data-sentry-source-file="UserProfile.tsx" style="opacity: 1; transform: translateX(0%) translateZ(0px);">
                                    <img class="w-[148px] profileImg" src="https://d3kigabz1zn79w.cloudfront.net/migrated_d14fbcf1p6wyzn_v3_ai_age-picker_female_25-34.webp" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                    <button class="btn theme-btn text-white mt-3 p-4 text-uppercase" style="background:#5653fe; border-radius:.5rem;font-size:1rem" wire:click="continueToNextStep">
                        <b>Continue</b>
                    </button>
                </div>
            </div>
        </div>
    </div>
    @elseif ($this->currentStep == 20)
    <div class="d-flex justify-content-center align-items-start p-4">
        <div class="col-md-12">
            <h2 class="text-center text-capitalize mb-4 heading-text">Is there something special you wish to achieve?</h2>

            <div class="option-list">
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeFutureGoal('Buy a house')" style="cursor: pointer;">
                    <img src="{{ url('website-assets/images/achievment/1.webp') }}" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">Buy a house</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeFutureGoal('A perfect wedding')" style="cursor: pointer;">
                    <img src="{{ url('website-assets/images/achievment/2.webp') }}" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">A perfect wedding</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeFutureGoal('Vacation')" style="cursor: pointer;">
                    <img src="{{ url('website-assets/images/achievment/3.webp') }}" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">Vacation</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeFutureGoal('Buy a car')" style="cursor: pointer;">
                    <img src="{{ url('website-assets/images/achievment/4.webp') }}" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">Buy a car</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeFutureGoal('Worry-free retirement')" style="cursor: pointer;">
                    <img src="{{ url('website-assets/images/achievment/5.webp') }}" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">Worry-free retirement</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeFutureGoal('Other')" style="cursor: pointer;">
                    <img src="{{ url('website-assets/images/achievment/6.webp') }}" alt="Passive income" class="option-img me-3">
                    <h4 class="text-dark">Other</h4>
                </div>
            </div>
        </div>
    </div>

    @elseif ($this->currentStep == 21)
    <div class="d-flex justify-content-center align-items-start p-4">
        <div class="col-md-12" style="background: url('https://d3kigabz1zn79w.cloudfront.net/migrated_d14fbcf1p6wyzn_v3_ai_quiz_time_male_18-24_background.webp'); z-index: 999999; background-position: center; background-repeat: no-repeat; background-size: cover; height: 63vh;">
            <h2 class="text-center text-capitalize mb-4 heading-text">How much time are you ready to spend to achieve your goal?</h2>

            <div class="option-list" style="cursor: pointer; width: 67%; flex-direction: column;">
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeDayTime('5 min/day')" style="cursor: pointer; padding: 12px !important;justify-content:center">
                    <h4 class="text-dark">5 min/day</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeDayTime('10 min/day')" style="cursor: pointer; padding: 12px !important;justify-content:center">
                    <h4 class="text-dark">10 min/day</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeDayTime('15 min/day')" style="cursor: pointer; padding: 12px !important;justify-content:center">
                    <h4 class="text-dark">15 min/day</h4>
                </div>
                <div class="option d-flex align-items-center mb-3 question-section" wire:click="storeDayTime('20 min/day')" style="cursor: pointer; padding: 12px !important;justify-content:center">
                    <h4 class="text-dark">20 min/day</h4>
                </div>
            </div>
        </div>
    </div>

    @elseif ($this->currentStep == 23)
    <div class="h-full w-full">
        <div class="flex flex-col items-center px-6">
            <div class="w-full">
                <div class="my-8 flex h-full flex-col items-center justify-between gap-4 px-4">
                
                    <svg id="progress-bar" width="128" height="128" viewBox="0 0 128 128">
                        <!-- Background Circle -->
                        <circle cx="64" cy="64" r="58" fill="none" stroke="#F1F1F1" stroke-width="8"></circle>

                        <!-- Foreground Circle (progress) -->
                        <circle id="progress" cx="64" cy="64" r="58" stroke-width="8" stroke="#5653FE" fill="transparent" stroke-dasharray="365" transform="rotate(-90 64 64)"></circle>

                        <!-- Text to show percentage -->
                        <text id="percentage" x="64" y="64" text-anchor="middle" dominant-baseline="middle" font-size="30" font-weight="bold">0%</text>
                    </svg>
                    <p class="label-text-all-primary">Creating your personal challenge...</p>
                </div>
                <div class="surface-primary h-[1px] w-full"></div>
                <div class="my-8 text-center">
                    <p class="label-text-all-accent text-[32px] font-extrabold">100,000+ people</p>
                    <p class="label-text-all-primary text-[20px] font-bold">have chosen Coursiv</p>
                </div>
            </div>
        </div>
    </div>
    @elseif ($this->currentStep == 22)
    <div class="h-full w-full">
        <div class="flex h-full flex-col space-y-6 px-4 py-6">
            <div class="space-y-2" data-sentry-component="TitleSubtitleBlock" data-sentry-source-file="index.tsx">
                <h1 class="label-text-primary text-center font-bold text-2xl">Your Personal AI-Driven Income Growth Challenge</h1>
                <p class="label-text-all-secondary text-center text-base">Based on your answers, we expect you to gain necessary skills of</p>
            </div>
            <p class="text-center text-lg font-bold text-[#24234C] underline">AI Master by Jan, 2025</p>
            <div class="flex items-center justify-center">
                <div class="surface-primary label-text-all-primary rounded bg-slate-100 px-3 py-1 text-center text-sm">Your goal: <b id="goalDisplay">Worry-free retirement</b>
                </div>
            </div>
            <div class="relative">
                <div data-sentry-element="Lottie" data-sentry-source-file="index.tsx">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 656 400" width="656" height="400" preserveAspectRatio="xMidYMid meet" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;">
                        <defs>
                            <clipPath id="__lottie_element_80">
                                <rect width="656" height="400" x="0" y="0"></rect>
                            </clipPath>
                        </defs>
                        <g clip-path="url(#__lottie_element_80)">
                            <g transform="matrix(1,0,0,1,0,0)" opacity="1" style="display: block;">
                                <g opacity="1" transform="matrix(1,0,0,1,328.73199462890625,199.8520050048828)">
                                    <path fill="rgb(255,255,255)" fill-opacity="1" d=" M312,-199 C312,-199 -312,-199 -312,-199 C-320.28399658203125,-199 -327,-192.28399658203125 -327,-184 C-327,-184 -327,184 -327,184 C-327,192.28399658203125 -320.28399658203125,199 -312,199 C-312,199 312,199 312,199 C320.28399658203125,199 327,192.28399658203125 327,184 C327,184 327,-184 327,-184 C327,-192.28399658203125 320.28399658203125,-199 312,-199z"></path>
                                    <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(196,199,204)" stroke-opacity="1" stroke-width="1" d=" M312,-199 C312,-199 -312,-199 -312,-199 C-320.28399658203125,-199 -327,-192.28399658203125 -327,-184 C-327,-184 -327,184 -327,184 C-327,192.28399658203125 -320.28399658203125,199 -312,199 C-312,199 312,199 312,199 C320.28399658203125,199 327,192.28399658203125 327,184 C327,184 327,-184 327,-184 C327,-192.28399658203125 320.28399658203125,-199 312,-199z"></path>
                                </g>
                                <g opacity="1" transform="matrix(1,0,0,1,54.64799880981445,315.156005859375)">
                                    <path fill="rgb(166,170,179)" fill-opacity="1" d=" M0,6.723999977111816 C-0.9629999995231628,6.723999977111816 -1.7829999923706055,6.461999893188477 -2.4609999656677246,5.938000202178955 C-3.138000011444092,5.409999847412109 -3.6559998989105225,4.645999908447266 -4.013999938964844,3.6440000534057617 C-4.372000217437744,2.638000011444092 -4.551000118255615,1.4240000247955322 -4.551000118255615,0 C-4.551000118255615,-1.4140000343322754 -4.372000217437744,-2.621999979019165 -4.013999938964844,-3.624000072479248 C-3.6519999504089355,-4.630000114440918 -3.131999969482422,-5.395999908447266 -2.4549999237060547,-5.923999786376953 C-1.7730000019073486,-6.458000183105469 -0.9549999833106995,-6.723999977111816 0,-6.723999977111816 C0.9549999833106995,-6.723999977111816 1.7710000276565552,-6.458000183105469 2.447999954223633,-5.923999786376953 C3.130000114440918,-5.395999908447266 3.6500000953674316,-4.630000114440918 4.007999897003174,-3.624000072479248 C4.369999885559082,-2.621999979019165 4.551000118255615,-1.4140000343322754 4.551000118255615,0 C4.551000118255615,1.4240000247955322 4.372000217437744,2.638000011444092 4.013999938964844,3.6440000534057617 C3.6559998989105225,4.645999908447266 3.138000011444092,5.409999847412109 2.4609999656677246,5.938000202178955 C1.7829999923706055,6.461999893188477 0.9629999995231628,6.723999977111816 0,6.723999977111816z M0,5.317999839782715 C0.9549999833106995,5.317999839782715 1.6959999799728394,4.857999801635742 2.2239999771118164,3.937999963760376 C2.753000020980835,3.0179998874664307 3.0169999599456787,1.7059999704360962 3.0169999599456787,0 C3.0169999599456787,-1.1319999694824219 2.8959999084472656,-2.0980000495910645 2.6530001163482666,-2.8959999084472656 C2.4140000343322754,-3.691999912261963 2.069000005722046,-4.300000190734863 1.6169999837875366,-4.716000080108643 C1.1699999570846558,-5.133999824523926 0.6309999823570251,-5.343999862670898 0,-5.343999862670898 C-0.9459999799728394,-5.343999862670898 -1.684999942779541,-4.875999927520752 -2.2179999351501465,-3.944000005722046 C-2.750999927520752,-3.0139999389648438 -3.0169999599456787,-1.7000000476837158 -3.0169999599456787,0 C-3.0169999599456787,1.1339999437332153 -2.8980000019073486,2.0980000495910645 -2.6589999198913574,2.890000104904175 C-2.4200000762939453,3.681999921798706 -2.0769999027252197,4.285999774932861 -1.6299999952316284,4.697999954223633 C-1.1779999732971191,5.111999988555908 -0.6349999904632568,5.317999839782715 0,5.317999839782715z"></path>
                                </g>
                                <g opacity="1" transform="matrix(1,0,0,1,41.79600143432617,191.156005859375)">
                                    <path fill="rgb(166,170,179)" fill-opacity="1" d=" M-12.904000282287598,6.724999904632568 C-13.654000282287598,6.724999904632568 -14.329000473022461,6.574999809265137 -14.930000305175781,6.2769999504089355 C-15.531000137329102,5.978000164031982 -16.011999130249023,5.568999767303467 -16.374000549316406,5.048999786376953 C-16.73699951171875,4.5289998054504395 -16.934999465942383,3.937999963760376 -16.9689998626709,3.2730000019073486 C-16.9689998626709,3.2730000019073486 -15.434000015258789,3.2730000019073486 -15.434000015258789,3.2730000019073486 C-15.37399959564209,3.865999937057495 -15.105999946594238,4.355999946594238 -14.628000259399414,4.743000030517578 C-14.147000312805176,5.126999855041504 -13.572999954223633,5.317999839782715 -12.904000282287598,5.317999839782715 C-12.366999626159668,5.317999839782715 -11.887999534606934,5.191999912261963 -11.470999717712402,4.940999984741211 C-11.048999786376953,4.689000129699707 -10.718999862670898,4.34499979019165 -10.479999542236328,3.9059998989105225 C-10.237000465393066,3.4630000591278076 -10.116999626159668,2.9619998931884766 -10.116999626159668,2.4040000438690186 C-10.116999626159668,1.8329999446868896 -10.241000175476074,1.3240000009536743 -10.493000030517578,0.8759999871253967 C-10.739999771118164,0.42500001192092896 -11.081999778747559,0.0689999982714653 -11.515999794006348,-0.19099999964237213 C-11.951000213623047,-0.45100000500679016 -12.446999549865723,-0.5839999914169312 -13.005000114440918,-0.5889999866485596 C-13.404999732971191,-0.5929999947547913 -13.817000389099121,-0.5299999713897705 -14.23799991607666,-0.4020000100135803 C-14.65999984741211,-0.27900001406669617 -15.008999824523926,-0.11900000274181366 -15.281000137329102,0.07699999958276749 C-15.281000137329102,0.07699999958276749 -16.763999938964844,-0.10199999809265137 -16.763999938964844,-0.10199999809265137 C-16.763999938964844,-0.10199999809265137 -15.970999717712402,-6.546000003814697 -15.970999717712402,-6.546000003814697 C-15.970999717712402,-6.546000003814697 -9.170999526977539,-6.546000003814697 -9.170999526977539,-6.546000003814697 C-9.170999526977539,-6.546000003814697 -9.170999526977539,-5.138999938964844 -9.170999526977539,-5.138999938964844 C-9.170999526977539,-5.138999938964844 -14.640999794006348,-5.138999938964844 -14.640999794006348,-5.138999938964844 C-14.640999794006348,-5.138999938964844 -15.10200023651123,-1.2790000438690186 -15.10200023651123,-1.2790000438690186 C-15.10200023651123,-1.2790000438690186 -15.024999618530273,-1.2790000438690186 -15.024999618530273,-1.2790000438690186 C-14.755999565124512,-1.4919999837875366 -14.420999526977539,-1.6690000295639038 -14.015999794006348,-1.809000015258789 C-13.611000061035156,-1.9500000476837158 -13.187999725341797,-2.0199999809265137 -12.74899959564209,-2.0199999809265137 C-11.947999954223633,-2.0199999809265137 -11.234999656677246,-1.8289999961853027 -10.609000205993652,-1.4450000524520874 C-9.977999687194824,-1.065999984741211 -9.484000205993652,-0.5450000166893005 -9.12600040435791,0.11599999666213989 C-8.763999938964844,0.7760000228881836 -8.583000183105469,1.5299999713897705 -8.583000183105469,2.378000020980835 C-8.583000183105469,3.2139999866485596 -8.770000457763672,3.9590001106262207 -9.145000457763672,4.616000175476074 C-9.515999794006348,5.26800012588501 -10.026000022888184,5.7820000648498535 -10.678000450134277,6.160999774932861 C-11.329999923706055,6.535999774932861 -12.072999954223633,6.724999904632568 -12.904000282287598,6.724999904632568z M-1.7730000019073486,6.724999904632568 C-2.7360000610351562,6.724999904632568 -3.556999921798706,6.4629998207092285 -4.234000205993652,5.939000129699707 C-4.9120001792907715,5.409999847412109 -5.429999828338623,4.644999980926514 -5.788000106811523,3.6440000534057617 C-6.145999908447266,2.638000011444092 -6.323999881744385,1.4240000247955322 -6.323999881744385,0.0010000000474974513 C-6.323999881744385,-1.4140000343322754 -6.145999908447266,-2.621999979019165 -5.788000106811523,-3.624000072479248 C-5.425000190734863,-4.629000186920166 -4.906000137329102,-5.395999908447266 -4.228000164031982,-5.925000190734863 C-3.5460000038146973,-6.458000183105469 -2.7279999256134033,-6.724999904632568 -1.7730000019073486,-6.724999904632568 C-0.8190000057220459,-6.724999904632568 -0.003000000026077032,-6.458000183105469 0.675000011920929,-5.925000190734863 C1.3569999933242798,-5.395999908447266 1.8760000467300415,-4.629000186920166 2.2339999675750732,-3.624000072479248 C2.5969998836517334,-2.621999979019165 2.7790000438690186,-1.4140000343322754 2.7790000438690186,0.0010000000474974513 C2.7790000438690186,1.4240000247955322 2.5999999046325684,2.638000011444092 2.242000102996826,3.6440000534057617 C1.8839999437332153,4.644999980926514 1.3660000562667847,5.409999847412109 0.6890000104904175,5.939000129699707 C0.010999999940395355,6.4629998207092285 -0.8100000023841858,6.724999904632568 -1.7730000019073486,6.724999904632568z M-1.7730000019073486,5.317999839782715 C-0.8190000057220459,5.317999839782715 -0.07599999755620956,4.857999801635742 0.4519999921321869,3.937999963760376 C0.9800000190734863,3.0179998874664307 1.2450000047683716,1.7050000429153442 1.2450000047683716,0.0010000000474974513 C1.2450000047683716,-1.1330000162124634 1.1230000257492065,-2.0980000495910645 0.8799999952316284,-2.8949999809265137 C0.6420000195503235,-3.691999912261963 0.29499998688697815,-4.298999786376953 -0.15600000321865082,-4.7170000076293945 C-0.6039999723434448,-5.133999824523926 -1.1430000066757202,-5.343999862670898 -1.7730000019073486,-5.343999862670898 C-2.7190001010894775,-5.343999862670898 -3.4579999446868896,-4.876999855041504 -3.990000009536743,-3.943000078201294 C-4.5229997634887695,-3.0139999389648438 -4.789999961853027,-1.7000000476837158 -4.789999961853027,0.0010000000474974513 C-4.789999961853027,1.1339999437332153 -4.671000003814697,2.0959999561309814 -4.432000160217285,2.8889999389648438 C-4.193999767303467,3.680999994277954 -3.8499999046325684,4.284999847412109 -3.4019999504089355,4.698999881744385 C-2.9509999752044678,5.111999988555908 -2.4079999923706055,5.317999839782715 -1.7730000019073486,5.317999839782715z M11.880999565124512,4.090000152587891 C11.880999565124512,4.090000152587891 11.880999565124512,3.4000000953674316 11.880999565124512,3.4000000953674316 C11.880999565124512,2.9230000972747803 11.977999687194824,2.4860000610351562 12.173999786376953,2.0899999141693115 C12.37399959564209,1.6890000104904175 12.664999961853027,1.371000051498413 13.043999671936035,1.1319999694824219 C13.428000450134277,0.8889999985694885 13.892000198364258,0.7680000066757202 14.437999725341797,0.7680000066757202 C14.991999626159668,0.7680000066757202 15.456000328063965,0.8889999985694885 15.831000328063965,1.1319999694824219 C16.20599937438965,1.371000051498413 16.48900032043457,1.6890000104904175 16.68000030517578,2.0899999141693115 C16.871999740600586,2.4860000610351562 16.9689998626709,2.9230000972747803 16.9689998626709,3.4000000953674316 C16.9689998626709,3.4000000953674316 16.9689998626709,4.090000152587891 16.9689998626709,4.090000152587891 C16.9689998626709,4.567999839782715 16.8700008392334,5.007999897003174 16.673999786376953,5.4079999923706055 C16.48200035095215,5.804999828338623 16.19700050354004,6.124000072479248 15.817999839782715,6.367000102996826 C15.442999839782715,6.605999946594238 14.982999801635742,6.724999904632568 14.437999725341797,6.724999904632568 C13.883999824523926,6.724999904632568 13.416999816894531,6.605999946594238 13.038000106811523,6.367000102996826 C12.659000396728516,6.124000072479248 12.369999885559082,5.804999828338623 12.173999786376953,5.4079999923706055 C11.977999687194824,5.007999897003174 11.880999565124512,4.567999839782715 11.880999565124512,4.090000152587891z M13.1850004196167,3.4000000953674316 C13.1850004196167,3.4000000953674316 13.1850004196167,4.090000152587891 13.1850004196167,4.090000152587891 C13.1850004196167,4.486999988555908 13.277999877929688,4.843999862670898 13.46500015258789,5.158999919891357 C13.652999877929688,5.46999979019165 13.977999687194824,5.625999927520752 14.437999725341797,5.625999927520752 C14.885000228881836,5.625999927520752 15.199999809265137,5.46999979019165 15.383000373840332,5.158999919891357 C15.569999694824219,4.843999862670898 15.664999961853027,4.486999988555908 15.664999961853027,4.090000152587891 C15.664999961853027,4.090000152587891 15.664999961853027,3.4000000953674316 15.664999961853027,3.4000000953674316 C15.664999961853027,3.003999948501587 15.574999809265137,2.6510000228881836 15.395999908447266,2.3399999141693115 C15.217000007629395,2.0250000953674316 14.89799976348877,1.8669999837875366 14.437999725341797,1.8669999837875366 C13.989999771118164,1.8669999837875366 13.668999671936035,2.0250000953674316 13.472999572753906,2.3399999141693115 C13.281000137329102,2.6510000228881836 13.1850004196167,3.003999948501587 13.1850004196167,3.4000000953674316z M5.361000061035156,-3.4000000953674316 C5.361000061035156,-3.4000000953674316 5.361000061035156,-4.090000152587891 5.361000061035156,-4.090000152587891 C5.361000061035156,-4.567999839782715 5.458000183105469,-5.005000114440918 5.6539998054504395,-5.4019999504089355 C5.854000091552734,-5.802000045776367 6.144000053405762,-6.122000217437744 6.5229997634887695,-6.361000061035156 C6.9070000648498535,-6.603000164031982 7.370999813079834,-6.724999904632568 7.916999816894531,-6.724999904632568 C8.470999717712402,-6.724999904632568 8.935999870300293,-6.603000164031982 9.310999870300293,-6.361000061035156 C9.685999870300293,-6.122000217437744 9.968999862670898,-5.802000045776367 10.16100025177002,-5.4019999504089355 C10.35200023651123,-5.005000114440918 10.449000358581543,-4.567999839782715 10.449000358581543,-4.090000152587891 C10.449000358581543,-4.090000152587891 10.449000358581543,-3.4000000953674316 10.449000358581543,-3.4000000953674316 C10.449000358581543,-2.9230000972747803 10.350000381469727,-2.4839999675750732 10.154000282287598,-2.0829999446868896 C9.961999893188477,-1.687000036239624 9.678000450134277,-1.3669999837875366 9.298999786376953,-1.1239999532699585 C8.923999786376953,-0.8859999775886536 8.461999893188477,-0.765999972820282 7.916999816894531,-0.765999972820282 C7.36299991607666,-0.765999972820282 6.896999835968018,-0.8859999775886536 6.51800012588501,-1.1239999532699585 C6.138999938964844,-1.3669999837875366 5.849999904632568,-1.687000036239624 5.6539998054504395,-2.0829999446868896 C5.458000183105469,-2.4839999675750732 5.361000061035156,-2.9230000972747803 5.361000061035156,-3.4000000953674316z M6.664999961853027,-4.090000152587891 C6.664999961853027,-4.090000152587891 6.664999961853027,-3.4000000953674316 6.664999961853027,-3.4000000953674316 C6.664999961853027,-3.003999948501587 6.757999897003174,-2.6480000019073486 6.945000171661377,-2.3329999446868896 C7.132999897003174,-2.0209999084472656 7.456999778747559,-1.8669999837875366 7.916999816894531,-1.8669999837875366 C8.36400032043457,-1.8669999837875366 8.680000305175781,-2.0209999084472656 8.86299991607666,-2.3329999446868896 C9.050000190734863,-2.6480000019073486 9.145000457763672,-3.003999948501587 9.145000457763672,-3.4000000953674316 C9.145000457763672,-3.4000000953674316 9.145000457763672,-4.090000152587891 9.145000457763672,-4.090000152587891 C9.145000457763672,-4.486999988555908 9.055000305175781,-4.841000080108643 8.87600040435791,-5.1519999504089355 C8.696999549865723,-5.4679999351501465 8.376999855041504,-5.624000072479248 7.916999816894531,-5.624000072479248 C7.468999862670898,-5.624000072479248 7.1479997634887695,-5.4679999351501465 6.952000141143799,-5.1519999504089355 C6.760000228881836,-4.841000080108643 6.664999961853027,-4.486999988555908 6.664999961853027,-4.090000152587891z M5.8460001945495605,6.546000003814697 C5.8460001945495605,6.546000003814697 14.845999717712402,-6.546000003814697 14.845999717712402,-6.546000003814697 C14.845999717712402,-6.546000003814697 16.30299949645996,-6.546000003814697 16.30299949645996,-6.546000003814697 C16.30299949645996,-6.546000003814697 7.302999973297119,6.546000003814697 7.302999973297119,6.546000003814697 C7.302999973297119,6.546000003814697 5.8460001945495605,6.546000003814697 5.8460001945495605,6.546000003814697z"></path>
                                </g>
                                <g opacity="1" transform="matrix(1,0,0,1,37.323001861572266,65.15599822998047)">
                                    <path fill="rgb(166,170,179)" fill-opacity="1" d=" M-16.583999633789062,-6.546000003814697 C-16.583999633789062,-6.546000003814697 -16.583999633789062,6.546000003814697 -16.583999633789062,6.546000003814697 C-16.583999633789062,6.546000003814697 -18.16900062561035,6.546000003814697 -18.16900062561035,6.546000003814697 C-18.16900062561035,6.546000003814697 -18.16900062561035,-4.882999897003174 -18.16900062561035,-4.882999897003174 C-18.16900062561035,-4.882999897003174 -18.246000289916992,-4.882999897003174 -18.246000289916992,-4.882999897003174 C-18.246000289916992,-4.882999897003174 -21.441999435424805,-2.76200008392334 -21.441999435424805,-2.76200008392334 C-21.441999435424805,-2.76200008392334 -21.441999435424805,-4.372000217437744 -21.441999435424805,-4.372000217437744 C-21.441999435424805,-4.372000217437744 -18.16900062561035,-6.546000003814697 -18.16900062561035,-6.546000003814697 C-18.16900062561035,-6.546000003814697 -16.583999633789062,-6.546000003814697 -16.583999633789062,-6.546000003814697z M-8.548999786376953,6.723999977111816 C-9.51200008392334,6.723999977111816 -10.333000183105469,6.4629998207092285 -11.010000228881836,5.939000129699707 C-11.687999725341797,5.409999847412109 -12.206000328063965,4.644000053405762 -12.564000129699707,3.6429998874664307 C-12.92199993133545,2.63700008392334 -13.10099983215332,1.4229999780654907 -13.10099983215332,0 C-13.10099983215332,-1.4149999618530273 -12.92199993133545,-2.622999906539917 -12.564000129699707,-3.625 C-12.201000213623047,-4.630000114440918 -11.682000160217285,-5.396999835968018 -11.003999710083008,-5.926000118255615 C-10.321999549865723,-6.459000110626221 -9.503999710083008,-6.723999977111816 -8.548999786376953,-6.723999977111816 C-7.59499979019165,-6.723999977111816 -6.7789998054504395,-6.459000110626221 -6.10099983215332,-5.926000118255615 C-5.419000148773193,-5.396999835968018 -4.900000095367432,-4.630000114440918 -4.541999816894531,-3.625 C-4.178999900817871,-2.622999906539917 -3.997999906539917,-1.4149999618530273 -3.997999906539917,0 C-3.997999906539917,1.4229999780654907 -4.177000045776367,2.63700008392334 -4.534999847412109,3.6429998874664307 C-4.89300012588501,4.644000053405762 -5.410999774932861,5.409999847412109 -6.0879998207092285,5.939000129699707 C-6.765999794006348,6.4629998207092285 -7.585999965667725,6.723999977111816 -8.548999786376953,6.723999977111816z M-8.548999786376953,5.318999767303467 C-7.59499979019165,5.318999767303467 -6.853000164031982,4.857999801635742 -6.324999809265137,3.937999963760376 C-5.796999931335449,3.0179998874664307 -5.5320000648498535,1.7039999961853027 -5.5320000648498535,0 C-5.5320000648498535,-1.1339999437332153 -5.6539998054504395,-2.0989999771118164 -5.896999835968018,-2.8959999084472656 C-6.135000228881836,-3.693000078201294 -6.480999946594238,-4.298999786376953 -6.932000160217285,-4.7170000076293945 C-7.380000114440918,-5.133999824523926 -7.919000148773193,-5.343999862670898 -8.548999786376953,-5.343999862670898 C-9.494999885559082,-5.343999862670898 -10.234999656677246,-4.877999782562256 -10.767000198364258,-3.944000005722046 C-11.300000190734863,-3.015000104904175 -11.565999984741211,-1.7009999752044678 -11.565999984741211,0 C-11.565999984741211,1.1330000162124634 -11.446999549865723,2.0959999561309814 -11.208000183105469,2.8889999389648438 C-10.970000267028809,3.680999994277954 -10.626999855041504,4.284999847412109 -10.178999900817871,4.698999881744385 C-9.727999687194824,5.111999988555908 -9.184000015258789,5.318999767303467 -8.548999786376953,5.318999767303467z M2.7009999752044678,6.723999977111816 C1.7380000352859497,6.723999977111816 0.9169999957084656,6.4629998207092285 0.23999999463558197,5.939000129699707 C-0.43799999356269836,5.409999847412109 -0.9559999704360962,4.644000053405762 -1.3140000104904175,3.6429998874664307 C-1.6720000505447388,2.63700008392334 -1.8509999513626099,1.4229999780654907 -1.8509999513626099,0 C-1.8509999513626099,-1.4149999618530273 -1.6720000505447388,-2.622999906539917 -1.3140000104904175,-3.625 C-0.9509999752044678,-4.630000114440918 -0.4320000112056732,-5.396999835968018 0.2460000067949295,-5.926000118255615 C0.9279999732971191,-6.459000110626221 1.746000051498413,-6.723999977111816 2.7009999752044678,-6.723999977111816 C3.6549999713897705,-6.723999977111816 4.4710001945495605,-6.459000110626221 5.14900016784668,-5.926000118255615 C5.830999851226807,-5.396999835968018 6.349999904632568,-4.630000114440918 6.708000183105469,-3.625 C7.071000099182129,-2.622999906539917 7.251999855041504,-1.4149999618530273 7.251999855041504,0 C7.251999855041504,1.4229999780654907 7.072999954223633,2.63700008392334 6.715000152587891,3.6429998874664307 C6.35699987411499,4.644000053405762 5.839000225067139,5.409999847412109 5.1620001792907715,5.939000129699707 C4.484000205993652,6.4629998207092285 3.6640000343322754,6.723999977111816 2.7009999752044678,6.723999977111816z M2.7009999752044678,5.318999767303467 C3.6549999713897705,5.318999767303467 4.396999835968018,4.857999801635742 4.925000190734863,3.937999963760376 C5.453000068664551,3.0179998874664307 5.7179999351501465,1.7039999961853027 5.7179999351501465,0 C5.7179999351501465,-1.1339999437332153 5.5960001945495605,-2.0989999771118164 5.353000164031982,-2.8959999084472656 C5.114999771118164,-3.693000078201294 4.769000053405762,-4.298999786376953 4.317999839782715,-4.7170000076293945 C3.869999885559082,-5.133999824523926 3.3310000896453857,-5.343999862670898 2.7009999752044678,-5.343999862670898 C1.7549999952316284,-5.343999862670898 1.0149999856948853,-4.877999782562256 0.4830000102519989,-3.944000005722046 C-0.05000000074505806,-3.015000104904175 -0.3160000145435333,-1.7009999752044678 -0.3160000145435333,0 C-0.3160000145435333,1.1330000162124634 -0.19699999690055847,2.0959999561309814 0.041999999433755875,2.8889999389648438 C0.2800000011920929,3.680999994277954 0.6230000257492065,4.284999847412109 1.0709999799728394,4.698999881744385 C1.5219999551773071,5.111999988555908 2.065999984741211,5.318999767303467 2.7009999752044678,5.318999767303467z M16.354000091552734,4.091000080108643 C16.354000091552734,4.091000080108643 16.354000091552734,3.4010000228881836 16.354000091552734,3.4010000228881836 C16.354000091552734,2.9240000247955322 16.45199966430664,2.486999988555908 16.648000717163086,2.0910000801086426 C16.847999572753906,1.690000057220459 17.13800048828125,1.371000051498413 17.517000198364258,1.1319999694824219 C17.900999069213867,0.8889999985694885 18.364999771118164,0.7670000195503235 18.910999298095703,0.7670000195503235 C19.46500015258789,0.7670000195503235 19.929000854492188,0.8889999985694885 20.304000854492188,1.1319999694824219 C20.679000854492188,1.371000051498413 20.96299934387207,1.690000057220459 21.15399932861328,2.0910000801086426 C21.34600067138672,2.486999988555908 21.441999435424805,2.9240000247955322 21.441999435424805,3.4010000228881836 C21.441999435424805,3.4010000228881836 21.441999435424805,4.091000080108643 21.441999435424805,4.091000080108643 C21.441999435424805,4.568999767303467 21.3439998626709,5.007999897003174 21.148000717163086,5.4079999923706055 C20.95599937438965,5.804999828338623 20.67099952697754,6.124000072479248 20.29199981689453,6.367000102996826 C19.91699981689453,6.605999946594238 19.45599937438965,6.723999977111816 18.910999298095703,6.723999977111816 C18.35700035095215,6.723999977111816 17.889999389648438,6.605999946594238 17.51099967956543,6.367000102996826 C17.131999969482422,6.124000072479248 16.8439998626709,5.804999828338623 16.648000717163086,5.4079999923706055 C16.45199966430664,5.007999897003174 16.354000091552734,4.568999767303467 16.354000091552734,4.091000080108643z M17.658000946044922,3.4010000228881836 C17.658000946044922,3.4010000228881836 17.658000946044922,4.091000080108643 17.658000946044922,4.091000080108643 C17.658000946044922,4.48799991607666 17.75200080871582,4.843999862670898 17.93899917602539,5.158999919891357 C18.12700080871582,5.46999979019165 18.451000213623047,5.625 18.910999298095703,5.625 C19.357999801635742,5.625 19.673999786376953,5.46999979019165 19.85700035095215,5.158999919891357 C20.04400062561035,4.843999862670898 20.13800048828125,4.48799991607666 20.13800048828125,4.091000080108643 C20.13800048828125,4.091000080108643 20.13800048828125,3.4010000228881836 20.13800048828125,3.4010000228881836 C20.13800048828125,3.005000114440918 20.048999786376953,2.6510000228881836 19.8700008392334,2.3399999141693115 C19.69099998474121,2.0250000953674316 19.371000289916992,1.8669999837875366 18.910999298095703,1.8669999837875366 C18.46299934387207,1.8669999837875366 18.142000198364258,2.0250000953674316 17.945999145507812,2.3399999141693115 C17.753999710083008,2.6510000228881836 17.658000946044922,3.005000114440918 17.658000946044922,3.4010000228881836z M9.833999633789062,-3.4010000228881836 C9.833999633789062,-3.4010000228881836 9.833999633789062,-4.090000152587891 9.833999633789062,-4.090000152587891 C9.833999633789062,-4.567999839782715 9.932000160217285,-5.004000186920166 10.128000259399414,-5.401000022888184 C10.32800006866455,-5.801000118255615 10.618000030517578,-6.122000217437744 10.996999740600586,-6.361000061035156 C11.380999565124512,-6.603000164031982 11.845000267028809,-6.723999977111816 12.390999794006348,-6.723999977111816 C12.944999694824219,-6.723999977111816 13.409000396728516,-6.603000164031982 13.784000396728516,-6.361000061035156 C14.159000396728516,-6.122000217437744 14.442999839782715,-5.801000118255615 14.635000228881836,-5.401000022888184 C14.826000213623047,-5.004000186920166 14.92199993133545,-4.567999839782715 14.92199993133545,-4.090000152587891 C14.92199993133545,-4.090000152587891 14.92199993133545,-3.4010000228881836 14.92199993133545,-3.4010000228881836 C14.92199993133545,-2.9240000247955322 14.824000358581543,-2.4839999675750732 14.628000259399414,-2.0829999446868896 C14.435999870300293,-1.687000036239624 14.151000022888184,-1.3680000305175781 13.772000312805176,-1.125 C13.397000312805176,-0.8870000243186951 12.935999870300293,-0.7670000195503235 12.390999794006348,-0.7670000195503235 C11.836999893188477,-0.7670000195503235 11.369999885559082,-0.8870000243186951 10.991000175476074,-1.125 C10.612000465393066,-1.3680000305175781 10.324000358581543,-1.687000036239624 10.128000259399414,-2.0829999446868896 C9.932000160217285,-2.4839999675750732 9.833999633789062,-2.9240000247955322 9.833999633789062,-3.4010000228881836z M11.137999534606934,-4.090000152587891 C11.137999534606934,-4.090000152587891 11.137999534606934,-3.4010000228881836 11.137999534606934,-3.4010000228881836 C11.137999534606934,-3.005000114440918 11.232000350952148,-2.6480000019073486 11.418999671936035,-2.3329999446868896 C11.607000350952148,-2.0209999084472656 11.930999755859375,-1.8660000562667847 12.390999794006348,-1.8660000562667847 C12.838000297546387,-1.8660000562667847 13.154000282287598,-2.0209999084472656 13.336999893188477,-2.3329999446868896 C13.52400016784668,-2.6480000019073486 13.618000030517578,-3.005000114440918 13.618000030517578,-3.4010000228881836 C13.618000030517578,-3.4010000228881836 13.618000030517578,-4.090000152587891 13.618000030517578,-4.090000152587891 C13.618000030517578,-4.486999988555908 13.529000282287598,-4.840000152587891 13.350000381469727,-5.151000022888184 C13.170999526977539,-5.4670000076293945 12.85099983215332,-5.625 12.390999794006348,-5.625 C11.942999839782715,-5.625 11.621999740600586,-5.4670000076293945 11.425999641418457,-5.151000022888184 C11.234000205993652,-4.840000152587891 11.137999534606934,-4.486999988555908 11.137999534606934,-4.090000152587891z M10.319999694824219,6.546000003814697 C10.319999694824219,6.546000003814697 19.31999969482422,-6.546000003814697 19.31999969482422,-6.546000003814697 C19.31999969482422,-6.546000003814697 20.777000427246094,-6.546000003814697 20.777000427246094,-6.546000003814697 C20.777000427246094,-6.546000003814697 11.777000427246094,6.546000003814697 11.777000427246094,6.546000003814697 C11.777000427246094,6.546000003814697 10.319999694824219,6.546000003814697 10.319999694824219,6.546000003814697z"></path>
                                </g>
                                <g opacity="1" transform="matrix(1,0,0,1,0,-7.5)">
                                    <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke-dasharray=" 2" stroke-dashoffset="0" stroke="rgb(166,170,179)" stroke-opacity="1" stroke-width="1" d=" M68,79.5 C68,79.5 622,79.5 622,79.5"></path>
                                </g>
                                <g opacity="1" transform="matrix(1,0,0,1,0,117.5)">
                                    <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke-dasharray=" 2" stroke-dashoffset="0" stroke="rgb(166,170,179)" stroke-opacity="1" stroke-width="1" d=" M68,79.5 C68,79.5 622,79.5 622,79.5"></path>
                                </g>
                                <g opacity="1" transform="matrix(1,0,0,1,0,239.5)">
                                    <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke-dasharray=" 2" stroke-dashoffset="0" stroke="rgb(166,170,179)" stroke-opacity="1" stroke-width="1" d=" M68,79.5 C68,79.5 622,79.5 622,79.5"></path>
                                </g>
                            </g>
                            <g transform="matrix(1,0,0,0.9999992847442627,356,200.0000762939453)" opacity="1" style="display: block;">
                                <g opacity="1" transform="matrix(1,0,0,1,-233.76300048828125,89.51599884033203)">
                                    <path fill="rgb(198,61,35)" fill-opacity="1" d=" M30,-22.015499114990234 C30,-22.015499114990234 30,22.015499114990234 30,22.015499114990234 C30,26.43069839477539 26.415199279785156,30.015499114990234 22,30.015499114990234 C22,30.015499114990234 -22,30.015499114990234 -22,30.015499114990234 C-26.415199279785156,30.015499114990234 -30,26.43069839477539 -30,22.015499114990234 C-30,22.015499114990234 -30,-22.015499114990234 -30,-22.015499114990234 C-30,-26.43069839477539 -26.415199279785156,-30.015499114990234 -22,-30.015499114990234 C-22,-30.015499114990234 22,-30.015499114990234 22,-30.015499114990234 C26.415199279785156,-30.015499114990234 30,-26.43069839477539 30,-22.015499114990234z"></path>
                                </g>
                            </g>
                            <g style="display: block;" transform="matrix(1,0,0,1,527.7420043945312,200)" opacity="1">
                                <g opacity="1" transform="matrix(1,0,0,1,-258.8760070800781,44.394996643066406)">
                                    <path fill="rgb(255,194,102)" fill-opacity="1" d=" M30,-67.0155029296875 C30,-67.0155029296875 30,67.0155029296875 30,67.0155029296875 C30,71.43070220947266 26.415199279785156,75.0155029296875 22,75.0155029296875 C22,75.0155029296875 -22,75.0155029296875 -22,75.0155029296875 C-26.415199279785156,75.0155029296875 -30,71.43070220947266 -30,67.0155029296875 C-30,67.0155029296875 -30,-67.0155029296875 -30,-67.0155029296875 C-30,-71.43070220947266 -26.415199279785156,-75.0155029296875 -22,-75.0155029296875 C-22,-75.0155029296875 22,-75.0155029296875 22,-75.0155029296875 C26.415199279785156,-75.0155029296875 30,-71.43070220947266 30,-67.0155029296875z"></path>
                                </g>
                            </g>
                            <g style="display: block;" transform="matrix(1,0,0,1,674.3710327148438,200)" opacity="1">
                                <g opacity="1" transform="matrix(1,0,0,1,-258.8760070800781,24.59400177001953)">
                                    <path fill="rgb(175,217,148)" fill-opacity="1" d=" M30,-87.0155029296875 C30,-87.0155029296875 30,87.0155029296875 30,87.0155029296875 C30,91.43070220947266 26.415199279785156,95.0155029296875 22,95.0155029296875 C22,95.0155029296875 -22,95.0155029296875 -22,95.0155029296875 C-26.415199279785156,95.0155029296875 -30,91.43070220947266 -30,87.0155029296875 C-30,87.0155029296875 -30,-87.0155029296875 -30,-87.0155029296875 C-30,-91.43070220947266 -26.415199279785156,-95.0155029296875 -22,-95.0155029296875 C-22,-95.0155029296875 22,-95.0155029296875 22,-95.0155029296875 C26.415199279785156,-95.0155029296875 30,-91.43070220947266 30,-87.0155029296875z"></path>
                                </g>
                            </g>
                            <g style="display: block;" transform="matrix(1,0,0,0.9999986886978149,821,200.00015258789062)" opacity="1">
                                <g opacity="1" transform="matrix(1,0,0,1,-258.8760070800781,-1.4690017700195312)">
                                    <path fill="rgb(122,191,76)" fill-opacity="1" d=" M30,-112.0155029296875 C30,-112.0155029296875 30,112.0155029296875 30,112.0155029296875 C30,116.43070220947266 26.415199279785156,120.0155029296875 22,120.0155029296875 C22,120.0155029296875 -22,120.0155029296875 -22,120.0155029296875 C-26.415199279785156,120.0155029296875 -30,116.43070220947266 -30,112.0155029296875 C-30,112.0155029296875 -30,-112.0155029296875 -30,-112.0155029296875 C-30,-116.43070220947266 -26.415199279785156,-120.0155029296875 -22,-120.0155029296875 C-22,-120.0155029296875 22,-120.0155029296875 22,-120.0155029296875 C26.415199279785156,-120.0155029296875 30,-116.43070220947266 30,-112.0155029296875z"></path>
                                </g>
                            </g>
                            <g style="display: block;" transform="matrix(1,0,0,1,25,14)" opacity="1">
                                <g opacity="1" transform="matrix(1,0,0,1,122.27300262451172,204.96499633789062)">
                                    <path fill="rgb(64,68,77)" fill-opacity="1" d=" M60,-31.26300048828125 C60,-31.26300048828125 -60,-31.26300048828125 -60,-31.26300048828125 C-64.41799926757812,-31.26300048828125 -68,-27.680999755859375 -68,-23.26300048828125 C-68,-23.26300048828125 -68,8.737000465393066 -68,8.737000465393066 C-68,13.154999732971191 -64.41799926757812,16.73699951171875 -60,16.73699951171875 C-60,16.73699951171875 -42,16.73699951171875 -42,16.73699951171875 C-42,16.73699951171875 -28,31.26300048828125 -28,31.26300048828125 C-28,31.26300048828125 -14,16.73699951171875 -14,16.73699951171875 C-14,16.73699951171875 60,16.73699951171875 60,16.73699951171875 C64.41799926757812,16.73699951171875 68,13.154999732971191 68,8.737000465393066 C68,8.737000465393066 68,-23.26300048828125 68,-23.26300048828125 C68,-27.680999755859375 64.41799926757812,-31.26300048828125 60,-31.26300048828125z"></path>
                                </g>
                                <g opacity="1" transform="matrix(1,0,0,1,122.98600006103516,199.21600341796875)">
                                    <path fill="rgb(255,255,255)" fill-opacity="1" d=" M-50.07699966430664,6.486000061035156 C-50.07699966430664,6.486000061035156 -50.07699966430664,-10.968999862670898 -50.07699966430664,-10.968999862670898 C-50.07699966430664,-10.968999862670898 -43.683998107910156,-10.968999862670898 -43.683998107910156,-10.968999862670898 C-42.44499969482422,-10.968999862670898 -41.41999816894531,-10.763999938964844 -40.606998443603516,-10.354999542236328 C-39.79499816894531,-9.95199966430664 -39.1870002746582,-9.402999877929688 -38.78300094604492,-8.710000038146973 C-38.380001068115234,-8.02299976348877 -38.178001403808594,-7.247000217437744 -38.178001403808594,-6.382999897003174 C-38.178001403808594,-5.656000137329102 -38.3120002746582,-5.041999816894531 -38.57899856567383,-4.541999816894531 C-38.84600067138672,-4.047999858856201 -39.20500183105469,-3.6510000228881836 -39.65399932861328,-3.3499999046325684 C-40.09700012207031,-3.055000066757202 -40.58399963378906,-2.8380000591278076 -41.11800003051758,-2.7019999027252197 C-41.11800003051758,-2.7019999027252197 -41.11800003051758,-2.5309998989105225 -41.11800003051758,-2.5309998989105225 C-40.53900146484375,-2.503000020980835 -39.974998474121094,-2.315000057220459 -39.42300033569336,-1.968999981880188 C-38.867000579833984,-1.628000020980835 -38.404998779296875,-1.1419999599456787 -38.04199981689453,-0.5109999775886536 C-37.678001403808594,0.11999999731779099 -37.49700164794922,0.8859999775886536 -37.49700164794922,1.7899999618530273 C-37.49700164794922,2.681999921798706 -37.70800018310547,3.4830000400543213 -38.12799835205078,4.192999839782715 C-38.542999267578125,4.896999835968018 -39.183998107910156,5.458000183105469 -40.053001403808594,5.872000217437744 C-40.922000885009766,6.2820000648498535 -42.03300094604492,6.486000061035156 -43.3849983215332,6.486000061035156 C-43.3849983215332,6.486000061035156 -50.07699966430664,6.486000061035156 -50.07699966430664,6.486000061035156z M-47.44300079345703,4.228000164031982 C-47.44300079345703,4.228000164031982 -43.64099884033203,4.228000164031982 -43.64099884033203,4.228000164031982 C-42.380001068115234,4.228000164031982 -41.47700119018555,3.9830000400543213 -40.93199920654297,3.493000030517578 C-40.38600158691406,3.005000114440918 -40.112998962402344,2.3949999809265137 -40.112998962402344,1.6610000133514404 C-40.112998962402344,1.1089999675750732 -40.25299835205078,0.6060000061988831 -40.53099822998047,0.14499999582767487 C-40.810001373291016,-0.3149999976158142 -41.20800018310547,-0.6819999814033508 -41.724998474121094,-0.9539999961853027 C-42.236000061035156,-1.2269999980926514 -42.84400177001953,-1.3630000352859497 -43.54800033569336,-1.3630000352859497 C-43.54800033569336,-1.3630000352859497 -47.44300079345703,-1.3630000352859497 -47.44300079345703,-1.3630000352859497 C-47.44300079345703,-1.3630000352859497 -47.44300079345703,4.228000164031982 -47.44300079345703,4.228000164031982z M-47.44300079345703,-3.4170000553131104 C-47.44300079345703,-3.4170000553131104 -43.915000915527344,-3.4170000553131104 -43.915000915527344,-3.4170000553131104 C-43.32400131225586,-3.4170000553131104 -42.79199981689453,-3.5309998989105225 -42.31999969482422,-3.757999897003174 C-41.84299850463867,-3.9860000610351562 -41.465999603271484,-4.304999828338623 -41.1879997253418,-4.714000225067139 C-40.90399932861328,-5.129000186920166 -40.7599983215332,-5.616000175476074 -40.7599983215332,-6.178999900817871 C-40.7599983215332,-6.900000095367432 -41.013999938964844,-7.505000114440918 -41.52000045776367,-7.99399995803833 C-42.0260009765625,-8.482999801635742 -42.79999923706055,-8.72700023651123 -43.84600067138672,-8.72700023651123 C-43.84600067138672,-8.72700023651123 -47.44300079345703,-8.72700023651123 -47.44300079345703,-8.72700023651123 C-47.44300079345703,-8.72700023651123 -47.44300079345703,-3.4170000553131104 -47.44300079345703,-3.4170000553131104z M-28.93600082397461,6.75 C-30.22599983215332,6.75 -31.336000442504883,6.473999977111816 -32.268001556396484,5.923999786376953 C-33.194000244140625,5.366000175476074 -33.90999984741211,4.585000038146973 -34.415000915527344,3.5789999961853027 C-34.915000915527344,2.566999912261963 -35.165000915527344,1.3830000162124634 -35.165000915527344,0.02500000037252903 C-35.165000915527344,-1.315999984741211 -34.915000915527344,-2.496999979019165 -34.415000915527344,-3.5199999809265137 C-33.90999984741211,-4.541999816894531 -33.20600128173828,-5.341000080108643 -32.303001403808594,-5.914999961853027 C-31.393999099731445,-6.48799991607666 -30.33099937438965,-6.775000095367432 -29.114999771118164,-6.775000095367432 C-28.37700080871582,-6.775000095367432 -27.660999298095703,-6.6539998054504395 -26.966999053955078,-6.409999847412109 C-26.27400016784668,-6.165999889373779 -25.650999069213867,-5.781000137329102 -25.100000381469727,-5.257999897003174 C-24.548999786376953,-4.736000061035156 -24.11400032043457,-4.057000160217285 -23.79599952697754,-3.2209999561309814 C-23.47800064086914,-2.3919999599456787 -23.31999969482422,-1.3839999437332153 -23.31999969482422,-0.19699999690055847 C-23.31999969482422,-0.19699999690055847 -23.31999969482422,0.7080000042915344 -23.31999969482422,0.7080000042915344 C-23.31999969482422,0.7080000042915344 -33.724998474121094,0.7080000042915344 -33.724998474121094,0.7080000042915344 C-33.724998474121094,0.7080000042915344 -33.724998474121094,-1.2020000219345093 -33.724998474121094,-1.2020000219345093 C-33.724998474121094,-1.2020000219345093 -25.81599998474121,-1.2020000219345093 -25.81599998474121,-1.2020000219345093 C-25.81599998474121,-1.871999979019165 -25.95199966430664,-2.4660000801086426 -26.225000381469727,-2.9830000400543213 C-26.49799919128418,-3.505000114440918 -26.881000518798828,-3.9170000553131104 -27.375999450683594,-4.218999862670898 C-27.86400032043457,-4.519999980926514 -28.43899917602539,-4.671000003814697 -29.097999572753906,-4.671000003814697 C-29.81399917602539,-4.671000003814697 -30.43899917602539,-4.494999885559082 -30.972999572753906,-4.14300012588501 C-31.50200080871582,-3.7960000038146973 -31.90999984741211,-3.3420000076293945 -32.19900131225586,-2.7790000438690186 C-32.48400115966797,-2.2219998836517334 -32.625999450683594,-1.6169999837875366 -32.625999450683594,-0.9639999866485596 C-32.625999450683594,-0.9639999866485596 -32.625999450683594,0.5270000100135803 -32.625999450683594,0.5270000100135803 C-32.625999450683594,1.402999997138977 -32.47200012207031,2.1480000019073486 -32.165000915527344,2.76200008392334 C-31.85300064086914,3.375999927520752 -31.417999267578125,3.8440001010894775 -30.861000061035156,4.168000221252441 C-30.30500030517578,4.486000061035156 -29.655000686645508,4.645999908447266 -28.910999298095703,4.645999908447266 C-28.42799949645996,4.645999908447266 -27.98699951171875,4.574999809265137 -27.59000015258789,4.439000129699707 C-27.191999435424805,4.296999931335449 -26.847000122070312,4.0879998207092285 -26.55699920654297,3.809999942779541 C-26.26799964904785,3.5320000648498535 -26.04599952697754,3.187999963760376 -25.89299964904785,2.7780001163482666 C-25.89299964904785,2.7780001163482666 -23.48200035095215,3.2139999866485596 -23.48200035095215,3.2139999866485596 C-23.674999237060547,3.9240000247955322 -24.020999908447266,4.545000076293945 -24.520999908447266,5.078999996185303 C-25.016000747680664,5.60699987411499 -25.636999130249023,6.019999980926514 -26.386999130249023,6.315999984741211 C-27.131000518798828,6.605999946594238 -27.98200035095215,6.75 -28.93600082397461,6.75z M-15.003999710083008,11.668000221252441 C-16.042999267578125,11.668000221252441 -16.937999725341797,11.531999588012695 -17.687999725341797,11.258000373840332 C-18.433000564575195,10.986000061035156 -19.041000366210938,10.62600040435791 -19.511999130249023,10.175999641418457 C-19.983999252319336,9.727999687194824 -20.334999084472656,9.236000061035156 -20.56800079345703,8.70199966430664 C-20.56800079345703,8.70199966430664 -18.378999710083008,7.797999858856201 -18.378999710083008,7.797999858856201 C-18.225000381469727,8.04800033569336 -18.020000457763672,8.312000274658203 -17.763999938964844,8.592000007629395 C-17.503000259399414,8.87600040435791 -17.150999069213867,9.116000175476074 -16.70800018310547,9.315999984741211 C-16.259000778198242,9.513999938964844 -15.682999610900879,9.61400032043457 -14.977999687194824,9.61400032043457 C-14.01200008392334,9.61400032043457 -13.21399974822998,9.378000259399414 -12.583000183105469,8.906000137329102 C-11.95300006866455,8.4399995803833 -11.63700008392334,7.696000099182129 -11.63700008392334,6.673999786376953 C-11.63700008392334,6.673999786376953 -11.63700008392334,4.099999904632568 -11.63700008392334,4.099999904632568 C-11.63700008392334,4.099999904632568 -11.798999786376953,4.099999904632568 -11.798999786376953,4.099999904632568 C-11.95300006866455,4.377999782562256 -12.173999786376953,4.688000202178955 -12.46399974822998,5.0279998779296875 C-12.748000144958496,5.369999885559082 -13.138999938964844,5.663000106811523 -13.638999938964844,5.913000106811523 C-14.138999938964844,6.163000106811523 -14.791000366210938,6.289999961853027 -15.592000007629395,6.289999961853027 C-16.625999450683594,6.289999961853027 -17.558000564575195,6.047999858856201 -18.386999130249023,5.565999984741211 C-19.211000442504883,5.076000213623047 -19.863000869750977,4.357999801635742 -20.34600067138672,3.4100000858306885 C-20.823999404907227,2.4539999961853027 -21.062000274658203,1.281999945640564 -21.062000274658203,-0.11100000143051147 C-21.062000274658203,-1.503000020980835 -20.82699966430664,-2.696000099182129 -20.354999542236328,-3.690000057220459 C-19.878000259399414,-4.684000015258789 -19.225000381469727,-5.447000026702881 -18.395999908447266,-5.974999904632568 C-17.56599998474121,-6.508999824523926 -16.625999450683594,-6.775000095367432 -15.574999809265137,-6.775000095367432 C-14.76200008392334,-6.775000095367432 -14.104999542236328,-6.639999866485596 -13.604999542236328,-6.367000102996826 C-13.104999542236328,-6.099999904632568 -12.717000007629395,-5.7870001792907715 -12.437999725341797,-5.428999900817871 C-12.154000282287598,-5.071000099182129 -11.935999870300293,-4.755000114440918 -11.781999588012695,-4.482999801635742 C-11.781999588012695,-4.482999801635742 -11.593999862670898,-4.482999801635742 -11.593999862670898,-4.482999801635742 C-11.593999862670898,-4.482999801635742 -11.593999862670898,-6.605000019073486 -11.593999862670898,-6.605000019073486 C-11.593999862670898,-6.605000019073486 -9.095999717712402,-6.605000019073486 -9.095999717712402,-6.605000019073486 C-9.095999717712402,-6.605000019073486 -9.095999717712402,6.775000095367432 -9.095999717712402,6.775000095367432 C-9.095999717712402,7.89900016784668 -9.359000205993652,8.824000358581543 -9.881999969482422,9.545999526977539 C-10.404000282287598,10.267999649047852 -11.112000465393066,10.802000045776367 -12.003999710083008,11.14799976348877 C-12.890000343322754,11.494000434875488 -13.890000343322754,11.668000221252441 -15.003999710083008,11.668000221252441z M-15.029000282287598,4.176000118255615 C-14.295999526977539,4.176000118255615 -13.677000045776367,4.005000114440918 -13.170999526977539,3.6630001068115234 C-12.65999984741211,3.316999912261963 -12.27400016784668,2.8239998817443848 -12.01200008392334,2.181999921798706 C-11.744999885559082,1.534000039100647 -11.611000061035156,0.7580000162124634 -11.611000061035156,-0.14499999582767487 C-11.611000061035156,-1.024999976158142 -11.741999626159668,-1.8009999990463257 -12.003999710083008,-2.4709999561309814 C-12.265000343322754,-3.1419999599456787 -12.64900016784668,-3.6649999618530273 -13.154000282287598,-4.039999961853027 C-13.65999984741211,-4.420000076293945 -14.28499984741211,-4.611000061035156 -15.029000282287598,-4.611000061035156 C-15.795999526977539,-4.611000061035156 -16.43600082397461,-4.4120001792907715 -16.94700050354004,-4.013999938964844 C-17.45800018310547,-3.621999979019165 -17.8439998626709,-3.0880000591278076 -18.104999542236328,-2.4119999408721924 C-18.361000061035156,-1.7359999418258667 -18.488000869750977,-0.9800000190734863 -18.488000869750977,-0.14499999582767487 C-18.488000869750977,0.7139999866485596 -18.357999801635742,1.465999960899353 -18.09600067138672,2.114000082015991 C-17.834999084472656,2.76200008392334 -17.450000762939453,3.2679998874664307 -16.937999725341797,3.630000114440918 C-16.42099952697754,3.99399995803833 -15.78499984741211,4.176000118255615 -15.029000282287598,4.176000118255615z M-5.679999828338623,6.486000061035156 M-5.679999828338623,-6.605000019073486 C-5.679999828338623,-6.605000019073486 -3.131999969482422,-6.605000019073486 -3.131999969482422,-6.605000019073486 C-3.131999969482422,-6.605000019073486 -3.131999969482422,6.486000061035156 -3.131999969482422,6.486000061035156 C-3.131999969482422,6.486000061035156 -5.679999828338623,6.486000061035156 -5.679999828338623,6.486000061035156 C-5.679999828338623,6.486000061035156 -5.679999828338623,-6.605000019073486 -5.679999828338623,-6.605000019073486z M-4.39300012588501,-8.625 C-4.835999965667725,-8.625 -5.2170000076293945,-8.77299976348877 -5.534999847412109,-9.067999839782715 C-5.8470001220703125,-9.369000434875488 -6.004000186920166,-9.727999687194824 -6.004000186920166,-10.142999649047852 C-6.004000186920166,-10.562999725341797 -5.8470001220703125,-10.920000076293945 -5.534999847412109,-11.215999603271484 C-5.2170000076293945,-11.517000198364258 -4.835999965667725,-11.666999816894531 -4.39300012588501,-11.666999816894531 C-3.950000047683716,-11.666999816894531 -3.571000099182129,-11.517000198364258 -3.257999897003174,-11.215999603271484 C-2.940000057220459,-10.920000076293945 -2.7820000648498535,-10.562999725341797 -2.7820000648498535,-10.142999649047852 C-2.7820000648498535,-9.727999687194824 -2.940000057220459,-9.369000434875488 -3.257999897003174,-9.067999839782715 C-3.571000099182129,-8.77299976348877 -3.950000047683716,-8.625 -4.39300012588501,-8.625z M2.8459999561309814,-1.2869999408721924 C2.8459999561309814,-1.2869999408721924 2.8459999561309814,6.486000061035156 2.8459999561309814,6.486000061035156 C2.8459999561309814,6.486000061035156 0.2980000078678131,6.486000061035156 0.2980000078678131,6.486000061035156 C0.2980000078678131,6.486000061035156 0.2980000078678131,-6.605000019073486 0.2980000078678131,-6.605000019073486 C0.2980000078678131,-6.605000019073486 2.74399995803833,-6.605000019073486 2.74399995803833,-6.605000019073486 C2.74399995803833,-6.605000019073486 2.74399995803833,-4.474999904632568 2.74399995803833,-4.474999904632568 C2.74399995803833,-4.474999904632568 2.9059998989105225,-4.474999904632568 2.9059998989105225,-4.474999904632568 C3.2070000171661377,-5.168000221252441 3.677999973297119,-5.723999977111816 4.320000171661377,-6.144999980926514 C4.9679999351501465,-6.565000057220459 5.783999919891357,-6.775000095367432 6.765999794006348,-6.775000095367432 C7.658999919891357,-6.775000095367432 8.4399995803833,-6.589000225067139 9.109999656677246,-6.214000225067139 C9.781000137329102,-5.84499979019165 10.300999641418457,-5.291999816894531 10.670000076293945,-4.559000015258789 C11.038999557495117,-3.8269999027252197 11.223999977111816,-2.9200000762939453 11.223999977111816,-1.840999960899353 C11.223999977111816,-1.840999960899353 11.223999977111816,6.486000061035156 11.223999977111816,6.486000061035156 C11.223999977111816,6.486000061035156 8.675999641418457,6.486000061035156 8.675999641418457,6.486000061035156 C8.675999641418457,6.486000061035156 8.675999641418457,-1.534999966621399 8.675999641418457,-1.534999966621399 C8.675999641418457,-2.4839999675750732 8.428000450134277,-3.2239999771118164 7.934000015258789,-3.757999897003174 C7.440000057220459,-4.297999858856201 6.761000156402588,-4.567999839782715 5.896999835968018,-4.567999839782715 C5.306000232696533,-4.567999839782715 4.781000137329102,-4.440000057220459 4.320000171661377,-4.184000015258789 C3.865999937057495,-3.928999900817871 3.505000114440918,-3.553999900817871 3.23799991607666,-3.059000015258789 C2.9769999980926514,-2.571000099182129 2.8459999561309814,-1.9800000190734863 2.8459999561309814,-1.2869999408721924z M17.190000534057617,-1.2869999408721924 C17.190000534057617,-1.2869999408721924 17.190000534057617,6.486000061035156 17.190000534057617,6.486000061035156 C17.190000534057617,6.486000061035156 14.640999794006348,6.486000061035156 14.640999794006348,6.486000061035156 C14.640999794006348,6.486000061035156 14.640999794006348,-6.605000019073486 14.640999794006348,-6.605000019073486 C14.640999794006348,-6.605000019073486 17.08799934387207,-6.605000019073486 17.08799934387207,-6.605000019073486 C17.08799934387207,-6.605000019073486 17.08799934387207,-4.474999904632568 17.08799934387207,-4.474999904632568 C17.08799934387207,-4.474999904632568 17.249000549316406,-4.474999904632568 17.249000549316406,-4.474999904632568 C17.551000595092773,-5.168000221252441 18.02199935913086,-5.723999977111816 18.663999557495117,-6.144999980926514 C19.312000274658203,-6.565000057220459 20.12700080871582,-6.775000095367432 21.110000610351562,-6.775000095367432 C22.00200080871582,-6.775000095367432 22.784000396728516,-6.589000225067139 23.45400047302246,-6.214000225067139 C24.124000549316406,-5.84499979019165 24.643999099731445,-5.291999816894531 25.013999938964844,-4.559000015258789 C25.382999420166016,-3.8269999027252197 25.56800079345703,-2.9200000762939453 25.56800079345703,-1.840999960899353 C25.56800079345703,-1.840999960899353 25.56800079345703,6.486000061035156 25.56800079345703,6.486000061035156 C25.56800079345703,6.486000061035156 23.018999099731445,6.486000061035156 23.018999099731445,6.486000061035156 C23.018999099731445,6.486000061035156 23.018999099731445,-1.534999966621399 23.018999099731445,-1.534999966621399 C23.018999099731445,-2.4839999675750732 22.77199935913086,-3.2239999771118164 22.277999877929688,-3.757999897003174 C21.784000396728516,-4.297999858856201 21.104999542236328,-4.567999839782715 20.240999221801758,-4.567999839782715 C19.649999618530273,-4.567999839782715 19.124000549316406,-4.440000057220459 18.663999557495117,-4.184000015258789 C18.209999084472656,-3.928999900817871 17.849000930786133,-3.553999900817871 17.582000732421875,-3.059000015258789 C17.31999969482422,-2.571000099182129 17.190000534057617,-1.9800000190734863 17.190000534057617,-1.2869999408721924z M34.62699890136719,6.75 C33.3380012512207,6.75 32.22700119018555,6.473999977111816 31.295000076293945,5.923999786376953 C30.368999481201172,5.366000175476074 29.652999877929688,4.585000038146973 29.14699935913086,3.5789999961853027 C28.64699935913086,2.566999912261963 28.39699935913086,1.3830000162124634 28.39699935913086,0.02500000037252903 C28.39699935913086,-1.315999984741211 28.64699935913086,-2.496999979019165 29.14699935913086,-3.5199999809265137 C29.652999877929688,-4.541999816894531 30.35700035095215,-5.341000080108643 31.26099967956543,-5.914999961853027 C32.16999816894531,-6.48799991607666 33.231998443603516,-6.775000095367432 34.448001861572266,-6.775000095367432 C35.1870002746582,-6.775000095367432 35.90299987792969,-6.6539998054504395 36.59600067138672,-6.409999847412109 C37.28900146484375,-6.165999889373779 37.9109992980957,-5.781000137329102 38.4630012512207,-5.257999897003174 C39.013999938964844,-4.736000061035156 39.448001861572266,-4.057000160217285 39.76599884033203,-3.2209999561309814 C40.084999084472656,-2.3919999599456787 40.24399948120117,-1.3839999437332153 40.24399948120117,-0.19699999690055847 C40.24399948120117,-0.19699999690055847 40.24399948120117,0.7080000042915344 40.24399948120117,0.7080000042915344 C40.24399948120117,0.7080000042915344 29.83799934387207,0.7080000042915344 29.83799934387207,0.7080000042915344 C29.83799934387207,0.7080000042915344 29.83799934387207,-1.2020000219345093 29.83799934387207,-1.2020000219345093 C29.83799934387207,-1.2020000219345093 37.74700164794922,-1.2020000219345093 37.74700164794922,-1.2020000219345093 C37.74700164794922,-1.871999979019165 37.61000061035156,-2.4660000801086426 37.3380012512207,-2.9830000400543213 C37.064998626708984,-3.505000114440918 36.680999755859375,-3.9170000553131104 36.1870002746582,-4.218999862670898 C35.698001861572266,-4.519999980926514 35.124000549316406,-4.671000003814697 34.46500015258789,-4.671000003814697 C33.749000549316406,-4.671000003814697 33.124000549316406,-4.494999885559082 32.59000015258789,-4.14300012588501 C32.0620002746582,-3.7960000038146973 31.652999877929688,-3.3420000076293945 31.363000869750977,-2.7790000438690186 C31.07900047302246,-2.2219998836517334 30.937000274658203,-1.6169999837875366 30.937000274658203,-0.9639999866485596 C30.937000274658203,-0.9639999866485596 30.937000274658203,0.5270000100135803 30.937000274658203,0.5270000100135803 C30.937000274658203,1.402999997138977 31.09000015258789,2.1480000019073486 31.39699935913086,2.76200008392334 C31.709999084472656,3.375999927520752 32.14400100708008,3.8440001010894775 32.70100021362305,4.168000221252441 C33.257999420166016,4.486000061035156 33.909000396728516,4.645999908447266 34.65299987792969,4.645999908447266 C35.13600158691406,4.645999908447266 35.57600021362305,4.574999809265137 35.9739990234375,4.439000129699707 C36.37200164794922,4.296999931335449 36.71500015258789,4.0879998207092285 37.005001068115234,3.809999942779541 C37.29499816894531,3.5320000648498535 37.51599884033203,3.187999963760376 37.66999816894531,2.7780001163482666 C37.66999816894531,2.7780001163482666 40.082000732421875,3.2139999866485596 40.082000732421875,3.2139999866485596 C39.888999938964844,3.9240000247955322 39.54199981689453,4.545000076293945 39.04199981689453,5.078999996185303 C38.54800033569336,5.60699987411499 37.92599868774414,6.019999980926514 37.17599868774414,6.315999984741211 C36.430999755859375,6.605999946594238 35.582000732421875,6.75 34.62699890136719,6.75z M43.07099914550781,6.486000061035156 C43.07099914550781,6.486000061035156 43.07099914550781,-6.605000019073486 43.07099914550781,-6.605000019073486 C43.07099914550781,-6.605000019073486 45.534000396728516,-6.605000019073486 45.534000396728516,-6.605000019073486 C45.534000396728516,-6.605000019073486 45.534000396728516,-4.525000095367432 45.534000396728516,-4.525000095367432 C45.534000396728516,-4.525000095367432 45.67100143432617,-4.525000095367432 45.67100143432617,-4.525000095367432 C45.909000396728516,-5.230000019073486 46.33000183105469,-5.784999847412109 46.93199920654297,-6.188000202178955 C47.540000915527344,-6.5970001220703125 48.22700119018555,-6.801000118255615 48.99399948120117,-6.801000118255615 C49.15399932861328,-6.801000118255615 49.340999603271484,-6.796000003814697 49.55699920654297,-6.784999847412109 C49.77899932861328,-6.77400016784668 49.95199966430664,-6.758999824523926 50.07699966430664,-6.742000102996826 C50.07699966430664,-6.742000102996826 50.07699966430664,-4.303999900817871 50.07699966430664,-4.303999900817871 C49.974998474121094,-4.331999778747559 49.792999267578125,-4.36299991607666 49.53099822998047,-4.3979997634887695 C49.27000045776367,-4.436999797821045 49.00899887084961,-4.456999778747559 48.74700164794922,-4.456999778747559 C48.14500045776367,-4.456999778747559 47.608001708984375,-4.328999996185303 47.137001037597656,-4.073999881744385 C46.67100143432617,-3.8239998817443848 46.30099868774414,-3.4739999771118164 46.02899932861328,-3.0250000953674316 C45.75600051879883,-2.5820000171661377 45.61899948120117,-2.0769999027252197 45.61899948120117,-1.5080000162124634 C45.61899948120117,-1.5080000162124634 45.61899948120117,6.486000061035156 45.61899948120117,6.486000061035156 C45.61899948120117,6.486000061035156 43.07099914550781,6.486000061035156 43.07099914550781,6.486000061035156z"></path>
                                </g>
                            </g>
                            <g style="display: block;" transform="matrix(1,0,0,1,-77,0)" opacity="1">
                                <g opacity="1" transform="matrix(0.9999737739562988,0.007243053056299686,-0.007243053056299686,0.9999737739562988,494.27301025390625,70.7020034790039)">
                                    <path fill="rgb(64,68,77)" fill-opacity="1" d=" M65.16699981689453,-18.5 C65.16699981689453,-18.5 -64.83399963378906,-18.5 -64.83399963378906,-18.5 C-69.25199890136719,-18.5 -72.83200073242188,-14.730999946594238 -72.83200073242188,-10.312999725341797 C-72.83200073242188,-10.312999725341797 -73,27 -73,27 C-73,31.417999267578125 -69.41799926757812,35 -65,35 C-65,35 -14,35 -14,35 C-14,35 0,49 0,49 C0,49 14,35 14,35 C14,35 65,35 65,35 C69.41799926757812,35 73,31.417999267578125 73,27 C73,27 73.16600036621094,-10.5 73.16600036621094,-10.5 C73.16600036621094,-14.918000221252441 69.58499908447266,-18.5 65.16699981689453,-18.5z"></path>
                                </g>
                            </g>
                            <g style="display: block;" transform="matrix(0.6903300285339355,0,0,0.6903300285339355,417,58)" opacity="1">
                                <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                    <path fill="rgb(255,255,255)" fill-opacity="1" d=" M74.90799713134766,42 C74.90799713134766,42 74.90799713134766,30.009000778198242 74.90799713134766,30.009000778198242 C74.90799713134766,29.156999588012695 75.11299896240234,28.395999908447266 75.52200317382812,27.726999282836914 C75.93099975585938,27.058000564575195 76.48699951171875,26.533000946044922 77.19000244140625,26.15399932861328 C77.89299774169922,25.774999618530273 78.6969985961914,25.584999084472656 79.5999984741211,25.584999084472656 C79.99199676513672,25.584999084472656 80.38400268554688,25.613000869750977 80.7760009765625,25.667999267578125 C81.16799926757812,25.724000930786133 81.44200134277344,25.77199935913086 81.59500122070312,25.815000534057617 C81.59500122070312,25.815000534057617 81.59500122070312,22.159000396728516 81.59500122070312,22.159000396728516 C81.40699768066406,22.132999420166016 81.14900207519531,22.11199951171875 80.82099914550781,22.094999313354492 C80.49299621582031,22.077999114990234 80.20999908447266,22.06999969482422 79.97100067138672,22.06999969482422 C78.81999969482422,22.06999969482422 77.79199981689453,22.375 76.88400268554688,22.983999252319336 C75.97599792480469,23.593000411987305 75.34300231933594,24.426000595092773 74.98500061035156,25.482999801635742 C74.98500061035156,25.482999801635742 74.78099822998047,25.482999801635742 74.78099822998047,25.482999801635742 C74.78099822998047,25.482999801635742 74.78099822998047,22.36400032043457 74.78099822998047,22.36400032043457 C74.78099822998047,22.36400032043457 71.08599853515625,22.36400032043457 71.08599853515625,22.36400032043457 C71.08599853515625,22.36400032043457 71.08599853515625,42 71.08599853515625,42 C71.08599853515625,42 74.90799713134766,42 74.90799713134766,42z"></path>
                                </g>
                                <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                    <path fill="rgb(255,255,255)" fill-opacity="1" d=" M62.233001708984375,41.737998962402344 C63.354000091552734,41.29899978637695 64.28700256347656,40.680999755859375 65.03299713134766,39.88399887084961 C65.77899932861328,39.08700180053711 66.2959976196289,38.15599822998047 66.58599853515625,37.090999603271484 C66.58599853515625,37.090999603271484 62.96799850463867,36.43899917602539 62.96799850463867,36.43899917602539 C62.737998962402344,37.053001403808594 62.40599822998047,37.569000244140625 61.97100067138672,37.986000061035156 C61.5359992980957,38.40399932861328 61.02000045776367,38.715999603271484 60.42399978637695,38.92499923706055 C59.82699966430664,39.13399887084961 59.16699981689453,39.23899841308594 58.44300079345703,39.23899841308594 C57.32600021362305,39.23899841308594 56.349998474121094,38.99800109863281 55.51499938964844,38.51599884033203 C54.68000030517578,38.03499984741211 54.02899932861328,37.33300018310547 53.564998626708984,36.41299819946289 C53.099998474121094,35.49300003051758 52.86899948120117,34.37699890136719 52.86899948120117,33.06399917602539 C52.86899948120117,33.06399917602539 52.86899948120117,30.82699966430664 52.86899948120117,30.82699966430664 C52.86899948120117,29.847000122070312 53.08399963378906,28.937000274658203 53.513999938964844,28.097000122070312 C53.944000244140625,27.257999420166016 54.55799865722656,26.576000213623047 55.35499954223633,26.052000045776367 C56.152000427246094,25.527999877929688 57.08700180053711,25.266000747680664 58.1609992980957,25.266000747680664 C59.150001525878906,25.266000747680664 60.01300048828125,25.490999221801758 60.75,25.94300079345703 C61.48699951171875,26.395000457763672 62.06100082397461,27.010000228881836 62.470001220703125,27.790000915527344 C62.87900161743164,28.56999969482422 63.08300018310547,29.46299934387207 63.08300018310547,30.4689998626709 C63.08300018310547,30.4689998626709 51.220001220703125,30.4689998626709 51.220001220703125,30.4689998626709 C51.220001220703125,30.4689998626709 51.220001220703125,33.332000732421875 51.220001220703125,33.332000732421875 C51.220001220703125,33.332000732421875 66.8290023803711,33.332000732421875 66.8290023803711,33.332000732421875 C66.8290023803711,33.332000732421875 66.8290023803711,31.976999282836914 66.8290023803711,31.976999282836914 C66.8290023803711,30.195999145507812 66.58999633789062,28.68199920654297 66.11299896240234,27.433000564575195 C65.63600158691406,26.184999465942383 64.98400115966797,25.167999267578125 64.15699768066406,24.384000778198242 C63.33000183105469,23.600000381469727 62.39699935913086,23.024999618530273 61.356998443603516,22.658000946044922 C60.31700134277344,22.29199981689453 59.24399948120117,22.107999801635742 58.13600158691406,22.107999801635742 C56.3120002746582,22.107999801635742 54.720001220703125,22.538000106811523 53.361000061035156,23.39900016784668 C52.000999450683594,24.260000228881836 50.944000244140625,25.457000732421875 50.189998626708984,26.990999221801758 C49.43600082397461,28.524999618530273 49.058998107910156,30.298999786376953 49.058998107910156,32.310001373291016 C49.058998107910156,34.34700012207031 49.43600082397461,36.12099838256836 50.189998626708984,37.63399887084961 C50.944000244140625,39.14699935913086 52.01900100708008,40.319000244140625 53.4119987487793,41.150001525878906 C54.80500030517578,41.98099899291992 56.46900177001953,42.395999908447266 58.40399932861328,42.395999908447266 C59.83599853515625,42.395999908447266 61.11199951171875,42.176998138427734 62.233001708984375,41.737998962402344z"></path>
                                </g>
                                <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                    <path fill="rgb(255,255,255)" fill-opacity="1" d=" M38.07699966430664,37.027000427246094 C38.07699966430664,38.21200180053711 38.34600067138672,39.19599914550781 38.882999420166016,39.97999954223633 C39.41999816894531,40.763999938964844 40.12300109863281,41.34400177001953 40.992000579833984,41.71900177001953 C41.861000061035156,42.09400177001953 42.79899978637695,42.27299880981445 43.80500030517578,42.25600051879883 C44.41899871826172,42.24700164794922 44.93000030517578,42.198001861572266 45.3390007019043,42.10900115966797 C45.74800109863281,42.02000045776367 46.0629997253418,41.93199920654297 46.28499984741211,41.84700012207031 C46.28499984741211,41.84700012207031 45.595001220703125,38.68899917602539 45.595001220703125,38.68899917602539 C45.46699905395508,38.71500015258789 45.28799819946289,38.74800109863281 45.05799865722656,38.79100036621094 C44.827999114990234,38.83399963378906 44.558998107910156,38.85499954223633 44.25199890136719,38.85499954223633 C43.83399963378906,38.85499954223633 43.44900131225586,38.78900146484375 43.095001220703125,38.65700149536133 C42.74100112915039,38.525001525878906 42.45399856567383,38.27399826049805 42.231998443603516,37.90299987792969 C42.0099983215332,37.53200149536133 41.900001525878906,36.974998474121094 41.900001525878906,36.23400115966797 C41.900001525878906,36.23400115966797 41.900001525878906,17.659000396728516 41.900001525878906,17.659000396728516 C41.900001525878906,17.659000396728516 38.07699966430664,17.659000396728516 38.07699966430664,17.659000396728516 C38.07699966430664,17.659000396728516 38.07699966430664,37.027000427246094 38.07699966430664,37.027000427246094z M35.20100021362305,22.36400032043457 C35.20100021362305,22.36400032043457 35.20100021362305,25.43199920654297 35.20100021362305,25.43199920654297 C35.20100021362305,25.43199920654297 45.926998138427734,25.43199920654297 45.926998138427734,25.43199920654297 C45.926998138427734,25.43199920654297 45.926998138427734,22.36400032043457 45.926998138427734,22.36400032043457 C45.926998138427734,22.36400032043457 35.20100021362305,22.36400032043457 35.20100021362305,22.36400032043457z"></path>
                                </g>
                                <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                    <path fill="rgb(255,255,255)" fill-opacity="1" d=" M29.76799964904785,23.48200035095215 C28.548999786376953,22.56599998474121 26.878000259399414,22.107999801635742 24.756000518798828,22.107999801635742 C23.2810001373291,22.107999801635742 21.974000930786133,22.35300064086914 20.832000732421875,22.843000411987305 C19.690000534057617,23.33300018310547 18.795000076293945,24.01300048828125 18.14699935913086,24.881999969482422 C17.499000549316406,25.750999450683594 17.176000595092773,26.766000747680664 17.176000595092773,27.924999237060547 C17.176000595092773,29.322999954223633 17.61199951171875,30.476999282836914 18.486000061035156,31.388999938964844 C19.360000610351562,32.30099868774414 20.711999893188477,32.96699905395508 22.545000076293945,33.38399887084961 C22.545000076293945,33.38399887084961 25.868999481201172,34.11199951171875 25.868999481201172,34.11199951171875 C26.805999755859375,34.32500076293945 27.503000259399414,34.64099884033203 27.958999633789062,35.05799865722656 C28.415000915527344,35.47600173950195 28.64299964904785,35.99100112915039 28.64299964904785,36.60499954223633 C28.64299964904785,37.36399841308594 28.26799964904785,38.005001068115234 27.51799964904785,38.52899932861328 C26.76799964904785,39.053001403808594 25.767000198364258,39.314998626708984 24.513999938964844,39.314998626708984 C23.363000869750977,39.314998626708984 22.43000030517578,39.06999969482422 21.714000701904297,38.58000183105469 C20.99799919128418,38.09000015258789 20.524999618530273,37.36399841308594 20.295000076293945,36.4010009765625 C20.295000076293945,36.4010009765625 16.600000381469727,36.9630012512207 16.600000381469727,36.9630012512207 C16.915000915527344,38.70199966430664 17.76799964904785,40.04199981689453 19.156999588012695,40.98400115966797 C20.54599952697754,41.92599868774414 22.34000015258789,42.395999908447266 24.538999557495117,42.395999908447266 C26.124000549316406,42.395999908447266 27.520000457763672,42.13600158691406 28.72599983215332,41.61600112915039 C29.93199920654297,41.09600067138672 30.87299919128418,40.37799835205078 31.551000595092773,39.46200180053711 C32.229000091552734,38.54600143432617 32.56800079345703,37.5 32.56800079345703,36.32400131225586 C32.56800079345703,34.935001373291016 32.124000549316406,33.80500030517578 31.238000869750977,32.93600082397461 C30.35099983215332,32.06700134277344 29.0049991607666,31.423999786376953 27.197999954223633,31.006000518798828 C27.197999954223633,31.006000518798828 24.07900047302246,30.290000915527344 24.07900047302246,30.290000915527344 C22.996999740600586,30.034000396728516 22.21299934387207,29.70599937438965 21.726999282836914,29.30500030517578 C21.240999221801758,28.90399932861328 20.99799919128418,28.375999450683594 20.99799919128418,27.719999313354492 C20.99799919128418,26.961999893188477 21.360000610351562,26.341999053955078 22.084999084472656,25.860000610351562 C22.80900001525879,25.378999710083008 23.71299934387207,25.13800048828125 24.795000076293945,25.13800048828125 C25.58799934387207,25.13800048828125 26.246999740600586,25.264999389648438 26.775999069213867,25.520999908447266 C27.304000854492188,25.777000427246094 27.725000381469727,26.106000900268555 28.035999298095703,26.506000518798828 C28.347000122070312,26.906999588012695 28.575000762939453,27.327999114990234 28.719999313354492,27.770999908447266 C28.719999313354492,27.770999908447266 32.183998107910156,27.158000946044922 32.183998107910156,27.158000946044922 C31.79199981689453,25.624000549316406 30.98699951171875,24.398000717163086 29.76799964904785,23.48200035095215z"></path>
                                </g>
                                <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                    <path fill="rgb(255,255,255)" fill-opacity="1" d=" M0.8500000238418579,38.64400100708008 C0.1509999930858612,38.16299819946289 -0.1979999989271164,37.44900131225586 -0.1979999989271164,36.50299835205078 C-0.1979999989271164,35.82099914550781 -0.017000000923871994,35.27299880981445 0.3449999988079071,34.86000061035156 C0.7070000171661377,34.446998596191406 1.194000005722046,34.130001068115234 1.8029999732971191,33.90800094604492 C2.4119999408721924,33.68600082397461 3.0880000591278076,33.52899932861328 3.8289999961853027,33.435001373291016 C4.144000053405762,33.391998291015625 4.535999774932861,33.3390007019043 5.005000114440918,33.275001525878906 C5.473999977111816,33.21099853515625 5.955999851226807,33.138999938964844 6.449999809265137,33.05799865722656 C6.943999767303467,32.97700119018555 7.385000228881836,32.87799835205078 7.7729997634887695,32.76300048828125 C8.16100025177002,32.64799880981445 8.42300033569336,32.52199935913086 8.559000015258789,32.38600158691406 C8.559000015258789,32.38600158691406 8.559000015258789,34.917999267578125 8.559000015258789,34.917999267578125 C8.559000015258789,35.694000244140625 8.361000061035156,36.41899871826172 7.965000152587891,37.09700012207031 C7.568999767303467,37.775001525878906 6.993000030517578,38.323001861572266 6.238999843597412,38.7400016784668 C5.485000133514404,39.15800094604492 4.578999996185303,39.36600112915039 3.5220000743865967,39.36600112915039 C2.440000057220459,39.36600112915039 1.5490000247955322,39.125999450683594 0.8500000238418579,38.64400100708008z M5.478000164031982,41.96200180053711 C6.252999782562256,41.64699935913086 6.888999938964844,41.25 7.382999897003174,40.77299880981445 C7.876999855041504,40.29600143432617 8.248000144958496,39.808998107910156 8.494999885559082,39.314998626708984 C8.494999885559082,39.314998626708984 8.64900016784668,39.314998626708984 8.64900016784668,39.314998626708984 C8.64900016784668,39.314998626708984 8.64900016784668,42 8.64900016784668,42 C8.64900016784668,42 12.380999565124512,42 12.380999565124512,42 C12.380999565124512,42 12.380999565124512,28.959999084472656 12.380999565124512,28.959999084472656 C12.380999565124512,27.527999877929688 12.133999824523926,26.363000869750977 11.640000343322754,25.464000701904297 C11.145999908447266,24.565000534057617 10.512999534606934,23.871999740600586 9.741999626159668,23.38599967956543 C8.970999717712402,22.899999618530273 8.142999649047852,22.56599998474121 7.261000156402588,22.382999420166016 C6.379000186920166,22.200000762939453 5.546000003814697,22.107999801635742 4.76200008392334,22.107999801635742 C3.5769999027252197,22.107999801635742 2.447999954223633,22.275999069213867 1.3739999532699585,22.613000869750977 C0.30000001192092896,22.950000762939453 -0.6480000019073486,23.48699951171875 -1.4700000286102295,24.224000930786133 C-2.2929999828338623,24.961000442504883 -2.9170000553131104,25.926000595092773 -3.3429999351501465,27.118999481201172 C-3.3429999351501465,27.118999481201172 0.24899999797344208,27.937999725341797 0.24899999797344208,27.937999725341797 C0.5299999713897705,27.24799919128418 1.0399999618530273,26.618999481201172 1.7769999504089355,26.052000045776367 C2.5139999389648438,25.485000610351562 3.5260000228881836,25.20199966430664 4.813000202178955,25.20199966430664 C6.048999786376953,25.20199966430664 6.980999946594238,25.507999420166016 7.60699987411499,26.121999740600586 C8.232999801635742,26.736000061035156 8.545999526977539,27.60099983215332 8.545999526977539,28.716999053955078 C8.545999526977539,28.716999053955078 8.545999526977539,28.80699920654297 8.545999526977539,28.80699920654297 C8.545999526977539,29.267000198364258 8.380000114440918,29.599000930786133 8.04800033569336,29.804000854492188 C7.716000080108643,30.009000778198242 7.183000087738037,30.1560001373291 6.449999809265137,30.2450008392334 C5.7170000076293945,30.333999633789062 4.76200008392334,30.447999954223633 3.5859999656677246,30.583999633789062 C2.6570000648498535,30.69499969482422 1.7450000047683716,30.85700035095215 0.8500000238418579,31.06999969482422 C-0.04500000178813934,31.283000946044922 -0.8550000190734863,31.599000930786133 -1.5789999961853027,32.01599884033203 C-2.303999900817871,32.433998107910156 -2.878999948501587,33 -3.305000066757202,33.715999603271484 C-3.7309999465942383,34.43199920654297 -3.944000005722046,35.34400177001953 -3.944000005722046,36.45199966430664 C-3.944000005722046,37.73899841308594 -3.6519999504089355,38.82600021362305 -3.068000078201294,39.71200180053711 C-2.4839999675750732,40.597999572753906 -1.690000057220459,41.27399826049805 -0.6840000152587891,41.737998962402344 C0.32199999690055847,42.20199966430664 1.4470000267028809,42.435001373291016 2.690999984741211,42.435001373291016 C3.7730000019073486,42.435001373291016 4.702000141143799,42.277000427246094 5.478000164031982,41.96200180053711z"></path>
                                </g>
                                <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                    <path fill="rgb(255,255,255)" fill-opacity="1" d=" M-35.03499984741211,42 C-35.03499984741211,42 -31.275999069213867,42 -31.275999069213867,42 C-31.275999069213867,42 -31.275999069213867,23.041000366210938 -31.275999069213867,23.041000366210938 C-31.275999069213867,23.041000366210938 -31.033000946044922,23.041000366210938 -31.033000946044922,23.041000366210938 C-31.033000946044922,23.041000366210938 -23.312000274658203,41.96200180053711 -23.312000274658203,41.96200180053711 C-23.312000274658203,41.96200180053711 -20.191999435424805,41.96200180053711 -20.191999435424805,41.96200180053711 C-20.191999435424805,41.96200180053711 -12.470999717712402,23.054000854492188 -12.470999717712402,23.054000854492188 C-12.470999717712402,23.054000854492188 -12.227999687194824,23.054000854492188 -12.227999687194824,23.054000854492188 C-12.227999687194824,23.054000854492188 -12.227999687194824,42 -12.227999687194824,42 C-12.227999687194824,42 -8.468999862670898,42 -8.468999862670898,42 C-8.468999862670898,42 -8.468999862670898,15.817999839782715 -8.468999862670898,15.817999839782715 C-8.468999862670898,15.817999839782715 -13.262999534606934,15.817999839782715 -13.262999534606934,15.817999839782715 C-13.262999534606934,15.817999839782715 -21.599000930786133,36.16999816894531 -21.599000930786133,36.16999816894531 C-21.599000930786133,36.16999816894531 -21.905000686645508,36.16999816894531 -21.905000686645508,36.16999816894531 C-21.905000686645508,36.16999816894531 -30.240999221801758,15.817999839782715 -30.240999221801758,15.817999839782715 C-30.240999221801758,15.817999839782715 -35.03499984741211,15.817999839782715 -35.03499984741211,15.817999839782715 C-35.03499984741211,15.817999839782715 -35.03499984741211,42 -35.03499984741211,42z"></path>
                                </g>
                                <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                    <path fill="rgb(255,255,255)" fill-opacity="1" d=" M-54.275001525878906,15.817999839782715 C-54.275001525878906,15.817999839782715 -54.275001525878906,42 -54.275001525878906,42 C-54.275001525878906,42 -50.32400131225586,42 -50.32400131225586,42 C-50.32400131225586,42 -50.32400131225586,15.817999839782715 -50.32400131225586,15.817999839782715 C-50.32400131225586,15.817999839782715 -54.275001525878906,15.817999839782715 -54.275001525878906,15.817999839782715z"></path>
                                </g>
                                <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                    <path fill="rgb(255,255,255)" fill-opacity="1" d=" M-76.55699920654297,35.07099914550781 C-76.55699920654297,35.07099914550781 -62.95500183105469,35.07099914550781 -62.95500183105469,35.07099914550781 C-62.95500183105469,35.07099914550781 -62.95500183105469,31.746999740600586 -62.95500183105469,31.746999740600586 C-62.95500183105469,31.746999740600586 -76.55699920654297,31.746999740600586 -76.55699920654297,31.746999740600586 C-76.55699920654297,31.746999740600586 -76.55699920654297,35.07099914550781 -76.55699920654297,35.07099914550781z M-69.84600067138672,20.573999404907227 C-69.84600067138672,20.573999404907227 -69.64099884033203,20.573999404907227 -69.64099884033203,20.573999404907227 C-69.64099884033203,20.573999404907227 -62.23899841308594,42 -62.23899841308594,42 C-62.23899841308594,42 -58.04600143432617,42 -58.04600143432617,42 C-58.04600143432617,42 -67.46800231933594,15.817999839782715 -67.46800231933594,15.817999839782715 C-67.46800231933594,15.817999839782715 -72.03199768066406,15.817999839782715 -72.03199768066406,15.817999839782715 C-72.03199768066406,15.817999839782715 -81.4540023803711,42 -81.4540023803711,42 C-81.4540023803711,42 -77.26100158691406,42 -77.26100158691406,42 C-77.26100158691406,42 -69.84600067138672,20.573999404907227 -69.84600067138672,20.573999404907227z"></path>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="absolute bottom-0 flex w-full flex-row justify-between pl-12 pr-8 pt-[10px] pb-3">
                    <span class="flex items-center justify-center text-xs font-normal text-[#A6AAB3]">Nov</span>
                    <span class="flex items-center justify-center text-xs font-normal text-[#A6AAB3]">Dec</span>
                    <span class="flex items-center justify-center text-xs font-normal text-[#A6AAB3]">Jan</span>
                    <span class="flex items-center justify-center text-xs font-normal text-[#A6AAB3]">Feb</span>
                </div>
            </div>
            <button class="btn theme-btn text-white mt-3 p-4 text-uppercase" style="background:#5653fe; border-radius:.5rem; font-size:1rem" wire:click="continueToNextStep">
                <b>Continue</b>
            </button>
        </div>
    </div>
    @endif
    @else
    <div class="h-full w-full">
        <div class="mx-auto max-w-[400px] p-4 pt-6">
            <p class="label-text-primary mb-6 text-center text-2xl font-bold leading-10">Enter your email to get your <span class="label-text-all-accent">Personal AI-Driven Income Growth</span> Challenge! </p>
            <!-- <form class="space-y-6"> -->
            <div class="space-y-1" data-sentry-component="EmailInput" data-sentry-source-file="index.tsx">
                <div class="relative flex flex-col">
                    <input class="background-primary border-primary label-text-primary rounded border bg-[14px] bg-no-repeat p-3 pl-[44px] text-sm font-normal transition-all duration-200" name="email" type="email" inputmode="email" placeholder="Your email" autocapitalize="none"
                        autocorrect="off" fdprocessedid="pgjd5g">
                </div>
            </div>
            <div class="flex items-center justify-between space-x-1 mt-3" data-sentry-component="CustomCheckbox" data-sentry-source-file="index.tsx">
                <div class="flex flex-none items-center p-2">
                    <input type="checkbox" class="h-[22px] w-[22px] rounded-md text-[#5653FE] accent-[#5653FE] focus:accent-[#8585ec]" data-cy-id="checkbox">
                </div>
                <span class="label-text-all-primary text-xs font-medium">I'd like to receive valuable insights, exclusive offers, and the latest news straight to my inbox!</span>
            </div>
            <!-- </form> -->
        </div>
        <button id="submit-button" wire:click="emailBtn" class="btn theme-btn text-white mt-3 p-3 text-uppercase " style="background:#5653fe; border-radius:.5rem;">continue</button>
    </div>

    @endif
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.addEventListener('livewire:load', function() {
                // Store selected values in localStorage
                window.addEventListener('storeGender', event => {
                    localStorage.setItem('selectedGender', event.detail.gender);
                    updateAgeImages()
                });
               
                window.addEventListener('storeAge', event => {
                    localStorage.setItem('selectedAge', event.detail.age);
                });
                window.addEventListener('storeGoal', event => {
                    localStorage.setItem('selectedGoal', event.detail.goal);
                    updatgoalImages();
                });
                window.addEventListener('storeIncomeSource', event => {
                    localStorage.setItem('selectedSource', event.detail.source);
                });
                window.addEventListener('storeSchedule', event => {
                    localStorage.setItem('selectedSchedule', event.detail.schedule);
                });
            
                window.addEventListener('storeSituation', event => {
                    localStorage.setItem('selectedSituation', event.detail.situation);
                });
                window.addEventListener('storeIncomeGoal', event => {
                    localStorage.setItem('selectedIncomeGoal', event.detail.incomeGoal);
                });
                window.addEventListener('clearLocalStorage', event => {
                    localStorage.removeItem('currentStep');
                });
                window.addEventListener('storeControl', event => {
                    localStorage.setItem('selectedControl', event.detail.control);
                });
             
                window.addEventListener('storeWish', event => {
                    localStorage.setItem('selectedWish', event.detail.wish);
                });
                window.addEventListener('storeFutureGoal', event => {
                    localStorage.setItem('selectedFutureGoal', event.detail.storeFutureGoal);
                });
                window.addEventListener('storeAboutFreelance', event => {
                    localStorage.setItem('selectedAboutFreelance', event.detail.storeAboutFreelance);
                });

                window.addEventListener('storeWriting', event => {
                    localStorage.setItem('selectedWriting', event.detail.storeWriting);
                });
                window.addEventListener('storeMarketing', event => {
                    localStorage.setItem('selectedMarketing', event.detail.storeMarketing);
                });
                window.addEventListener('storeBusiness', event => {
                    localStorage.setItem('selectedBusiness', event.detail.storeBusiness);
                });
                window.addEventListener('storeReadiness', event => {
                    localStorage.setItem('selectedReadiness', event.detail.storeReadiness);
                });
                window.addEventListener('storeFocus', event => {
                    localStorage.setItem('selectedFocus', event.detail.storeFocus);
                });
                window.addEventListener('storeDayTime', event => {
                    localStorage.setItem('selectedDayTime', event.detail.storeDayTime);
                });
            });
            window.addEventListener('storeGoal', event => {
                localStorage.setItem('selectedGoal', event.detail.goal);
                document.getElementById('goalDisplay').textContent = event.detail.goal;
                updatgoalImages()
            });
        });

        window.addEventListener('toggleField', event => {
            let selectedFields = JSON.parse(localStorage.getItem('selectedFields')) || [];

            const index = selectedFields.indexOf(event.detail.field);
            if (index === -1) {
                selectedFields.push(event.detail.field); 
            } else {
                selectedFields.splice(index, 1); 
            }

            localStorage.setItem('selectedFields', JSON.stringify(selectedFields)); 
          

        });

        window.addEventListener('toggleChallenge', event => {
            let selectedChallenges = JSON.parse(localStorage.getItem('selectedChallenges')) || [];

            const index = selectedChallenges.indexOf(event.detail.challenge);
            if (index === -1) {
                selectedChallenges.push(event.detail.challenge); 
            } else {
                selectedChallenges.splice(index, 1);
            }

            localStorage.setItem('selectedChallenges', JSON.stringify(selectedChallenges));
        });
    </script>
    <script>
        function gatherLocalStorageData() {
            const allData = {};

            // Add the relevant data from localStorage
            allData.selectedGender = localStorage.getItem('selectedGender');
            allData.selectedAge = localStorage.getItem('selectedAge');
            allData.selectedGoal = localStorage.getItem('selectedGoal');
            allData.selectedSource = localStorage.getItem('selectedSource');
            allData.selectedSchedule = localStorage.getItem('selectedSchedule');
            allData.selectedChallange = localStorage.getItem('selectedChallange');
            allData.selectedSituation = localStorage.getItem('selectedSituation');
            allData.selectedIncomeGoal = localStorage.getItem('selectedIncomeGoal');
            allData.selectedControl = localStorage.getItem('selectedControl');
            allData.selectedField = localStorage.getItem('selectedField');
            allData.selectedWish = localStorage.getItem('selectedWish');
            allData.selectedFutureGoal = localStorage.getItem('selectedFutureGoal');

            // Return the collected data as an object
            return allData;
        }

        function sendEmail() {
            const allData = gatherLocalStorageData();
            const email = document.querySelector('input[name="email"]').value;
            allData.email = email;

            // Clear previous error messages
            const errorContainer = document.querySelector('#error-message');
            errorContainer.innerHTML = '';
            errorContainer.classList = ''; // Reset classes

            // Send data to Laravel controller
            fetch('/store-browser-data', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    },
                    body: JSON.stringify(allData),
                })
                .then(response => response.json())
                .then(data => {
                    if (data.errors) {
                        errorContainer.classList.add('alert', 'alert-danger');
                        // Display validation errors
                        Object.values(data.errors).forEach(errorMessages => {
                            errorMessages.forEach(message => {
                                const errorMessageElement = document.createElement('div');
                                errorMessageElement.textContent = message;
                                errorContainer.appendChild(errorMessageElement);
                            });
                        });
                    } else if (data.redirect) {
                        window.location.href = data.redirect;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    </script>
    <script>
        // Check if the button with id 'continueBtn' exists in the DOM
        const continueBtn = document.getElementById('continueBtn');
        if (continueBtn) {
            continueBtn.addEventListener('click', function() {
                // Emit Livewire event when the button is clicked
                Livewire.emit('startProgressAndNextStep');
            });
        } else {
            // console.log('Button "continueBtn" not found.');
        }

        document.addEventListener('startProgress', function() {
            startProgress(); // Start the progress animation when the event is fired
        });

        function startProgress() {
            let progress = 0;
            const progressBar = document.getElementById('progress');
            const percentageText = document.getElementById('percentage');
            const totalLength = 365; // Circumference of the circle

            const interval = setInterval(function() {
                progress += 1; // Increase progress by 1% each time
                const dashOffset = totalLength - (progress / 100) * totalLength; // Calculate the dash offset

                // Update the stroke-dashoffset of the progress circle
                progressBar.style.strokeDashoffset = dashOffset;

                // Update the percentage text
                percentageText.textContent = progress + '%';

                // Stop progress at 100%
                if (progress === 100) {
                    clearInterval(interval);

                    // Call Livewire event when progress reaches 100%
                    Livewire.emit('progressCompleted');
                }
            }, 50); // Update every 50ms (can adjust for faster/slower progress)
        }
     
    </script>
    <script>
        function updateAgeImages() {
            const selectedGender = localStorage.getItem('selectedGender'); // Get selected gender from localStorage

            // Base folder URL for images
            let baseFolder = 'website-assets/images/';

            // Check if gender is male or female, then set folder accordingly
            if (selectedGender === 'male') {
                baseFolder += 'male/';
            } else if (selectedGender === 'female') {
                baseFolder += 'female/';
            } else {
                // Default fallback, if gender is not set
                baseFolder += 'male/';
            }

            // Get all elements with the class 'ageImage'
            const ageImages = document.getElementsByClassName('ageImage');

            // Loop through each image element and update the source
            for (let i = 0; i < ageImages.length; i++) {
                const ageImage = ageImages[i];
                // Set the src for each image (assuming the naming convention is 1.webp, 2.webp, etc.)
                ageImage.src = `${baseFolder}${i + 1}.webp`; // i + 1 for image names: 1.webp, 2.webp, etc.
            }
        }

        function updatgoalImages() {
            const selectedGender = localStorage.getItem('selectedGender'); // Get selected gender from localStorage

            // Base folder URL for images
            let baseFolder = 'website-assets/images/';

            // Check if gender is male or female, then set folder accordingly
            if (selectedGender === 'male') {
                baseFolder += 'goals/male/';
            } else if (selectedGender === 'female') {
                baseFolder += 'goals/female/';
            } else {
                // Default fallback, if gender is not set
                baseFolder += 'goals/male/';
            }

            // Get all elements with the class 'ageImage'
            const goalImages = document.getElementsByClassName('goalImage');

            // Loop through each image element and update the source
            for (let i = 0; i < goalImages.length; i++) {
                const goalImage = goalImages[i];
                // Set the src for each image (assuming the naming convention is 1.webp, 2.webp, etc.)
                goalImage.src = `${baseFolder}${i + 1}.webp`; // i + 1 for image names: 1.webp, 2.webp, etc.
            }
        }

        function updatprofileImgs() {
            const selectedGender = localStorage.getItem('selectedGender'); // Get selected gender from localStorage

            // Base folder URL for images
            let baseFolder = 'website-assets/images/';

            // Check if gender is male or female, then set folder accordingly
            if (selectedGender === 'male') {
                baseFolder += 'male/bg';
            } else if (selectedGender === 'female') {
                baseFolder += 'female/bg';
            } else {
                // Default fallback, if gender is not set
                baseFolder += 'male/bg';
            }

            // Get all elements with the class 'ageImage'
            const profileImgs = document.getElementsByClassName('profileImg');

            // Loop through each image element and update the source
            for (let i = 0; i < profileImgs.length; i++) {
                const profileImg = profileImgs[i];
                // Set the src for each image (assuming the naming convention is 1.webp, 2.webp, etc.)
                profileImg.src = `${baseFolder}${i + 1}.webp`; // i + 1 for image names: 1.webp, 2.webp, etc.
            }
        }
        document.addEventListener('DOMContentLoaded', function() {
            // Call these functions when the DOM is fully loaded
            updatgoalImages();
            let currentStep = {{  session('currentStep', 0)  }};
            if (currentStep == 23) {
                startProgress();

            }
            updateAgeImages();
            // sendEmail();
        });
    </script>