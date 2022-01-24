@include('layouts.header')

@section('content')
@endsection

@include('layouts.menu')
<hr />


<div class="container content-invoice">

<!-- Alert User -->
@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif



   <div class="cards">
     <div class="card-bodys">
       <form  action="{{ route('storeinvoice') }}" id="invoice-form" method="post" class="invoice-form" role="form">
       @csrf
      <div class="">
         <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                 <h3>CompLara</h3><br />
               <b>Address:</b> 15 City street<br /> 
                  Cape Town, Western Cape<br />
                  8000<br />
                  <b>Email:</b> company@test.com<br />
                  <b>Tel:</b> 0123456789<br />
                  <b>Website:</b> www.somesite.com<br />
                  <br />
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
               <h3>To,</h3>


               <div class="form-group">
                  <input type="text" class="form-control" name="toPersonName" id="toPersonName" placeholder="To Person Name" autocomplete="off">
                  @if ($errors->has('toPersonName'))
                     <div class="alert alert-danger">
                        {{ $errors->first('toPersonName') }}
                     </div>
                  @endif
               </div>


               <div class="form-group">
                  <input type="text" class="form-control" name="companyName" id="companyName" placeholder="Company Name" autocomplete="off">
                  @if ($errors->has('companyName'))
                     <div class="alert alert-danger">
                        {{ $errors->first('companyName') }}
                     </div>
                  @endif
               </div>
               <div class="form-group">
                  <textarea class="form-control" rows="3" name="address" id="address" placeholder="Company Address"></textarea>
                  @if ($errors->has('address'))
                     <div class="alert alert-danger">
                        {{ $errors->first('address') }}
                     </div>
                  @endif
               </div>
            </div>
         </div>






<div class="container">
  <div class="row">
    <div class="col-sm">
     
         <div class="form-group">
            <input type="text" class="form-control" name="companyCity" id="companyCity" placeholder="Company City" autocomplete="off">
            @if ($errors->has('companyCity'))
               <div class="alert alert-danger">
                  {{ $errors->first('companyCity') }}
               </div>
            @endif
         </div>

    </div>
    <div class="col-sm">
     
         <div class="form-group">
            <input type="text" class="form-control" name="companyProvince" id="companyProvince" placeholder="Company Province" autocomplete="off">
            @if ($errors->has('companyProvince'))
               <div class="alert alert-danger">
                  {{ $errors->first('companyProvince') }}
               </div>
            @endif
         </div>

    </div>

    <div class="col-sm">
     
         <div class="form-group">
            <input type="text" class="form-control" name="companyPostalcode" id="companyPostalcode" placeholder="Company Postalcode" autocomplete="off">
            @if ($errors->has('companyPostalcode'))
               <div class="alert alert-danger">
                  {{ $errors->first('companyPostalcode') }}
               </div>
            @endif
         </div>

    </div>

    <div class="col-sm">
     
         <div class="form-group">
            <input type="text" class="form-control" name="companyPhone" id="companyPhone" placeholder="Company Phone" autocomplete="off">
            @if ($errors->has('companyPhone'))
               <div class="alert alert-danger">
                  {{ $errors->first('companyPhone') }}
               </div>
            @endif
         </div>

    </div>
  </div>
</div>













         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <table class="table table-condensed table-striped" id="invoiceItem">
                  <tr>
                     <th width="2%">
                      <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="checkAll" name="checkAll">
                        <label class="custom-control-label" for="checkAll"></label>
                        </div>
                    </th>
                     <th width="15%">Item No</th>
                     <th width="38%">Item Name</th>
                     <th width="15%">Quantity</th>
                     <th width="15%">Price</th>
                     <th width="15%">Total</th>
                  </tr>
                  <tr>
                     <td><div class="custom-control custom-checkbox">
                        <input type="checkbox" class="itemRow custom-control-input" id="itemRow_1">
                        <label class="custom-control-label" for="itemRow_1"></label>
                        </div></td>
                     <td><input type="text" name="productCode[]" id="productCode_1" class="form-control" autocomplete="off"></td>
                     <td><input type="text" name="productName[]" id="productName_1" class="form-control" autocomplete="off"></td>
                     <td><input type="number" name="quantity[]" id="quantity_1" class="form-control quantity" autocomplete="off"></td>
                     <td><input type="number" name="price[]" id="price_1" class="form-control price" autocomplete="off"></td>
                     <td><input type="number" name="total[]" id="total_1" class="form-control total" autocomplete="off"></td>
                  </tr>
               </table>
            </div>
         </div>
         <div class="row">
            <div class="col-xs-12">
               <button class="btn btn-danger delete" id="removeRows" type="button">- Delete</button>
               <button class="btn btn-success" id="addRows" type="button">+ Add More</button>
            </div>
         </div>
         <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="form-group mt-3 mb-3 ">
              <label>Subtotal: &nbsp;</label>
                 <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text currency">R</span>
            </div>
            <input value="" type="number" class="form-control" name="subTotal" id="subTotal" placeholder="Subtotal">
          </div>
               <div>
               @if ($errors->has('subTotal'))
                     <div class="alert alert-danger">
                        {{ $errors->first('subTotal') }}
                     </div>
                  @endif
               </div>
         </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="form-group mt-3 mb-3 ">
              <label>Tax Rate: &nbsp;</label>
                 <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text currency">%</span>
            </div>
           <input value="" type="number" class="form-control" name="taxRate" id="taxRate" placeholder="Tax Rate">
          </div>
               <div>
               @if ($errors->has('taxRate'))
                     <div class="alert alert-danger">
                        {{ $errors->first('taxRate') }}
                     </div>
                  @endif
               </div>
         </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="form-group mt-3 mb-3 ">
              <label>Tax Amount: &nbsp;</label>
                 <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text currency">R</span>
            </div>
            <input value="" type="number" class="form-control" name="taxAmount" id="taxAmount" placeholder="Tax Amount">
          </div>
               <div>
               @if ($errors->has('taxAmount'))
                     <div class="alert alert-danger">
                        {{ $errors->first('taxAmount') }}
                     </div>
                  @endif
               </div>

         </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="form-group mt-3 mb-3 ">
              <label>Total: &nbsp;</label>
                 <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text currency">R</span>
            </div>
             <input value="" type="number" class="form-control" name="totalAftertax" id="totalAftertax" placeholder="Total">

          </div>
               <div>
               @if ($errors->has('totalAftertax'))
                     <div class="alert alert-danger">
                        {{ $errors->first('totalAftertax') }}
                     </div>
                  @endif
               </div>

         </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="form-group mt-3 mb-3 ">
              <label>Amount Paid: &nbsp;</label>
                 <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text currency">R</span>
            </div>
            <input value="" type="number" class="form-control" name="amountPaid" id="amountPaid" placeholder="Amount Paid">

          </div>
          <div>
          @if ($errors->has('amountPaid'))
                     <div class="alert alert-danger">
                        {{ $errors->first('amountPaid') }}
                     </div>
                  @endif
          </div>
              </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="form-group mt-3 mb-3 ">
              <label>Amount Due: &nbsp;</label>
                 <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text currency">R</span>
            </div>
             <input value="" type="number" class="form-control" name="amountDue" id="amountDue" placeholder="Amount Due">
          </div>
               <div>
               @if ($errors->has('amountDue'))
                     <div class="alert alert-danger">
                        {{ $errors->first('amountDue') }}
                     </div>
                  @endif
               </div>


              </div>
          </div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
               <h3>Notes: </h3>
               <div class="form-group">
                  <textarea class="form-control txt" rows="5" name="notes" id="notes" placeholder="Your Notes"></textarea>
               </div>
               <br>
               <div class="form-group">
                  <input data-loading-text="Saving Invoice..." type="submit" name="invoice_btn" value="Save Invoice" class="btn btn-success submit_btn invoice-save-btm">           
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
      </div>
   </form>
     </div>
   </div>
</div>
</div>	


<script>
$(document).ready(function(){
	$(document).on('click', '#checkAll', function() {          	
		$(".itemRow").prop("checked", this.checked);
	});	
	$(document).on('click', '.itemRow', function() {  	
		if ($('.itemRow:checked').length == $('.itemRow').length) {
			$('#checkAll').prop('checked', true);
		} else {
			$('#checkAll').prop('checked', false);
		}
	});  
	var count = $(".itemRow").length;
	$(document).on('click', '#addRows', function() { 
		count++;
		var htmlRows = '';
		htmlRows += '<tr>';
		htmlRows += '<td><div class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input itemRow" id="itemRow_'+count+'"> <label class="custom-control-label" for="itemRow_'+count+'"></label> </div></td>';          
		htmlRows += '<td><input type="text" name="productCode[]" id="productCode_'+count+'" class="form-control" autocomplete="off"></td>';          
		htmlRows += '<td><input type="text" name="productName[]" id="productName_'+count+'" class="form-control" autocomplete="off"></td>';	
		htmlRows += '<td><input type="text" name="quantity[]" id="quantity_'+count+'" class="form-control quantity" autocomplete="off"></td>';   		
		htmlRows += '<td><input type="text" name="price[]" id="price_'+count+'" class="form-control price" autocomplete="off"></td>';		 
		htmlRows += '<td><input type="text" name="total[]" id="total_'+count+'" class="form-control total" autocomplete="off"></td>';          
		htmlRows += '</tr>';
		$('#invoiceItem').append(htmlRows);
	}); 
	$(document).on('click', '#removeRows', function(){
		$(".itemRow:checked").each(function() {
			$(this).closest('tr').remove();
		});
		$('#checkAll').prop('checked', false);
		calculateTotal();
	});		
	$(document).on('blur', "[id^=quantity_]", function(){
		calculateTotal();
	});	
	$(document).on('blur', "[id^=price_]", function(){
		calculateTotal();
	});	
	$(document).on('blur', "#taxRate", function(){		
		calculateTotal();
	});	
	$(document).on('blur', "#amountPaid", function(){
		var amountPaid = $(this).val();
		var totalAftertax = $('#totalAftertax').val();	
		if(amountPaid && totalAftertax) {
			totalAftertax = totalAftertax-amountPaid;			
			$('#amountDue').val(totalAftertax);
		} else {
			$('#amountDue').val(totalAftertax);
		}	
	});	
	$(document).on('click', '.deleteInvoice', function(){
		var id = $(this).attr("id");
		if(confirm("Are you sure you want to remove this?")){
			$.ajax({
				url:"action.php",
				method:"POST",
				dataType: "json",
				data:{id:id, action:'delete_invoice'},				
				success:function(response) {
					if(response.status == 1) {
						$('#'+id).closest("tr").remove();
					}
				}
			});
		} else {
			return false;
		}
	});
});	
function calculateTotal(){
	var totalAmount = 0; 
	$("[id^='price_']").each(function() {
		var id = $(this).attr('id');
		id = id.replace("price_",'');
		var price = $('#price_'+id).val();
		var quantity  = $('#quantity_'+id).val();
		if(!quantity) {
			quantity = 1;
		}
		var total = price*quantity;
		$('#total_'+id).val(parseFloat(total));
		totalAmount += total;			
	});
	$('#subTotal').val(parseFloat(totalAmount));	
	var taxRate = $("#taxRate").val();
	var subTotal = $('#subTotal').val();	
	if(subTotal) {
		var taxAmount = subTotal*taxRate/100;
		$('#taxAmount').val(taxAmount);
		subTotal = parseFloat(subTotal)+parseFloat(taxAmount);
		$('#totalAftertax').val(subTotal);		
		var amountPaid = $('#amountPaid').val();
		var totalAftertax = $('#totalAftertax').val();	
		if(amountPaid && totalAftertax) {
			totalAftertax = totalAftertax-amountPaid;			
			$('#amountDue').val(totalAftertax);
		} else {		
			$('#amountDue').val(subTotal);
		}
	}
}
</script>




@include('layouts.footer')