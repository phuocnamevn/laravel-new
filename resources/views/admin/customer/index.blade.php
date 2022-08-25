@extends('layouts.admin.master')
@section('content')
    <div class="col-md-12 mb-3">
        <div class="row" style="background-color: rgb(255, 255, 255);">
            <div class="col-md-12">
                <div class="float-start">
                    <a href="/admin/customer/create" class="btn btn-primary mb-3">{{ __('messages.create') }}+</a>
                    <form class="d-inline" method="post"
                                        action="{{ route('customer.destroyAll') }}">
                                        @csrf
                                        <button type="submit"
                                            onclick="return confirm('{{ __('messages.do_you_want_to_delete') }}')"
                                            class="btn btn-danger mb-3"> Xóa tất cả </button>
                                    </form>
                    <a href="/admin/customer/create" class="btn btn-danger mb-3">Chuyển người quản lý</a>
                </div>
                <div class="float-end">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Tìm kiếm" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">Tìm</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="background-color: rgb(241, 241, 241);">
            <div class="col-md-12">
                <div class="float-start mb-3">
                    <h5>Danh sách thông tin KH </h5>
                    <button type="button" class="btn btn-success">Xuất excel khách hàng</button>
                    <button type="button" class="btn btn-success">Xuất excel khách hàng chi tiết</button>
                </div>
            </div>
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"><input type="checkbox" class="form-check-input"></th>
                        <th scope="col">STT</th>
                        <th scope="col">Loại khách</th>
                        <th scope="col">Mã KH</th>
                        <th scope="col">Thông tin KH</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Điện thoại</th>
                        <th scope="col">Email</th>
                        <th scope="col">Người tạo</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($customer))
                        @foreach ($customer as $value => $item)
                            <tr>
                                <td><input type="checkbox" class="form-check-input" name="select[]" value="{{ $item->id }}"></td>
                                <td>{{ $value }}</td>
                                <td>{{ $item->type }}</td>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->users->name }}</td>
                                <td><a href="{{ route('customer.edit', $item->id) }}"
                                        class="btn btn-warning">{{ __('messages.edit') }}</a> 
                                    <form class="d-inline" method="post"
                                        action="{{ route('customer.destroy', $item->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('{{ __('messages.do_you_want_to_delete') }}')"
                                            class="btn btn-danger"> {{ __('messages.delete') }} </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="text-center" colspan=100%>Không có dữ liệu</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            @if (!empty($customer))
                <div class="col-md-12 text-center">
                    <ul class="pagination">
                        {{ $customer->links() }}
                    </ul>
                </div>
            @endif
        </div>
    </div>
@endsection
