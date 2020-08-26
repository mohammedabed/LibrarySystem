@extends('admin')
@section('title') Edit Member - {{ $common['appShort'] }} @stop

@section("content")
    <section class="content-header">
        <h1><i class="fa fa-pencil"></i> {{trans('greet.Edit Member')}}</h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/admin') }}"><i class="fa fa-user"></i> Admin</a></li>
            <li class="">
                <a href="{{ url('/admin/member/list') }}">{{trans('greet.Members')}}</a>
            </li>
            <li class="">
                <a href="{{ url('/member/'.$member->id) }}">{{ $member->getFullName() }}</a>
            </li>
            <li class="active">
                {{trans('greet.Edit')}}
            </li>
        </ol>
    </section>

    <section id="createBook" class="content book-form">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{trans('greet.Member Details')}}</h3>
                    </div>
                    <form method="post" action="{{ url('/').'/admin/member/'.$member->id }}"
                          enctype="multipart/form-data">
                        <input type="hidden" id="member-id" value="{{ $member->id }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="box-body">
                            @if (count($errors) > 0)
                                <div class="">
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <div class="form-group">
                                        <label for="mFirstName">{{trans('greet.fname')}}</label>
                                        <input type="text" class="form-control input-lg" id="mFirstName"
                                               placeholder="First Name"
                                               name="firstName" value="{{ $member->firstName }}" maxlength="50"
                                               required>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <div class="form-group">
                                        <label for="mLastName">{{trans('greet.lname')}}</label>
                                        <input type="text" class="form-control input-lg" id="mLastName"
                                               placeholder="Last Name"
                                               name="lastName" value="{{ $member->lastName }}" maxlength="50" required>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-12">
                                    <div class="form-group">
                                        <label for="">{{trans('greet.Type')}}</label>
                                        <select required class="form-control input-lg" name="type">
                                            <option {{ $member->type =='Member'?'SELECTED':'' }}>{{trans('greet.Member')}}</option>
                                            <option {{ $member->type =='Admin'?'SELECTED':'' }}>{{trans('greet.Admin')}}</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="mGender">{{trans('greet.gender')}}</label>
                                        <select required class="form-control input-lg" name="gender" id="mGender">
                                            <option {{ $member->gender =='Male'?'SELECTED':'' }}>{{trans('greet.mgender')}}</option>
                                            <option {{ $member->gender =='Female'?'SELECTED':'' }}>{{trans('greet.fgender')}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label id="" for="mDOB">{{trans('greet.birth')}}</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control input-lg date-picker" id="mDOB"
                                                   placeholder="Date of Birth" maxlength="30" name="dateOfBirth"
                                                   value="{{ date('d M, Y', strtotime($member->dateOfBirth)) }}"
                                                   required>
                                            <span class="input-group-addon"><i
                                                        class="glyphicon glyphicon-th"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="mTitle">{{trans('greet.ptitle')}}</label>
                                        <input type="text" class="form-control input-lg" id="mTitle"
                                               placeholder="Profile Title" maxlength="100"
                                               autocomplete="off" name="profileTitle"
                                               value="{{ $member->profileTitle }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label id="" for="mEmail">{{trans('greet.email')}}</label>
                                        <input type="email" class="form-control input-lg" id="mEmail"
                                               value="{{ $member->email }}"
                                               placeholder="Email" maxlength="50" name="email" required>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="box-footer">
                            <p class="text-right">
                                <button class="btn btn-primary btn-flat" type="submit">{{trans('greet.Save')}}</button>
                            </p>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
@stop