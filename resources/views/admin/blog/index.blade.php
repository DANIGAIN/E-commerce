@extends('admin.master')

@section('content')

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <div class="input-group-append">

                      <button type="submit" class="btn btn-warning"  > <a href="{{route('blog.create')}}"> add blog </a> </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header-->

              
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th> SI </th>
                      <th>Image </th>
                      <th> Author </th>
                      <th> hadding</th>
                      <th> comment </th>
                      <th>Discription </th>
                      <th> status </th>
                      <th> Action</th>
                    </tr>
                  </thead>
                  <tbody>

                   @if(isset($blogs ))
                      @foreach($blogs as $blog)

                      <tr>

                            <td>{{$loop->iteration}}</td>
                           <td><img src="{{asset($blog->image)}}" width="90px" height="70px" alt="no image "></td>
                           <td>{{$blog->author}}</td>
                           <td>{{$blog->hadding}}</td>
                           <td>{{$blog->comment}}</td>
                           <td>{{$blog->discription}}</td>
                           <td> @if($blog->status == true) <span class = "text-info" > Active </span> @else <span class = "text-danger" > Inactive </span> @endif</td>

                           <td>

                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                               <label class="btn btn-secondary active">
                                 <input type="radio" name="options" id="option1" autocomplete="off" checked> <a href="{{route('blog.edit',$blog->id )}}"><i class="fas fa-edit"></i></a>                            
                             </label>
                              <label class="btn btn-secondary">
                                 <input type="radio" name="options" id="option2" autocomplete="off"> <a href="{{route('blog.show',$blog->id)}}"><i class="far fa-eye-slash"></i></a>
                              </label>
                          
                              <label class="btn btn-secondary">
                                 <input type="radio" name="options" id="option3" autocomplete="off"> <a href="{{route('blog.delete',$blog->id)}}"><i class="fas fa-trash-alt"></i></a>
                              </label>
                             </div>
                         
                           </td>
                     

                      </tr>

                      @endforeach 

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
