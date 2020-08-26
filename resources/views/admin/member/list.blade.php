@extends('admin')
@section('title') Member List -- {{ $common['appShort'] }} @stop

@section("content")
    <section class="content-header">
        <h1><i class="fa fa-book"></i> {{trans('greet.Members')}} <small>{{trans('greet.Member List')}}</small></h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/admin') }}"><i class="fa fa-user"></i> Admin</a></li>
            <li class="active">
                <a href="{{ url('/admin/member/list') }}">{{trans('greet.Members')}}</a>
            </li>
        </ol>
    </section>

    <section class="content">
        <input type="hidden" id="page_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{trans('greet.Member List')}}</h3>
                        <p class='pull-right'>
                            <a href="{{ url('/').'/admin/member/add-new' }}" class="btn btn-xs btn-info">
                                <i class="fa fa-plus"></i> {{trans('greet.Add New')}}</a>
                        </p>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <th>{{trans('greet.Name')}}</th>
                                    <th>{{trans('greet.gender')}}</th>
                                    <th>{{trans('greet.Age')}}</th>
                                    <th>{{trans('greet.Membership')}}</th>
                                    <th>{{trans('greet.Type')}}</th>
                                    <th>{{trans('greet.Status')}}</th>
                                    <th>...</th>
                                </thead>
                                <tbody>
                                @foreach($members as $member)
                                    <tr>
                                        <td>
                                            <a href="{{ url('/admin/member').'/'.$member->id }}" title="{{ $member->getFullName() }}">
                                                {{ $member->getFullName() }}
                                                <small class="text-muted" data-toggle="tooltip" title="Reservations"
                                                >({{ $member->reservations()->count() }})</small>
                                            </a>
                                        </td>
                                        <td>
                                            {{ $member->gender }}
                                        </td>
                                        <td>
                                            {{ $member->dateOfBirth->age }} <small class="text-muted">years old</small>
                                        </td>
                                        <td>@if($member->type == 'Member')
                                                {{ $member->dateOfBirth->age > 12 ?'Member' : 'Junior Member'}}
                                            @else
                                                Admin
                                            @endif
                                        </td>
                                        <td>{{ $member->status ==1 ? 'Active' :'<label class="label label-warning">Inactive</label>' }}</td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{ url('/admin/').'/member/'.$member->id.'/edit' }}" class="btn btn-link" >
                                                    <i class="fa fa-pencil"></i></a>
                                                <button class="btn btn-link"  data-toggle="modal" data-target="#deleteMember">
                                                    <i class="fa fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="box-footer">
                        <p>{!! $members->render() !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop