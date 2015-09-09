@layout('layouts/main')
@section('extra-css')
<style type="text/css">
    #estudio_id {
        display: none;
    }
    tr > td:last-child {
        display: none;
    }
</style>
@endsection

@section('main-content')
<table id="table_id" class="table table-striped table-bordered table-condensed table-hover">
    <thead>
        <tr>
            <th>Clave</th>
            <th>Fecha de solicitud</th>
            <th>Fecha de ingreso de familia</th>
            <th id="estudio_id">id</th>
        </tr>
    </thead>
    <tbody id="table_body">
    </tbody>
</table>
@endsection

@section('extra-js')
<script type="text/javascript">
$("#table_body").on('click', 'tr', function() {
    var id = $(this).children('td:last-child').html();
    var show = "{{ URL::to_action('admin@show', array(0)) }}".replace('0', id);
    window.location.href=show;
});
$(document).ready(function() {
	var oTable = $('#table_id').dataTable( {
		"bProcessing": true,
		"bServerSide": true,
		"sAjaxSource": "{{ URL::to_action('admin@list') }}",

	} );
} );
</script>
@endsection