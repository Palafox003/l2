<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Character;

class Welcome extends Component
{
    public $click=0;
    public $count = 1;
    public $title = 'L2';
 
    public function increment()
    {
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }
 
    
    public function login_estatus(){
        $url="localhost";
        @$login=fsockopen($url,2106,$errno,$errstr,1);
        $loginx=false;
        if($login){
            $loginx=true;
        }else{
            $loginx=false;
        }
        return $loginx;  
    }
    
    public function server_estatus(){
        $url="localhost";
        @$server=fsockopen($url,7777,$errno,$errstr,1);     
        $serverx=false;
        if($server){
            $serverx=true;
        }else{
            $serverx=false;
        }
        return $serverx;
    }
    
    public function render()
    {
        $loginx=$this->login_estatus();
        $serverx=$this->server_estatus();
        $players=Character::where('online',1)->count();
        return view('livewire.welcome',['players'=>$players,'loginx'=>$loginx,'serverx'=>$serverx]);
    }
}
