@extends('layouts.adminbase')

@section('title', 'Show Category :'.$data->title)

@section('content')

 <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
       <div class="container-fluid">
         <div class="row mb-2">
           <div class="col-sm-3">
             <a href="{{route('admin.category.edit',['id'=>$data->id])}}" class="btn btn-block bg-gradient-info" >Edit</a>
           </div>
           <div class="col-sm-3">
             <a href="{{route('admin.category.destroy',['id'=>$data->id])}}" onclick="return confirm('Deleting! Are you sure?')" class="btn btn-block bg-gradient-danger" >Delete</a>
           </div>
           <div class="col-sm-6">
             <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
               <li class="breadcrumb-item active">Show Category</li>
             </ol>
           </div>
         </div>
       </div><!-- /.container-fluid -->
     </section>

     <!-- Main content -->
     <section class="content">

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Details about data</h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                    <tr>
                      <th style="width: 150px">Id</th>
                      <td>{{$data->id}}</td>
                    </tr>
                    <tr>
                      <th>Title</th>
                      <td>{{$data->title}}</td>
                    </tr>

                    <tr>
                      <th>Keywords</th>
                      <td>{{$data->keywords}}</td>
                    </tr>

                    <tr>
                      <th>Description</th>
                      <td>{{$data->description}}</td>
                    </tr>
                    <tr>
                      <th>Image</th>
                      <td>{{$data->image}}</td>
                    </tr>
                    <tr>
                      <th>Status</th>
                      <td>{{$data->status}}</td>
                    </tr>

                    <tr>
                      <th>Created Data</th>
                      <td>{{$data->created_at}}</td>
                    </tr>
                    <tr>
                      <th>Updated Data</th>
                      <td>{{$data->updated_at}}</td>
                    </tr>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

     </section>
     <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->

@endsection
