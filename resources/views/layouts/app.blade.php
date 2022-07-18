@include('layouts.header')
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-6">
                <h3>@yield('titulo')</h3>
                <ol class="breadcrumb">
                    @yield('breadcrumb')
                </ol>
            </div>
            <div class="col-sm-6">

                <div class="bookmark">
                    <ul>
                        @yield('bookmark')
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            @yield('conteudo')
        </div>
    </div>
</div>
@include('layouts.footer')
