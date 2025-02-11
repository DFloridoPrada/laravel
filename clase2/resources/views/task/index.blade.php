@foreach ($tasks as $task)
<ul>
        <li>{{$task -> nombre}}</li>
</ul>
@endforeach
// Paginación
{{$tasks -> links()}}
