@extends('admin')
@section('title') Balance Quantity Report -- {{ $common['appTitle'] }} @stop

@section("content")
    <section class="content-header">
        <h1><i class="fa fa-pie-chart"></i> {{trans('greet.Balance Report')}}
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/admin') }}"><i class="fa fa-user"></i> Admin</a></li>
            <li class="">
                <a href="{{ url('/admin/report') }}">{{trans('greet.report')}}</a>
            </li>
            <li class="active">
                Loan
            </li>
        </ol>
    </section>

    <section class="content report report-loan">
        <div class="row">
            <div class="col-lg-offset-2 col-lg-8 col-md-12 col-sm-12">
                <div id="printableArea" class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{trans('greet.Book Balance Quantity Report')}}</h3>
                            <span class="pull-right"><button class="btn btn-default btn-print" type="button"
                                                             onclick="printDiv('printableArea')">
                                <i class="fa fa-print"></i> {{trans('greet.Print')}}</button></span>
                    </div>
                    <div class="box-body">
                        @if(isset($books))
                            <div class="table-responsive">

                                @foreach($books->groupBy('shelfName') as $key => $shelf)
                                    <h2>
                                        <span class="text-left"><small class="text-muted">{{trans('greet.Shelf')}}: </small>{{ $key }}</span>
                                    </h2>

                                    @foreach($shelf->groupBy('shelfRackLevel') as $rackKey => $rackBooks)
                                        <h3><small class="text-muted">{{trans('greet.rack')}}:</small> {{ $rackKey }}</h3>
                                        <table class="table table-condensed table-striped">
                                            <thead>
                                                <tr>
                                                <th>{{trans('greet.Book Code')}}</th>
                                                <th>{{trans('greet.Book Title')}}</th>
                                                <th>{{trans('greet.Status')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($rackBooks as $book)
                                                    @foreach($book->copies as $copy)
                                                        <tr class="{{ $copy->status == '0'?'warning':'' }}">
                                                        <td>{{ $copy->bookCode }}</td>
                                                        <td>{{ $book->title }} - <small>{{ $book->edition }}</small></td>
                                                        <td> @if($copy->status == '1')
                                                                {{trans('greet.Available')}}
                                                            @elseif($copy->status == '0')
                                                                {{trans('greet.On Loan')}}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    @endforeach

                                                @endforeach
                                            </tbody>

                                        </table>

                                    @endforeach
                                @endforeach

                            </div>
                        @endif
                    </div>
                    <div class="box-footer">
{{--                        <p class="text-center">{!! $books->render() !!}</p>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        function printDiv ( divName ) {
            var printContents       = document.getElementById(divName).innerHTML;
            var originalContents    = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
@stop