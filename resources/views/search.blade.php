@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="form">
                <form>
                    <div class="form-group row">
                        <label for="book-name"
                            class="col-sm-4 col-form-label col-form-label-sm">Tên
                            sách</label>
                        <div class="col-sm-8">
                            <input type="text" name="name"
                                class="form-control form-control-sm ip1" 
                                id="book-name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="author"
                            class="col-sm-4 col-form-label col-form-label-sm">Tác
                            giả</label>
                        <div class="col-sm-8">
                            <input type="text" name="author"
                                class="form-control form-control-sm ip2"
                                id="author">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="publisher"
                            class="col-sm-4 col-form-label col-form-label-sm">Nhà
                            xuất
                            bản</label>
                        <div class="col-sm-8">
                            <input type="text" name="publisher"
                                class="form-control form-control-sm ip3"
                                id="publisher">
                        </div>
                    </div>
                    <div class="row">
                        <div class="ml-auto col-8">
                            <button id="btn-search"
                                class="btn btn-primary btn-sm">Tìm
                                kiếm</button>
                        </div>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
    <div class="row result mt-5">
    </div>
    <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script type="text/javascript">
        $('button#btn-search').click(function(e) {
            e.preventDefault();
            $name = $('.ip1').val();
            $author = $('.ip2').val();
            $publisher = $('.ip3').val();

            var _token = $('input[name="_token"]').val();
            $.ajax({
                method: 'POST',
                url: '{{ route('search') }}',
                data: {
                    'name': $name,
                    'author': $author,
                    'publisher': $publisher,
                    _token: _token
                },
                success: function(data) {
                    $('.result').html(data);
                }
            });
        });
    </script>
</div>
@endsection