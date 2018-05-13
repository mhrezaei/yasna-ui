{{-- Coustomers Section --}}
{{-- intoroduces customers--}}
<section class="customers hiddenDiv">
    <div class="container-fluid">
        {{-- Customers main heading --}}
        @include('yasna.frame.heading-main',[
            "text"=> $switches["customers_title"]
        ])
        {{-- customers inner content --}}
        @include('yasna.index.customers.customers')
    </div>
</section>