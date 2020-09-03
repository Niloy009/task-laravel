@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="row">
                <div class="col-md-12">
                    {{--                    <form class="needs-validation" novalidate>--}}
                    {{Form::open(['route' => ['carts.store'], 'method' => 'POST' ])}}
                    <div class="form-check">
                        <div class="form-row">
                            @foreach($services as $service)
                                <div class="col-md-5 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" name="service_id[]" data-price={{$service->price}} type="checkbox"
                                               value="{{$service->price}}"
                                               id="price-{{$service->id}}">
                                        <label class="form-check-label font-weight-bold" for="defaultCheck1">
                                            {{$service->name}} - ${{$service->price}}
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                                <div class="form-group col-md-6" id="total-price">
                                    <label for="inputEmail4">Total Price</label>
                                    <input type="text" name="total_price" class="form-control" id="input"
                                           placeholder="" readonly>
                                </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip01">First name</label>
                            <input type="text" class="form-control" name="fname" id="validationTooltip01" value=""
                                   placeholder="First name">
                            <span class="text-danger ">{{$errors->has('fname') ? $errors->first('fname') : ''}}</span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip02">Last name</label>
                            <input type="text" class="form-control" name="lname" id="validationTooltip02" value=""
                                   placeholder="Last name">
                            <span class="text-danger ">{{$errors->has('lname') ? $errors->first('lname') : ''}}</span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip03">Email</label>
                            <input type="email" name="email" class="form-control" id="validationTooltip03" value=""
                                   placeholder="Email">
                            <span class="text-danger ">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip04">Phone</label>
                            <input type="text" class="form-control" name="phone" id="validationTooltip04" value=""
                                   placeholder="Phone Number">
                            <span class="text-danger ">{{$errors->has('phone') ? $errors->first('phone') : ''}}</span>
                        </div>
                        <div class="col-md-8 mb-3">
                                <textarea class="form-control" name="message" id="" rows="3"
                                          placeholder="Type a message"></textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                    {{Form::close()}}

                </div>
            </div>
        </div>
{{--        <div class="font-weight-bold" id="priceShow">Total- 0</div>--}}
    </div>
@endsection
@section('script')
    <script>

{{--let services = @json($services);--}}
        // let total = 0;
        // function addPrice(id) {
        //
        //     total = total+parseInt( $('#price-' + id).val());
        //     console.log(total);
        //
        // };
//
$(':checkbox').change(function() {
    let total = 0;
    $(':checkbox:checked').each(function() {
        total = total + parseInt( $(this).data('price') );
    });
    $('#showPrice').html(total);
    // $('#showPrice').append("<div class='font-weight-bold'> Total-"+total+"</div>");
    $('#input').val(total);
});


    </script>

@endsection
