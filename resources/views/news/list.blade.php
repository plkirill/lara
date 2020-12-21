<h3>Список новостей</h3><br>

@foreach ($news as $id => $item)
    <div><a href='{{route('news::card', ['id' => $id])}}'>{{$item['title']}}</a></div>
@endforeach
