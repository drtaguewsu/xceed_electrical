@extends('layouts.app')

@section('title', 'Customers')

@section('content')

<!-- Button trigger modal -->
<div class=" p-3 mb-5 bg-white rounded border">
<div>
    @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if(\Session::has('success'))
    <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
    </div>
    @endif
</div>

<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#customerModal">
    Add Customer
</button>

<!-- Modal -->
<div class="modal fade" id="customerModal" tabindex="-1" role="dialog" aria-labelledby="customerModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="customerModalLabel">Enter customer details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form method="post" action="{{ url('customers') }}">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-sm">
                            <!-- <label for="input">Name</label> -->
                            <input type="text" class="form-control" id="inputName" name="customer_name"
                                placeholder="Customer name">
                        </div>
                        <div class="form-group col-sm">
                            <!-- <label for="inputAddress">Phone</label> -->
                            <input type="text" class="form-control" id="inputCompany" name="customer_company"
                                placeholder="Company name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm">
                            <!-- <label for="inputAddress">Phone</label> -->
                            <input type="text" class="form-control" id="inputPhone" name="customer_phone"
                                placeholder="Phone">
                        </div>
                        <div class="form-group col-sm">
                            <!-- <label for="inputEmail4">Email</label> -->
                            <input type="email" class="form-control" id="inputEmail" name="customer_email"
                                placeholder="Email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm">
                            <!-- <label for="inputAddress2">Address </label> -->
                            <input type="text" class="form-control" id="inputAddress" name="customer_address"
                                placeholder="Address">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm">
                            <select id="inputDiscount" name="customer_discount" class="form-control">
                                @foreach($discounts as $discount)
                                <option selected>{{ $discount->pk_discount_id }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Save Customer</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class='table-responsive'>
    <table class="table table-hover table-sm mt-1">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Company</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Discount</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->customer_name }}</td>
                <td>{{ $customer->customer_company }}</td>
                <td>{{ $customer->customer_phone }}</td>
                <td>{{ $customer->customer_email }}</td>
                <td>{{ $customer->customer_address }}</td>
                <td>{{ $customer->fk_discount_id }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>

@stop
