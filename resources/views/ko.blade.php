<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('css/footer.css') }}" rel="stylesheet">
  <script src="{{ url('js/jquery.min.js') }}"></script>
  <script src="{{ url('js/bootstrap.min.js') }}"></script>
  <script src="{{ url('js/knockout.js') }}"></script>
  <script src="{{ url('js/fn.js') }}"></script>
  @yield('jsc')
</head>
<div data-bind="text: myObservableArray()[1].price"></div>
<script>
var viewmodel = {
    myObservableArray: ko.observableArray([
        { name: "Car", price: "9999" },
        { name: "Shoes", price: "20" },
        { name: "Paper", price: "1" }
    ])
}

ko.applyBindings(viewmodel);
</script>
</html>
