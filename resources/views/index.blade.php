<!DOCTYPE html>
<html lang="en" ng-app='myapp' ng-controller='mycontroller'>
<head>
<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="/assests/admin/dist/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <title>Ung dung angular</title>
</head>
<body>
    <h1>Test angular: @{{'yet' + '!'}}</h1>
    <h2>@{{hello}}</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>TT</th>
                <th>Ma SV</th>
                <th>Ten SV</th>
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="sv in datas">
                <td>@{{$index+1}}</td>
                <td>@{{sv.masv}}</td>
                <td>@{{sv.tensv}}</td>
            </tr>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="/assets/admin/js/scripts.js"></script>
        <script src="/js/angular.min.js"></script>
        <script src="/js/hellocontroller.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>

</body>
</html>

