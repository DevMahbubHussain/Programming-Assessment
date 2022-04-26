@include('front.header')
<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-md-6">
            <h3>Register</h3>
            <form action="{{ route('client.register.save') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label class="form-label">Name *</label>
                    <input type="text" class="form-control" name="name" value="John Doe">
                </div>
                <div class="mb-4">
                    <label class="form-label">Email *</label>
                    <input type="text" class="form-control" name="email" value="john@gmail.com">
                </div>
                <div class="mb-4">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="mb-4">
                    <label class="form-label">Retype Password</label>
                    <input type="password" class="form-control" name="retype_password">
                </div>
                <div class="mb-4">
                    <label class="form-label"></label>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-md-6">
        </div>
    </div>
</div>
@include('front.footer')
@include('front.toster-message')