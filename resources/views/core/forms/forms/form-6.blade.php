{!! Form::open(array('url'=>'home/proccess/6', 'id'=>'formconfiguration','class'=>'form-vertical' ,'files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
@if(Session::has('message'))	  
		{!! Session::get('message') !!}
@endif	
	
<ul class="parsley-error-list">
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
</ul>

<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> BookcarID  </label>
				{!! Form::text('bookcarID','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> BookingID  </label>
				{!! Form::text('bookingID','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> CarbrandID  </label>
				{!! Form::text('carbrandID','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> CarsID  </label>
				{!! Form::text('carsID','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> Start  </label>
				{!! Form::text('start','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> End  </label>
				{!! Form::text('end','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> Rate  </label>
				{!! Form::text('rate','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> Status  </label>
				{!! Form::text('status','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> Created At  </label>
				
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('created_at','',array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div>
				
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> Updated At  </label>
				
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('updated_at','',array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div>
				
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> Pickup  </label>
				{!! Form::text('pickup','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> Dropoff  </label>
				{!! Form::text('dropoff','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		
		<div class="form-group col-md-12" >					
				<button type="submit" name="submit" class="btn btn-primary"> Submit </button>
		</div>

{!! Form::close() !!}

<div style="clear: both;"></div>
<script type="text/javascript">
	
</script>