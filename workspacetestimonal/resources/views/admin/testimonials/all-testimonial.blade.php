@extends('admin.layout')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Your All Testimonial</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="example1">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Client Message</th>
                                        <th>Client Name</th>
                                        <th>Client Designation</th>
                                        <th>Client Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i=0;
                                        @endphp
                                        @if( count($specific_author_testimonial) > 0 )
                                        @php
                                            $i++;
                                        @endphp
                                            @foreach ( $specific_author_testimonial as $testimonial )
                                            <tr>
                                                <td>{{$i}}</td>
                                                <td>@if($testimonial->message) {{$testimonial->message}} @else {{'no data found'}} @endif</td>
                                                <td>@if($testimonial->author_name) {{$testimonial->author_name}} @else {{'no data found'}} @endif</td>
                                                <td>@if($testimonial->author_designation) {{$testimonial->author_designation}} @else {{'no data found'}} @endif</td>
                                                <td>@if($testimonial->author_image) 
                                                    <img class="rounded-circle mr-1" style="width:50px;height:50px;"  src="{{asset('admin/uploads/'.$testimonial->author_image)}}" alt="{{$testimonial->message}}">
                                                     @else {{'no image found'}} @endif</td> 

                                                     @if($testimonial->confirmed==1)   
                                                      <td class="text-success"><h4>Approved</h4></td>
                                                      @else
                                                      <td class="text-danger"><h4>UnApproved</h4></td>
                                                      @endif

                                                <td class="pt_10 pb_10">
                                                    <a href="{{ route('testimonial.edit', ['id'=>$testimonial->id]) }}" class="btn btn-info">Edit</a>
                                                    <a href="{{ route('testimonial.delete', ['id'=>$testimonial->id]) }}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @else
                                            {{"No data found from your account"}}
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection