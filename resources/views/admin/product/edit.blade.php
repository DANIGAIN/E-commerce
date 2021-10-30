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
                <h3 class="card-title">Edit product  -- >></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="{{route('product.update')}}" enctype="multipart/form-data" method="post" role="form" id="quickForm">
                 @csrf

              <div class="card-body">

                

                  <div class="form-group">
                    <label for="catagory">Cetagory</label>
                    <select  name="catagory_id"  class="form-control" id="catagory_id" >
                      <option value="{{$product->category_id}}">{{$product->category->name}}</option>

                      @if(isset($categorys[0]))
                           @foreach($categorys as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                           @endforeach 
                      @endif
                    </select>
                    <p class="text-danger">{{$errors->first('name')}}</p>

                  </div>

                  <div class="form-group">
                    <label for="sub_catagory_id"> sub cetagory</label>
                    <select  name="sub_catagory_id" class="form-control" id="sub_catagory_id" >
                      <option value="{{$product->sub_category_id}}"> {{$product->subcategory->name}} </option>

                     
                    </select>
                    <p class="text-danger">{{$errors->first('name')}}</p>

                  </div>

                  <div class="form-group">
                    <label for="exampleInputName">name</label>
                    <input type="text" name="name" value="{{$product->name}}" class="form-control" id="exampleInputName" placeholder="Enter brand  name ">
                    <p class="text-danger">{{$errors->first('name')}}</p>

                  </div>
                  <div class="form-group">
                    <label for="exampleInputDiscription">discription</label>
                    <input type="text" name="discription" value="{{$product->discription}}" class="form-control" id="exampleInputDiscription" placeholder="Enter discription ">
                    <p class="text-danger">{{$errors->first('discription')}}</p>

                  </div>
                  <div class="form-group">
                    <label for="exampleInputDetails">details</label>
                    <input type="text" name="details" value="{{$product->details}}" class="form-control" id="exampleInputDetails" placeholder="Enter details ">
                    <p class="text-danger">{{$errors->first('details')}}</p>

                  </div>
                   <div class="form-group">
                    <label for="exampleInputQuantity">quantity</label>
                    <input type="text" name="quantity" value="{{$product->quantity}}" class="form-control" id="exampleInputQuantity" placeholder="Enter quantity ">
                    <p class="text-danger">{{$errors->first('quantity')}}</p>

                  </div>
                   <div class="form-group">
                    <label for="exampleInputDetails">discount</label>
                    <input type="text" name="discount" value="{{$product->discount}}" class="form-control" id="exampleInputDetails" placeholder="Enter discount ">
                    <p class="text-danger">{{$errors->first('discount')}}</p>

                  </div>



                  <div class="form-group">
                    <label for="exampleInputImage1">Image1 </label>
                    <input type="file" name="image1" value="{{$product->image1}}" class="form-control" id="exampleInputPassword1" >
                    <img src="{{asset($product->image1)}}" height="90px" width="70px" alt="no image">
                    <p class="text-danger">{{$errors->first('image1')}}</p>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputImage2">Image2 </label>
                    <input type="file" name="image2" value="{{$product->image2}}" class="form-control" id="exampleInputImage2" >
                    <img src="{{asset($product->image2)}}" width="90px" height="70px" alt="no image">
                    <p class="text-danger">{{$errors->first('image2')}}</p>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputImage3">Image3 </label>
                    <input type="file" name="image3" class="form-control" id="exampleInputImage3" >

                    @if($product->image3)
                          <img src="{{asset($product->image3)}}" height="90px" width="70px" alt="no image">
                       @else 
                       no image 

                    @endif

                    <p class="text-danger">{{$errors->first('image')}}</p>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputImage4">Image4 </label>
                    <input type="file" name="image4" class="form-control" id="exampleInputImage4">
                    @if($product->image4)

                          <img src="{{asset($product->image4)}}" height="90px" width="70px" alt="no image">
                          @else
                          no image 
                    @endif
                    <p class="text-danger">{{$errors->first('image')}}</p>
                  </div>




                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="featured_product" class="custom-control-input"  id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1"> featured_product </label>
                    </div>
                  </div>
                    <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="new_product" class="custom-control-input"  id="exampleCheck2">
                      <label class="custom-control-label" for="exampleCheck2"> new_product </label>
                    </div>
                  </div>
                    <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="best_selling" class="custom-control-input"  id="exampleCheck3">
                      <label class="custom-control-label" for="exampleCheck3"> best_selling </label>
                    </div>
                  </div>
                    <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="new_arrival" class="custom-control-input"  id="exampleCheck4">
                      <label class="custom-control-label" for="exampleCheck4"> new_arrival </label>
                    </div>
                  </div>
                    <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="status" class="custom-control-input"  id="exampleCheck5">
                      <label class="custom-control-label" for="exampleCheck5"> Active </label>
                    </div>
                  </div>

                
                </div>
                <input type="hidden" name="id" value="{{$product->id}}" />
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