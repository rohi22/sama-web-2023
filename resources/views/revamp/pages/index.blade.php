@extends('revamp.layouts.scaffold')
@section('main')
<meta name="description" content="{!! $logos->meta_desc !!}"/>
<meta name="robots" content="follow,index,"/>
<link rel="canonical" href="{{URL::current()}}" />
@endsection
@section('og_page_wise')
<meta property="og:locale" content="en_PK">
<meta property="og:type" content="website">
<meta property="og:title" content="{!! $logos->meta_title !!}">
<meta property="og:description" content="{!! $logos->meta_desc !!}">
<meta property="og:url" content="{{URL::current()}}">
<meta property="og:site_name" content="SAMA ENGINEERING">
@endsection
@section('twitter')
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{!! $logos->meta_title !!}">
<meta name="twitter:description" content="{!! $logos->meta_desc !!}">
<meta name="twitter:site" content="@InsectMarketing">
<meta name="twitter:creator" content="@InsectMarketing">
@endsection

@section('content')
    <section class="bg-HColor py-5">
      <div class="container-fluid">
        <div class="row">
             @forelse($sliders as $slider)
          <div class="col-lg-12 my-5">
            <div class="MainSlider">
              <div class="Items fa-4x text-center fw-bolder text-white py-5 my-5">
                SLIDER IMAGES HERE !!!!!
              </div>
            </div>
          </div>
              @empty
              @endforelse
        </div>
      </div>
    </section>
    <section class="bgSR pb-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mx-auto text-center mb-3">
            <h2>What’s your <span class="text-TColor">industry?</span></h2>
          </div>
        </div>
      </div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-lg-12">
            <ul class="InSlider owl-carousel" style="--SH:50px;">
              <li>
                <a href="list.html" class="d-flex py-5 px-3 flex-column text-center">
                  <span>
                    <img class="SvgImage" src="{{asset('dist/revamp/images/machines.svg')}}"  />
                  </span>
                  <span class="mt-4">
                    Machines
                  </span>
                </a>
              </li>
              <li>
                <a href="list2.html" class="d-flex py-5 px-3 flex-column text-center">
                  <span>
                    <img class="SvgImage" src="{{asset('dist/revamp/images/processing-lines.svg')}}"  />
                  </span>
                  <span class="mt-4">
                    Processing Line
                  </span>
                </a>
              </li>
              <li>
                <a href="" class="d-flex py-5 px-3 flex-column text-center">
                  <span>
                    <img class="SvgImage" src="{{asset('dist/revamp/images/bakery.svg')}}"  />
                  </span>
                  <span class="mt-4">
                    Bakery Series
                  </span>
                </a>
              </li>
              <li>
                <a href="" class="d-flex py-5 px-3 flex-column text-center">
                  <span>
                    <img class="SvgImage" src="{{asset('dist/revamp/images/pharmaceutical.svg')}}"  />
                  </span>
                  <span class="mt-4">
                    Pharmaceutical
                  </span>
                </a>
              </li>
              <li>
                <a href="" class="d-flex py-5 px-3 flex-column text-center">
                  <span>
                    <img class="SvgImage" src="{{asset('dist/revamp/images/snack.svg')}}"  />
                  </span>
                  <span class="mt-4">
                    Snack Processing
                  </span>
                </a>
              </li>
              <li>
                <a href="" class="d-flex py-5 px-3 flex-column text-center">
                  <span>
                    <img class="SvgImage" src="{{asset('dist/revamp/images/accessories.svg')}}"  />
                  </span>
                  <span class="mt-4">
                    Accessories
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mx-auto text-center mb-3">
            <h2>packaging <span class="text-TColor">machines</span></h2>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 MachineSlider owl-carousel mt-3">
            @forelse($home_machine_slider as $index=>$homeSlider)
                @include('revamp.components.product',['item' => $homeSlider])
            @empty
            @endforelse

       

          </div>
        </div>
      </div>
    </section>
    <section class="bg-LGray bgSR" style="padding-bottom: 160px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mx-auto text-center mb-3">
            <h2>Processing <span class="text-TColor">Lines</span></h2>
          </div>
        </div>
      </div>
      <div class="container ProcessSlider owl-carousel mt-4">
          @forelse($home_processing_slider as $processingSlider)
            <div class="row d-lg-flex flex-lg-row-reverse align-items-center">
              <div class="col-lg-6 offset-lg-1">
                <img src="{{asset('uploads/product/'.$processingSlider->p_main_image)}}" class="w-100" width="637" height="413" />
              </div>
              <div class="col-lg-5">
                <h4 class="mb-4">{{$processingSlider->p_title}}</h4>
                <p class="mb-4">{!! $processingSlider->p_short_desc !!}</p>
                <div class="mb-4 Gridimg">
                    @if(isset($processingSlider))
                         @php $prcessing_gallery = DB::table('product_main_images')->where('p_id','=',$processingSlider->id)->get(); @endphp
                          @forelse($prcessing_gallery as $g) 
                              <img src="{{asset('uploads/product/'.$g->p_bag_image)}}" class="me-2" width="80px" alt="">
                          @empty
                          @endforelse
                     @endif
                </div>
                <a href="{{asset('product/'.$processingSlider->p_slug)}}" class="btn btn-danger rounded-0 px-3 py-2">Read More</a>
              </div>
            </div>
          @empty
          @endforelse
      </div>
    </section>
    <section class="py-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 shadow bg-white d-flex align-items-center p-3" style="transform: translateY(-50%);">
            <div class="CLogoSlider owl-carousel">
              <img src="{{asset('dist/revamp/images/clients/CL1.png')}}"/>
              <img src="{{asset('dist/revamp/images/clients/CL2.png')}}"/>
              <img src="{{asset('dist/revamp/images/clients/CL3.png')}}"/>
              <img src="{{asset('dist/revamp/images/clients/CL4.png')}}"/>
              <img src="{{asset('dist/revamp/images/clients/CL5.png')}}"/>
              <img src="{{asset('dist/revamp/images/clients/CL6.png')}}"/>
              <img src="{{asset('dist/revamp/images/clients/CL7.png')}}"/>
              <img src="{{asset('dist/revamp/images/clients/CL8.png')}}"/>
              <img src="{{asset('dist/revamp/images/clients/CL9.png')}}"/>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="pt-0 bgSB">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="mb-4">Sama's List of their <span class="text-TColor">Awards</span></h2>
            <p>Sama is ranking no. 1 among all of its competitors throughout Pakistan. It is a Karachi based company. 
              However, it is dealing with high quality, huge and heavy-duty machines all over Pakistan.</p>
            <ul class="py-3 fa-ul ms-0">
              <li class="mb-4"><span class="fa-li"><i class="fa fa-check"></i></span> KCCI (export award)</li>
              <li class="mb-4"><span class="fa-li"><i class="fa fa-check"></i></span> ISO certified</li>
              <li class="mb-4"><span class="fa-li"><i class="fa fa-check"></i></span> CE Marked</li>
              <li class="mb-4"><span class="fa-li"><i class="fa fa-check"></i></span> Brand of the year</li>
              <li class="mb-4"><span class="fa-li"><i class="fa fa-check"></i></span> Pakistan fast growth 100 companies</li>
            </ul>
          </div>
          <div class="col-lg-5 offset-lg-1">
            <div class="AwardSlider owl-carousel">
              <img src="{{asset('dist/revamp/images/award-1.png')}}" alt="Awards1" />
              <img src="{{asset('dist/revamp/images/award-2.png')}}" alt="Awards2" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-LGray">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mx-auto text-center mb-3">
            <h2>Case <span class="text-TColor">Studies</span></h2>
          </div>
        </div>
      </div>
      <div class="container ProcessSlider owl-carousel mt-4">
         @forelse($castStudies as $index=>$cs)
            <div class="row align-items-center">
              <div class="col-lg-5">
                <img src="{{asset('uploads/blog/post/'.$cs->p_image)}}" class="" style="width:528px;height:428px " />
              </div>
              <div class="col-lg-6 offset-lg-1">
                <h4 class="mb-4">{{$cs->p_title}}</h4>
                <p class="mb-4">{!! str_limit($cs->p_desc, 500, '&raquo'); !!} 
                </p>  
                <a href="{{url('/blog/events/'.$cs->p_slug)}}" class="btn btn-danger rounded-0 px-3 py-2">Read More</a>
              </div>
            </div>
        @empty
        @endforelse
      </div>
    </section>
    <section class="d-none">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mx-auto text-center mb-3">
            <h2>Blog <span class="text-TColor">Posts</span></h2>
          </div>
        </div>
      </div>
      <div class="container mt-5">
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="BlogPost d-fles w-100 border">
              <div class="IMGBox">
                <img src="{{asset('dist/revamp/images/blog-1.jpg')}}" class="card-img-top" alt="...">
              </div>
              <div class="card-body p-5">
                <h5 class="card-title truncate-2 mb-3">Horizontal Packaging Machine MR-2000</h5>
                <p class="card-text truncate-3 mb-4">Horizontal Flow+G17 Packaging Machine is now available in model # MR-2000 with advanced</p>
                <span>
                  <i class="fa fa-clock-o me-1"></i>
                  Dec 23rd, 2022
                </span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4">
            <div class="BlogPost d-fles w-100 border">
              <div class="IMGBox">
                <img src="{{asset('dist/revamp/images/blog-2.jpg')}}" class="card-img-top" alt="...">
              </div>
              <div class="card-body p-5">
                <h5 class="card-title truncate-2 mb-3">Horizontal Packaging Machine MR-2000</h5>
                <p class="card-text truncate-3 mb-4">Horizontal Flow+G17 Packaging Machine is now available in model # MR-2000 with advanced</p>
                <span>
                  <i class="fa fa-clock-o me-1"></i>
                  Dec 23rd, 2022
                </span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4">
            <div class="BlogPost d-fles w-100 border">
              <div class="IMGBox">
                <img src="{{asset('dist/revamp/images/blog-3.jpg')}}" class="card-img-top" alt="...">
              </div>
              <div class="card-body p-5">
                <h5 class="card-title truncate-2 mb-3">Horizontal Packaging Machine MR-2000</h5>
                <p class="card-text truncate-3 mb-4">Horizontal Flow+G17 Packaging Machine is now available in model # MR-2000 with advanced</p>
                <span>
                  <i class="fa fa-clock-o me-1"></i>
                  Dec 23rd, 2022
                </span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4">
            <div class="BlogPost d-fles w-100 border">
              <div class="IMGBox">
                <img src="{{asset('dist/revamp/images/blog-4.jpg')}}" class="card-img-top" alt="...">
              </div>
              <div class="card-body p-5">
                <h5 class="card-title truncate-2 mb-3">Horizontal Packaging Machine MR-2000</h5>
                <p class="card-text truncate-3 mb-4">Horizontal Flow+G17 Packaging Machine is now available in model # MR-2000 with advanced</p>
                <span>
                  <i class="fa fa-clock-o me-1"></i>
                  Dec 23rd, 2022
                </span>
              </div>
            </div>
          </div>

        </div>
      </div>
      
    </section>
@endsection