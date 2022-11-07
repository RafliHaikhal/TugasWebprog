@section('title', 'Gaming Gear Store')
@include('layout.navbar')

<body>
    <div class="container mt-4 text-center">
        <h4 class="">List of items</h4>
        <div class="container">
            <ol class="pe-4">
                @foreach($itemName as $index => $name)
                    <li>{{ $name }} | IDR {{ $itemPrice[$index] }}
                    @if($itemPrice[$index]>=1300000)
                        <span class="badge bg-success">Discount</span>
                    @elseif($itemPrice[$index]<=1300000)
                        <span class="badge bg-danger">No discount</span>
                    @endif
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</body>
@extends('layout.footer')
</html>