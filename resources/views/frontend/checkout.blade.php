@extends('layouts.frontend')
@section('content')
    <div class="content checkout_content">
        <div class="checkout_content_sub">
            <h3 class="checkout_content_sub_header">შეიყვანე ბარათის მონაცემები</h3>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 pay_form">
                        <form>
                            <div class="mb-3">
                                <label for="cart_user" class="form-label">ბარათის მფლობელი</label>
                                <input type="email" name="cart_user" class="form-control" id="cart_user">
                            </div>
                            <div class="mb-3">
                                <label for="cart_number" class="form-label">ბარათის ნომერი</label>
                                <input type="number" name="cart_number" class="form-control" id="cart_number">
                            </div>
                            <div class="mb-3">
                                <label for="cart_number_cvv" class="form-label"> cvv კოდი</label>
                                <input type="text" name="cart_number_cvv" class="form-control" id="cart_number_cvv" maxlength="3">
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="cart_number_exp_date" class="form-label"> თვე</label>
                                            <input type="text" name="cart_number_exp_month" class="form-control" id="cart_number_exp_month" maxlength="2">

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="cart_number_exp_date" class="form-label"> წელი</label>
                                            <input type="text" name="cart_number_exp_year" class="form-control" id="cart_number_exp_year" maxlength="4">

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">

                                    <button type="submit" class="btn chechout">გადახდა</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
