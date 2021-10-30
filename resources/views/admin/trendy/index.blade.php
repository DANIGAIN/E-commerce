@extends('admin.master')

@section('content')

    

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-warning"  > <a href="{{route('trendy.create')}}"> add Trendy</a> </button>
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
                      <th>Image </th>
                      <th> offer </th>
                      <th> Action</th>
                    </tr>
                  </thead>
                  <tbody>

                  @foreach($trendys as $trendy)
                    <tr>

                      <td>{{$loop->iteration}}</td>
                    

                      <td> 
                        @if($trendy->trendy_fashion_image)
                             <img src="{{asset($trendy->trendy_fashion_image)}}" width="90px" height="70px" >
                         @else no image
                       @endif </td>
                       <td>{{$trendy->trendy_fashion_offer}}</td>

                      <td>

                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                             <label class="btn btn-secondary active">
                                 <input type="radio" name="options" id="option1" autocomplete="off" checked> <a href="{{route('trendy.edit',$trendy->id )}}"><i class="fas fa-edit"></i></a>                            
                             </label>
                              <label class="btn btn-secondary">
                                 <input type="radio" name="options" id="option2" autocomplete="off"> <a href="{{route('trendy.show',$trendy->id)}}"><i class="far fa-eye-slash"></i></a>
                              </label>
                              <label class="btn btn-secondary">
                                 <input type="radio" name="options" id="option3" autocomplete="off"> <a href="{{route('trendy.delete',$trendy->id)}}"><i class="fas fa-trash-alt"></i></a>
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
