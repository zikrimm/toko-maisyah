@extends('layouts.main2')
@section('section')
    <div class="page-content-wrapper">
      <div class="container">
        <!-- Settings Wrapper-->
        <div class="settings-wrapper py-5">
          <div class="card settings-card">
            <div class="card-body">
              <!-- Single Settings-->
          <div class="card settings-card">
            <div class="card-body">
              <!-- Single Settings-->
              <div class="single-settings d-flex align-items-center justify-content-between">
                <div class="title"><i class="lni lni-night"></i><span>Night Mode</span></div>
                <div class="data-content">
                  <div class="toggle-button-cover">
                    <div class="button r">
                      <input class="checkbox" id="darkSwitch" type="checkbox">
                      <div class="knobs"></div>
                      <div class="layer"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card settings-card">
            <div class="card-body">
              <!-- Single Settings-->
              <div class="single-settings d-flex align-items-center justify-content-between">
                <div class="title"><i class="lni lni-question-circle"></i><span>Support</span></div>
                <div class="data-content"><a class="pl-4" href="#"><i class="lni lni-chevron-right"></i></a></div>
              </div>
            </div>
          </div>
          @auth
          <div class="card settings-card">
            <div class="card-body">
              <!-- Single Settings-->
              <div class="single-settings d-flex align-items-center justify-content-between">
                <div class="title"><i class="lni lni-lock"></i><span>Password<span>Updated 2 month ago</span></span></div>
                <div class="data-content"><a href="change-password.html">Change<i class="lni lni-chevron-right"></i></a></div>
              </div>
            </div>
          </div>
          @else
          @endauth
        </div>
      </div>
    </div>
  </div>
</div>
<a href="#tes" class="to-top">
  <i class="bi bi-arrow-up-short"></i>
</a>
   
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
@endsection

