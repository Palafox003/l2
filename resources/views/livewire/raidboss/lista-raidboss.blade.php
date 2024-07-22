<div>
    <div class="container">
        <div class="row mt-5 pt-5">
            <div class="col mt-5">
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <input wire:model.live="buscar" type="text" class="form-control" placeholder="Buscar">
                        </div>
                    </div>
                    <div class="col-3">
                    <select wire:model.live="nivelx" class="form-select">
                        <option value="0" selected>Nivel</option>
                        @foreach($niveles as $nivel)
                            <option value="{{$nivel}}">{{$nivel}}</option>
                        @endforeach
                      </select>
                    </div>
                </div>
                <table class="table table-striped ">
                    <thead class="table-dark">
                      <tr>
                        <th scope="col"scope="col">#</th>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Nivel</th>
                        <th scope="col">Vivo</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($raidboss as $boss)
                        @php
                            if($boss->respawn_time==0){
                                $vivo="Si";
                                $boton="btn-primary";
                            }else{
                                $vivo="No";
                                $boton="btn-secondary";
                            }
                        @endphp
                      <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td>{{$boss->boss_id}}</td>
                        <td>{{$boss->name}} ({{$boss->title}})</td>
                        <td>{{$boss->level}}</td>
                        <td>{{$vivo}}</td>
                        <td>
                            <!-- Example single danger button -->
                            <div class="btn-group">
                                <button type="button" class="btn {{$boton}} dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                  Opciones
                                </button>
                                <ul class="dropdown-menu">
                                  <li>
                                    <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#info">
                                        Info
                                    </button>
                                </li>
                                  <li>
                                    <button wire:click="dropBoss({{$boss->boss_id}})" class="dropdown-item">
                                        Drop
                                    </button>
                                  </li>
                                  <li><a class="dropdown-item" href="#">Ubicación</a></li>
                                </ul>
                            </div>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    
    <!-- Modal DROP -->
@if($openModal)
    <div class="modal d-inline" id="drop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">DROP LIST</h1>
              <button wire:click="$toggle('openModal')" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Id</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Item</th>
                        <th scope="col">Min</th>
                        <th scope="col">Max</th>
                        <th scope="col">Categoría</th>
                        <th scope="col">Chence</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if($dropList)
                            @foreach($dropList as $drop)
                                @php
                                    $item=App\Models\Etcitem::find($drop->itemId);
                                    $icon=App\Models\Icon::find($drop->itemId);
                                @endphp
                                @if($item)
                                  <tr>
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <th scope="row">{{@$drop->itemId}}</th>
                                    <td>
                                      <img src="{{asset('/img/icon/'.@$icon->iconName.".png")}}" alt="">                                       
                                    </td>
                                    <td>{{@$item->name}}</td>
                                    <td>{{@$drop->min}}</td>
                                    <td>{{@$drop->max}}</td>
                                    <td>Item</td>
                                    <td>{{@$drop->chance/10000}}%</td>
                                  </tr>
                                @endif
                                @php
                                    $item=App\Models\Armor::find($drop->itemId);
                                @endphp
                                @if($item)
                                  <tr>
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <th scope="row">{{@$drop->itemId}}</th>
                                    <td>
                                      <img src="{{asset('/img/icon/'.@$icon->iconName.".png")}}" alt="">
                                    </td>
                                    <td>{{@$item->name}}</td>
                                    <td>{{@$drop->min}}</td>
                                    <td>{{@$drop->max}}</td>
                                    <td>Armor</td>
                                    <td>{{@$drop->chance/10000}}%</td>
                                  </tr>
                                @endif
                                @php
                                $item=App\Models\Weapon::find($drop->itemId);
                            @endphp
                            @if($item)
                              <tr>
                                <th scope="row">{{$loop->index+1}}</th>
                                <th scope="row">{{@$drop->itemId}}</th>
                                <td>
                                  <img src="{{asset('/img/icon/'.@$icon->iconName.".png")}}" alt="">
                                </td>
                                <td>{{@$item->name}}</td>
                                <td>{{@$drop->min}}</td>
                                <td>{{@$drop->max}}</td>
                                <td>Weapon</td>
                                <td>{{@$drop->chance/10000}}%</td>
                              </tr>
                            @endif
                            @endforeach
                        @endif
                    </tbody>
                  </table>
            </div>
            <div class="modal-footer">
              <button wire:click="$toggle('openModal')" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
  </div>
@endif  
</div>
