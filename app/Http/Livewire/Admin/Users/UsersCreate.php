<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\Agency;
use App\Models\Hotel;
use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class UsersCreate extends Component
{
    public $open = false;
    public $agencies,$roles,$hotels=[];
    public $name,$rol_id,$agency_id=null,$hotel_id=null,$email,$phone,$password,$conpassword;
    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'password' => 'required|min:8',
        'rol_id' => 'required',
    ];

    public function mount()
    {
      $this->roles =  Role::pluck("name", "id");
      $this->agencies = Agency::pluck("name", "id");
    }

    public function create()
    {
       $this->validate();


        $user = User::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'password' =>bcrypt($this->password),
        ])->assignRole($this->rol_id);

        if($user->id != null && $this->hotel_id != null){
            $user->hotels()->sync($this->hotel_id);
            $user->agencies()->sync($this->agency_id);
        }

        $this->emit('render');
        $this->reset('open', 'name', 'rol_id', 'agency_id', 'hotel_id','email','phone','password','conpassword');
        $this->emit('swal:alert', [
            'icon'    => 'success',
            'message'   => 'The User was successfully added!!',
            'timeout' => 10000
        ]);
    }

    public function render()
    {
        if(!empty($this->agency_id)) {
            $this->hotels = Agency::find($this->agency_id)->hotels()->orderBy('name')->get();
        }
        return view('livewire.admin.users.users-create');
    }
}
