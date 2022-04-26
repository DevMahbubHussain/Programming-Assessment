@extends('admin.layout')

@section('content')

<section class="section">
    <div class="section-header">
        @if(Auth::guard('admin')->check())
        <h1> Hello {{Auth::guard('admin')->user()->name}} , You are Admin</h1>    
        @endif
    </div>
    <div class="row">
        
        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fas fa-book-open"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Testimonial</h4>
                    </div>
                    <div class="card-body">
                        {{$totalTestimonial}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="fas fa-bullhorn"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Clients</h4>
                    </div>
                    <div class="card-body">
                        {{$totalClients}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="fas fa-bullhorn"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Published Testimonial</h4>
                    </div>
                    <div class="card-body">
                        {{$publishTestimonial}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="fas fa-bullhorn"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Un-Published Testimonial</h4>
                    </div>
                    <div class="card-body">
                        {{$unpublishTestimonial}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection()