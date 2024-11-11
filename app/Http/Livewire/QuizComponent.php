<?php 
namespace App\Http\Livewire;

use Livewire\Component;

class QuizComponent extends Component
{
    public $showAgeSection = false;
    public $showContinue = false;
    public $showHome = true;
    public $showInfoComponent = false; // New property to manage info component visibility

    public function selectGender($gender)
    {
        $this->emit('storeGenderInLocalStorage', $gender);
        $this->showAgeSection = true;
        $this->showHome = false;
    }

    public function storeAge($age)
    {
        $this->emit('storeAgeInLocalStorage', $age);
        $this->showAgeSection = false;
        $this->showContinue = true;
    }

    public function continueToNextStep()
    {
        $this->showInfoComponent = true; // Show the info component
        $this->showContinue = false; // Optionally hide the continue button section
    }

    public function render()
    {
        return view('livewire.quiz-component');
    }
}
