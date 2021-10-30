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
                <h3 class="card-title">Edit trendy offer-- >></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="{{route('trendy.update')}}" enctype="multipart/form-data" method="post" role="form" id="quickForm">
                 @csrf

                <div class="card-body">
                  <div class="form-group">
                 
                  <div class="form-group">
                    <label for="exampleInputPassword1"> trendy offer image </label>
                    <input type="file" name="trendy_fashion_image" class="form-control" id="exampleInputPassword1" >
                     <p class="text-danger">{{$errors->first('image')}}</p>


                     @if($trendys->trendy_fashion_image) 

                           <img src="{{asset($trendys->trendy_fashion_image)}}" alt="no image " height="70px" width="90px" >
                     @else 
                          no image 
                     @endif


                  </div>
                   <label for="exampleInputEmail1"> trendy offer </label>
                    <input type="text" name="trendy_fashion_offer" class="form-control" id="exampleInputEmail1" value = "{{$trendys->trendy_fashion_offer}}" >
                    <p class="text-danger">{{$errors->first('name')}}</p>

                  </div>
                
                </div>
                <input type="hidden" name="id" value="{{$trendys->id}}" />
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