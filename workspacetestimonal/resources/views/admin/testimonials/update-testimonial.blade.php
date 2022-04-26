@extends('admin.layout')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Update Your Testimonial</h1>
            <div class="ml-auto">
                <a href="" class="btn btn-primary"><i class="fas fa-plus"></i> All Testimonial</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('testimonial.update', ['id'=>$testimonial->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label>Message</label>
                                    <textarea name="message"  class="form-control snote" cols="30" rows="30" required>{{$testimonial->message}}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="author_name" value="{{$testimonial->author_name}}" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label>Designation</label>
                                    <input type="text" class="form-control" name="author_designation" value="{{$testimonial->author_designation}}">
                                </div>

                                <div class="form-group mb-3">
                                    <label>Website Url</label>
                                    <input type="text" class="form-control" name="author_website" value="{{$testimonial->author_website}}">
                                </div>
                                <div class="form-group mb-3">
                                    @if ($testimonial->author_image!=NULL)
                                    <div class="prev">
                                        <label for="">Previuos Image</label>
                                    </br>
                                        <img style="width:100px;height:100px" src="{{asset('admin/uploads/' . $testimonial->author_image)}}" alt="{{$testimonial->author_name}}">
                                  </div>
                                    @endif
                               </br>
                                    <label>Upload Image</label>
                                    <div>
                                        <input type="file" name="author_image">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection