@extends("clinic.inc.master")

@section("content")
<div class="container-fluid bg-blue text-white pt-3">
  <div class="container pb-5">
      <div class="row gap-2">
          <div class="col-sm order-sm-2">
              <img src="{{ asset('ClinicAssets') }}/assets/images/banner.jpg" class="img-fluid banner-img banner-img" alt="banner-image"
                  height="200">
          </div>
          <div class="col-sm order-sm-1">
              <h1 class="h1">Have a Medical Question?</h1>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa nesciunt repellendus itaque,
                  laborum
                  saepe
                  enim maxime, delectus, dicta cumque error cupiditate nobis officia quam perferendis
                  consequatur
                  cum
                  iure
                  quod facere.</p>
          </div>
      </div>
  </div>
</div>

<div class="container">
  
    

  <h2 class="h1 fw-bold text-center my-4">majors</h2>

  @foreach ($clinicMajor as $major )
  <div class="d-flex flex-wrap gap-4 justify-content-center">
  
      <div class="card p-2" style="width: 18rem;">
          <img src="{{ asset('ClinicAssets') }}/assets/images/{{$major->image}}" class="card-img-top rounded-circle card-image-circle"
              alt="major">
          <div class="card-body d-flex flex-column gap-1 justify-content-center">
              <h4 class="card-title fw-bold text-center">{{$major->title}}</h4>
              <a href="{{route("clinic.doctors")}}" class="btn btn-outline-primary card-button">Browse Doctors</a>
          </div>
      </div>
      
    </div>
    @endforeach
  </section>


@endsection
