 @if (Auth::user()->is_favoriting($micropost->id))
        {!! Form::open(['route' => ['Fav.unfavorite', $micropost->id], ]) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn-xs"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['Fav.favorite', $micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-xs"]) !!}
        {!! Form::close() !!}
  @endif

