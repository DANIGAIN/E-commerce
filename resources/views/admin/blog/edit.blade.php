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
                <h3 class="card-title">Edit  blog-- >></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="{{route('blog.update')}}" enctype="multipart/form-data" method="post" role="form" id="quickForm">
                 @csrf

                <div class="card-body">
                        <div class="form-group">

                           <label for="exampleInputImage">Image </label>
                           <input type="file" name="image" class="form-control" id="exampleInputImage" >
                           <img src="{{asset($blog->image)}}" width="90px" height="70px">
                           <p class="text-danger">{{$errors->first('image')}}</p>
                       </div>
                 </div>

                  <div class="card-body">
                     <div class="form-group">
                          <label for="exampleInputAuthor">author</label>
                           <input type="text" name="author" class="form-control" id="exampleInputAuthor"  value="{{$blog->author}}">
                           <p class="text-danger">{{$errors->first('author')}}</p>
                     </div>

                  </div>
                  <div class="card-body">
                     <div class="form-group">
                          <label for="exampleInputHadding1">Hadding</label>
                           <input type="text" name="hadding"  value="{{$blog->hadding}}" class="form-control" id="exampleInputHadding1" >
                           <p class="text-danger">{{$errors->first('hadding')}}</p>

                     </div>

                  </div>
                   <div class="card-body">
                     <div class="form-group">
                          <label for="exampleInputcomment">Comment</label>
                           <input type="text" name="comment" value="{{$blog->comment}}" class="form-control" id="exampleInputcomment" >
                           <p class="text-danger">{{$errors->first('comment')}}</p>
                      </div>

                  </div>
                  <div class="card-body">
                     <div class="form-group">
                      <label for="exampleInputtitle">Discription</label>
                       <input type="text" name="discription"  value="{{$blog->discription}}" class="form-control" id="exampleInputtitle" >
                    <p class="text-danger">{{$errors->first('discription')}}</p>
                    </div>

                 </div>
                 <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="status" class="custom-control-input"  id="exampleCheck5">
                      <label class="custom-control-label" for="exampleCheck5"> Active </label>
                    </div>
                  </div> 
                <input type="hidden" name="id" value="{{$blog->id}}" />
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