@extends('layouts.admin.admin_layout')

@section('title')
Issued Books
@endsection

@section('content')
<div class="search-box d-flex mb-2">
    <h3>Danh sách mượn trả</h3>
    <form class="form-inline ml-auto">
        <label class="radio-label mr-3">
            <input
                class="mr-2"
                type="radio"
                name="type"
                value="docgia"
                checked="checked" />Theo tên độc giả
        </label>
        <label class="radio-label mr-3">
            <input
                class="mr-2"
                type="radio"
                name="type"
                value="sach" />Theo tên sách
        </label>
        <input
            class="form-control mr-3"
            type="text"
            placeholder="Từ khóa..."
            aria-label="Search"
            name="q" />
        <button class="btn btn-outline-info mr-2">Tìm kiếm</button>
    </form>
</div>
<table class="table table-striped">
    <tr>
        <th>#</th>
        <th>Tên độc giả</th>
        <th>Tên sách</th>
        <th>Tên nhân viên</th>
        <th>Tình trạng</th>
    </tr>
    @if (count($items))
        @foreach ($items as $item)
            <tr>
                <td>{{ $item['user_id'] }}</td>
                <td>{{ $item['username'] }}</td>
                <td>{{ $item['bookname'] }}</td>
                <td>{{ $item['admin'] }}</td>
                <td>
                    @if ($item['issued'])
                        Đã trả
                    @else
                        Chưa trả
                    @endif
                </td>
            </tr>
        @endforeach
    @else
        <tr>
            <td>Không có dữ liệu</td>
        </tr>
    @endif
</table>
@endsection