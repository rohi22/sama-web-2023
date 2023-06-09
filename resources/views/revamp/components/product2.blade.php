<div class="card PrCard rounded-0">                    
                      <div class="imGBox w-100 pb-3">
                        <img src="{{asset('uploads/product/'.$item->p_main_image)}}" class="card-img-top" class="w-100" alt="...">
                      </div>
                      <div class="d-grid d-md-flex justify-content-md-end mx-3">
                        <a href="{{$item->p_video_link}}" target="_blank"><button type="button" class="btn-list text-white">
                          <i class="fa fa-youtube fa-2x"></i>
                        </button>
                        </a>
                        <a href="{{asset('uploads/pdf/'.$item->p_pdf)}}"  target="_blank">
                            <button type="button" class="btn-list bg-black">
                                <i class="fa fa-file-pdf fa-2x text-white"></i>
                            </button>
                        </a>
                      </div>
                      <a href="{{asset('revamp/product/'.$item->p_slug)}}" class="d-flex w-100 flex-column">
                      <div class="card-body">
                        <h5 class="card-title mb-3 truncate-2">{{$item->p_title}}</h5>
                        <p class="card-text mb-4 truncate-2"> {!! str_limit($item->p_short_desc, 100,'..') !!}</p>
                        <div class="d-flex flex-row">
                            @php $bag_images = DB::table('product_main_images')->where('p_id','=',$item->id)->get(); @endphp
                            @forelse($bag_images as $key=>$gallery)
                              <div class="imgFrame bg-white p-1 shadow-sm w-25 me-1">
                                    <img src="{{asset('uploads/product/'.$gallery->p_bag_image)}}" class="w-100" alt="...">
                              </div>
                            @empty
                            @endforelse
                        </div>
                      </div>
                    </a>
                  </div>