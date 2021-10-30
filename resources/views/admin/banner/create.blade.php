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
                <h3 class="card-title">Create  banner  -- >></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="{{route('banner.store')}}" enctype="multipart/form-data" method="post" role="form" id="quickForm">
                 @csrf

                  <div class="form-group">

                           <label for="exampleInputImage1">Background_image </label>
                           <input type="file" name="background_image" class="form-control" id="exampleInputImage1" >
                           <p class="text-danger">{{$errors->first('background_image')}}</p>
                  </div>

                 <div class="form-group">
                           <label for="exampleInputPassword2">Image</label>
                            <input type="file" name="image" class="form-control" id="exampleInputPassword2" placeholder="Password">
                            <p class="text-danger">{{$errors->first('image')}}</p>
                  </div>


                  <div class="card-body">
                     <div class="form-group">
                          <label for="exampleInputEmail1">Hadding</label>
                           <input type="text" name="hadding" class="form-control" id="exampleInputEmail1" placeholder ="Enter hadding ">
                           <p class="text-danger">{{$errors->first('hadding')}}</p>

                  </div>
                  <div class="card-body">
                     <div class="form-group">
                      <label for="exampleInputtitle">Title</label>
                       <input type="text" name="title" class="form-control" id="exampleInputtitle" placeholder="Enter title">
                    <p class="text-danger">{{$errors->first('title')}}</p>

                 </div>
                
                </div>
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