<?php

namespace App\Http\Livewire\Admin\Users;

use Spatie\Permission\Models\Role;
use App\Models\Agency;
use App\Models\Hotel;
use App\Models\User;
use Livewire\Component;

class UsersEdit extends Component
{

    public $open = false;
    public $user;
    public $agencies,$roles,$hotels;
    public $name,$rol_id,$agency_id=null,$hotel_id=null,$email,$phone,$password,$conpassword;
    protected $listeners = ['UsersEdit:delete' => 'delete'];
    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'password' => 'required|min:8',
        'rol_id' => 'required',
    ];

    public function mount(User $user)
    {

        $this->user = $user;
        if (count($user->hotels)>0 && count($user->agencies)>0 && count($user->roles)>0) {
            $this->rol_id = $user->roles[0]->id;
            $this->agency_id =$user->agencies[0]->id;
            $this->hotel_id = $user->hotels[0]->id;
        }
        $this->name = $user->name;
        $this->email = $user->email;
        $this->phone = $user->phone;

        $this->roles =  Role::pluck("name", "id");
        $this->agencies = Agency::pluck("name", "id");
        $this->hotels = Hotel::pluck("name", "id");

    }

    public function edit()
    {
        // validate
        $this->validate();


        $this->user->update([
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'password' =>bcrypt($this->password),

        ]);
        $this->user->assignRole($this->rol_id);

        if($this->user->id != null && $this->hotel_id != null && $this->rol_id == 3){
            $this->user->hotels()->sync($this->hotel_id);
            $this->user->agencies()->sync($this->agency_id);
        }


        $this->emit('render');
        $this->reset('open', 'name', 'rol_id', 'agency_id', 'hotel_id','email','phone','password','conpassword');
        $this->emit('swal:alert', [
            'icon'    => 'success',
            'message'   => 'The User was edited correctly!!',
            'timeout' => 10000
        ]);
    }

    public function showConfirmation($id)
    {
        $this->emit("swal:confirm", [
            'icon'        => 'warning',
            'title'       => 'Are you sure?',
            'text'        => "You won't be able to revert this!",
            'confirmText' => 'Yes, delete!',
            'method'      => 'UsersEdit:delete',
            'params'      => $id, // optional, send params to success confirmation
            'callback'    => '', // optional, fire event if no confirmed
        ]);
    }

    public function delete(User $user)
    {
        $user->delete();
        $this->emit('render');
        $this->emit('swal:alert', [
            'icon'    => 'success',
            'message'   => 'The hotel was successfully removed!!',
            'timeout' => 10000
        ]);
    }

    public function render()
    {
        return view('livewire.admin.users.users-edit');
    }
}
