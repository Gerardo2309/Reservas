<?php

namespace App\Http\Livewire\Admin\Paxes;

use App\Models\Paxe;
use Livewire\Component;

class PaxesIndex extends Component
{
    public $paxs, $paxs2;
    public $g1paxq = [], $g1paxnq = [], $dates = [], $porq, $pornq;
    public $totadults, $totkids, $totq, $totnq, $paxgral;
    protected $listeners = ['render'];



    public function render()
    {
        $this->reset('paxs', 'paxs2',  'g1paxq', 'g1paxnq', 'dates', 'porq', 'pornq', 'totadults', 'totkids', 'totq', 'totnq', 'paxgral');

        $di = date("Y-m-d", strtotime(date("d-m-Y") . "- 1 week"));
        $df = date("Y-m-d", strtotime(date("d-m-Y") . "+ 1 days"));
        $this->paxs2 = Paxe::whereBetween('date', [$di, $df])->get();

        $arreglo = json_decode($this->paxs2);
        for ($i = 0; count($arreglo) > $i; $i++) {
            $this->dates[] = $arreglo[$i]->date;
        }
        $this->dates = array_values(array_unique($this->dates));

        foreach ($this->dates as $key => $date) {
            $sumq = 0;
            $sumnq = 0;
            foreach ($this->paxs2  as  $pax2) {
                if ($date == $pax2->date) {
                    $sumq +=  $pax2->q;
                    $sumnq +=  $pax2->nq;
                }
            }
            $this->g1paxq[$key] = $sumq;
            $this->g1paxnq[$key] = $sumnq;
        }

        $this->paxs = Paxe::where('date', 'LIKE', '%' . date("Y-m-d") . '%')->get();
        foreach ($this->paxs as $pax) {
            $this->totadults += $pax->adults;
            $this->totkids += $pax->kids;
            $this->totq += $pax->q;
            $this->totnq += $pax->nq;
            $this->paxgral += $pax->total;
        }
        if (count($this->paxs) != 0) {
            $this->porq = round(($this->totq * 100) / $this->totadults);
            $this->pornq = round(($this->totnq * 100) / $this->totadults);
        } else {
            $this->porq = 0;
            $this->pornq = 0;
        }
        return view('livewire.admin.paxes.paxes-index');
    }
}
