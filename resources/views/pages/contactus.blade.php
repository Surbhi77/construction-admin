@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Form Validation')
{{-- vendor style --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
@endsection

{{-- page content --}}
@section('content')


  <!-- HTML VALIDATION  -->

  <div class="row">
    <div class="col s12">
      <div id="html-validations" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Contact Us</h4>
              </div>
              <div class="col s12 m6 l2">
              </div>
            </div>
          </div>
          <div id="html-view-validations">
              @if(isset($contact) && !empty($contact))
                <form class="formValidate0" id="formValidate0" method="post" action="{{route('contactus-update',[$contact->id])}}" enctype="multipart/form-data">
              @else
                <form class="formValidate0" id="formValidate0" method="post" action="{{route('contact-us')}}" enctype="multipart/form-data">
              @endif
              <div class="row">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <div class="input-field col s12">
                  <label for="title">Title*</label>
                  <input class="validate" required id="title" name="title" type="text" value="{{(isset($contact->title) ? $contact->title : '')}}">
                </div>
                <div class="input-field col s12">
                  <label for="email">E-Mail *</label>
                  <input class="validate" required id="email" type="email" name="email" value="{{(isset($contact->title) ? $contact->email : '')}}">
                </div>
                <div class="input-field col s12">
                  <label for="mobile">Mobile *</label>
                  <input class="validate" required id="mobile" type="text" name="mobile" value="{{(isset($contact->title) ? $contact->mobile : '')}}">
                </div>
                <div class="input-field col s12">
                  <label for="address">Address *</label>
                  <input class="validate" required id="address" type="text" name="address" value="{{(isset($contact->title) ? $contact->address : '')}}">                  
                </div>
            
            
                <div class="input-field col s12">

                  <button class="btn waves-effect waves-light right" type="submit" value='Save'>Submit

                      <i class="material-icons right">send</i>

                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- JQUERY VALIDATION -->

                 </div>
      </div>
    </div>
  </div>
</div>
@endsection

{{-- vendor script --}}
@section('vendor-script')
<script src="{{asset('vendors/jquery-validation/jquery.validate.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/form-validation.js')}}"></script>
@endsection