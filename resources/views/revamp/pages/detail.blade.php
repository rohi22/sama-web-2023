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
            <div class="row d-lg-flex align-items-lg-center">
                <div class="col-lg-6 pt-5 pb-4">
                    <h1 class="mb-2">{{$product->p_title}} <br><span class="text-TColor">{{$data->cat_title}}</span></h1>
                    <h3 class="mb-4">P-{{$product->id + 1000}}</h3>
                    <p class="mb-5">{!! $product->p_short_desc; !!}</p>            
                    <div class="d-flex flex-wrap flex-row mb-4 row">
                         @forelse($attributes as $index=>$i)
                            @if($index <= 3)
                            <div class="col-lg-6">
                                <label class="bg-white border border-danger border-danger-light rounded me-3 mb-3 text-center px-4 py-3 w-100" style="min-height:150px">
                                    <h2 class="text-TColor">{{$i->label}}</h2>
                                    <span class="text-PColor">{{ $i->name }}</span>
                                </label>    
                            </div>
                            @endif
                         @empty
                         @endforelse

                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 p-4 mb-4 bg-white">
                    <div class="mb-4 Gridimg">
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
                        <img src="{{asset('uploads/product/'.$product->p_main_image)}}" width="550px" height="550px" alt="...">
                    </div>   
                </div>                
            </div>
        </div>
    </section>
    <section class="py-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="pills-11-tab" data-bs-toggle="pill" data-bs-target="#pills-11" type="button" role="tab" aria-controls="pills-11" aria-selected="true">Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-22-tab" data-bs-toggle="pill" data-bs-target="#pills-22" type="button" role="tab" aria-controls="pills-22" aria-selected="false">Specifications</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-33-tab" data-bs-toggle="pill" data-bs-target="#pills-33" type="button" role="tab" aria-controls="pills-33" aria-selected="false">Tags</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-44-tab" data-bs-toggle="pill" data-bs-target="#pills-44" type="button" role="tab" aria-controls="pills-44" aria-selected="false">Bags</button>
                          </li>
                    </ul>
                </div>
                <div class="tab-pane fade show active py-4" id="pills-11" role="tabpanel" aria-labelledby="pills-11-tab" tabindex="0">
                    <div class="col-lg-12 mb-4">
                        <p>
                            {!! $product->p_long_desc !!}
                        </p>
                    </div>
                    <div class="d-flex flex-row">
                        @php $bag_images = DB::table('product_main_images')->where('p_id','=',$product->id)->get(); @endphp
                        @forelse($bag_images as $index=>$gallery)
                            <div>
                                <img src="{{asset('uploads/product/'.$gallery->p_bag_image)}}" alt="..." style="height:120px; width:150px;">
                            </div>
                        @empty
                            <center>No record found</center>    
                        @endforelse
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-22" role="tabpanel" aria-labelledby="pills-22-tab" tabindex="1">
                   <div class="col-lg-12 mb-4">
                       <div class="row">
                        @forelse($attributes as $i)
                            <div class="col-md-4">
                                    <label><strong>{{$i->label}}</strong></label>
                                    <p>{{$i->name}}</p>
                            </div>
                        @empty
                            <center>No record found</center>
                        @endforelse
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-33" role="tabpanel" aria-labelledby="pills-33-tab" tabindex="2">
                    @forelse($tags as $i)  
                        <a href="{{url('revamp/tag/'.$i->gt_slug)}}" class="btn btn-lg btn-danger" style="margin:5px;">{{$i->gt_title}}</a>
                    @empty
                    
                        <center>No record found</center>
                    @endforelse
                </div>
                <div class="tab-pane fade" id="pills-44" role="tabpanel" aria-labelledby="pills-44-tab" tabindex="">
                    <center>No record found</center>
                </div>
            </div>
        </div>
    </section>
    <section class="py-0 d-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pb-4">
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
                    <h2>{{isset($data->cat_title) ? $data->cat_title : null}}</h2>
                </div>
                <div class="col-lg-12">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-1" role="tabpanel"
                            aria-labelledby="pills-1-tab" tabindex="0">
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
                        <div class="tab-pane fade show active" id="pills-1" role="tabpanel"
                            aria-labelledby="pills-1-tab" tabindex="0">
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
    
    
    
<div class="modal" id="myVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Video</h5>
        <button type="button" onclick= "hideMOdal()" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="row" id="show_gallery">
           <iframe id ="productvideo" width="560" height="315" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" id="modal_close" onclick= "hideMOdal()" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection

@push('scripts')
<script>
function showMOdal(){
    $('#myVideo').show();
    $('#productvideo').attr("src", "{{$product->p_video_link}}");
}
function hideMOdal(){
    $('#productvideo').attr('src', '');
    $('#myVideo').hide();
}

$(document).ready(function(){
  if(!$('#myVideo').hasClass('show')){
    $('#productvideo').attr('src', ' ');
  }  
});


  
</script>
@endpush