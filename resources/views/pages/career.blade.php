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
                <h4 class="card-title">Career</h4>
              </div>
              <div class="col s12 m6 l2">
              </div>
            </div>
          </div>
          <div id="html-view-validations">
              @if(isset($contact) && !empty($contact))
                <form class="formValidate0" id="formValidate0" method="post" action="{{route('career-update',[$contact->id])}}" enctype="multipart/form-data">
              @else
                <form class="formValidate0" id="formValidate0" method="post" action="{{route('career')}}" enctype="multipart/form-data">
              @endif
              <div class="row">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <div class="input-field col s12">
                  <label for="title">Heading*</label>
                  <input class="validate" required id="heading" name="heading" type="text" value="{{(isset($contact->heading) ? $contact->heading : '')}}">
                </div>
                <div class="input-field col s12">
                  <label for="title">Title*</label>
                  <input class="validate" required id="title" name="title" type="text" value="{{(isset($contact->title) ? $contact->title : '')}}">
                </div>
                
                <div class="input-field col s12">
                  <label for="address">Description *</label>
                  <input class="validate" required id="description" type="text" name="description" value="{{(isset($contact->description) ? $contact->description : '')}}">                  
                </div>
                
                <div class="clone-div">
                  <div class="first-section">
                    <div class="input-field col s12">
                      <label for="title">Title*</label>
                      <input class="validate" required name="clone[title][]" type="text" value="{{(isset($contact->title) ? $contact->title : '')}}">
                    </div>
                    
                    <div class="input-field col s12">
                      <label for="address">Description *</label>
                      <input class="validate" required type="text" name="clone[description][]" value="{{(isset($contact->description) ? $contact->description : '')}}">                  
                    </div>
                    <button class="btn waves-effect waves-light left career-add" type="button">Add
                      <i class="material-icons right">send</i>
                    </button>
                  </div>
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
  $(document).ready(function(){
    $('.career-add').click(function(){
      var clonehtml = $(this).parents('.clone-div').find('.first-section:first-child').clone();
      $(this).parents('.clone-div').find('.first-section:first-child input').val('');
      var removebtn = '<button class="btn waves-effect waves-light left career-remove" type="button">Remove<i class="material-icons right">send</i></button>';
      clonehtml.find('button').remove();
      clonehtml.append(removebtn);
      $(this).parents('.clone-div').append(clonehtml);
    });

    $('body').on('click','.career-remove',function(){
      $(this).parent().remove();
    })
  })
</script>
{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/form-validation.js')}}"></script>
@endsection