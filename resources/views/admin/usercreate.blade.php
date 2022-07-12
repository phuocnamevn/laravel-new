@include('head')
<div class="row" style="margin-top: 8px;">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="col-7">
    <h2 class="float-start">Create a User </h2>
    <a href="/admin/user" class="btn btn-primary float-end">Back</a>
</div>
</div>
    <div class="col-7">
<form class="row g-3 needs-validation" method="post" action="/admin/user/create">
  @csrf
  <div class="col-md-12 ">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
  </div>
  <div class="col-md-12 ">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="col-md-6 ">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="col-md-6 ">
    <label for="exampleInputPassword2" class="form-label">Password confirm</label>
    <input type="password" class="form-control" id="exampleInputPassword2">
  </div>
  <div class="col-md-12 ">
    <label for="add" class="form-label">Address</label>
    <input type="text" class="form-control" id="add" aria-describedby="emailHelp">
  </div>
  <div class="col-md-12 ">
    <label for="fb" class="form-label">Facebook link</label>
    <input type="url" class="form-control" id="fb" aria-describedby="emailHelp" placeholder="https://example.com">
  </div>
  <div class="col-md-12 ">
    <label for="ytb" class="form-label">Youtube</label>
    <input type="url" class="form-control" id="ytb" aria-describedby="emailHelp" placeholder="https://example.com">
  </div>
  <div class="col-md-12 ">
    <label for="desc" class="form-label">Description</label>
    <textarea type="text" class="form-control" id="desc" aria-describedby="emailHelp"></textarea>
  </div>
  <div class="col-md-12 text-center">
  <button type="submit" class="btn btn-primary">Save</button>
  <button type="reset" class="btn btn-secondary">Reset</button>
  </div>
</form>
    </div>
@include('foot')