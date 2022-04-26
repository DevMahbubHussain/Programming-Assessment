@extends('admin.layout')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Add Your Testimonial</h1>
            <div class="ml-auto">
                <a href="{{route('author.testimonial')}}" class="btn btn-primary"><i class="fas fa-plus"></i> All Testimonial</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('testimonial.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label>Message</label>
                                    <textarea name="message" class="form-control snote" cols="10" rows="30" style="height: 150px;" required></textarea>
                                    
                                </div>
                                <div class="form-group mb-3">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="author_name" value="" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label>Designation</label>
                                    <input type="text" class="form-control" name="author_designation" value="">
                                </div>

                                <div class="form-group mb-3">
                                    <label>Website Url</label>
                                    <input type="text" class="form-control" name="author_website" value="">
                                </div>
                                <div class="form-group mb-3">
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