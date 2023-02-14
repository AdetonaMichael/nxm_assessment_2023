<div class="offcanvas offcanvas-end bg-white shadow" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header p-4 border-bottom">
        <h6 id="offcanvasRightLabel" class="mb-0">
            <b>ASSESSMENT<b>
        </h6>

        <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa fa-times fa-2x text-danger"></i></button>
    </div>


    @auth
        <div class="row">
            <div class="col-md-12">
                    @if(isset(Auth::user()->profpix))
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="/{{ Auth::user()->profpix }}" height="200" width="200"></div>
                    <p class="text-center">Welcome: <b>{{ Auth::user()->name }}</b></p>
                    @else
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="{{ asset('img/pix.png') }}" width="90"></div>
                    <p class="text-center">Welcome: <b>{{ Auth::user()->name }}</b></p>
                    @endif
            </div>
        </div>
    @else
    <div class="offcanvas-body p-4">
        <div class="row">
            <div class="col-12">
                <div class="card border-0" style="z-index: 1">
                    <div class="card-body p-0">
                        <form class="login-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <a href="/"><img src="#" height="200" class="avatar avatar-small d-block mx-auto my-5"  alt="Family Logo"></a>
                                </div><!--end col-->

                                <div class="col-lg-12 mt-4">
                                    <div class="mb-3">
                                        <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                            <input type="email" class="form-control ps-5 @error('email') border-red-500 @enderror" placeholder="Email" autocomplete="off" name="email" required>
                                            @error('email')
                                            <p class="text-danger  text-xs italic mt-4">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Password <span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="key" class="fea icon-sm icons"></i>
                                            <input name="password" type="password" autocomplete="off" class="form-control ps-5 @error('password') border-red-500 @enderror" placeholder="Password" required="">
                                            @error('password')
                                            <p class="text-danger text-xs italic mt-4">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-between">
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                                            </div>
                                        </div>
                                        <small class="forgot-pass mb-0"><a href="{{ route('password.request') }}" class="text-dark">Forgot password ?</a></small>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-12 mb-0">
                                    <div class="d-grid">
                                        <button id="btn-login" class="btn btn-danger">Sign in</button>
                                    </div>
                                </div><!--end col-->

                                <div class="col-12 text-center mt-3">
                                    <small><small class="text-dark me-2">Don't have an account ?</small> <a href="{{ route('register') }}" class="text-dark">Sign Up</a></small>
                                </div><!--end col-->
                            </div><!--end row-->
                        </form>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>
    @endauth

<div class="row">
    <div style="height: 100px" class="col-md-12 d-flex justify-content-center">

    </div>
</div>

    <!--------------------------table section----------------------------------->

     @auth
    <br/>
    <div class="d-flex justify-content-center">

    </div>
     @endauth


    <div class="offcanvas-footer p-4 text-center bg-danger text-white">
       <p clss="text-white">All Rights Reserved  2022  &copy; OLADELE AKANDE Family Website </p>
    </div>
</div>

