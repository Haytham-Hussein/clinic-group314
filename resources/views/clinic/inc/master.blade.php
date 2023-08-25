<!DOCTYPE html>
<html lang="en">

@include('clinic.inc.head')

<body>
    <div class="page-wrapper">
@include('clinic.inc.navbar')
        
      

@yield("content")
@yield("login")
@yield("majors")
@yield("register")
@yield("contact")
@yield("doctor")
@yield("doctors")


    </div>



    @include('clinic.inc.footer')

    @include('clinic.inc.script')
</body>

</html>