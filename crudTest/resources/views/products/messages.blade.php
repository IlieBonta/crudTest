
{{--выводим все ошибки--}}
@if($errors->any())
    <div class="alert alert-danger ">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
{{--выводим все сообшения успеха--}}
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
