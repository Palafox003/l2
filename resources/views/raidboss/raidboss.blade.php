@extends("layouts.main2")

@section("titulo","INICIO")

@section("contenido")
<div class="container">
    <div class="row mt-5 pt-5">
        <div class="col">
            <table class="table table-striped mt-5">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Nivel</th>
                    <th scope="col">Vivo</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($raidboss as $boss)
                  <tr>
                    <th scope="row">{{$loop->index+1}}</th>
                    <td>{{$boss->npc->name}} ({{$boss->npc->title}})</td>
                    <td>{{$boss->npc->level}}</td>
                    <td>
                        @if($boss->respawn_time==0)
                            Si
                        @else
                            No
                        @endif
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection