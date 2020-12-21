<h3>Категории новостей</h3><br>

@foreach ($categories as $id =>$name)
    <div><a href='{{route('news::list', ['categoryId' => $id])}}'>{{$name}}</a></div>
@endforeach
