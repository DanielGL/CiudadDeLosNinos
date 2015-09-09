@layout('layouts/main')

@section('main-content')
<div class="well">
    <legend>Datos del estudio</legend>
    @foreach($estudio->attributes as $key => $attribute)
        @if(!in_array($key, $estudio::$no_show))
            <p><b>{{ $key }}: </b>{{ $estudio->{$key} }}</p>
        @endif
    @endforeach
</div>

<? $obj = $estudio; ?>
@include('partials.admin.info')
@endsection