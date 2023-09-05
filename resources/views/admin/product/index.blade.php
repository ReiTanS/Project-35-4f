@extends('layouts.back-end.master')
@section('content')
<div class="col-lg-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">สินค้า</h4>
                  <div class="mt-4">
                    <a href="{{url('admin/product/create')}}" class="btn btn-success">+ เพิ่มข้อมูลสินค้า</a>
                  </div>
                  <div class="table-responsive mt-4">
                    <table class="table table-hover">
                    <thead class ="table-dark">
                        <tr>
                          <th>ลำดับ</th>
                          <th>ชื่อสินค้า</th>
                          <th>รูป</th>
                          <th>ราคา</th>
                          <th>ประเภท</th>
                          <th>การจัดการ</th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Jacob</td>
                          <td>Photoshop</td>
                          <td>Photoshop</td>
                          <td>Photoshop</td>
                          <td>Photoshop</td>
                          <td>
                            <a href="" class="btn btn-warning">แก้ไข</a>
                            <a href="" class="btn btn-danger">ลบ</a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection