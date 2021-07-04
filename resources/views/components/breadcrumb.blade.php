<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-{{rand(1,5)}}" data-black-overlay="7">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">@yield('title')</h2>
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="/">Home</a>
                            <span class="brd-separetor"><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i></span>
                            <span class="breadcrumb-item active">@yield('title')</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
