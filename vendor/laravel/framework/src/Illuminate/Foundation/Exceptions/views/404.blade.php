@extends('errors::illustrated-layout')

@section('code', '404')
@section('title', __('Page Not Found'))

@section('image')
<div style="background-image: url({{ asset('/svg/404.svg') }});" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
</div>
<script type="text/javascript">
    window.setTimeout(function () {
        location.href = "{{url('/')}}";
    }, 4000);

</script>
@endsection

@section('message', __('Sorry, the page you are looking for could not be found.'))
