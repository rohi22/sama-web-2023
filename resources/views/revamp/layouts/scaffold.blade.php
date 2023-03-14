<!doctype html>
<html lang="en">
  <head>
      
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="canonical" href="{{url()->current()}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name=robots content="index, follow">
    
    
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="{{asset('uploads/logos/'.$logos->favicon_logo)}}">
    <title>@stack('title') Sama Engineering - All Kinds of Industrial Processing & Packaging Machines</title>
    @include('revamp.partials.style')
    @stack('styles')
    @yield('og_page_wise')
    @yield('og_product_wise')
    @yield('twitter')
  </head>
  <body>
    @include('revamp.partials.header')
    @yield('content')
    @include('revamp.partials.footer')
    @include('revamp.partials.script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js" integrity="sha512-efUTj3HdSPwWJ9gjfGR71X9cvsrthIA78/Fvd/IN+fttQVy7XWkOAXb295j8B3cmm/kFKVxjiNYzKw9IQJHIuQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @if(Session::has('success'))
        <script>
            $.notify("{{Session::get('success')}}", "success");
        </script>
    @endif
    @if(Session::has('error'))
        <script>
            $.notify("{{Session::get('error')}}", "error");
        </script>
    @endif
    <script>
        function sendNowWidget(elm){
        
            var name = $("#cwname").val();
            var company = $("#cwcompany").val();
            var email = $("#cwemail").val();
            var phone = $("#cwphone").val();
            
            if(name != "" || company != "" || email != "" || phone != ""){
                
                    $("#cwname").val('');
                    $("#cwcompany").val('');
                    $("#cwemail").val('');
                    $("#cwphone").val('');
                    
                    $.ajax({
                        type : "GET",
                        url  : "{{route('contactUsWidget')}}",
                        data : {
                           'name' : name,
                           'company' : company,
                           'phone' : phone,
                           'email' : email,
                        },
                        success : function(res){
                            if(res.success == true){
                                $.notify("Thank You, We'll Contact you","success");
                            }
                            else{
                                $.notify("Something Went Wrong","error");
                            }
                        },
                        error : function(res){
                            $.notify("Something Went Wrong","error");
                        }
                    });
            }
            else{
                 $.notify("All fields are required", "error");
            }
            
            
        }
    </script>
    @stack('scripts')
  </body>
</html>