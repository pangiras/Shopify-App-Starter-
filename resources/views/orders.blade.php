@extends('shopify-app::layouts.default')

@section('content')
   Orders 
@endsection

@section('scripts')
    @parent

    <script type="text/javascript">
        var AppBridge = window['app-bridge'];
        var actions = AppBridge.actions;
        var TitleBar = actions.TitleBar;
        var Button = actions.Button;
        var Redirect = actions.Redirect;
        var titleBarOptions = {
            title: 'Orders',
        };
        var myTitleBar = TitleBar.create(app, titleBarOptions);
    </script>
@endsection