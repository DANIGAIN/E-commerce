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
                <h3 class="card-title">sub category Create</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('subCetagory.store') }}" method="POST" id="quickForm" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">sub Category</label>
                    <select type="text" name="category_id" class="form-control" id="exampleInputEmail1" value = "{{ old('name') }}">

                    @foreach($cetagorys as $category)
                      <option value= {{$category->id }}>{{$category->name }}</option>
                    @endforeach

                    </select>
                    <p class="text-danger"> {{ $errors->first('cetagory_id') }} </p>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value = "{{ old('name') }}">
                    <p class="text-danger"> {{ $errors->first('name') }} </p>
                  </div>
   
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="status" class="custom-control-input" id="exampleCheck1">

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
  </div>
@endsection