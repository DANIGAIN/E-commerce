@extends('admin.master')
@section('content')

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Brand</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <a type="button" href="{{ route('categorie.create') }}" class="btn btn-warning

">add category</a>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive " style="height: 490px;">
              <table class="table">
                <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>icon</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Top Category</th>
                    <th>Big Menu</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                
                @foreach($categorys as $category)
                  <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $category->name }}</td>
                    <td><img src="{{ asset($category->icon) }}" width="30px"  heigh="20px" alt="no image" /></td>
                    <td><img src="{{ asset($category->image) }}" width="90px"  heigh="70px" alt="no image" /></td>
                    <td>@if($category->status == true) <span class = "text-info" > Active </span> @else <span class = "text-danger" > Inactive </span> @endif</td>
                    <td>@if($category->top_category == true) <span class = "text-info" > Yes </span> @else <span class = "text-danger" > No</span> @endif</td>
                    <td>@if($category->big_menu == true) <span class = "text-info" > Yes </span> @else <span class = "text-danger" > No</span> @endif</td>
                   
                      <td> <div class="btn-group btn-group-toggle" data-toggle="buttons">
                             <label class="btn btn-secondary active">
                                   <input type="radio" name="options" id="option1" autocomplete="off" checked> <a href="{{route('categorie.edit',$category->id)}}"><i class="fas fa-edit"></i></a>                            
                             </label>
                              <label class="btn btn-secondary">
                                   <input type="radio" name="options" id="option2" autocomplete="off"> <a href="{{route('categorie.show',$category->id)}}"><i class="far fa-eye-slash"></i></a>
                              </label>
                              <label class="btn btn-secondary">
                                   <input type="radio" name="options" id="option3" autocomplete="off"> <a href="{{route('categorie.delete',$category->id)}}"><i class="fas fa-trash-alt"></i></a>
                              </label>
                       </div>
                     </td>  
              @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->



@endsection
