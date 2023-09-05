@extends('layouts.back-end.master')
@section('content')
<div class="col-lg-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">ผู้ใช้งาน</h4>
                  <div class="table-responsive text-nowrap">
                    <table class="table">
                      <thead class ="table-dark">
                        <tr>
                          <th>ID</th>
                          <th>ชื่อ</th>
                          <th>อีเมล</th>
                          <th>วันที่สมัคร</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($user as $users)
                        <tr>
                          <td>{{ $users->id }}</td>
                          <td>{{ $users->name }}</td>
                          <td>{{ $users->email }}</td>
                          <td>{{ $users->created_at }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection