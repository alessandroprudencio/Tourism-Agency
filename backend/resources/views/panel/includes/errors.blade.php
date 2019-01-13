@if (isset($errors) && $errors->any())
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
@endif