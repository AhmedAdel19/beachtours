@extends('layouts.app')
@section('content')
	<section class="content-header">
      <h1>{{ Lang::get('core.sitesettings') }}</h1>
    </section>
	<div class="content">
		@if(Session::has('message'))
           {{ Session::get('message') }}
		@endif
		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
		@include('mmb.config.tab')
		<div class="col-md-9">
			<div class="box box-primary">
				<div class="box-body">
					{!! Form::open(array('url'=>'core/config/login/', 'class'=>'form-horizontal')) !!}
					<div class="form-group">
						<label for="ipt" class=" control-label col-md-4">Development Mode ?</label>
						<div class="col-md-6">
							<div class="checkbox">
								<input name="cnf_mode" type="checkbox" id="cnf_mode" value="1"
									   @if(old('cnf_mode') =='1' )
									   		checked
									   @else
									   		@if(old('_token') == null && defined('CNF_MODE') &&  CNF_MODE =='production') checked @endif
										@endif
								/>
								Production
							</div>
							<small> If you need to debug mode , please uncheck this option </small>
						</div>
					</div>
					<div class="form-group">
						<label for="ipt" class=" control-label col-md-4"> {{ Lang::get('core.maintenancemode') }}</label>
						<div class="col-md-6">
							<label class="checkbox">
								<input type="checkbox" name="CNF_MAINTENANCE" value="ON"
									   @if(old('CNF_MAINTENANCE') =='ON' )checked @else
									   @if( old('_token')== null && CNF_MAINTENANCE =='ON') checked @endif
									   @endif
									   class="minimal-red"
								/>
							</label>
						</div>
					</div>
					<div class="form-group ">
						<label for="ipt" class=" control-label col-md-4"> {{ Lang::get('core.fr_allowfrontend') }} </label>
						<div class="col-md-6">
								<label class="checkbox">
								<input type="checkbox" name="CNF_FRONT" value="false"
									   @if(old('CNF_FRONT') =='false' )
									   		checked
									   @else
									   		@if(old('_token') == null && CNF_FRONT =='true') checked @endif
									   @endif
									   class="minimal-red"  />
								</label>
						</div>
					</div>
					<div class="form-group ">
						<label for="ipt" class=" control-label col-md-4">{{ Lang::get('core.fr_fronttemplate') }}</label>
						<div class="col-md-3">
							<select class="select2" name="cnf_theme">
								@foreach(SiteHelpers::themeOption() as $t)
									<option value="{{  $t['folder'] }}"
											@if(old('cnf_theme') ==$t['folder'])
												selected
											@else
												@if(old('_token')== null && CNF_THEME ==$t['folder']) selected @endif
											@endif
									>{{  $t['name'] }}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="ipt" class=" control-label col-md-4">{{ Lang::get('core.showhelp') }}</label>
						<div class="col-md-6">
								<label class="checkbox">
								<input type="checkbox" name="CNF_SHOWHELP" value="ON"
									   @if( ( old('CNF_SHOWHELP') ) =='ON') checked
									   @else @if(old('_token') == null && CNF_SHOWHELP =='ON') checked @endif
									   @endif class="minimal-red"  />
								</label>
						</div>
					</div>
					<div class="form-group">
						<label for="ipt" class=" control-label col-md-4"> {{ Lang::get('core.fr_allowregistration') }} </label>
						<div class="col-md-6">
								<label class="checkbox">
								<input type="checkbox" name="CNF_REGIST" value="true"
									   @if(old('CNF_REGIST') == "true") checked
									   @else @if(old('_token') == null && CNF_REGIST =="true") checked @endif
									   @endif class="minimal-red"  />
								</label>
						</div>
					</div>
					<div class="form-group">
						<label for="ipt" class=" control-label col-md-4"> {{ Lang::get('core.fr_registrationdefault') }}  </label>
						<div class="col-md-3">
							<div >
								<select class="form-control" name="CNF_GROUP">
									@foreach($groups as $group)
									<option value="{{ $group->group_id }}"
									 @if(old('CNF_GROUP')== $group->group_id )
									 	selected
									 @else
										@if(old('_token')== null && CNF_GROUP == $group->group_id )
											selected
										@endif
									 @endif
									>{{ $group->name }}</option>
									@endforeach
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="ipt" class=" control-label col-md-4">{{ Lang::get('core.fr_registration') }} </label>
						<div class="col-md-6">
							<label class="radio">
							<input type="radio" name="CNF_ACTIVATION" value="auto"
{{--								   //old('_token') == null &&--}}
								   @if(old('CNF_ACTIVATION')  =='auto')
										checked
								   		@else @if(old('_token') == null && CNF_ACTIVATION == 'auto')@endif
								   @endif class="minimal-red"  />
							{{ Lang::get('core.fr_registrationauto') }}
							</label>

							<label class="radio">
							<input type="radio" name="CNF_ACTIVATION"
								   value="manual"
								   @if(old('CNF_ACTIVATION') )
								   		checked
								   @else
								   		@if(old('_token') == null && CNF_ACTIVATION =='manual') checked @endif
								   @endif class="minimal-red"  />
							{{ Lang::get('core.fr_registrationmanual') }}
							</label>
							<label class="radio">
							<input type="radio" name="CNF_ACTIVATION" value="confirmation"
{{--								   todo--}}
								   @if(old('CNF_ACTIVATION') )
								   		checked
									@else
								   		@if( old('_token')== null && CNF_ACTIVATION =='confirmation') checked @endif
								   @endif
								   class="minimal-red"  />
							{{ Lang::get('core.fr_registrationemail') }}
							</label>
						</div>
					</div>
					<div class="form-group">
						<label for="ipt" class=" control-label col-md-4"> {{ Lang::get('core.captcha') }} </label>
						<div class="col-md-6">
							<label class="checkbox">
							<input type="checkbox" name="CNF_RECAPTCHA" value="false"
								   @if(old('CNF_RECAPTCHA') == "false")
								   checked
								   @else
								   @if(old("_token") == null && CNF_RECAPTCHA =='true') checked @endif
								   @endif class="minimal-red"  />
							</label>
						</div>
					</div>
					<div class="form-group">
						<label for="ipt" class=" control-label col-md-4">{{ Lang::get('core.fr_mainlanguage') }} </label>
						<div class="col-md-3">
							<select class="select2" name="cnf_lang">
							@foreach(SiteHelpers::langOption() as $lang)
								<option value="{{  $lang['folder'] }}"
										@if(old('cnf_lang') == $lang['folder'])
											selected
										@else
											@if( old('_token')== null && CNF_LANG ==$lang['folder']) selected @endif
										@endif
								>{{  $lang['name'] }}</option>
							@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="ipt" class=" control-label col-md-4"> {{ Lang::get('core.fr_multilanguage') }} <br /></label>
						<div class="col-md-6">
							<div class="checkbox">
								<input name="cnf_multilang" type="checkbox" id="cnf_multilang" value="1" class="minimal-red"
									   	@if(old('cnf_multilang') ==1)
											checked
									    @else
									   		@if( old('_token')== null && CNF_MULTILANG == 1)checked @endif
										@endif
								/>  {{ Lang::get('core.fr_enable') }}
							</div>
						 </div>
					</div>

					<div class="form-group">
						<label for="ipt" class=" control-label col-md-4"> {{ Lang::get('core.fr_dateformat') }} </label>
						<div class="col-md-6">
							<select class="form-control" name="cnf_date">
							<?php
								$dates = array(
									'Y-m-d'=>' ( Y-m-d ) . Example : '.date('Y-m-d'),
									'Y/m/d'=>' ( Y/m/d ) . Example : '.date('Y/m/d'),
									'd-m-y'=>' ( D-M-Y ) . Example : '.date('d-m-y'),
									'd/m/y'=>' ( D/M/Y ) . Example : '.date('d/m/y'),
									'm-d-y'=>' ( m-d-Y ) . Example : '.date('m-d-Y'),
									'm/d/y'=>' ( m/d/Y ) . Example : '.date('m/d/Y'),
									'd M Y'=>' ( d M Y ) . Example : '.date('d M Y'),
									'M d Y'=>' ( M d Y ) . Example : '.date('M d Y'),
								);
							?>
							@foreach($dates as $key=>$val)

								<option value="{{  $key }}"
										@if(old('cnf_date') ==$key)
												selected
											@else
												@if(old('_token')== null && defined('CNF_DATE') && CNF_DATE ==$key) selected @endif
										@endif
								>{{  $val }}</option>
							@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="ipt" class=" control-label col-md-4">{{ Lang::get('core.fr_emailsys') }}</label>
						<div class="col-md-6">
							<label class="radio">
								<input type="radio" name="CNF_MAIL" value="phpmail" class="minimal-red"
								@if(old('CNF_MAIL') =='phpmail')
									checked
								@else
									@if( old('_token')== null && defined('CNF_MAIL') && CNF_MAIL =='phpmail') checked @endif
								@endif
								/>
								PHP MAIL System
							</label>
							<label class="radio">
							<input type="radio" name="CNF_MAIL" value="swift" class="minimal-red"
							    @if(old('CNF_MAIL') =='swift')
							   		checked
								    @else @if( old('_token')== null && defined('CNF_MAIL') && CNF_MAIL =='swift') checked @endif
								@endif
							/>
								SWIFT Mailer
								<a href="javascript:void(0)" onclick="MmbModal('{{ url('core/template/swift') }}','SwiftMailer Settings')">
									(Configuration Required)
								</a>
							</label>
						</div>
					</div>
					<div class="form-group">
						<label for="ipt" class=" control-label col-md-4">{{ Lang::get('core.metakey') }} </label>
						<div class="col-md-6">
							<textarea class="form-control input-sm"
									  placeholder="{{ Lang::get('core.keywords') }}" name="cnf_metakey">
								{{ old('cnf_metakey')? old('cnf_metakey'):CNF_METAKEY }}</textarea>
						</div>
					  </div>

					   <div class="form-group">
						<label  class=" control-label col-md-4">{{ Lang::get('core.metadescription') }}</label>
						   <div class="col-md-6">
							   <textarea class="form-control input-sm" placeholder="{{ Lang::get('core.sitedescription') }}"
									  name="cnf_metadesc">{{ old('cnf_metadesc') ? old('cnf_metadesc'):CNF_METADESC }}</textarea>
						   </div>
					  </div>
  <div class="form-group">
		    <label for="ipt" class=" control-label col-md-4">{{ Lang::get('core.googleapicalendar') }}</label>
			<div class="col-md-6">
			<input name="cnf_apikey" type="text" id="cnf_apikey" placeholder="AIzaSyA8D5123adQpT390j46leZbo7aw3J6SBFs" class="form-control input-sm"
				   value="{{ old('cnf_apikey') ? old('cnf_apikey'):CNF_APIKEY }}" />
			 </div> 
		  </div>  
            
		 <div class="form-group">
		    <label for="ipt" class=" control-label col-md-4">{{ Lang::get('core.googlecalendarid') }}</label>
			<div class="col-md-6">
			<input name="cnf_calendarid" type="text" id="cnf_calendarid"
				   placeholder="en.australian#holiday@group.v.calendar.google.com" class="form-control input-sm"
				   value="{{ old('cnf_calendarid') ? old('cnf_calendarid'):CNF_CALENDARID }}" />
			 </div> 
		  </div>        
		 <div class="form-group">
		    <label for="ipt" class=" control-label col-md-4">{{ Lang::get('core.googleanalytics') }}</label>
			<div class="col-md-6">
			<input name="cnf_analytics" type="text" id="cnf_analytics" placeholder="UA-XXXXX-X" class="form-control input-sm"
				   value="{{ old('cnf_analytics') ? old('cnf_analytics'):CNF_ANALYTICS }}" />
			 </div> 
		  </div>        
        <div class="form-group">
			<label for="ipt" class=" control-label col-md-4">
				{{ Lang::get('core.fr_restrictip') }}
				<p>
					<small><i>{{ Lang::get('core.fr_restrictipsmall') }}  <br />
								{{ Lang::get('core.fr_restrictipexam') }} : <code> 192.116.134.21 , 194.111.606.21 </code>
							</i></small>
				</p>
			</label>
			<div class="col-md-6">
				<textarea rows="3" class="form-control" name="CNF_RESTRICIP">{{ old('CNF_RESTRICIP') ? old('CNF_RESTRICIP'):CNF_RESTRICIP }}</textarea>
			</div>
		</div>
		  		  
        <div class="form-group">
			<label for="ipt" class=" control-label col-md-4"> {{ Lang::get('core.fr_allowip') }}	
							<p><small><i>

								{{ Lang::get('core.fr_allowipsmall') }}  <br />
								{{ Lang::get('core.fr_allowipexam') }} : <code> 192.116.134.21 , 194.111.606.21 </code>
							</i></small></p></label>
			<div class="col-md-6">
							<textarea rows="3"
									  class="form-control" name="CNF_ALLOWIP">{{old('CNF_ALLOWIP') ? old('CNF_ALLOWIP'):
CNF_ALLOWIP }}</textarea>
    						<p> {{ Lang::get('core.fr_ipnote') }} </p>

			</div>
		</div>
        <div class="form-group">
		<label for="ipt" class=" control-label col-md-4">&nbsp;</label>
		<div class="col-md-8">
			<button class="btn btn-primary" type="submit"> {{ Lang::get('core.sb_savechanges') }}</button>
		 </div> 
	  </div>
    </div>	
	 </div>
 {!! Form::close() !!}
</div>
</div>
	<div style="clear: both;"></div>
@stop




