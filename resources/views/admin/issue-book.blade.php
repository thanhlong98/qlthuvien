@extends('layouts.admin.admin_layout')

@section('title')
Issue Book
@endsection

@section('content')

<form action="" method="post" class="row">
    <div class="col-4">
        <div class="form-group">
            <label for="docgia">Mã độc giả</label>
            <input
                type="text"
                class="form-control"
                id="docgia"
                name="docgia"
                list="dsdocgia"
                aria-describedby="docgia"
                placeholder="Nhập mã độc giả">
            <datalist id="dsdocgia">
                @foreach($users as $user)
                    <option value="{{$user['id']}}">{{$user['name']}}</option>
                @endforeach
            </datalist>
        </div>
        <div class="form-group">
            <label for="sach">Mã sách</label>
            <input
                type="text"
                class="form-control"
                id="sach"
                name="sach"
                list="dssach"
                aria-describedby="sach"
                placeholder="Nhập mã sách">
            <datalist id="dssach">
                @foreach($books as $book)
                    <option value="{{$book['id']}}">{{$book['name']}}</option>
                @endforeach
            </datalist>
        </div>
        <div class="form-group">
            <label for="issueDate">Ngày mượn</label>
            <input
                type="date"
                class="form-control"
                id="issueDate"
                name="issueDate"
                aria-describedby="issueDate"
                min="{{$date}}"
                value="{{$date}}" >
        </div>
        <div class="form-group">
            <label for="ghichu">Ghi chú</label>
            <input
                type="text"
                class="form-control"
                id="ghichu"
                name="ghichu"
                aria-describedby="ghichu"
                placeholder="Nhập mã sách" />
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Cho mượn</button>
            <button type="reset" class="btn btn-secondary">Hủy</button>
        </div>
    </div>
</form>

@endsection