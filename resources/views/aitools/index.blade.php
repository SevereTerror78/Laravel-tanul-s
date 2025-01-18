@extends('layout')
@section('content')
    <h1>Ai eszközök
        <a href="{{route('aitools.create')}}" title="Új Ai eszköz">🤡</a>
        <a href="{{route('aitools.index' ,['sort_by'=>'name', 'sort_dir'=>'asc'])}}" title="ABC">🔽</a>
        <a href="{{route('aitools.index' ,['sort_by'=>'name', 'sort_dir'=>'desc'])}}" title="zyx">🔼</a>


    </h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{session("success")}}
        </div>
    @endif

<ul>
    @foreach($aitools as $aitool)
        <li>
            {{$aitool->id}} - {{$aitool->name}}

            <ul>
                @foreach($aitool->tags as $tag)
                    <li>{{$tag->name}}</li>
                @endforeach
            </ul>


            <a href="{{route('aitools.show', $aitool->id)}}" class="button">Megjelenítés</a>
            <a href="{{route('aitools.edit', $aitool->id)}}" class="button">Szerkesztés</a>
            <form action="{{route('aitools.destroy', $aitool->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="danger" onclick="return confirm('Biztos hogy törölni akarsz?')">Törlés</button>
            </form>

        </li>
    @endforeach
</ul>
    <div id="paginator">
        {{$aitools->appends(['sort_by'=>request('sort_by'), 'sort_dir'=>request('sort_dir')])->links()}}
    </div>

@endsection
