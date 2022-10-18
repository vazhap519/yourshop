@extends('layouts.frontend')
@section('content')
    <div class="content regitration_content">
        <h2 class="regitration_content_header">მომხმარებლის რეგისტრაცია</h2>
        <form action="{{route('regiter_user')}}"  class="regitration_content_form" method="post">
            @csrf
            <div class="result">
                @if(  Session::flash('success'))
                    <div class="alert alert-success">
                        {{Session::flash('success')}}
                    </div>
                @endif
                    @if(  Session::flash('fail'))
                        <div class="alert alert-danger">
                            {{Session::flash('fail')}}
                        </div>
                    @endif
            </div>
            <label for="name">სახელი</label>
            <input type="text" id="name" placeholder="ჩაწერეთ თქვენი სახელი" name="name">

            <label for="lastname">გვარი</label>
            <input type="text" id="lastname" placeholder="ჩაწერეთ თქვენი გვარი" name="lastname"  >

            <label for="email">იმეილი</label>
            <input type="email" id="email" placeholder="ჩაწერეთ რეალური იმეილი" name="email" >

            <label for="password">პაროლი</label>
            <input type="password" id="password" name="password"  >

{{--            <label for="password2">გაიმეორეთ პაროლი</label>--}}
{{--            <input type="password" id="password2" name="password">--}}


{{--            <label for="region">რაიონი</label>--}}
{{--            <select id="region" name="region">--}}
{{--                <option name="">შიდა ქართლი</option>--}}
{{--                <option name="">ქვემო ქართლი</option>--}}
{{--                <option name="">რაჭა-ლეჩხუმი</option>--}}
{{--                <option name="">აჭარა</option>--}}
{{--                <option name="">გურია</option>--}}
{{--                <option name="">კახეთი</option>--}}
{{--            </select>--}}

{{--            <label for="city">ქალაქები</label>--}}
{{--            <select id="city" name="city">--}}
{{--                <option name="">თბილისი</option>--}}
{{--                <option name="">ბათუმი</option>--}}
{{--                <option name="">გორი</option>--}}
{{--            </select>--}}
{{--            <label for="address">მისამართი</label>--}}
{{--            <textarea id="address" name="full_address" placeholder="ჩაწერეთ სრული მისამართი"></textarea>--}}
{{--            <label for="phone">ტელეფონის ნომერი</label>--}}
{{--            <input type="text" id="phone" name="phone">--}}
            <button type="submit" class="register_user">რეგისტრაცია</button>
        </form>
    </div>
@endsection
