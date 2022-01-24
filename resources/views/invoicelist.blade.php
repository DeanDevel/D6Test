@include('layouts.header')

@section('content')



@endsection



@include('layouts.menu')


<div class="container">	
<!-- Alert User -->
@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif

<table id="data-table" class="table table-condensed table-hover table-striped">
        <thead>
        <tr>
            <th>Invoice No.</th>
            <th>Customer Name</th>
            <th>Create Date</th>
            <th>Total</th>
            <th>Print</th>
            <th>Delete</th>
        </tr>
        </thead>

        <tbody>
            @foreach($resultslist as $datalist)
                <tr>
                <td>{{ $datalist->order_id}}</td>
                <td>{{ $datalist->order_receiver_name}}</td>
                <td>{{ $datalist->order_date}}</td>
                <td>R {{ $datalist->order_total_after_tax}}</td>
                <td><a href="/showinvoice/{{ $datalist->order_id}}" title="Print Invoice"><button class="btn btn-primary btn-sm"><i class="fa fa-print"></i></button></a></td>
                <td><a href="/delete/{{ $datalist->order_id}}" title="Delete Invoice"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a></td>
                </tr>
            @endforeach
        </tbody>
        

    </table>
</div>








@include('layouts.footer')