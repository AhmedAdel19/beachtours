{!! Form::open(array('url'=>'home/proccess/8', 'id'=>'formconfiguration','class'=>'form-vertical' ,'files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
@if(Session::has('message'))	  
		{!! Session::get('message') !!}
@endif	
	
<ul class="parsley-error-list">
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
</ul>

<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> BookingsID  </label>
				{!! Form::text('bookingsID','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> Bookingno  </label>
				{!! Form::text('bookingno','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> TravellerID  </label>
				{!! Form::text('travellerID','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> Tour  </label>
				{!! Form::text('tour','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> Hotel  </label>
				{!! Form::text('hotel','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> Flight  </label>
				{!! Form::text('flight','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> Car  </label>
				{!! Form::text('car','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> Extraservices  </label>
				{!! Form::text('extraservices','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
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
					<label for="ipt" class="  "> Entry By  </label>
				{!! Form::text('entry_by','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		
		<div class="form-group col-md-12" >					
				<button type="submit" name="submit" class="btn btn-primary"> Submit </button>
		</div>

{!! Form::close() !!}

<div style="clear: both;"></div>
<script type="text/javascript">
	
</script>