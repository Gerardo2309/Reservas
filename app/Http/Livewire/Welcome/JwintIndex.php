<?php

namespace App\Http\Livewire\Welcome;

use Livewire\Component;

class JwintIndex extends Component
{
    public $background = 'storage/jwint/background2.jpg';
    public $coment = 'storage/jwint/coment.jpg';
    public $desc1 = 'storage/jwint/desc1.jpg';
    public $desc2 = 'storage/jwint/desc2.jpg';
    public $desc3 = 'storage/jwint/desc3.jpg';

    public $c1foto1 = 'storage/jwint/c1foto1.jpg';
    public $c1foto2 = 'storage/jwint/c1foto2.jpg';
    public $c1foto3 = 'storage/jwint/c1foto3.jpg';
    public $c1foto4 = 'storage/jwint/c1foto4.jpg';
    public $c1foto5 = 'storage/jwint/c1foto5.jpg';


    public $showSection1 = true;
    protected $listeners = ['jwintopen' => 'jwintopen','jwintclose' => 'jwintclose'];
    public function jwintopen(){
        $this->showSection1 = true;
        $this->emit('mxmclose');

    }
    public function jwintclose(){
        $this->showSection1 = false;
    }

    public function render()
    {
        return view('livewire.welcome.jwint-index');
    }
}
