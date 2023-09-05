@extends('layouts.back-end.master')
@section('content')
<div class="col-lg-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">ประเภทสินค้า</h2>
                  <div class="table-responsive pt-3">
                      <a href="{{ url('admin/typeproduct/create') }}" class="btn btn-success">+ เพิ่มข้อมูลประเภทสินค้า</a>
                    <table class="table table-bordered mt-3">
                      <thead>
                        <tr>
                          <th>ลำดับ</th>
                          <th>ชื่อประเภทสินค้า</th>
                          <th>วันที่บันทึกรายการ</th>
                          <th>วันที่อัพเดทรายการ</th>
                          <th>การจัดการ</th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach($category as $type)
                       <tr>
                        <td>{{$type->category_id}}</td>
                        <td>{{$type->name}}</td>
                        <td>{{$type->created_at}}</td>
                        <td>{{$type->updated_at}}</td>
                        <td>
                          <a href="{{url('admin/typeproduct/edit/'.$type->category_id)}}" class="btn btn-warning">แก้ไข</a>
                          <a href="{{url('admin/typeproduct/delete/'.$type->category_id)}}" class="btn btn-danger">ลบ</a>
                        </td>
                      </tr>

                       @endforeach
                      </tbody>
                    </table>
                    <br><br>
              {{ $category->links('pagination::bootstrap-5') }}
                  </div>
                </div>
              </div>
              
            </div>
@endsection