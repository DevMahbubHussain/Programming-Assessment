@include('admin.includes.header')
<body>
<div id="app">
    <div class="main-wrapper">
        <section class="section">
            <div class="container container-login">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-primary border-box">
                            <div class="card-header card-header-auth">
                                <h4 class="text-center">Password Reset</h4>
                            </div>
                            <div class="card-body card-body-auth">
                                <form method="POST" action="{{ route('author.reset.password.update') }}">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <input type="hidden" name="email" value="{{ $email }}">

                                    <div class="form-group">
                                    <input type="password" name="password" id="" class="form-control" placeholder="password">
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="retype_password" id="" class="form-control" placeholder="retype password">
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Update
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@include('admin.includes.footer')
@include('admin.includes.toster-message')