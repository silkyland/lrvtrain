@extends('admin.layout.adminmaster')

@section('content')
<h1>เพิ่มหมวดหมู่</h1>
<form method="post" action="/admin/category/update" class="form">
    @csrf()
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <input type="hidden" name="id" value="{{ $category->id}}" />
    <div class="form-group">
        <label for="inputName">กรอกชื่อหมวหมู่</label>
        <input type="text" name="name" value="{{ $category->name }}" id="inputName" class="form-control" required>
    </div>
    <button class='btn btn-primary'>บันทึก</button>
</form>
@endsection
