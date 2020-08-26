@extends('library')
@section('title') Borrow Books -- {{ $common['appTitle'] }} @stop

@section("content")

    <section class="content">
        <input type="hidden" id="page_token" value="{{ csrf_token() }}">

        <div class="box">
            <div class="box-header with-border"><h3 class="box-title"><i class="fa fa-shopping-cart"></i> {{trans('greet.Borrow Books')}}
                </h3></div>
            <div class="box-body">
                <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}"/>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group-lg">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Book"
                                       data-provide="typeahead" autocomplete="off" id="search-book">
                                <input type="hidden" id="selected-book-id">
                                <input type="hidden" id="selected-book-copy-id">
                                <input type="hidden" id="selected-book-status">
                                <input type="hidden" id="selected-book-code">
                                <input type="hidden" id="selected-book-title">
                                <input type="hidden" id="selected-book-edition">
                                <input type="hidden" id="selected-book-author">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-lg btn-info" id="btn-add-to-borrow">
                                        <i id="borrow-fa" class="fa fa-plus"></i> {{trans('greet.Add')}}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <br/>
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                <tr>
                                    <th>{{trans('greet.Book Code')}}</th>
                                    <th>{{trans('greet.Title')}}</th>
                                    <th>{{trans('greet.Authors')}}</th>
                                    <th>..</th>
                                </tr>
                                </thead>
                                <tbody id="book-borrow-list">
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2">{{trans('greet.Total:')}} <span id="show-current-total"></span></td>
                                        <td colspan="2" class="text-right">
                                            <button class="btn btn-info" type="button"
                                                    disabled="disabled" id="borrow-books">{{trans('greet.Borrow')}}</button>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            <div id="message"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="well well-md">
                            <table class="table table-condensed">
                                <tbody>
                                    <tr><td class="text-muted">{{trans('greet.Name')}}</td><td>: {{ Auth::user()->getFullName() }}</td></tr>
                                    <tr><td class="text-muted">{{trans('greet.Age')}}</td><td>: {{ Auth::user()->dateOfBirth->age}} {{trans('greet.years old')}}</td></tr>
                                    <tr><td class="text-muted">{{trans('greet.Membership')}}</td><td>: {{  $membership }}</td></tr>
                                    <tr><td class="text-muted">{{trans('greet.Current Loan')}}</td><td>: <span class="badge" id="current-loan-badge">{{  $currentLoan }}</span>{{trans('greet.Books')}} </td></tr>
                                    <tr><td class="text-muted">{{trans('greet.Current Limit')}}</td><td>: <span class="badge" id="max-limit-badge">{{  $maxLimitNow }}</span> {{trans('greet.more books')}}</td></tr>
                                    <tr><td class="text-muted">{{trans('greet.Due Date')}}</td><td class="text-danger">: {{  $dueDate }}</td></tr>
                                </tbody>
                                <input type="hidden" id="max-limit-now" value="{{ $maxLimitNow }}"/>
                                <input type="hidden" id="current-loan" value="{{ $currentLoan }}"/>
                                <input type="hidden" id="borrow-now" value="0"/>

                            </table>
                        </div>
                    </div>
                </div>


            </div>
            <div class="box-footer">

            </div>
        </div>

    </section>
@stop