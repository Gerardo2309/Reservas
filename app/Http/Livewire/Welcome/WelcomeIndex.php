<?php

namespace App\Http\Livewire\Welcome;

use Livewire\Component;

class WelcomeIndex extends Component
{
    public $titfoto = 'International Jewelry Center';
    public $descfoto = 'Nuestra tienda de suma
    elegancia y buen gusto, ofrece más de 2,000 M2 de productos exclusivos. Un encantador paseo de
    compras de 5 secciones: pieles exóticas, joyería fina, tapetes orientales auténticos, amplia
    colección de tequilas y artesanías de calidad.';
    public $foto1 = 'storage/jwint/foto1.jpg';
    public $foto2 = 'storage/jwint/foto2.jpg';
    public $foto3 = 'storage/jwint/foto3.jpg';
    public $background = 'storage/jwint/background.jpg';



    public $maps = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7445.254421968639!2d-86.776462211291!3d21.087546399999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c2847ec015c63%3A0x86e811f06508de91!2sInternational%20Jewelry%20Center%20%26%20Outlet%20Shopping%20Mall!5e0!3m2!1ses-419!2smx!4v1682277318112!5m2!1ses-419!2smx';

    public function toggleSectionsMxm()
    {
        $this->titfoto = 'México Mágico';
        $this->descfoto = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sequi quae ipsum quidem earum eligendi recusandae ipsam, tempora tempore eveniet consequuntur ducimus voluptates maxime aliquam excepturi quibusdam ipsa quaerat doloribus!';
        $this->foto1 = 'storage/mxm/foto1.jpg';
        $this->foto2 = 'storage/mxm/foto2.jpg';
        $this->foto3 = 'storage/mxm/foto3.jpg';
       
        $this->maps = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.3643517989217!2d-86.7541418250677!3d21.13789368053893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c296e4016bc0d%3A0xba4797ad94865b59!2sMexico%20Magico!5e0!3m2!1ses-419!2smx!4v1682445414934!5m2!1ses-419!2smx';
        $this->background = 'storage/mxm/background.jpg';
        $this->emit('mxmopen');
    }
    public function toggleSectionsJwint()
    {
        $this->emit('jwintopen');
        $this->reset('maps', 'background','titfoto','descfoto','foto1','foto2','foto3');
    }
    public function render()
    {
        return view('livewire.welcome.welcome-index');
    }
}
