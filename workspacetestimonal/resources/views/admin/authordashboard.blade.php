@extends('admin.layout')
@section('heading','Dashboard')
@section('content')

<section class="section">
    <div class="section-header">
        @if(Auth::guard('author')->check())
        <h1> Hello {{Auth::guard('author')->user()->name}} , You are Client</h1>    
        @endif
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fas fa-book-open"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Gettings from  WorkspaceIT</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection()