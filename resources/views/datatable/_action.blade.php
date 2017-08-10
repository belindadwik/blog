{!! Form::model($model, ['url'=>$form_url, 'method'=>'delete', 'class'=>'form-inline']) !!}
	<a href="{!! $edit_url !!}" class="btn btn-xs btn-warning">Edit</a>
	<a href="{!! $show_url !!}" class="btn btn-xs btn-success">Tampil</a>
	{!! Form::button('Hapus', ['type'=>'submit','class'=>'btn btn-xs btn-danger']) !!}
{!! Form::close() !!}