
@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SunbulahGroup</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
<!--<header class="header">
<form class="navbar-form navbar-left" role="search" action="{{ route('search.items') }}">
            <div class="form-group">
                <input type="text" name="query" class="form-control" placeholder="Find People">
            </div>
            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
        </form>
</header>-->
<div class="container">
    <div class="row justify-content-center">

    @if (Route::has('login'))
                    @auth
    <!--<div class="col-md-12">
    <span style="float:left"><a class="btn btn-primary" href="{{ route('items.add') }}">+ Add Product</a></span>  &nbsp; &nbsp; &nbsp; <span style="float:center"><a class="btn btn-primary" href="{{ route('items.index') }}">List Products</a></span> &nbsp; &nbsp; &nbsp; <span style="float:right"><a class="btn btn-primary" href="/submit-rtv">Submit a RTV Request &rarr;</a></span><br /><hr />

           <form method="get" action="/add-item"><span><button type="submit" class="btn btn-primary">Submit a RTV Request</button></span> </form>   <span><form method="get" action="/items"><button type="submit" class="btn btn-primary">Submit a RTV Request</button></form></span>    <span><form method="get" action="/submit-rtv"><button type="submit" class="btn btn-primary">Submit a RTV Request</button></form></span>
        </div>-->
    <div class="col-md-12">
        <div class="card">


            <!--<div class="top-left">
	<a href="{{ url('/') }}">SunbulahGroup</a>
	</div>-->
    <div class="top-right links">
</div>
        <div class="card-header"><span style="font-size:24px"><i class="fas fa-history"></i> Orders Summery.</div></span>
            
        <div class="card-body">
            <!-- If user loggedIn show below content until endShow part 
            //
            //
            //
            // endShow -->


@markdown

#### Just Created Orders [0]

@endmarkdown
                    @if (!$jcorders->count())
                        <p>You haven't created any order recently.</p>
                    @else
                            <table class="table-responsive-sm processed" id="myTable">
                                <thead style="font-size:12px">
                                    <tr>
                                        <th>PO#</th>
                                        <th>Branch#Name</th>
                                        <th>Status</th>
                                        <!--<th>Updated</th>-->
                                    </tr>
                                </thead>
                                <div class="media">
                                <a class="pull-left" href="">
                                </a>
                                <div class="media-body">
                                        @foreach ($jcorders as $jcorder)
                                        <tbody style="font-size:12px">
                                        <tr>
                                        <td><a style= "float:center" href="/orders/order/{{ $jcorder->slug }}">{{ $jcorder->ponumber }}</a></td>
                                        <td>{{ $jcorder->branchname }}</td>
                                        <td class="{{ strtolower($jcorder->status) }}" id="status">{{ $jcorder->status }}</td>
                                        <!--<td>{{ $jcorder->updated_at->diffForHumans() }}</td>-->
                                        </tr>	
                                        </tbody>
                                        @endforeach	
                                </div>
                            </div>
                        </table>
<center>{!! $jcorders->render() !!}</center>

@endif



<br /><hr />                                     


@markdown

#### Open Orders [1]

@endmarkdown

                            @if (!$orders->count())
                                <p>You haven't created any order yet.</p><br /><hr />    

                            @else
                            <br /><hr />    

                            <table class="table-responsive-sm" id="myTable">
                                <thead style="font-size:12px">
                                    <tr>
                                        <th>PO#</th>
                                        <th>Branch#Name</th>
                                        <th>Status</th>
                                        <!--<th>Updated</th>-->
                                    </tr>
                                </thead>
                                <div class="media">
                                <a class="pull-left" href="">
                                </a>
                                <div class="media-body">
                                        @foreach ($orders as $order)
                                        <tbody style="font-size:12px">

                                        <tr>
                                        <td><a style= "float:center" href="/orders/order/{{ $order->slug }}">{{ $order->ponumber }}</a></td>
                                        <td>{{ $order->branchname }}</td>
                                        <td class="{{ strtolower($order->status) }}">{{ $order->status }}</td>
                                        <!--<td>{{ $order->updated_at->diffForHumans() }}</td>-->
                                        </tr>	
                                        </tbody>

                                        @endforeach	
                                </div>
                            </div>
                        </table>
                        <br /><hr />                                      

                        <center>{!! $orders->render() !!}</center>

                        @endif
@markdown

#### Reviewing Orders [2]

@endmarkdown
                    @if (!$reviewingdorders->count())
                        <p>You are not reviewing any order.</p>
                    @else
                            <table class="table-responsive-sm processed" id="myTable">
                                <thead style="font-size:12px">
                                    <tr>
                                        <th>PO#</th>
                                        <th>Branch#Name</th>
                                        <th>Status</th>
                                        <!--<th>Updated</th>-->
                                    </tr>
                                </thead>
                                <div class="media">
                                <a class="pull-left" href="">
                                </a>
                                <div class="media-body">
                                        @foreach ($reviewingdorders as $reviewingdorder)
                                        <tbody style="font-size:12px">
                                        <tr>
                                        <td><a style= "float:center" href="/orders/order/{{ $reviewingdorder->slug }}">{{ $reviewingdorder->ponumber }}</a></td>
                                        <td>{{ $reviewingdorder->branchname }}</td>
                                        <td class="{{ strtolower($reviewingdorder->status) }}">{{ $reviewingdorder->status }}</td>
                                        <!--<td>{{ $reviewingdorder->updated_at->diffForHumans() }}</td>-->
                                        </tr>	
                                        </tbody>
                                        @endforeach	
                                </div>
                            </div>
                        </table>
<center>{!! $reviewingdorders->render() !!}</center>
@endif

<span id="submitted"></span>
<br /><hr />    
@markdown

#### Submitted Orders [3]

@endmarkdown

                    @if (!$processedorders->count())
                    <span id="submitted"></span>
                    @if (Session::has('alert'))
                    <div class="alert alert-success">{{ Session::get('alert') }}</div>
                        <a href="{{ route('orders.add') }}">+ Create New Order</a>
                    @endif
                        <p>You have no submited orders yet!</p>
                    @else
                    @if (Session::has('alert'))
                    <div class="alert alert-success">{{ Session::get('alert') }}</div>
                    @endif
                            <table class="table-responsive-sm processed" id="myTable">
                                <thead style="font-size:12px">
                                    <tr>
                                        <th>Order#</th>
                                        <th>PO#</th>
                                        <th>Branch#Name</th>
                                        <th>Tot. Items</th>
                                        <th>Tot. Qtys</th>
                                        <th>Tot. Price</th>
                                        <th>Qty * Price</th>
                                    </tr>
                                </thead>
                                <div class="media">
                                <a class="pull-left" href="">
                                </a>
                                <div class="media-body">
                                        @foreach ($processedorders as $processedorder)
                                        <tbody style="font-size:12px">
                                        <tr>
                                        <td>{{ $processedorder->slug }}</td>
                                        <td>{{ $processedorder->ponumber }}</td>
                                        <td>{{ $processedorder->branchname }}</td>
                                        <td>{{ $processedorder->totalitems }}</td>
                                        <td>{{ $processedorder->totalqty }}</td>
                                        <td>{{ $processedorder->totalprice }} SAR</td>
                                        <td>{{ $processedorder->totalqty * $processedorder->totalprice }}.00 SAR</td>
                                        </tr>	
                                        </tbody>
                                        @endforeach	
                                </div>
                            </div>
                        </table>
<center>{!! $processedorders->render() !!}</center>
@endif

<br /><hr />                                     


@markdown

#### Completed Orders [4]

@endmarkdown


                            @if (!$completedorders->count())
                                <p>You have no completed orders.</p>
                            @else
                            <table class="table-responsive-sm processed" id="myTable">
                                <thead style="font-size:12px">
                                    <tr>
                                        <th>Order#</th>
                                        <th>PO#</th>
                                        <th>Branch#Name</th>
                                        <th>Tot. Items</th>
                                        <th>Tot. Qtys</th>
                                        <th>Tot. Price</th>
                                        <th>Qty * Price</th>
                                        <!--<th>Updated</th>-->
                                    </tr>
                                </thead>
                                <div class="media">
                                <a class="pull-left" href="">
                                </a>
                                <div class="media-body">
                                        @foreach ($completedorders as $completedorder)
                                        <tbody style="font-size:12px">
                                        <tr>
                                        <td>{{ $completedorder->slug }}</td>
                                        <td>{{ $completedorder->ponumber }}</td>
                                        <td>{{ $completedorder->branchname }}</td>
                                        <td>{{ $completedorder->totalitems }}</td>
                                        <td>{{ $completedorder->totalqty }}</td>
                                        <td>{{ $completedorder->totalprice }} SAR</td>
                                        <td>{{ $completedorder->totalqty * $completedorder->totalprice }}.00 SAR</td>
                                        </tr>	
                                        </tbody>
                                        @endforeach	
                                </div>
                            </div>
                        </table>
<center>{!! $completedorders->render() !!}</center>
@endif

<br /><hr />                            


<br /><hr />                            
  













<br /><hr />                            



@markdown

```

    Order Status Codes:
        [0] -> 'Just Created' => [editable],
        [1] -> 'Editing' => [editable],
        [2] -> 'Reviewing' => [editable],
        [3] -> 'Submitted/Processing' => [not_editable],
        [4] -> 'Completed' => [not_editable]


```
@endmarkdown



                    @else
            <!-- If user loggedOut show below content until endShow part -->          
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{ __('Login') }}</div>
                <div class="card-body">                 
                    <form method="POST" class="form-vertical" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                        <!--@if (Route::has('register'))
                            <a style="float:right" href="{{ route('register') }}">Register</a>
                        @endif-->
                    @endauth
                </div>
            @endif
                <!-- endShow -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
