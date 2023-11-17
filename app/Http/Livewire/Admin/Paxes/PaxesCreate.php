<?php

namespace App\Http\Livewire\Admin\Paxes;

use App\Models\Paxe;
use Livewire\Component;

class PaxesCreate extends Component
{
    public $open = false;
    public $adults, $kids, $q, $nq;
    public $totadults, $totkids, $totq, $totnq, $paxgral;
    protected $rules = [
        'adults' => 'required',
        'kids' => 'required',
        'q' => 'required',
        'nq' => 'required',
    ];



    public function create()
    {
        $this->validate();

        $paxs = Paxe::where('date', 'LIKE', '%' . date("Y-m-d") . '%')->get();

        foreach ($paxs as  $pax) {
            $this->totadults += $pax->adults;
            $this->totkids += $pax->kids;
            $this->totq += $pax->q;
            $this->totnq += $pax->nq;
            $this->paxgral += $pax->total;
        }
        if ($paxs != null) {
            Paxe::create([
                'date' => date("Y-m-d"),
                'adults' => $this->adults - $this->totadults,
                'kids' => $this->kids - $this->totkids,
                'q' => $this->q - $this->totq,
                'nq' => $this->nq - $this->totnq,
                'total' => ($this->adults + $this->kids) - $this->paxgral
            ]);
        } else {
            Paxe::create([
                'date' => date("Y-m-d"),
                'adults' => $this->adults,
                'kids' => $this->kids,
                'q' => $this->q - $paxs,
                'nq' => $this->nq - $paxs,
                'total' => ($this->adults + $this->kids)
            ]);
        }

        $this->emit('render');
        $this->reset('open', 'adults',  'kids', 'q', 'nq', 'totadults', 'totkids', 'totq', 'totnq', 'paxgral');
        $this->emit('swal:alert', [
            'icon'    => 'success',
            'message'   => 'The Pax was successfully added!!',
            'timeout' => 10000
        ]);
    }

    public function render()
    {
        return view('livewire.admin.paxes.paxes-create');
    }
}
