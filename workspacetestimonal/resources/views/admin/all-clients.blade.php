@extends('admin.layout')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>All Clients List </h1>
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
                                        <th>Client Name</th>
                                        <th>Client Email</th>
                                        <th>Client Image</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i=0;
                                        @endphp
                                        @if( count($AllClients) > 0 )
                                            @foreach ( $AllClients as $client )
                                            @php
                                                $i++;
                                            @endphp
                                            <tr>
                                                <td>{{$i}}</td>
                                                <td>@if($client->name) {{$client->name}} @else {{'no data found'}} @endif</td>
                                                <td>@if($client->email) {{$client->email}} @else {{'no data found'}} @endif</td>
                                                <td>@if($client->photo) 
                                                    <img class="rounded-circle mr-1" style="width:50px;height:50px;"  src="{{asset('admin/uploads/'.$client->photo)}}" alt="{{$client->name}}">
                                                     @else {{'no image found'}} @endif</td> 
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