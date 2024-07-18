<div wire:poll.60s>
    <x-card card="Jugadores online" titulo="">
        <slot>
            <table class="table table-striped">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Nivel</th>
                    </tr>
                </thead>
                <tbody>
                    @if(@$players)
                        @foreach($players as $player)
                            <tr>
                              <th scope="row">{{$loop->index+1}}</th>
                              <td>{{$player->char_name}}</td>
                              <td>{{$player->level}}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </slot>
    </x-card>
</div>
