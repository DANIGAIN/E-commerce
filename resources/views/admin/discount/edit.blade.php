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
                <h3 class="card-title">edit offer -- >></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="{{route('discount.update')}}" enctype="multipart/form-data" method="post" role="form" id="quickForm">
                 @csrf

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1men">big_offer_image</label>
                    <input type="file" name="big_offer_image" class="form-control" id="exampleInputEmail1men">
                     <img src="{{asset($discount->big_offer_image)}}" alt="no image "  height="70px" width="90px">
                    <p class="text-danger">{{$errors->first('big_offer_image')}}</p>

                  </div>
                  <div class="form-group">
                    <label for="men_discount">big_offer</label>
                    <input type="txt" name="big_offer" class="form-control" id="men_discount" placeholder="{{$discount->big_offer}}">
                    <p class="text-danger">{{$errors->first('big_offer')}}</p>
                  </div>



                 <div class="form-group">
                    <label for="exampleInputgirls_image">small_offer_top_image</label>
                    <input type="file" name="small_offer_top_image" class="form-control" id="exampleInputgirls_image" >
                    <img src="{{asset($discount->small_offer_top_image)}}" height="70px" width="90px" alt="no image">
                    <p class="text-danger">{{$errors->first('small_offer_top_image')}}</p>

                 </div>
                  <div class="form-group">
                    <label for="exampleInputlehenga_discount">small_offer_top</label>
                    <input type="txt" name="small_offer_top" class="form-control" id="exampleInputlehenga_discount" placeholder="{{$discount->small_offer_top}}">
                    <p class="text-danger">{{$errors->first('small_offer_top')}}</p>
                  </div>


                 <div class="form-group">
                    <label for="exampleInputbeby">small_offer_bottom_image</label>
                    <input type="file" name="small_offer_bottom_image" class="form-control" id="exampleInputbeby" >
                    <img src="{{asset($discount->small_offer_bottom_image)}}" height="70px" width="90px" alt="no image">
                    <p class="text-danger">{{$errors->first('small_offer_bottom_image')}}</p>

                  </div>
                  <div class="form-group">
                    <label for="exampleInputbaby_offer">small_offer_bottom</label>
                    <input type="txt" name="small_offer_bottom" class="form-control" id="exampleInputbaby_offer" placeholder="{{$discount->small_offer_bottom}}">
                    <p class="text-danger">{{$errors->first('small_offer_bottom')}}</p>
                  </div>

                </div>
                  <input type="hidden" name="id" value="{{$discount->id}}" />

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