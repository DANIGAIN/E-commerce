@extends('admin.master')

@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit brand -- >></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="{{route('brand.update')}}" enctype="multipart/form-data" method="post" role="form" id="quickForm">
                 @csrf

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$brand->name}}" placeholder="Enter brand  name ">
                    <p class="text-danger">{{$errors->first('name')}}</p>

                  </iv>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Image </label>
                    <input type="file" name="image" class="form-control" id="exampleInputPassword1"  placeholder="Password">
                     <p class="text-danger">{{$errors->first('image')}}</p>


                     @if($brand->image) 

                           <img src="{{asset($brand->image)}}" alt="no image " height="70px" width="90px" >
                     @else 
                          no image 
                     @endif


                  </div>
                
                </div>
                <input type="hidden" name="id" value="{{$brand->id}}" />
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    @endsection