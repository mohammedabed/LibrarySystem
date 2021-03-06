@extends('admin')
@section('title') Publisher List -- {{ $common['appShort'] }} @stop

@section("content")
    <section class="content-header">
        <h1><i class="fa fa-building-o"></i> {{trans('greet.Publishers')}} <small>{{trans('greet.Publisher List')}}</small></h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/admin') }}"><i class="fa fa-user"></i> Admin</a></li>
            <li class="active">
                <a href="{{ url('publisher') }}">{{trans('greet.Publishers')}}</a>
            </li>
        </ol>
    </section>

    <section class="content">
        <input type="hidden" id="page_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{trans('greet.Publisher List')}}</h3>
                        <p class='pull-right'>
                            <a href="{{ url('/').'/admin/publisher/add-new' }}" class="btn btn-xs btn-info">
                                <i class="fa fa-plus"></i> {{trans('greet.Add New')}}</a>
                        </p>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <th>{{trans('greet.Name')}}</th>
                                    <th>{{trans('greet.Country')}}</th>
                                    <th>{{trans('greet.Establish year')}}</th>
                                    <th>{{trans('greet.Last Update')}}</th>
                                    <th class="text-right">...</th>
                                </thead>
                                <tbody>
                                @foreach($publishers as $publisher)
                                    <tr>
                                        <td>{{  $publisher->name }}</td>
                                        <td>
                                            {{ $publisher->country }}
                                        </td>
                                        <td>
                                            @if(isset($publisher->establishYear))
                                                {{ $publisher->establishYear }}
                                            @endif
                                        </td>
                                        <td>{{ $publisher->updated_at->diffForHumans() }}</td>
                                        <td class="text-right">
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{ url('/admin').'/publisher/'.$publisher->id.'/edit' }}" class="btn btn-link" >
                                                    <i class="fa fa-pencil"></i></a>
                                                <button class="btn btn-link"  data-toggle="modal" data-target="">
                                                    <i class="fa fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="box-footer text-center">
                        <p class="text-center">{!! $publishers->render() !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop