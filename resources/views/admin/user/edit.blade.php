@extends('admin.inc.master')

@section('edit')
<div class="d-flex justify-content-end col-8">
<form method="POST" action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  <div class="form-group">
      <label for="name" style="font-weight:bold;">
          userName :
      </label>
      <input type="text" class="form-control" name="name" value="{{ $user->name }}">
  </div>
              @error('name')
                {{ $message }}
              @enderror
  <div class="form-group">
      <label for="email" style="font-weight:bold;">
          Email :
      </label>
      <input type="text" class="form-control" name="email" value="{{ $user->email }}">
  </div>

             @error('email')
                  {{ $message }}
              @enderror
  <div class="form-group">
    <label for="phone" style="font-weight:bold;">
        Phone :
    </label>
    <input type="text" class="form-control" name="phone" value="{{ $user->phone }}">
</div>

        @error('phone')
            {{ $message }}
        @enderror
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

  <input type="submit" value="update User" class="form-control btn btn-success">
  <br><br><br>

</form>
</div>
@endsection

