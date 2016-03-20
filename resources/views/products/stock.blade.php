@extends('index')
@section('content')

<div class="row">
	<div class="col-lg-12">
		<div class="row">
			<h3>Add Stock</h3>
			<form class="form-horizontal" id="add_product" action="/add" method="POST">
				{{ csrf_field() }}
				<input type="hidden" name="current_amount" value="0" id="total">
				<div class="form-group">
					<div class="col-lg-12">
						<input type="text" name="product_name" placeholder="Product Name:">
					</div>
				</div>

				<div class="form-group">
					<div class="col-lg-12">
						<input type="text" name="quantity" placeholder="Quantity in stock:">
					</div>
				</div>

				<div class="form-group">
					<div class="col-lg-12">
						<input type="text" name="price" placeholder="Price/Item:">
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-12">
						<button type="submit" class="btn btn-lg btn-primary">Submit</button>
						<button class="btn btn-lg btn-default">Cancel</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
<table class="table table-striped"> 
	<thead> 
		<tr> 
			<th>Product Name</th> 
			<th>Quantity</th> 
			<th>Price</th> 
			<th>Date</th>
			<th>Sub Total</th>
		</tr> 
	</thead> 
	<tfoot id="results_total">
    	
  	</tfoot>
	<tbody id="results"> 
	
	</tbody> 
</table>
</div>
<script type="text/javascript">

$('#add_product').submit(function(e){
	e.preventDefault();

	var rowCount = $('#results tr').length;

	$.ajax({
		url: '/add',
		type: 'POST',
		data: $('#add_product').serialize(),
		dataType: 'JSON',
		success: function(data){
			//console.log(data);
			$('#results').append(
				'<tr><td>'+data.name+'</td><td>'+data.quantity+'</td><td>'+data.price+'</td><td id="price_'+rowCount+'">'+data.date+'</td><td>'+data.sub_total+'</td></tr>'
			);

			$('#results_total').html('<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>Total</td><td>$'+data.total+'</td></tr>');	
			$('#total').val(data.total);	
		}
	});
});
</script>
@stop