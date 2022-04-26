@include('front.header')
<section class="testimonial">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                          <h3 class="text-info">Our Client Testimonials</h3>
                         
                          @if( count($pulishedTestimonial) > 0)
                             @foreach ( $pulishedTestimonial as $testimonial )
                             <div class="testimonial">
                                 @if ($testimonial->author_image)
                                 <img src="{{asset('admin/uploads/'. $testimonial->author_image)}}" alt="{{$testimonial->author_name}}" style="width:90px"> 
                                 @endif
                                
                                @if($testimonial->message)
                                <p>{{$testimonial->message}}</p>
                                @endif
                                <p><span>{{$testimonial->author_name}}</span> {{$testimonial->author_designation}}.</p>
                                <div class="web">
                                    @if($testimonial->author_website)
                                    <p><a href="{{$testimonial->author_website}}"><span>Visit for Details</span></a></p>
                                    @endif
                                </div>
                              </div>
                                 
                             @endforeach
                             {{-- {{ $pulishedTestimonial->links() }} --}}
                             @else
                             <h2> No Records are found ! </h2>
                          @endif
                      </div>
                  </div>
              </div>
          </section>

@include('front.footer')