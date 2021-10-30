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
              <h3 class="card-title">subcategory</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <a type="button" href="{{ route('subCetagory.create') }}"  class="btn btn-info">add subcategory</a>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 490px;">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Root Category</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
             @if($subcetagorys)
                   @foreach($subcetagorys as $subcategory)
                  <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $subcategory->name}}</td>
                    <td>{{$subcategory->category->name}}</td>
                    <td>@if($subcategory->status == true) <span class = "text-info" > Active </span> @else <span class = "text-danger" > Inactive </span> @endif</td>
                    <td>
                      
                      <a type="button" href="{{ route('subCetagory.delete',$subcategory->id) }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->



@endsection
