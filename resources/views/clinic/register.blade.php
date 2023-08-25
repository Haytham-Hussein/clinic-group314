@extends("clinic.inc.master")


@section("register")

<div class="d-flex flex-column gap-3 account-form mx-auto mt-5 col-5">
  <form class="form">
      <div class="form-items">
          <div class="mb-3">
              <label class="form-label required-label" for="name">Name</label>
              <input type="text" class="form-control" id="name" required>
          </div>
          <div class="mb-3">
              <label class="form-label required-label" for="phone">Phone</label>
              <input type="tel" class="form-control" id="phone" required>
          </div>
          <div class="mb-3">
              <label class="form-label required-label" for="email">Email</label>
              <input type="email" class="form-control" id="email" required>
          </div>
          <div class="mb-3">
              <label class="form-label required-label" for="password">password</label>
              <input type="password" class="form-control" id="password" required>
          </div>
      </div>
      <button type="submit" class="btn btn-primary">Create account</button>
  </form>
  <div class="d-flex justify-content-center gap-2">
      <span>already have an account?</span><a class="link" href="{{route("clinic.login")}}"> login</a>
  </div>
</div>
@endsection