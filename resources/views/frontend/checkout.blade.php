@extends('layouts.frontend')
@section('content')
    <div class="content checkout_content">
        <section class="checkout_content_sub">
            <h2 class="checkout_content_sub_header">შეიყვანეთ ბარათის მონაცემები</h2>
            <form action="" method="post" class="checkout_content_sub_form">
                <label for="email">იმეილი</label>
                <input type="email" id="email" name="email">
                <label for="name">სახელი და გვარი</label>
                <input type="text" id="name" name="full_name">
                <label for="id_num">ბარათის კოდი</label>
                <input type="number"id="id_num" name="id_num">
                <label for="cvv">cvv კოდი</label>
                <input type="number"id="cvv" name="cvv">
                <label for="exp_date">მოქმედების ვადა</label>
                <input type="number"id="exp_date" name="exp_date">
                <button type="submit">გადახდა</button>
            </form>
        </section>
    </div>
@endsection
