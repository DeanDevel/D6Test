@include('layouts.header')

@section('content')



@endsection


<div class="container">	
<!-- Alert User -->
@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif

THIS IS THE NEW INVOICE METHOD<br />
@foreach($invoicelist as $datalist)
    {{ $datalist->order_id}}<br />
    {{ $datalist->order_receiver_name}}<br />
    {{ $datalist->order_date}}<br />
    R {{ $datalist->order_total_after_tax}}<br />
@endforeach


























</div>








@include('layouts.footer')