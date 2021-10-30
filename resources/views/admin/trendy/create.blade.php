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
                <h3 class="card-title">create  trendy offer ---> </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="{{route('trendy.store')}}" enctype="multipart/form-data"  method ="post" role="form" id="quickForm">
                @csrf
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputimage1"> Trendy fashin image</label>
                    <input type="file" name="trendy_fashion_image" class="form-control"  id="exampleInputimage1">
                     <p class ="text-danger"> {{$errors->first('background_image')}}</p>
                  </div>
                


                   <div class="form-group">
                    <label for="exampleInputoffer"> Trendy offer </label>
                    <input type="text" name="trendy_fashion_offer" class="form-control" value="" id="exampleInputoffer" placeholder= " offer ">
                    <p class="text-danger">{{$errors->first('hadding2')}} </p>
                    
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