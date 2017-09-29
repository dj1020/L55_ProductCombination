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
                    <form class="form-inline" action="{{ route('product.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="productCombination">產品 Barcode：</label>
                            <input type="text" class="form-control" id="productCombination" placeholder="請輸入產品組合 barcode" name="combination_code">
                        </div>
                        /
                        <div class="form-group">
                            <label for="productName">產品名稱：</label>
                            <input type="text" class="form-control" id="productName" placeholder="請輸入產品名稱" name="product_name">
                        </div>
                        <br/>
                        <br/>

                        <div class="form-group">
                            <label for="color">顏色 Barcode：</label>
                            <input type="text" class="form-control" id="color" placeholder="請輸入顏色 barcode" name="color_code">
                        </div>
                        /
                        <div class="form-group">
                            <label for="color">顏色名稱：</label>
                            <input type="text" class="form-control" id="color" placeholder="請輸入顏色名稱" name="color">
                        </div>
                        <br/>
                        <br/>

                        <div class="form-group">
                            <label for="size">尺寸 Barcode：</label>
                            <input type="text" class="form-control" id="size" placeholder="請輸入尺寸 barcode" name="size_code">
                        </div>
                        /
                        <div class="form-group">
                            <label for="size">尺寸名稱：</label>
                            <input type="text" class="form-control" id="size" placeholder="請輸入尺寸名稱" name="size">
                        </div>
                        <br/>
                        <br/>

                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>

            <pre>{{ $products->toJson(JSON_PRETTY_PRINT) }}</pre>

            <br/>
            <h2 class="sub-header">產品組合列表</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Header</th>
                            <th>Header</th>
                            <th>Header</th>
                            <th>Header</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1,001</td>
                            <td>Lorem</td>
                            <td>ipsum</td>
                            <td>dolor</td>
                            <td>sit</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
</body>
</html>