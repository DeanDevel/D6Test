@include('layouts.header')

@section('content')
@endsection

@foreach($invoicelist as $datalist)
@endforeach


<div class="container">	
<!-- Alert User -->
@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif

<div style="height:40px;"></div>

<div class="container">
  <div class="row">
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
               <h3>CompLara</h3><br />
               <b>Address:</b> 15 City street<br /> 
                  Cape Town, Western Cape<br />
                  8000<br />
                  <b>Email:</b> company@test.com<br />
                  <b>Tel:</b> 0123456789<br />
                  <b>Website:</b> www.somesite.com<br />
    </div>
    <div class="col-sm">
    <h3 style="text-align:right;font-weight:bold;">INVOICE</h3><br />

<table border="0" width="100%">
<tr>
<td style="text-align:right;padding-right:10px;font-weight:bold;">DATE</td> 
<td style="border:1px solid #000;text-align:center;">{{ $datalist->created_at }}</td>   
</tr>
<tr>
<td style="text-align:right;padding-right:10px;font-weight:bold;">INVOICE</td> 
<td style="border:1px solid #000;text-align:center;">{{ $datalist->order_id }}</td>   
</tr>
<tr>
<td style="text-align:right;padding-right:10px;font-weight:bold;">DUE DATE</td> 
<td style="border:1px solid #000;text-align:center;">{{ date('Y-m-d h:i:s', strtotime($datalist->created_at. '+30 day')) }}</td>   
</tr>
</table>

    </div>
  </div>
</div>



<div style="height:40px;"></div>


<div class="container">
  <div class="row">
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

<div style="background-color:#00267a;color:#fff;padding:10px;">BILL TO</div>
<div style="height:10px;"></div>

    @foreach($invoicelist as $datalist)
    <b>To:</b> {{ $datalist->order_receiver_personname}}<br />
       <b>Company Name:</b> {{ $datalist->order_receiver_name}}<br />
       <b>Address:</b> {{ $datalist->order_receiver_address}}<br />
       {{ $datalist->order_receiver_city}} - {{ $datalist->order_receiver_province}}<br />
       {{ $datalist->order_receiver_postalcode}}<br />
       <b>Phone:</b> {{ $datalist->order_receiver_phone}}<br />
    @endforeach

    </div>
    <div class="col-sm">

    </div>
  </div>
</div>









<div style="height:40px;"></div>
<div class="container">
  <div class="row">
    <div class="col-sm">


    <table class="table" border="1">
  <thead>
    <tr style="text-align:center;background-color:#00267a;color:#fff;">
      <th scope="col" width="10%">CODE</th>    
      <th scope="col" width="50%">DESCRIPTION</th>
      <th scope="col" width="20%">QTY</th>
      <th scope="col" width="20%">PRICE</th>
      <th scope="col" width="20%">AMOUNT</th>
    </tr>
  </thead>
  <tbody>
@foreach(json_decode($datalist->productCode) as $key => $prodcode)

<tr>
<td align="left"> {{ $prodcode }}</td>
<td align="left"> {{ json_decode($datalist->productName)[$key] }}</td>
<td align="center">{{ json_decode($datalist->quantity)[$key] }}</td>
<td align="center">R {{ json_decode($datalist->price)[$key] }}</td>
<td align="center">R {{ json_decode($datalist->total)[$key] }}</td>
</tr>

@endforeach
  </tbody>
</table>





    </div>
  </div>
</div>















<div style="height:40px;"></div>
<div class="container">
  <div class="row">
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

<div style="background-color:#00267a;color:#fff;padding:10px;">OTHER COMMENTS</div>
<div style="height:10px;"></div>

<ol>
    <li>Total payment due in 30 days</li>
    <li>Please include the invoice number on your check</li>
    <li><b>NOTES FROM CLIENT:</b><br />{{ $datalist->note }}</li>
</ol>




    </div>
    <div class="col-sm">



<table border="0" width="100%">
<tr>
<td style="text-align:right;padding-right:10px;">SUBTOTAL</td> 
<td style="border:1px solid #000;text-align:center;">R {{ $datalist->order_total_before_tax }}</td>   
</tr>
<tr>
<td style="text-align:right;padding-right:10px;">TAXABLE</td> 
<td style="border:1px solid #000;text-align:center;">{{ $datalist->order_tax_per }} %</td>   
</tr>
<tr>
<td style="text-align:right;padding-right:10px;">TOTAL TAX</td> 
<td style="border:1px solid #000;text-align:center;">R {{ $datalist->order_total_tax }}</td>   
</tr>
<tr>
<td colspan="2"><hr /></td> 
</tr>
<tr>
<td style="text-align:right;padding-right:10px;">PAID</td> 
<td style="border:1px solid #000;text-align:center;">R {{ $datalist->order_amount_paid }}</td>   
</tr>
<tr>
<td colspan="2"><hr /></td> 
</tr>
<tr>
<td colspan="2"><hr /></td> 
</tr>
<tr>
<td style="text-align:right;padding-right:10px;">TOTAL</td> 
<td style="border:1px solid #000;text-align:center;">R {{ $datalist->order_total_amount_due }}</td>   
</tr>
<tr>
<td colspan="2">&nbsp;</td> 
</tr>
<tr>
<td colspan="2" align="right">
Make all checks payable to<br />
CompLara Pty Ltd
</td> 
</tr>
</table>


    </div>
  </div>
</div>
















<div style="height:40px;"></div>
<div class="container">
  <div class="row">
  <div class="col-sm" style="text-align:center;">

If you have any questions about this invoice, please contact<br />
CompLara - company@test.com - 0123456789<br />
<br />
<h5>Thank You For Your Business !</h5>


  </div>
  </div>
</div>















</div>








@include('layouts.footer')