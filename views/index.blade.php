@section('title', 'Dreamyy Gaming Store')
@include('layout.navbar')

<body>
    <div class="container mt-4 text-center">
        <h4 class="text-h4">List of items</h4>
        <div class="container-grid mt-4">
            <div class="container text-center">
                <div class="row">
                    <div class="col fw-bolder">
                        Item Name
                    </div>
                    <div class="col fw-bolder">
                        Price
                    </div>
                    <div class="col fw-bolder">
                        Discount
                    </div>
                    <div class="col">
                        
                    </div>
                </div>
            </div>
            <div class="container text-center mt-3">
            @foreach($arrItemName as $index => $name)
                <div class="row mt-1">
                    <div class="col font-monospace">
                        {{ $name }}
                    </div>
                    <div class="col font-monospace">
                        IDR {{ $arrItemPrice[$index] }}
                    </div>
                    <div class="col">
                        @if($arrItemPrice[$index]>=1300000)
                        <span class="badge bg-success">Available</span>
                        @elseif($arrItemPrice[$index]<=1300000)
                        <span class="badge bg-danger">Not available</span>
                        @endif
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-buy btn-outline-primary fw-bolder">Buy</button>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</body>
@extends('layout.footer')
</html>