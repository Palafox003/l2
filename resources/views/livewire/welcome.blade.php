<div>
    <div wire:poll.60s>
        @php
            $fondo="";
            $estatus_login="";
            $estatus_server="";
            if($loginx and $serverx){
                $fondo="text-bg-success";
                $estatus_login="ONLINE";
                $estatus_server="ONLINE";
                @$conectados=$players;
               
            }else{
                $fondo="text-bg-danger";
                $conectados=0;     
            }
            
            if(!$loginx){
                $estatus_login="OFFLINE";
                
            }else{
                $estatus_login="ONLINE";
            }
            
            if(!$serverx){
                $estatus_server="OFFLINE";
                $conectados=0; 
            }else{
                $estatus_server="ONLINE";
            }
        
        @endphp
        <div class="col s12">
          <div style="border-radius: 0" class="card {{$fondo}}">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <span class="card-title">LOGIN: {{$estatus_login}}</span>
                    </div>
                    <div class="col">
                        <span class="card-title">SERVER: {{$estatus_server}}</span>
                    </div>
                    <div  class="col">
                        <span class="card-title">JUGADORES : {{$conectados}}</span>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>
