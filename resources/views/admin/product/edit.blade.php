@extends('layouts.adminbase')

@section('title', 'Edit Product :'.$data->title)

@section('content')

 <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
       <div class="container-fluid">
         <div class="row mb-2">
           <div class="col-sm-6">
             <h1>Edit Product:{{$data->title}}</h1>
           </div>
           <div class="col-sm-6">
             <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
               <li class="breadcrumb-item active">Edit Product</li>
             </ol>
           </div>
         </div>
       </div><!-- /.container-fluid -->
     </section>

     <!-- Main content -->
     <section class="content">

       <!-- Default box -->
       <div class="card card-primary">
                     <div class="card-header">
                       <h3 class="card-title">Product elements</h3>
                     </div>
                     <!-- /.card-header -->
                     <!-- form start -->
                     <form role="form" action="{{route('admin.product.update',['id'=>$data->id])}}" method="post">
                     @csrf
                       <div class="card-body">
                       <div class="form-group">
                         <label for="exampleInputEmail1"> Parent Product </label>
                         <select class="form-control select2" name="category_id" style="">

                         </select>
                       </div>


                         <div class="form-group">
                           <label for="exampleInputEmail1">Title</label>
                           <input type="text" class="form-control" name="title" value="{{$data->title}}" >
                         </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1">Keywords</label>
                            <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}" >
                           </div>

                           <div class="form-group">
                              <label for="exampleInputEmail1">Description</label>
                              <input type="text" class="form-control" name="description" value="{{$data->description}}" >
                           </div>

                           <div class="form-group">
                               <label for="exampleInputEmail1">Price</label>
                               <input type="number" class="form-control" name="price" value="{{$data->price}}">
                           </div>
                            <div class="form-group">
                               <label for="exampleInputEmail1">Quantity</label>
                               <input type="number" class="form-control" name="quantity" value="{{$data->quantity}}">
                            </div>
                           <div class="form-group">
                                <label for="exampleInputEmail1">Minimum Quantity</label>
                                <input type="number" class="form-control" name="minquantity"value="{{$data->minquantity}}">
                           </div>
                           <div class="form-group">
                                <label for="exampleInputEmail1">Tax %</label>
                                <input type="number" class="form-control" name="tax" value="{{$data->tax}}">
                           </div>
                           <div class="form-group">
                               <label for="exampleInputEmail1">Detail info</label>
                               <textarea class="form-control" name="detail" >
                              {{$data->detail}}
                            </textarea>
                           </div>

                         <div class="form-group">
                           <label for="exampleInputFile">Image</label>
                           <div class="input-group">
                             <div class="custom-file">
                               <input type="file" class="custom-file-input" name="image">
                               <label class="custom-file-label" for="exampleInputFile">Choose image file</label>
                             </div>

                           </div>
                         </div>

                          <div class="form-group">
                             <label>Status</label>
                             <select class="form-control" name="status">
                             <option selected>{{$data->status}}</option>
                             <option>True</option>
                             <option>False</option>

                              </select>
                           </div>

                       </div>
                       <!-- /.card-body -->

                       <div class="card-footer">
                         <button type="submit" class="btn btn-primary">Update Data</button>
                       </div>
                     </form>
                   </div>
       <!-- /.card -->

     </section>
     <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->

@endsection
