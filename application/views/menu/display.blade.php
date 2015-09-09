@layout('layouts/main')

@section('extra-js')
<script type="text/javascript">
</script>

@endsection
@section('main-content')

{{ Form::horizontal_open() }}
    <div class="row well">
        <fieldset>
            <center><legend> <img src="/imagenes/logo.jpg"><img src="/imagenes/bienvenido.jpg" alt="¡Bienvenido!"></legend></center>
                    <center> 
            <div class="span11">
                    <center>
                        {{ Buttons::link('Presolicitudes', URL::to('../../../SSC/principal.html')) }}
                        {{ Buttons::link('Nuevo Estudio', URL::to_action('estudio@step_1')) }}
                        {{ Buttons::link('Administrar', URL::to_action('admin@list')) }}
                    </center>

            </div>
        </fieldset>

    </div>
</form>
@endsection