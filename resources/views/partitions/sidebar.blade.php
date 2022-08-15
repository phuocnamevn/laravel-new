<div class="container">
    <div class="row">
      <div class="col-md-5 mb-3">
        <ul class="list-group">
          <li class="list-group-item active" aria-current="true">System</li>
          <a href="/admin/user" class="list-group-item list-group-item-action">User management</a>
          <a href="/admin/role" class="list-group-item">Role management</a>
          <a href="/admin/permission" class="list-group-item">Permission management</a>
          <a href="/admin/permission-group" class="list-group-item">Permission group</a>
          <li class="list-group-item active" aria-current="true">Catalog</li>
          <a href="/admin/product" class="list-group-item">Product management</a>
          <a href="/admin/category" class="list-group-item">Category management</a>
        </ul>
      </div>
      @yield('content')
    </div>
  </div>