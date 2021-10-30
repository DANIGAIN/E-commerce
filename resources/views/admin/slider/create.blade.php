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
                <h3 class="card-title">create ---> </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="{{route('slider.store')}}" enctype="multipart/form-data"  method ="post" role="form" id="quickForm">
                @csrf
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputimage1">Backgrount_Image</label>
                    <input type="file" name="background_image" class="form-control"  id="exampleInputimage1">
                     <p class ="text-danger"> {{$errors->first('background_image')}}</p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputimage2">Banner</label>
                    <input type="file" name="banner" class="form-control"  id="exampleInputimage2">
                     <p class ="text-danger"> {{$errors->first('banner')}}</p>
                  </div>


                  <div class="form-group">
                    <label for="exampleInputHadding1"></label>
                    <input type="name" name="hadding1" class="form-control" value="" id="exampleInputHadding1" placeholder="Enter Hadding1  ">
                    <p class="text-danger">{{$errors->first('hadding1')}} </p>
                    
                  </div>

                   <div class="form-group">
                    <label for="exampleInputHadding2"></label>
                    <input type="name" name="hadding2" class="form-control" value="" id="exampleInputHadding1" placeholder="Enter Hadding2  ">
                    <p class="text-danger">{{$errors->first('hadding2')}} </p>
                    
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control" value = "" id="exampleInputEmail1" placeholder="Enter title ">
                    <p class ="text-danger"> {{$errors->first('title')}}</p>
                   </div>

                  
                  
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="status" class="custom-control-input"  id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1"> Active </label>
                    </div>
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