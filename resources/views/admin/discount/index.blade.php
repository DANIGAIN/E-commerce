@extends('admin.master')

@section('content')

    

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    @if(empty($discount))

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-warning"  > <a href="{{route('discount.create')}}"> add Discount</a>  </button>
                    </div>
                    @endif
                  </div>
                </div>
              </div>
              <!-- /.card-header            -->

              

              
              
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th> big_offer_image  </th>
                      <th> big_offer </th>
                      <th> small_offer_top_image </th>
                      <th> small_offer_top </th>
                      <th> small_offer_bottom_image </th>
                      <th> small_offer_bottom </th>
                      <th> Action </th>   
                    </tr>
                  </thead>
                  <tbody>

                  @if(!empty($discount))
                  <tr>
                                       
                    <td><img src="{{asset($discount->big_offer_image)}}" width="90px" height="70px" alt="no image "> </td>
                    <td>{{$discount->big_offer}}</td>
                    <td><img src="{{asset($discount->small_offer_top_image)}}" width="90px" height="70px" alt="no image "></td>
                    <td>{{$discount->small_offer_top}}</td>
                    <td><img src="{{asset($discount->small_offer_bottom_image)}}" width="90px" height="70px" alt="no image"></td>
                    <td>{{$discount->small_offer_bottom}}</td>

                    

                      <td> <div class="btn-group btn-group-toggle" data-toggle="buttons">
                             <label class="btn btn-secondary active">
                                   <input type="radio" name="options" id="option1" autocomplete="off" checked> <a href="{{route('discount.edit',$discount->id)}}"><i class="fas fa-edit"></i></a>                            
                             </label>
                              <label class="btn btn-secondary">
                                   <input type="radio" name="options" id="option2" autocomplete="off"> <a href="{{route('discount.show',$discount->id)}}"><i class="far fa-eye-slash"></i></a>
                              </label>
                              <label class="btn btn-secondary">
                                   <input type="radio" name="options" id="option3" autocomplete="off"> <a href="{{route('discount.delete',$discount->id)}}"><i class="fas fa-trash-alt"></i></a>
                              </label>
                       </div>
                     </td>    
                    

                    </tr>

                    <!--endforeach-->
                  @endif
                   
                
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          
</div>
@endsection 
