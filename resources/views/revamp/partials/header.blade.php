@php 
    $machines = DB::table('categories')->where('parent_id','=',3)->where('status', 1)->orderBy('cat_order','ASC')->get(['categories.*']);
    $processingSeries = DB::table('categories')->where('parent_id','=',79)->where('status', 1)->orderBy('cat_order','ASC')->get(['categories.*']);
    $bakerySeries = DB::table('categories')->where('parent_id','=',80)->where('status', 1)->orderBy('cat_order','ASC')->get(['categories.*']);
    $pharmaLine = DB::table('categories')->where('parent_id','=',111)->where('status', 1)->orderBy('cat_order','ASC')->get(['categories.*']);
@endphp
<header id="Header">
      <div class="THeader bg-TColor text-white">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 d-flex align-items-center justify-content-lg-between justify-content-center">
              <div>
                <ul class="THLinks">
                  <li><a href="tel:{{$footer_content->f_phone_1}}"><i class="fa fa-phone me-2"></i> <span>{{$footer_content->f_phone_1}}</span></a></li>
                  <li><a href="mailto:{{$footer_content->f_email_2}}"><i class="fa fa-envelope me-2"></i> <span>{{$footer_content->f_email_1}}</span></a></li>
                </ul>
              </div>
              <div>
                <ul class="THLinks">
                  <li><a href="{{url('blog')}}">Case Study</a></li>
                  <li><a href="{{route('aboutUs')}}">About us</a></li>
                  <li><a href="{{route('spareParts')}}">Spare Parts</a></li>
                  <li><a href="{{route('becomeAnAgent')}}">Become Agent</a></li>
                  <li><a href="{{route('eCatalogue')}}">E-Catalogue</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-white text-white position-relative shadow-sm">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 d-flex align-items-center justify-content-lg-between justify-content-center">
              <div class="logo py-2">
                <a href="{{url('/revamp')}}"><img src="{{asset('uploads/logos/'.$logos->header_logo)}}" height="80px" alt="Logo"></a>
              </div>
              <nav>
                <ul class="d-flex flex-column flex-lg-row">
                  <li>
                    <a href="{{asset('revamp/category/machines')}}">Machines <i class="fa fa-chevron-down ms-2"></i></a>
                    <div class="SUBLinks">
                      <div class="container py-2">
                        <ul class="menu-carousel owl-carousel">
                            @forelse($machines as $machine)
                                 <li>
                                    <a href="{{asset('revamp/sub-category/'.$machine->cat_slug)}}">
                                      <span><img src="{{asset('uploads/'.$machine->cat_icon)}}" /></span>
                                      <span>{{$machine->cat_title}}</span>
                                    </a>
                                  </li>
                            @empty
                            @endforelse
                        </ul>
                      </div>
                    </div>
                  </li>
                   <li>
                    <a href="{{asset('revamp/category/processing-series')}}">Processing Line <i class="fa fa-chevron-down ms-2"></i></a>
                    <div class="SUBLinks">
                      <div class="container py-2">
                        <ul class="menu-carousel owl-carousel">
                            @forelse($processingSeries as $processing)
                                 <li>
                                    <a href="{{asset('revamp/sub-category/'.$processing->cat_slug)}}">
                                      <span><img src="{{asset('uploads/'.$processing->cat_icon)}}" /></span>
                                      <span>{{$processing->cat_title}}</span>
                                    </a>
                                  </li>
                            @empty
                            @endforelse
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li>
                    <a href="{{asset('revamp/category/bakery-series')}}">Bakery Series <i class="fa fa-chevron-down ms-2"></i></a>
                    <div class="SUBLinks">
                      <div class="container py-2">
                        <ul class="menu-carousel owl-carousel">
                            @forelse($bakerySeries as $bakery)
                                 <li>
                                    <a href="{{asset('revamp/sub-category/'.$bakery->cat_slug)}}">
                                      <span><img src="{{asset('uploads/'.$bakery->cat_icon)}}" /></span>
                                      <span>{{$bakery->cat_title}}</span>
                                    </a>
                                  </li>
                            @empty
                            @endforelse
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li>
                    <a href="{{asset('revamp/category/pharmaceutical-line')}}">Pharmaceutical Line <i class="fa fa-chevron-down ms-2"></i></a>
                    <div class="SUBLinks">
                      <div class="container py-2">
                        <ul class="menu-carousel owl-carousel">
                            @forelse($pharmaLine as $pharma)
                                 <li>
                                    <a href="{{asset('revamp/sub-category/'.$pharma->cat_slug)}}">
                                      <span><img src="{{asset('uploads/'.$pharma->cat_icon)}}" /></span>
                                      <span>{{$pharma->cat_title}}</span>
                                    </a>
                                  </li>
                            @empty
                            @endforelse
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li><a href="{{asset('revamp/category/snack-processing')}}">Snack Processing Line</a></li>
                  <li><a href="{{asset('revamp/category/accessories')}}">Accessories</a></li>
                  <li><a href="{{route('contactUs')}}">Contact us</a></li>
                </ul>
              </nav>
            </div> 
          </div>
        </div>
      </div>
    </header>