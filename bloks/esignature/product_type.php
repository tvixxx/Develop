<div class="container-fluid product_type_bg hiddex-xs">
    <div class="row">
        <div class="product_type col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container">
                <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
                    <img src="/esignature/img/podpis_460_452.png" alt="type" width="100" height="100">
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10">
                    <h1 class="product_type_title">Электронно-цифровая подпись - ЭЦП</h1>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="container hidden-xs">
    <div class="row">
        <div id="navigation">
            <div class="center">

                <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", ".default", array(
                    "START_FROM" => "0",
                    "PATH" => "",
                    "SITE_ID" => "s1"
                ),
                    false,
                    array(
                        "HIDE_ICONS" => "N"
                    )
                );?>
            </div>
        </div>
     </div>
</div>


<style>
    #navigation {
        width: 47%;
        margin: 0 auto;
    }
    #navigation>.center>ul {
        padding-left: 0;
    }
    #navigation>.center>ul>li {
        list-style:none;
        display: inline-block;
    }
</style>