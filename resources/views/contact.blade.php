@extends('layouts.app')

@section('title', 'Contact Us - Quebee Events')

@push('styles')
<style>
  .form-toast{position:fixed;top:20px;left:50%;transform:translateX(-50%);background:#28a745;color:#fff;padding:10px 16px;border-radius:4px;box-shadow:0 2px 10px rgba(0,0,0,.2);z-index:9999;display:none}
  .form-toast.error{background:#dc3545}
</style>
@endpush

@section('content')
    <!--Page Title-->
    <section class="page-title" data-bg-img="{{ asset('assets/images/background/page-title-1.jpg') }}">
        <div class="auto-container">
            <h1>Contact Us</h1>
            
            <ul class="bread-crumb">
            	<li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
            
        </div>
        
        <!--Go Down Button-->
        <div class="go-down">
            <div class="curve scroll-to-target" data-target="#about-section"><span class="icon fa fa-arrow-down"></span></div>
        </div>
        
    </section>
    
    
    <!--About Section-->
    <section class="about-section" id="about-section">
    	<!--Desc Box-->
    
       
        <!--Lower Content-->
        <div class="lower-content" data-bg-img="{{ asset('assets/images/background/bg-pattern.png') }}">
        	<div class="auto-container">
            	<div class="content-box">
                	<div class="row clearfix">
                    	
                        <div class="col-md-7">
                          <h4 class="text-thm title-border font-weight-700 mt-0 mb-10">Contact Us</h4>
                          <!-- <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro similique ipsa deleniti doloribus fuga dicta id voluptate, excepturi nostrum cupiditate</p> -->

                          <!-- Appointment Form Sart-->
                           <form id="appointment_form" name="appointment_form" class="form-transparent mt-30" method="post" action="sendemail.php">
                            @csrf
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="form-group mb-20">
                                  <input data-height="45px" id="rsvp_name" name="rsvp_name" class="form-control bdrs-0" type="text" required="" placeholder="Full Name" aria-required="true">
                                </div>
                              </div>                  
                            </div>
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="form-group mb-20">
                                  <input data-height="45px" id="rsvp_email" name="rsvp_email" class="form-control bdrs-0 required email" type="email" placeholder="Enter Email" aria-required="true">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group mb-20">
                                  <input data-height="45px" id="form_phone" name="form_phone" class="form-control bdrs-0 required" type="text" placeholder="Enter Phone" aria-required="true">
                                </div>
                              </div>
                                  
                            </div>
                            
                            <div class="form-group mb-20">
                              <textarea id="form_message" name="form_message" class="form-control bdrs-0 required" data-height="120px" placeholder="Enter Message" rows="5" aria-required="true"></textarea>
                            </div>
                            <div class="form-group mb-0 mt-20">
                              <input id="form_botcheck" name="form_botcheck" class="form-control bdrs-0" type="hidden" value="">
                              <button type="submit" class="btn thm-btn btn-flat" data-loading-text="Please wait...">Submit Now</button>
                            </div>
                          </form>
                          <!-- Appointment form handler moved to bottom to ensure scripts loaded -->
                          <!-- Appointment Form Ends -->

                        </div>
                        <div class="col-md-5">
                          <img alt="" src="{{ asset('assets/images/resource/image-forlift2.png') }}" class="img-responsive img-fullwidth">
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>         
    </section>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/revolution.min.js') }}"></script>
<script>
  // Ensure DOM and jQuery are ready
  (function(){
    function ready(fn){
      if(document.readyState !== 'loading'){ fn(); }
      else { document.addEventListener('DOMContentLoaded', fn); }
    }
    ready(function(){
      var form = document.getElementById('appointment_form');
      if(!form) return;
      var btn = form.querySelector('button[type="submit"]');
      // Create toast element
      var toast = document.createElement('div');
      toast.id = 'form-toast';
      toast.className = 'form-toast';
      document.body.appendChild(toast);

      form.addEventListener('submit', function(e){
        e.preventDefault();
        if(btn){ btn.disabled = true; btn.textContent = 'Please wait...'; }
        var fd = new FormData(form);
        // Post to Laragon PHP endpoint directly so it works even from the preview server
        fetch('{{ url("sendemail.php") }}', { method: 'POST', body: fd })
          .then(function(res){
            var ct = res.headers.get('content-type') || '';
            if(ct.indexOf('application/json') !== -1){ return res.json(); }
            return res.text();
          })
          .then(function(data){
            var success = true; var message = 'Message sent successfully.';
            if(typeof data === 'object'){ success = !!data.success; message = data.message || message; }
            else {
              // If PHP echoes plain text, use it as message
              if((data||'').trim().length) message = (data||'').trim();
            }
            showToast(message, success ? 'success' : 'error');
            if(success){ form.reset(); }
            if(btn){ btn.disabled = false; btn.textContent = 'Submit Now'; }
            // Refresh the current contact page after a short delay
            setTimeout(function(){ window.location.reload(); }, 1500);
          })
          .catch(function(err){
            showToast('Sorry, there was an error processing your request.', 'error');
            if(btn){ btn.disabled = false; btn.textContent = 'Submit Now'; }
          });
      });

      function showToast(message, type){
        toast.textContent = message;
        toast.style.display = 'block';
        toast.className = 'form-toast' + (type === 'error' ? ' error' : '');
        setTimeout(function(){ toast.style.display = 'none'; }, 5000);
      }
    });
  })();
</script>
@endsection
