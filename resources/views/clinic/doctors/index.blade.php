@extends("clinic.inc.master")


@section("doctors")
<div class="container">
  <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
      <ol class="breadcrumb justify-content-center">
          <li class="breadcrumb-item"><a class="text-decoration-none" href="{{route("clinic.index")}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">doctors</li>
      </ol>
  </nav>
  <div class="d-flex flex-row gap-1 justify-content-start">
    @foreach ($clinicDoctor as $doctor )
  <div class="doctors-grid">
      <div class="card p-2" style="width: 18rem;">
          <img src="{{ asset("ClinicAssets")}}/assets/images/{{$doctor->image}}" class="card-img-top rounded-circle card-image-circle"
              alt="major">
          <div class="card-body d-flex flex-column gap-1 justify-content-center">
              <h4 class="card-title fw-bold text-center">{{$doctor->name}}</h4>
              <h6 class="card-title fw-bold text-center">Major</h6>
              <a href="{{route("clinic.doctor")}}" doctor.html" class="btn btn-outline-primary card-button">Book an
                  appointment</a>
          </div>
      </div>    
      </div>
  </div>
  @endforeach
</div>
@endsection