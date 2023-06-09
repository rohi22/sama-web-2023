@extends('revamp.layouts.scaffold')
@section('main')
<meta name="description" content="{{$product->p_meta_desc}}"/>
@endsection
@section('og_product_wise')
<meta property="og:type" content="product.item">
<meta property="og:title" content="{{ucfirst($product->p_title)}} - SAMA ENGINEERING">
<meta property="og:url" content="{{URL::current()}}">
<meta property="og:image" content="{{asset('uploads/product/'.$product->p_og_img)}}">
<meta property="product:condition" content="new">
@endsection
@section('twitter')
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ucfirst($product->p_title)}} - SAMA ENGINEERING">
<meta name="twitter:description" content="{{$product->p_meta_desc}}">
<meta name="twitter:site" content="@SAMAENGINEERING">
<meta name="twitter:creator" content="@SAMAENGINEERING">
@endsection
@push('title')
{{$data->cat_title}} - {{ucwords(str_slug($title,' '))}} -
@endpush
@push('styles')
    <style>
    .nav-pills .nav-item .nav-link {
        padding : 0px !important;
        padding : 10px !important;
        
    }
    .active>.page-link, .page-link.active {
        background-color: #EC2424;
        border-color: #EC2424;
    }
</style>
@endpush
@section('content')
  <section class="py-0 PLBanner">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="imGBox">
            <img src="{{asset('uploads/product/'.$product->p_main_image)}}" alt="..." style="margin-top: -5rem; width:800px; height:600px">
          </div>
        </div>
    </div>
    </div>
  </section>
  <section class="py-3 bg-LGray">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <ul class="d-flex flex-row w-100">
            <li>
                    <a href="{{url('/')}}" class="text-TColor"><i class="fa fa-home me-2"></i> HOME &nbsp;&nbsp; |</a>
                </li>
                
                @if(isset($data) && !empty($data))
                <li class="text-TColor">
                    &nbsp;&nbsp; <a href="{{url('category/'.$data->cat_slug)}}" style="color:#EC2424">{{$data->cat_title}}</a> &nbsp;&nbsp; |
                </li>
                @endif
                
                <li class="text-TColor">
                    &nbsp;&nbsp; {{$product->p_title}} &nbsp;&nbsp;     
                </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="py-0 bgSR">
    <div class="container">
      <div class="row d-flex align-items-center py-5">
        <div class="col-lg-6 py-5 pb-4">
          <h1 class="mb-2">{{$product->p_title}}<br> <span class="text-TColor">{{$product->cat_title}}</span></h1>
          <h3 class="mb-4">P-{{$product->id + 1000}}</h3>
          <p>
              {!! $product->p_short_desc; !!}
          </p>
          <!--<ul class="py-3 fa-ul ms-0">-->
          <!--  <li class="mb-4"><span class="fa-li"><i class="fa fa-check"></i></span> Provide, operate, and maintain our-->
          <!--    website</li>-->
          <!--  <li class="mb-4"><span class="fa-li"><i class="fa fa-check"></i></span> Improve, personalize, and expand our-->
          <!--    website</li>-->
          <!--  <li class="mb-4"><span class="fa-li"><i class="fa fa-check"></i></span> Understand and analyze how you use-->
          <!--    our website</li>-->
          <!--</ul>-->
          <div class="mb-4 d-flex flex-wrap">
             @forelse($tags as $i)
                <a href="{{url('revamp/tag/'.$i->gt_slug)}}"><label class="bg-TColor-Light px-3 py-2 text-TColor rounded me-2 mb-2">{{$i->gt_title}}</label></a>
            @empty
            @endforelse
       
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="mb-4 Gridimg">
              @php $bag_images = DB::table('product_main_images')->where('p_id','=',$product->id)->get(); @endphp
              @forelse($bag_images as $index=>$gallery)
                <img src="{{asset('uploads/product/'.$gallery->p_bag_image)}}" width="120px" alt="{{$gallery->p_bag_image}}" />
              @empty
              @endforelse
                
          </div>
            <div class="d-grid justify-content-end">
                <button type="button" class="btnn" onClick="return window.open('{{$product->p_video_link}}', '_blank')">
                    <span class="dot text-white"><i class="fa fa-youtube-play fa-2x"></i></span>
                    <span class="str"><span class="text text-white">Play Video</span></span>
                </button>
                    <button type="button" class="btnn2" onClick="return window.open('{{asset('uploads/pdf/'.$product->p_pdf)}}', '_blank')">
                    <span class="dot1 text-white"><i class="fa fa-file-pdf fa-2x"></i></span>
                    <span class="str1"><span class="text1 text-white">E-catalogue</span></span>
                </button>
            </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-0 d-none">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 pt-5 pb-4">
          <h2>Additional Accessories</h2>
        </div>
        <div></div>
      </div>
    </div>
  </section>
  <section class="py-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pb-4">
          @if($data->cat_title)
            <h2>Similar {{$data->cat_title}}</h2>
          @endif
        </div>
        <div class="col-lg-12">
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab"
              tabindex="0">
              <div class="row">
                   @forelse($similarProduct as $sp)
                <div class="col-lg-6">
                            
                          @include('revamp.components.product2',['item' => $sp])
                </div>
                    @empty
                    @endforelse
           
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pb-4">
            <h2>{{isset($data->cat_title) ? $data->cat_title : null}}</h2>
        </div>
        <div class="col-lg-12">
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab"
              tabindex="0">
              <div class="row">
                   @forelse($categoryProduct as $item)
                        <div class="col-lg-3">
                            @include('revamp.components.product',['item' => $item ])
                        </div>
                    @empty
                    @endforelse

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection