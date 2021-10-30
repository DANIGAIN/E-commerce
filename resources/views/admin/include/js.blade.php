<!-- jQuery -->
<script src="{{asset('admin/asset/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/asset/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/asset/dist/js/adminlte.min.js')}}"></script>
<script type="text/javascript">
	
	$(document).ready(function(){

		$('#catagory_id').change(function(){

			var catagory_id  = $('#catagory_id').val();

			$.ajax({
				url : '{{route('sub_catagory')}}',
				method: 'POST',
				data :{

					'catagory_id' : catagory_id,
					'_token' : '{{csrf_token()}}'

				},
				success:function(res)
				{
					var myobj = JSON.parse(res);
					var select = $('#sub_catagory_id');

					select.empty();

					for(var i in myobj)

					{
						select.append('<option value='+myobj[i].id+'>'+myobj[i].name+'</option>')
					}
				}


			});

		})

	});
</script>
