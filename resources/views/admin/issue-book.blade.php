@extends('layouts.admin.admin_layout')

@section('title')
Issue Book
@endsection

@section('content')

<form action="" method="post" class="row">
    <div class="col-4">
        <div class="form-group">
            <label class="col-form-label-sm" for="docgia">Mã độc giả</label>
            <input type="text" class="form-control form-control-sm" id="docgia" name="docgia"
                list="dsdocgia" aria-describedby="docgia"
                placeholder="Nhập mã độc giả" required>
            <datalist id="dsdocgia">
                @foreach($users as $user)
                <option value="{{$user['id']}}">{{$user['name']}}</option>
                @endforeach
            </datalist>
        </div>
        <div class="form-group">
            <label class="col-form-label-sm" for="sach">Mã sách</label>
            <input type="text" class="form-control form-control-sm" id="sach" name="sach"
                list="dssach" aria-describedby="sach"
                placeholder="Nhập mã sách" required>
            <datalist id="dssach">
                @foreach($books as $book)
                <option value="{{$book['id']}}">{{$book['name']}}</option>
                @endforeach
            </datalist>
        </div>
        <div class="form-group">
            <label class="col-form-label-sm" for="issueDate">Ngày mượn</label>
            <input type="date" class="form-control form-control-sm" id="issueDate"
                name="issueDate" aria-describedby="issueDate" min="{{$date}}"
                value="{{$date}}" required>
        </div>
        <div class="form-group">
            <label class="col-form-label-sm" for="ghichu">Ghi chú</label>
            <textarea class="form-control form-control-sm" id="ghichu" name="ghichu"
                rows="3"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-sm">Cho mượn</button>
            <button type="reset" class="btn btn-secondary btn-sm">Hủy</button>
        </div>
    </div>
</form>

@endsection