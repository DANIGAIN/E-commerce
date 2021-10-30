@extends('admin.master')

@section('content')

    

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                     @if(!isset($banner))
                    <div class="input-group-append">

                      <button type="submit" class="btn btn-warning"  > <a href="{{route('banner.create')}}"> add banner </a> </button>
                    </div>
                    @endif
                  </div>
                </div>
              </div>
              <!-- /.card-header -->

              
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                     
                      <th>Background Image </th>
                      <th> Image  </th>
                      <th> hadding</th>
                      <th>title</th>
                      <th> Action</th>
                    </tr>
                  </thead>
                  <tbody>

               
                    <tr>
                      @if(isset($banner))

                      
                      <td><img src="{{asset($banner->background_image)}}" width="90px" height="70px" alt="no image "> </td>

                      <td>  <img src="{{asset($banner->image)}}" width="90px" height="70px" > </td>
                      <td>{{$banner->hadding}}</td>
                      <td>{{$banner->title}}</td>
                       <td>

                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                          
                              <label class="btn btn-secondary">
                                 <input type="radio" name="options" id="option3" autocomplete="off"> <a href="{{route('banner.delete',$banner->id)}}"><i class="fas fa-trash-alt"></i></a>
                              </label>
                       </div>
                         
                       </td>
                       @endif 

                    </tr>

                  
                  
                   
                
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
</div>
        
  
  



@endsection 
