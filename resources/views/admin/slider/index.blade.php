@extends('admin.master')

@section('content')

    

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-warning"  > <a href="{{route('slider.create')}}"> add slider</a> </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->

              
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th> background_image </th>
                      <th>banner </th>
                      <th> hadding1  </th>
                      <th> hadding2 </th>
                      <th> title </th>
                      <th> Status </th>
                      <th> Action</th>
                    </tr>
                  </thead>
                  <tbody>


                   @foreach($sliders as $slider)
                    <tr>

                      <td> <img src="{{asset($slider->background_image)}}" hight="90px" width="70px " alt="no image" ></td>
                      <td> <img src="{{asset($slider->banner)}}" height="90px" width="70px" alt="no image" > </td>

                      <td>{{$slider->hadding1}}</td>
                      <td>{{$slider->hadding2}}</td>
                      <td>{{$slider->title}}</td>
                      <td> @if($slider->status == true)    <span class="text-success">Active</span>  @else <span class="text-muted">Inactive </span> @endif </td><

                      <td>

                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                
                              <label class="btn btn-secondary">
                                 <input type="radio" name="options" id="option2" autocomplete="off"> <a href="{{route('slider.show',$slider->id)}}"><i class="far fa-eye-slash"></i></a>
                              </label>
                              <label class="btn btn-secondary">
                                 <input type="radio" name="options" id="option3" autocomplete="off"> <a href="{{route('slider.delete',$slider->id)}}"><i class="fas fa-trash-alt"></i></a>
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
        
  
  