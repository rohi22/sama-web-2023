  <footer class="bgSR bgMap position-relative text-center text-lg-start">
      <div class="container position-relative">
        <div class="bg-TColor text-white TBadge py-1 px-4 flex-column text-center">
          <span class="text-white">Pakistan's</span>
          <strong>No 1</strong>
        </div>
        <div class="row">
          <div class="col-lg-3">
            <h4>Quick Links</h4>
            <ul class="FLinks">
              <li><a href="{{route('productCategoryWise','machines')}}">Machines</a></li>
              <li><a href="{{route('productCategoryWise','processing-series')}}">Processing Line</a></li>
              <li><a href="{{route('productCategoryWise','bakery-series')}}">Bakery Series</a></li>
              <li><a href="{{route('productCategoryWise','pharmaceutical-line')}}">Pharmaceutical Line</a></li>
              <li><a href="{{route('productCategoryWise','snack-processing')}}">Snack Processing Line</a></li>
              <li><a href="{{route('productCategoryWise','accessories')}}">Accessories</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
            <h4>Policies & Others</h4>
            <ul class="FLinks">
            <li><a href="{{url('blog')}}">Case Study</a></li>
              <li><a href="{{route('privacyPolicy')}}">Privacy Policy</a></li>
              <li><a href="{{route('aboutUs')}}">About us</a></li>
              <li><a href="{{route('contactUs')}}">Contact us</a></li>
              <li><a href="{{route('spareParts')}}">Spare Parts</a></li>
              <li><a href="{{route('eCatalogue')}}">E-Catalogue</a></li>
              <li><a href="{{route('becomeAnAgent')}}">Become a Partner</a></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <h4>Contact Details</h4>
            <div class="row">
              <div class="col-lg-6">
                <div class="w-100 d-flex mb-3">
                  <span class="iconBox d-flex justify-content-center align-items-center text-white bg-TColor">
                    <i class="fa fa-map-marker-alt"></i>
                  </span>
                  <span>Nazimabad #2, Block-A, Plot No.1/32, Opposite Firdous Colony Khi-74600 Pakistan.</span>
                </div>  
                <div class="w-100 d-flex mb-3 align-items-center">
                  <span class="iconBox d-flex justify-content-center align-items-center text-white bg-TColor">
                    <i class="far fa-envelope"></i>
                  </span>
                  <span><a href="mailto:{{$footer_content->f_email_2}}">{{$footer_content->f_email_2}}</a></span>
                </div>
                <div class="w-100 d-flex mb-3 align-items-center">
                  <span class="iconBox d-flex justify-content-center align-items-center text-white bg-TColor">
                    <i class="far fa-user"></i>
                  </span>
                  <span><a href="mailto:{{$footer_content->f_email_2}}">{{$footer_content->f_email_2}}</a></span>
                </div>              
              </div>
              <div class="col-lg-6">
                <div class="w-100 d-flex mb-3">
                  <span class="iconBox d-flex justify-content-center align-items-center text-white bg-TColor">
                    <i class="fa fa-phone"></i>
                  </span>
                  <span><a href="tel:{{$footer_content->f_phone_1}}">{{$footer_content->f_phone_1}}</a>,<a href="tel:{{$footer_content->f_phone_2}}">{{$footer_content->f_phone_2}}</a>,<br><a href="tel:{{$footer_content->f_phone_3}}">{{$footer_content->f_phone_3}}</a></span>
                </div>
                <div class="w-100 d-flex mb-3 align-items-center">
                  <span class="iconBox d-flex justify-content-center align-items-center text-white bg-success">
                    <i class="fa fa-whatsapp"></i>
                  </span>
                  <span><a href="https://wa.me/{{str_replace('+','',$footer_content->f_phone_4)}}">{{$footer_content->f_phone_4}}</a></span>
                </div>                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container border-top f-bottom">
        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center justify-content-lg-between align-items-center py-3 flex-column flex-lg-row">
            <p class="mb-0">© {{date('Y')}} Sama Engineering Ltd. All rights reserved.</p>
            <div>
              <div class="social_Links">
                <a href="" target="_blank"><i class="fa fa-instagram"></i></a>
                <a href="https://pk.linkedin.com/company/sama-engineering" target="_blank"><i class="fa fa-linkedin"></i></a>
                <a href="https://www.youtube.com/user/SamaEng786" target="_blank"><i class="fa fa-youtube-play"></i></a>
                <a href="https://twitter.com/SAMAENGINEERING" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="https://www.facebook.com/sama.engineering" target="_blank"><i class="fa fa-facebook"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
      <div class="Flyoutbtn">
        <span class="bg-TColor text-white"><i class="fa fa-phone"></i></span>
        <div class="CFrom bg-XLGray shadow p-5">          
            <i class="fa fa-envelope-o text-danger position-absolute"></i>
            <h4>Contact us</h4>
            <p>With the Pakistan's No. 1 packaging machines & processing systems provider.</p>
        
                  <div class="form-floating mb-2">
                    <input type="text" class="form-control" id="cwname" name="name" placeholder="Full Name" required>
                    <label for="name">Name</label>
                  </div>
                  <div class="form-floating mb-2">
                    <input type="text" class="form-control" id="cwcompany" name="company" placeholder="Company Name" required>
                    <label for="cname">Company</label>
                  </div>
                  <div class="form-floating mb-2">
                    <input type="email" class="form-control" id="cwemail" name="email" placeholder="abc@domain.com" required>
                    <label for="email">Email</label>
                  </div>
                  <div class="form-floating mb-2">
                    <input type="text" class="form-control" id="cwphone" name="phone" placeholder="+92 000-0000000" required>
                    <label for="phone">Phone Number</label>
                  </div>
              <button type="button" class="btn w-100 rounded-0 btn-danger py-2 mt-3" onClick="sendNowWidget($(this))">Send Now</button>
            
        </div>
      </div>
      <div class="Flyoutbtn Flyoutbtn2">
        <span class="bg-BColor text-white"><i class="fa fa-envelope"></i></span>
        <span class="bg-BColor"><a href="mailto:{{$footer_content->f_email_1}}" class="text-white">{{$footer_content->f_email_1}}</a></span>
      </div>
      <div class="Flyoutbtn Flyoutbtn3">
        <span class="bg-success text-white"><i class="fa fa-whatsapp"></i></span>
        <span class="bg-success"><a href="https://wa.me/923452266203" class="text-white">+923452266203</a></span>        
      </div> 