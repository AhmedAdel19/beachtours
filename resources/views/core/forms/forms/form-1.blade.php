{!! Form::open(array('url'=>'home/proccess/1', 'id'=>'formconfiguration','class'=>'form-vertical' ,'files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
@if(Session::has('message'))	  
		{!! Session::get('message') !!}
@endif	
	
<ul class="parsley-error-list">
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
</ul>

<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> Name&Surname  </label>
				{!! Form::text('namesurname','',array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )) !!}
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> E-mail  </label>
				{!! Form::text('email','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		
		<div class="form-group col-md-12" >					
				<button type="submit" name="submit" class="btn btn-primary"> Submit </button>
		</div>

{!! Form::close() !!}

<div style="clear: both;"></div>
<script type="text/javascript">
	
</script>