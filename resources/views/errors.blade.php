@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if(session('alert'))
<div class="alert alert-success">
    {{session('alert')}}
</div>
@endif

@if(session('alert_error'))
<div class="alert alert-danger">
    {{session('alert_error')}}
</div>
@endif