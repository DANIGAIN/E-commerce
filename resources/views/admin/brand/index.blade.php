@extends('admin.master')

@section('content')

    

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-warning"  > <a href="{{route('brand.create')}}"> add brand</a> </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->

              
              <div class="card-body table-responsive p-0" style="height: 750px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th> SI </th>
                      <th>Name </th>
                      <th> Image  </th>
                      <th> Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($brands as $brand)
                    <tr>

                      <td>{{$loop->iteration}}</td>
                      <td>{{$brand->name}} </td>

                      <td> 
                        @if($brand->image) 
                          <img src="{{asset($brand->image)}}" width="90px" height="70px" >
                         @else no image
                       @endif </td>
                       <td>

                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                             <label class="btn btn-secondary active">
                                 <input type="radio" name="options" id="option1" autocomplete="off" checked> <a href="{{route('brand.edit',$brand->id )}}"><i class="fas fa-edit"></i></a>                            
                             </label>
                              <label class="btn btn-secondary">
                                 <input type="radio" name="options" id="option2" autocomplete="off"> <a href="{{route('brand.show',$brand->id)}}"><i class="far fa-eye-slash"></i></a>
                              </label>
                              <label class="btn btn-secondary">
                                 <input type="radio" name="options" id="option3" autocomplete="off"> <a href="{{route('brand.delete',$brand->id)}}"><i class="fas fa-trash-alt"></i></a>
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
