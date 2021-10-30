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
                  <a type="button" href="{{ route('admin.brand.create') }}" class="btn btn-info">add brand</a>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive " style="height: 490px;">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>Sl</th>
                    <th>name</th>
                    <th>Product</th>
                    <th>Amount</th>
                    <th>Shipping Address</th>

                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 <?php $i=0 ?>
                @foreach($order as $ord)
                  <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $ord->user->name }}</td>
                    <td>
                        @if(isset($ord->details[0]))
                        @foreach ($ord->details as $details)
                            {{ $details->product ? $details->product->name : '' }},
                        @endforeach
                        @endif
                    </td>
                    <td>{{ $ord->total_cost }}</td>
                    <td>{{ $ord->shipping->street_address }}</td>



                    <td>

                      <a type="button" href="{{ route('admin.order.show',$ord->id) }}" class="btn btn-success"><i class="far fa-eye-slash"></i></a>

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
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->



@endsection