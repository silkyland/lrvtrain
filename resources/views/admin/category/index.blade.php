@extends('admin.layout.adminmaster')
@section('content')
<h1 class="h3 mb-4 text-gray-800">หมวดหมู่ข่าว</h1>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    รายการหมวดหมู่
                                    <span class="float-right"><a href="../category/create.html" class="btn btn-sm btn-primary"><i
                                                class="fa fa-plus"></i> เพิ่ม</a></span>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ชื่อหมวดหมู่</th>
                                            <th>จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. </td>

                                            <td>
                                                <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-pen"></i></a>
                                                <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection