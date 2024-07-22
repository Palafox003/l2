<?php

namespace App\Livewire\Raidboss;
use Illuminate\Support\Facades\DB;

use Livewire\Component;
use App\Models\Droplist;

class ListaRaidboss extends Component
{
    public $buscar,$niveles,$nivelx=0,$dropList,$openModal=false;
    
    public function mount(){
    }
    
    public function dropBoss($boss_id){
        $this->dropList=Droplist::where('mobId',$boss_id)->get();
        $this->openModal=true;
    }
    
    public function listarRaidBoss(){
        $raidboss=DB::table('raidboss_spawnlist')
            ->join('npc','raidboss_spawnlist.boss_id','=','npc.id')
            ->select('*')
            ->orderBy('level');
            
            $this->niveles=$raidboss->get()->unique('level')->pluck('level');

            
            if($this->buscar){
                $raidboss=$raidboss->where('name', 'LIKE', '%'.$this->buscar.'%');
            }
            
            if($this->nivelx>0){
                $raidboss=$raidboss->where('level',$this->nivelx);
            }
        
        return $raidboss->get();
    }
    public function render()
    {
        $raidboss=$this->listarRaidBoss(); 
        
        return view('livewire.raidboss.lista-raidboss',['raidboss'=>$raidboss]);
    }
}
