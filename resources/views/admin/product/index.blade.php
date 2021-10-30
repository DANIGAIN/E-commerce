@extends('admin.master')

@section('content')

    

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-warning"  > <a href="{{route('product.create')}}"> add Product</a> </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->

              
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th> SI </th>
                      <th>name</th>
                      <th>Image1</th>
                      <th>featured_product</th>
                      <th>new_product</th>
                      <th>best_selling</th>
                      <th>new_arrival</th>
                      <th>status</th>
                      <th> Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($products as $product)
                    <tr>

                      <td>{{$loop->iteration}}</td>
                      <td>{{$product->name}} </td>

                      <td> 
                        @if($product->image1) 
                          <img src="{{asset($product->image1)}}" width="90px" height="70px" >
                         @else no image
                         </td>
                       @endif 




                       <td>@if($product->featured_product == true) <span class = "text-info" > Active </span> @else <span class = "text-danger" > Inactive </span> @endif</td>
                      

                      <td>@if($product->new_product == true) <span class = "text-info" > Active </span> @else <span class = "text-danger" > Inactive </span> @endif</td>
                     

                       <td>@if($product->best_selling == true) <span class = "text-info" > Active </span> @else <span class = "text-danger" > Inactive </span> @endif</td>
                      


                        <td>@if($product->new_arrival == true) <span class = "text-info" > Active </span> @else <span class = "text-danger" > Inactive </span> @endif</td>
                       

                        <td>@if($product->status == true) <span class = "text-info" > Active </span> @else <span class = "text-danger" > Inactive </span> @endif</td>
                       



                       <td>
                          <div class="btn-group btn-group-toggle" data-toggle="buttons">
                             <label class="btn btn-secondary active">
                                 <input type="radio" name="options" id="option1" autocomplete="off" checked> <a href="{{route('product.edit',$product->id)}}"><i class="fas fa-edit"></i></a>                            
                             </label>
                              <label class="btn btn-secondary">
                                 <input type="radio" name="options" id="option2" autocomplete="off"> <a href="{{route('product.show',$product->id)}}"><i class="far fa-eye-slash"></i></a>
                              </label>
                              <label class="btn btn-secondary">
                                 <input type="radio" name="options" id="option3" autocomplete="off"> <a href="{{route('product.delete',$product->id)}}"><i class="fas fa-trash-alt"></i></a>
                              </label>
                       </div>
                         
                       </td>

                    </tr>

                    @endforeach
                  
                   
                
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
</div>
        
  
  



@endsection 
