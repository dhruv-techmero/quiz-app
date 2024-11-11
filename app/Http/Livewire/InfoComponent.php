<?php

namespace App\Http\Livewire;

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class InfoComponent extends Component
{
    public $currentStep; // Track the current step
    public $email;
    public $totalSteps = 24; // Total number of steps for the info component
    public $selectedFields = [];

    protected $listeners = [
        'goalSelected' => 'handleGoalSelected',
        'storeAllDataAndSendEmail' => 'handleDataAndSendEmail',
        'progressCompleted' => 'nextStep',
        'startProgressAndNextStep' => 'startProgressAndMoveToNextStep',
    ];

    protected $steps = [
        1 => 'What is your main goal?',
        // 2 => 'What is your current income source?',
        // 3 => 'What is your work schedule like?',
        // 4 => 'What are the challenges with your current job?' ,
        // 5=>'How would you describe your financial situation?',
        // 6 => 'What annual income level do you want to achieve?',
        // 7 => 'Do you wish you had more control over your work hours and location?',
    ];

    public function mount()
    {
        $this->currentStep = session('currentStep', 1);
    }
    public function previousStep()
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
            session(['currentStep' => $this->currentStep]); // Update session with the new current step
            if ($this->currentStep === 23) {
                // dd($this->currentStep);
                $this->emit('startProgress');
            }
            if ($this->currentStep == 2) {
                $this->emit('updateAgeImage');
            }
            $this->emit('stepChanged');
        }
    }

    public function getProgressPercentageProperty()
    {
        return ($this->currentStep / $this->totalSteps) * 100; // Calculate progress percentage
    }

    public function nextStep()
    {
        if ($this->currentStep < $this->totalSteps) {
            $this->currentStep++;
            session(['currentStep' => $this->currentStep]);

            // Check if current step is 23 and emit the event for progress
            if ($this->currentStep === 23) {
                $this->emit('startProgress');
            }
        }
    }


    public function handleDataAndSendEmail($allData)
    {
        Log::info('Received data:', $allData); // Debugging log

        foreach ($allData as $key => $value) {
            session([$key => $value]);
        }

        $this->sendEmail();
    }

    public function sendEmail()
    {
        $this->validate([
            'email' => 'required|email',
        ]);

        session(['userEmail' => $this->email]);

        // Uncomment the line below to send an email once everything works
        // Mail::to($this->email)->send(new WelcomeMail());

        Log::info("Email sent to {$this->email}"); // Confirm email sending in log

        $this->finish();
    }


    public function finish()
    {
        $this->currentStep = 1; // Reset to first step
        session(['currentStep' => $this->currentStep]); // Reset current step in session
        $this->dispatchBrowserEvent('clearLocalStorage'); // Dispatch event to clear local storage
    }

    public function storeGender($gender)
    {
        session(['selectedGender' => $gender]);
        $this->dispatchBrowserEvent('storeGender', ['gender' => $gender]);
        $this->nextStep();
    }

    public function storeAge($age)
    {
        session(['selectedAge' => $age]);
        $this->dispatchBrowserEvent('storeAge', ['age' => $age]);
        $this->nextStep();
    }
    public function startProgressAndMoveToNextStep()
    {
        // Emit event to start the progress bar animation
        $this->nextStep();
        $this->dispatchBrowserEvent('startProgress');
    }
    public function continueToNextStep()
    {
        $this->nextStep();
        $this->emit('continueToNextStep');
    }

    public function emailBtn()
    {
        $this->emit('emailBtnClicked'); // Emit the event to trigger the JavaScript
    }
    public function storeGoal($goal)
    {
        session(['selectedGoal' => $goal]);
        $this->dispatchBrowserEvent('storeGoal', ['goal' => $goal]);
        $this->nextStep();
    }

    public function storeIncomeSource($source)
    {
        session(['selectedSource' => $source]);
        $this->dispatchBrowserEvent('storeIncomeSource', ['source' => $source]);
        $this->nextStep();
    }

    public function storeSchedule($schedule)
    {
        session(['selectedSchedule' => $schedule]);
        $this->dispatchBrowserEvent('storeSchedule', ['schedule' => $schedule]);
        $this->nextStep();
    }

    public function toggleChallenge($challenge)
    {
        $this->dispatchBrowserEvent('toggleChallenge', ['challenge' => $challenge]);
    }
    public function storeSelectedChallenges()
    {
        // Retrieve selected challenges from localStorage (if needed)
        $selectedChallenges = json_decode(request()->input('selectedChallenges'));

        // Store selected challenges in session or database
        session(['selectedChallenges' => $selectedChallenges]);

        // Move to the next step
        $this->nextStep();
    }
    public function storeSituation($situation)
    {
        session(['selectedSituation' => $situation]);
        $this->dispatchBrowserEvent('storeSituation', ['situation' => $situation]);
        $this->nextStep();
    }

    public function storeIncomeGoal($incomeGoal)
    {
        session(['selectedincomeGoal' => $incomeGoal]);
        $this->dispatchBrowserEvent('storeIncomeGoal', ['incomeGoal' => $incomeGoal]);
        $this->nextStep();
    }

    public function storeControl($control)
    {
        session(['selectedControl' => $control]);
        $this->dispatchBrowserEvent('storeControl', ['control' => $control]);
        $this->nextStep();
    }

    public function toggleField($field)
    {
        $this->dispatchBrowserEvent('toggleField', ['field' => $field]);
    }

    public function storeSelectedFields()
    {
        // Optionally, you can retrieve selected fields from localStorage in the next step, if needed
        $selectedFields = json_decode(request()->input('selectedFields'));

        // Store selected fields in session or database
        session(['selectedFields' => $selectedFields]);

        // Move to the next step
        $this->nextStep();
    }
    public function storeWish($wish)
    {
        session(['selectedWish' => $wish]);
        $this->dispatchBrowserEvent('storeWish', ['wish' => $wish]);
        $this->nextStep();
    }
    public function storeAboutFreelance($AboutFreelance)
    {
        session(['selectedAboutFreelance' => $AboutFreelance]);
        $this->dispatchBrowserEvent('storeAboutFreelance', ['storeAboutFreelance' => $AboutFreelance]);
        $this->nextStep();
    }
    public function storeFutureGoal($futureGoal)
    {
        session(['selectedFutureGoal' => $futureGoal]);
        $this->dispatchBrowserEvent('storeFutureGoal', ['storeFutureGoal' => $futureGoal]);
        $this->nextStep();
    }

    public function storeWriting($Writing)
    {
        session(['selectedWriting' => $Writing]);
        $this->dispatchBrowserEvent('storeWriting', ['storeWriting' => $Writing]);
        $this->nextStep();
    }

    public function storeMarketing($Marketing)
    {
        session(['selectedMarketing' => $Marketing]);
        $this->dispatchBrowserEvent('storeMarketing', ['storeMarketing' => $Marketing]);
        $this->nextStep();
    }
    public function storeBusiness($Business)
    {
        session(['selectedBusiness' => $Business]);
        $this->dispatchBrowserEvent('storeBusiness', ['storeBusiness' => $Business]);
        $this->nextStep();
    }
    public function storeReadiness($Readiness)
    {
        session(['selectedReadiness' => $Readiness]);
        $this->dispatchBrowserEvent('storeReadiness', ['storeReadiness' => $Readiness]);
        $this->nextStep();
    }
    public function storeFocus($Focus)
    {
        session(['selectedFocus' => $Focus]);
        $this->dispatchBrowserEvent('storeFocus', ['storeFocus' => $Focus]);
        $this->nextStep();
    }
    public function storeDayTime($DayTime)
    {
        session(['selectedDayTime' => $DayTime]);
        $this->dispatchBrowserEvent('storeDayTime', ['storeDayTime' => $DayTime]);
        $this->nextStep();
    }
    public function render()
    {

        return view('livewire.info-component', [
            'currentQuestion' => $this->steps[$this->currentStep] ?? '',
        ]);
    }
}
