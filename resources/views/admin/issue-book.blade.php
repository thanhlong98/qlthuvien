@extends('layouts.admin.admin_layout')

@section('title')
Issue Book
@endsection

@section('content')

<form action="{{ route('admin.issue-book') }}" method="POST" class="row">
    @csrf
    <div class="col-4">
        <div class="form-group">
            <label class="col-form-label-sm" for="docgia">Mã độc giả</label>
            <input type="text" class="form-control form-control-sm" id="docgia"
        name="user_id" list="dsdocgia" value="{{ old('user_id') }}"
                placeholder="Nhập mã độc giả">
            <datalist id="dsdocgia">
                @foreach($users as $user)
                <option value="{{$user['id']}}">{{$user['name']}}</option>
                @endforeach
            </datalist>
        </div>
        <div class="form-group">
            <label class="col-form-label-sm" for="sach">Mã sách</label>
            <input type="text" class="form-control form-control-sm" id="sach" value="{{ old('book_id') }}"
                name="book_id" list="dssach"
                placeholder="Nhập mã sách">
            <datalist id="dssach">
                @foreach($books as $book)
                <option value="{{$book['id']}}">{{$book['name']}}</option>
                @endforeach
            </datalist>
        </div>
        <div class="form-group">
            <label class="col-form-label-sm" for="issueDate">Ngày mượn</label>
            <input type="date" class="form-control form-control-sm"
                id="issueDate" name="issueDate"
                min="{{$date}}" value="{{$date}}">
        </div>
        <div class="form-group">
            <label class="col-form-label-sm" for="ghichu">Ghi chú</label>
            <textarea class="form-control form-control-sm" id="ghichu"
                name="ghichu" rows="3"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-sm">Cho
                mượn</button>
            <button type="reset" class="btn btn-secondary btn-sm">Hủy</button>
        </div>
    </div>
    {{ $errors->first('user_id') }}
    {{ $errors->first('book_id') }}
</form>

@endsection