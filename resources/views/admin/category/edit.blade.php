@extends('admin.master')
@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Category <small>Edit </small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('categorie.update')}}" method="post" id="quickForm" enctype="multipart/form-data">
                @csrf
              <div class="card-body">

                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" name="name" value="{{$categorys->name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                  <p class="text-danger"> {{ $errors->first('name') }} </p>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Icon</label>
                  <input type="file" name="icon" class="form-control" id="exampleInputPassword1" >
                  <img src="{{asset($categorys->icon)}}" height="90px" width="70px" alt="no image">
                </div>
 
                <div class="form-group">
                  <label for="exampleInputPassword1">Image</label>
                  <input type="file" name="image" class="form-control" id="exampleInputPassword1" >
                  <img src="{{asset($categorys->image)}}" height="90px" width="70px" alt="no image">
                </div>

                <div class="form-group mb-0">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="status"   class="custom-control-input" id="exampleCheck1">
                    <label class="custom-control-label" for="exampleCheck1">Active </label>
                  </div>
                </div>
              

              <div class="form-group mb-0">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="top_category" class="custom-control-input" id="top_category">
                  <label class="custom-control-label" for="top_category">Top Category</label>
                </div>
              </div>
           

            <div class="form-group mb-0">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" name="big_menu" class="custom-control-input" id="big_menu">
                <label class="custom-control-label" for="big_menu">Big Menu</label>
              </div>
            </div>
            <input type="hidden" name="id" value="{{$categorys->id}}" />
        
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
        <div class="col-md-9">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection
