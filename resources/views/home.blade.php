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
                                        <input class="form-check-input" name="service_id[]" type="checkbox"
                                               value="{{$service->id}}"
                                               id="priceid">
                                        <label class="form-check-label font-weight-bold" for="defaultCheck1">
                                            {{$service->name}} - ${{$service->price}}
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                               <span id="showPrice"></span>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip01">First name</label>
                            <input type="text" class="form-control" name="fname" id="validationTooltip01" value=""
                                   placeholder="First name" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip02">Last name</label>
                            <input type="text" class="form-control" name="lname" id="validationTooltip02" value=""
                                   placeholder="Last name" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip03">Email</label>
                            <input type="email" name="email" class="form-control" id="validationTooltip03" value=""
                                   placeholder="Email" required>
                            <div class="invalid-tooltip">
                                Please provide a valid email.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip04">Phone</label>
                            <input type="text" class="form-control" name="phone" id="validationTooltip04" value=""
                                   placeholder="Phone Number" required>
                            <div class="invalid-tooltip">
                                Please provide a phone number.
                            </div>
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
    </div>
@endsection
@section('script')
    <script>

    </script>

@endsection
