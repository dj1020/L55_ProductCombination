<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新增產品</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/3.3/examples/dashboard/dashboard.css"/>
</head>
<body>

@include('nav')
    <div class="container-fluid">
        <div class="row">
            @include('sidebar')
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">新增產品組合</h1>

                <div class="row">
                    <div class="col-xs-12">
                        <form class="form-inline">
                            <div class="form-group">
                                <label for="productCombination">產品 Barcode：</label>
                                <input type="text" class="form-control" id="productCombination"
                                       placeholder="請輸入產品組合 barcode"
                                       name="combination_code"
                                       v-model.trim="form.combination_code"
                                >
                            </div>
                            /
                            <div class="form-group">
                                <label for="productName">產品名稱：</label>
                                <input type="text" class="form-control" id="productName"
                                       placeholder="請輸入產品名稱"
                                       name="name"
                                       v-model.trim="form.name"
                                >
                            </div>
                            <br/>
                            <br/>

                            <div class="form-group">
                                <label for="color">顏色 Barcode：</label>
                                <input type="text" class="form-control" id="color"
                                       placeholder="請輸入顏色 barcode"
                                       name="color_code"
                                       v-model.trim="form.color_code"
                                >
                            </div>
                            /
                            <div class="form-group">
                                <label for="color">顏色名稱：</label>
                                <input type="text" class="form-control" id="color"
                                       placeholder="請輸入顏色名稱"
                                       name="color"
                                       v-model.trim="form.color"
                                >
                            </div>
                            <br/>
                            <br/>

                            <div class="form-group">
                                <label for="size">尺寸 Barcode：</label>
                                <input type="text" class="form-control" id="size"
                                       placeholder="請輸入尺寸 barcode"
                                       name="size_code"
                                       v-model.trim="form.size_code"
                                >
                            </div>
                            /
                            <div class="form-group">
                                <label for="size">尺寸名稱：</label>
                                <input type="text" class="form-control" id="size"
                                       placeholder="請輸入尺寸名稱"
                                       name="size"
                                       v-model.trim="form.size"
                                >
                            </div>
                            <br/>
                            <br/>

                            <div><pre>@{{ $data }}</pre></div>

                            <button type="submit" class="btn btn-success btn-small"
                                    @click.prevent="submitCreate('{{ route('product.store') }}')"
                            >新建</button>
                        </form>
                    </div>
                </div>

                {{--<pre>{{ $products->toJson(JSON_PRETTY_PRINT) }}</pre>--}}

                <br/>
                <h2 class="sub-header">產品組合列表</h2>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>產品 Barcode</th>
                            <th>產品名稱</th>
                            <th>顏色</th>
                            <th>尺寸</th>
                            <th>操作選項</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="product in products">
                            <td>@{{ product.id }}</td>
                            <td>@{{ product.product_id }}</td>
                            <td>@{{ product.name }} (@{{ product.combination_code }})</td>
                            <td>@{{ product.color }} (@{{ product.color_code }})</td>
                            <td>@{{ product.size }} (@{{ product.size_code }})</td>
                            <td>
                                <button class="btn btn-sm btn-primary">修改</button>
                                <button class="btn btn-sm btn-danger">刪除</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@include('footer')
<script>
    var tableData = {!! $products->toJson(JSON_PRETTY_PRINT) !!};
</script>
<script src="/js/products/create.js"></script>
<script src="/js/products/index.js"></script>
</body>
</html>