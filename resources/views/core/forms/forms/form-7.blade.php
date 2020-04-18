{!! Form::open(array('url'=>'home/proccess/7', 'id'=>'formconfiguration','class'=>'form-vertical' ,'files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
@if(Session::has('message'))	  
		{!! Session::get('message') !!}
@endif	
	
<ul class="parsley-error-list">
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
</ul>

<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> BookflightID  </label>
				{!! Form::text('bookflightID','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> BookingID  </label>
				{!! Form::text('bookingID','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> TravellersID  </label>
				{!! Form::text('travellersID','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> AirlineID  </label>
				{!! Form::text('airlineID','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> Class  </label>
				{!! Form::text('class','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> Return  </label>
				{!! Form::text('return','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> DepairportID  </label>
				{!! Form::text('depairportID','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> ArrairportID  </label>
				{!! Form::text('arrairportID','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> Departing  </label>
				
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('departing','',array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div>
				
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> ArrFlightNO  </label>
				{!! Form::text('arrFlightNO','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> Returning  </label>
				
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('returning','',array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div>
				
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> DepFlightNO  </label>
				{!! Form::text('depFlightNO','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
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
					<label for="ipt" class="  "> Status  </label>
				{!! Form::text('status','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> PNR  </label>
				{!! Form::text('PNR','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		<div class="form-group  col-md-6" >
					<label for="ipt" class="  "> Eticketno  </label>
				{!! Form::text('eticketno','',array('class'=>'form-control', 'placeholder'=>'',   )) !!}
		</div>

		
		<div class="form-group col-md-12" >					
				<button type="submit" name="submit" class="btn btn-primary"> Submit </button>
		</div>

{!! Form::close() !!}

<div style="clear: both;"></div>
<script type="text/javascript">
	
</script>