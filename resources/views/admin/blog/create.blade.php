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
                <h3 class="card-title">Create  blog  -- >></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="{{route('blog.store')}}" enctype="multipart/form-data" method="post" role="form" id="quickForm">
                 @csrf
                  <div class="card-body">
                        <div class="form-group">

                           <label for="exampleInputImage">Image </label>
                           <input type="file" name="image" class="form-control" id="exampleInputImage" >
                           <p class="text-danger">{{$errors->first('image')}}</p>
                       </div>
                 </div>

                  <div class="card-body">
                     <div class="form-group">
                          <label for="exampleInputAuthor">author</label>
                           <input type="text" name="author" class="form-control" id="exampleInputAuthor" placeholder ="Enter author name  ">
                           <p class="text-danger">{{$errors->first('author')}}</p>
                     </div>

                  </div>
                  <div class="card-body">
                     <div class="form-group">
                          <label for="exampleInputHadding1">Hadding</label>
                           <input type="text" name="hadding" class="form-control" id="exampleInputHadding1" placeholder ="Enter hadding ">
                           <p class="text-danger">{{$errors->first('hadding')}}</p>

                     </div>

                  </div>
                   <div class="card-body">
                     <div class="form-group">
                          <label for="exampleInputcomment">Comment</label>
                           <input type="text" name="comment" class="form-control" id="exampleInputcomment" placeholder ="Enter hadding ">
                           <p class="text-danger">{{$errors->first('comment')}}</p>
                      </div>

                  </div>
                  <div class="card-body">
                     <div class="form-group">
                      <label for="exampleInputtitle">Discription</label>
                       <input type="text" name="discription" class="form-control" id="exampleInputtitle" placeholder="Enter title">
                    <p class="text-danger">{{$errors->first('discription')}}</p>
                    </div>

                 </div>
                 <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="status" class="custom-control-input"  id="exampleCheck5">
                      <label class="custom-control-label" for="exampleCheck5"> Active </label>
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