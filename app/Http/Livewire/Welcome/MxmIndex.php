<?php

namespace App\Http\Livewire\Welcome;

use Livewire\Component;

class MxmIndex extends Component
{


    public $c1foto1 = 'storage/mxm/c1foto1.jpg';
    public $c1foto2 = 'storage/mxm/c1foto2.jpg';
    public $c1foto3 = 'storage/mxm/c1foto3.jpg';
    public $c2foto1 = 'storage/mxm/c2foto1.jpg';
    public $c2foto2 = 'storage/mxm/c2foto2.jpg';
    public $logomxm = 'storage/mxm/logomxm.png';
    public $c4foto1 = 'storage/mxm/c4foto1.jpg';
    public $c5foto1 = 'storage/mxm/c5foto1.jpg';

    public $c2background = 'storage/mxm/c2background.jpg';
    public $c3background = 'storage/mxm/c3background.jpg';

    public $showSection2 = false;
    protected $listeners = ['mxmopen' => 'mxmopen','mxmclose' => 'mxmclose'];

    public function mxmopen(){
        $this->showSection2 = true;
        $this->emit('jwintclose');

    }
    public function mxmclose(){
        $this->showSection2 = false;
    }
    public function render()
    {
        return view('livewire.welcome.mxm-index');
    }
}
