@extends('admin.inc.master')

@section('editdoctor')
<div class="d-flex justify-content-end col-8">
<form method="POST" action="{{ route('doctor.update', $doctor->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  <div class="form-group">
      <label for="name" style="font-weight:bold;">
          userName :
      </label>
      <input type="text" class="form-control" name="name" value="{{ $doctor->name }}">
  </div>
              @error('name')
                {{ $message }}
              @enderror
  <div class="form-group">
      <label for="email" style="font-weight:bold;">
          Image :
      </label>
      <img src="{{ asset('AdminAssets') }}/dist/img/{{$doctor->image}}" style="width: 80px;height: 80px;">
      <br>
      <input type="file" class="form-control" name="image" value="">
  </div>

             @error('image')
                  {{ $message }}
              @enderror
  <div class="form-group">
    <label for="phone" style="font-weight:bold;">
        Major :
    </label>
    <input type="text" class="form-control" name="phone" value="
    
    @foreach ($major as $major)
    {{ $major->title }}
    
      
    @endforeach
    
    
    
    ">
</div>

        @error('major')
            {{ $message }}
        @enderror
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

  <input type="submit" value="update Doctor" class="form-control btn btn-success">
  <br><br><br>

</form>
</div>
@endsection

