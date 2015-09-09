@foreach($obj->relationships as $key => $obj)
<div class="well">
    <legend>{{ $key }}</legend>
    @if(is_object($obj))
        @foreach($obj->attributes as $key => $attribute)
		    @if(!in_array($key, $obj::$no_show))
		        <p><b>{{ Str::title(str_replace('_', ' ', $key)) }}: </b>{{ $obj->{$key} }}</p>
		    @endif
		@endforeach
    	@include('partials.admin.info')
    @elseif(is_array($obj))
    	@foreach($obj as $key => $obj)
	        @foreach($obj->attributes as $key => $attribute)
			    @if(!in_array($key, $obj::$no_show))
		        <p><b>{{ Str::title(str_replace('_', ' ', $key)) }}:</b>{{ $obj->{$key} }}</p>
			    @endif
			@endforeach
		@endforeach
    @endif
</div>
@endforeach