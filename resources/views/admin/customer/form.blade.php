@extends('layouts.admin.master')
@section('content')
    <div class="col-md-12 mb-3">
        <div class="row">
            <div class="col-md-12">
                <h2 class="float-start">Customer</h2>
                <a href="/admin/customer" class="btn btn-primary float-end">{{ __('messages.back') }}</a>
            </div>
            <div class="col-md-12">
                @if (!empty($customer))
                    <form class="g-3 needs-validation" method="post"
                        action="{{ route('customer.update', $customer->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-md-7" style="background-color: rgb(221, 215, 215);">
                                <div class="col-md-7">
                                    {{-- <div class="col-auto mb-3">
                                        <label for="" class="form-label">Mã khách hàng</label>
                                        <input type="text" class="form-control" id="" name="makh"
                                            aria-describedby="" disabled>
                                        @error('error')
                                            <span class="text-danger text-left">{{ $message }}</span>
                                        @enderror
                                    </div> --}}
                                    <div class="col-auto mb-3">
                                        <label for="" class="form-label">Tên KH</label>
                                        <input type="text" class="form-control" id="" name="name"
                                            aria-describedby="" value="{{ $customer->name }}">
                                        @error('name')
                                            <span class="text-danger text-left">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-auto mb-3">
                                        <label for="" class="form-label">Địa chỉ</label>
                                        <input type="text" class="form-control" id="" name="address"
                                            aria-describedby="" value="{{ $customer->address }}">
                                        @error('address')
                                            <span class="text-danger text-left">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-auto mb-3">
                                        <label for="" class="form-label">Điện thoại</label>
                                        <input type="number" class="form-control" id="" name="phone"
                                            aria-describedby="" value="{{ $customer->phone }}">
                                        @error('phone')
                                            <span class="text-danger text-left">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-auto mb-3">
                                        <label for="" class="form-label">Số zalo</label>
                                        <input type="number" class="form-control" id="" name="zalo"
                                            aria-describedby="" value="{{ $customer->zalo }}">
                                        @error('zalo')
                                            <span class="text-danger text-left">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-auto mb-3">
                                        <label for="" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="" name="email"
                                            aria-describedby="" value="{{ $customer->email }}">
                                        @error('email')
                                            <span class="text-danger text-left">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-auto mb-3">
                                        <label for="" class="form-label">Người liên hệ</label>
                                        <input type="text" class="form-control" id="" name="person_contact"
                                            aria-describedby="">
                                        @error('error')
                                            <span class="text-danger text-left">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-auto mb-3">
                                        <label for="" class="form-label">Chức vụ</label>
                                        <input type="text" class="form-control" id="" name="role"
                                            aria-describedby="">
                                        @error('role')
                                            <span class="text-danger text-left">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-auto mb-3">
                                        <label for="" class="form-label">Tên đơn vị</label>
                                        <input type="text" class="form-control" id="" name="unit_name"
                                            aria-describedby="">
                                        @error('unit_name')
                                            <span class="text-danger text-left">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-auto mb-3">
                                        <label for="" class="form-label">Mã số thuế</label>
                                        <input type="text" class="form-control" id="" name="tax"
                                            aria-describedby="">
                                        @error('tax')
                                            <span class="text-danger text-left">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-auto mb-3">
                                        <label for="" class="form-label">Địa chỉ hóa đơn</label>
                                        <input type="text" class="form-control" id="" name="address_bill"
                                            aria-describedby="">
                                        @error('address_bill')
                                            <span class="text-danger text-left">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-auto mb-3">
                                        <label for="" class="form-label">Tài khoản ngân hàng</label>
                                        <input type="text" class="form-control" id="" name="atm"
                                            aria-describedby="">
                                        @error('atm')
                                            <span class="text-danger text-left">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            @php
                                $selected = collect([$customer->sex]);
                            @endphp
                            <div class="col-md-5">
                                <label for="" class="form-label">Giới tính</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" value="0"
                                        id="flexRadioDefault1" {{ ($selected->contains(0)) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Nam
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" value="1"
                                        id="flexRadioDefault2" {{ ($selected->contains(1)) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Nữ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" value="2"
                                        id="flexRadioDefault3" {{ ($selected->contains(2)) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        Khác
                                    </label>
                                </div>
                                @error('sex')
                                    <span class="text-danger text-left">{{ $message }}</span>
                                @enderror
                                <div class="col-auto mb-3">
                                    <label for="" class="form-label">Loại khách</label>
                                    <select name="type" id="" class="form-control">
                                        <option value="2">VIP</option>
                                        <option value="1">Thông thường</option>
                                        <option value="0">Vãn lai</option>
                                    </select>
                                    @error('type')
                                        <span class="text-danger text-left">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-auto mb-3">
                                    <label for="" class="form-label">Ngày sinh</label>
                                    <input type="date" name="birthday" class="form-control" value="{{ $customer->birthday }}">
                                    @error('birthday')
                                        <span class="text-danger text-left">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="permission_accountant"
                                        value="1" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Chia sẻ quyền cho kế toán
                                    </label>
                                    @error('permission_accountant')
                                        <span class="text-danger text-left">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="lock_create_order"
                                        value="1" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Khóa tạo đơn hàng, khách hàng đã quá hạn mức
                                    </label>
                                    @error('lock_create_order')
                                        <span class="text-danger text-left">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-auto mb-3">
                                    <label for="" class="form-label">Mô tả nợ hạn định</label>
                                    <textarea name="desc_owe" id="" cols="30" rows="3" class="form-control"></textarea>
                                    @error('desc_owe')
                                        <span class="text-danger text-left">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-auto mb-3">
                                    <label for="" class="form-label">Hạn mức nợ cho phép</label>
                                    <input type="text" name="owe_allow" class="form-control">
                                    @error('owe_allow')
                                        <span class="text-danger text-left">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-auto mb-3">
                                    <label for="" class="form-label">Mô tả nợ cho phép</label>
                                    <textarea name="desc_owe_allow" id="" cols="30" rows="3" class="form-control"></textarea>
                                    @error('desc_owe_allow')
                                        <span class="text-danger text-left">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-auto mb-3">
                                    <label for="" class="form-label">Ghi chú khách hàng</label>
                                    <textarea name="note" id="editor1"></textarea>
                                    @error('note')
                                        <span class="text-danger text-left">{{ $message }}</span>
                                    @enderror
                                    <script>
                                        CKEDITOR.replace('editor1');
                                    </script>
                                </div>
                                <input type="hidden" name="id_user_create" value="{{ $customer->id_user_create }}">
                                <div class="col-auto text-center">
                                    <button type="submit" class="btn btn-primary">{{ __('messages.save') }}</button>
                                    <button type="reset" class="btn btn-secondary">{{ __('messages.reset') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                @else
                    <form class="g-3 needs-validation" method="post" action="{{ route('customer.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-7" style="background-color: rgb(221, 215, 215);">
                                <div class="col-md-7">
                                    {{-- <div class="col-auto mb-3">
                                        <label for="" class="form-label">Mã khách hàng</label>
                                        <input type="text" class="form-control" id="" name="makh"
                                            aria-describedby="" disabled>
                                        @error('error')
                                            <span class="text-danger text-left">{{ $message }}</span>
                                        @enderror
                                    </div> --}}
                                    <div class="col-auto mb-3">
                                        <label for="" class="form-label">Tên KH</label>
                                        <input type="text" class="form-control" id="" name="name"
                                            aria-describedby="">
                                        @error('name')
                                            <span class="text-danger text-left">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-auto mb-3">
                                        <label for="" class="form-label">Địa chỉ</label>
                                        <input type="text" class="form-control" id="" name="address"
                                            aria-describedby="">
                                        @error('address')
                                            <span class="text-danger text-left">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-auto mb-3">
                                        <label for="" class="form-label">Điện thoại</label>
                                        <input type="number" class="form-control" id="" name="phone"
                                            aria-describedby="">
                                        @error('phone')
                                            <span class="text-danger text-left">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-auto mb-3">
                                        <label for="" class="form-label">Số zalo</label>
                                        <input type="number" class="form-control" id="" name="zalo"
                                            aria-describedby="">
                                        @error('zalo')
                                            <span class="text-danger text-left">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-auto mb-3">
                                        <label for="" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="" name="email"
                                            aria-describedby="">
                                        @error('email')
                                            <span class="text-danger text-left">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-auto mb-3">
                                        <label for="" class="form-label">Người liên hệ</label>
                                        <input type="text" class="form-control" id="" name="person_contact"
                                            aria-describedby="">
                                        @error('error')
                                            <span class="text-danger text-left">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-auto mb-3">
                                        <label for="" class="form-label">Chức vụ</label>
                                        <input type="text" class="form-control" id="" name="role"
                                            aria-describedby="">
                                        @error('role')
                                            <span class="text-danger text-left">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-auto mb-3">
                                        <label for="" class="form-label">Tên đơn vị</label>
                                        <input type="text" class="form-control" id="" name="unit_name"
                                            aria-describedby="">
                                        @error('unit_name')
                                            <span class="text-danger text-left">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-auto mb-3">
                                        <label for="" class="form-label">Mã số thuế</label>
                                        <input type="text" class="form-control" id="" name="tax"
                                            aria-describedby="">
                                        @error('tax')
                                            <span class="text-danger text-left">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-auto mb-3">
                                        <label for="" class="form-label">Địa chỉ hóa đơn</label>
                                        <input type="text" class="form-control" id="" name="address_bill"
                                            aria-describedby="">
                                        @error('address_bill')
                                            <span class="text-danger text-left">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-auto mb-3">
                                        <label for="" class="form-label">Tài khoản ngân hàng</label>
                                        <input type="text" class="form-control" id="" name="atm"
                                            aria-describedby="">
                                        @error('atm')
                                            <span class="text-danger text-left">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label for="" class="form-label">Giới tính</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" value="0"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Nam
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" value="1"
                                        id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Nữ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" value="2"
                                        id="flexRadioDefault3">
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        Khác
                                    </label>
                                </div>
                                @error('sex')
                                    <span class="text-danger text-left">{{ $message }}</span>
                                @enderror
                                <div class="col-auto mb-3">
                                    <label for="" class="form-label">Loại khách</label>
                                    <select name="type" id="" class="form-control">
                                        <option value="2">VIP</option>
                                        <option value="1">Thông thường</option>
                                        <option value="0">Vãn lai</option>
                                    </select>
                                    @error('type')
                                        <span class="text-danger text-left">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-auto mb-3">
                                    <label for="" class="form-label">Ngày sinh</label>
                                    <input type="date" name="birthday" class="form-control">
                                    @error('birthday')
                                        <span class="text-danger text-left">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="permission_accountant"
                                        value="1" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Chia sẻ quyền cho kế toán
                                    </label>
                                    @error('permission_accountant')
                                        <span class="text-danger text-left">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="lock_create_order"
                                        value="1" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Khóa tạo đơn hàng, khách hàng đã quá hạn mức
                                    </label>
                                    @error('lock_create_order')
                                        <span class="text-danger text-left">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-auto mb-3">
                                    <label for="" class="form-label">Mô tả nợ hạn định</label>
                                    <textarea name="desc_owe" id="" cols="30" rows="3" class="form-control"></textarea>
                                    @error('desc_owe')
                                        <span class="text-danger text-left">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-auto mb-3">
                                    <label for="" class="form-label">Hạn mức nợ cho phép</label>
                                    <input type="text" name="owe_allow" class="form-control">
                                    @error('owe_allow')
                                        <span class="text-danger text-left">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-auto mb-3">
                                    <label for="" class="form-label">Mô tả nợ cho phép</label>
                                    <textarea name="desc_owe_allow" id="" cols="30" rows="3" class="form-control"></textarea>
                                    @error('desc_owe_allow')
                                        <span class="text-danger text-left">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-auto mb-3">
                                    <label for="" class="form-label">Ghi chú khách hàng</label>
                                    <textarea name="note" id="editor1"></textarea>
                                    @error('note')
                                        <span class="text-danger text-left">{{ $message }}</span>
                                    @enderror
                                    <script>
                                        CKEDITOR.replace('editor1');
                                    </script>
                                </div>
                                <input type="hidden" name="id_user_create" value="{{ $id }}"
                                    class="form-control">
                                <div class="col-auto text-center">
                                    <button type="submit" class="btn btn-primary">{{ __('messages.save') }}</button>
                                    <button type="reset" class="btn btn-secondary">{{ __('messages.reset') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    @endsection
