<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MultiStepForm extends Component
{
    use WithFileUploads;

    public $option;
    public $category;
    public $helps = [];
    public $liste_langue;
    public $level;
    public $college;
    public $name; //Ces infos là sont déjà dans le fichier register, essaie de mettre tout le reste que t'as fait dans le fichier register
    public $pseudo; //Ces infos là sont déjà dans le fichier register, essaie de mettre tout le reste que t'as fait dans le fichier register
    public $email; //Ces infos là sont déjà dans le fichier register, essaie de mettre tout le reste que t'as fait dans le fichier register
    public $password; //Ces infos là sont déjà dans le fichier register, essaie de mettre tout le reste que t'as fait dans le fichier register
    public $password_confirmation; //Ces infos là sont déjà dans le fichier register, essaie de mettre tout le reste que t'as fait dans le fichier register

    public $totalSteps = 6;
    public $currentStep = 1;

    public function mount(){
        $this->currentStep = 1;
    }

    public function render()
    {
        return view('livewire.multi-step-form');
    }

    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
        if($this->currentStep > $this->totalSteps){
            $this->currentStep = $this->totalSteps;
        }
    }

    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function validateData(){
        if($this->currentStep == 1){
            $this->validate([
                'option'=>'required',
            ]);
        }
        elseif($this->currentStep == 2){
                $this->validate([
                    'category'=>'required',   
                ]);
        }
        elseif($this->currentStep == 3){
             $this->validate([
                'helps'=>'required|array',
            ]);
        }
        elseif($this->currentStep == 4){
             $this->validate([
                'liste_langue'=>'required',
                'level'=>'required'
            ]);
        }
        elseif($this->currentStep == 5){
             $this->validate([
                'college'=>'required'
            ]);
        }
        elseif($this->currentStep == 6){
             $this->validate([
                'name'=>'required',
                'pseudo'=>'required',
                'email'=>'required|email|unique:users',
                'password'=>'required|min:8',
                'password_confirmation'=>'required',
                'rgpd'=>'required'
            ]);
        }
    }

    public function register(){
        $this->resetErrorBag();
                $values = array(
                "name"=>$this->name,
                "pseudo"=>$this->pseudo,
                "email"=>$this->email,
                "password"=>Hash::make($this->password),
                "college_id"=>$this->college,
            );

            User::create($values);
            //$this->reset();
            //$this->currentStep = 1;
            $data = ['name'=>$this->name, 'email'=>$this->email];
            return redirect()->route('registration.success', $data);

    }
}
