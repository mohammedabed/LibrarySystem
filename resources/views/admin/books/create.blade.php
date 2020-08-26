@extends('admin')
@section('title') Add New Book -- {{ $common['appShort'] }} @stop

@section("content")
    <section class="content-header">
        <h1><i class="fa fa-plus"></i> {{trans('greet.Add New Book')}}</h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/admin') }}"><i class="fa fa-user"></i> Admin</a></li>
            <li class="">
                <a href="{{ url('/admin/book/list') }}">{{trans('greet.Books')}}</a>
            </li>
            <li class="active">
                {{trans('greet.Add New Book')}}  Add New
            </li>
        </ol>
    </section>

    <section id="createBook" class="content book-form">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="box">
                    <div class="box-header with-border">
                    <h3 class="box-title">{{trans('greet.Book Details')}}</h3>
                    </div>
                    <form method="post" action="{{ url('/').'/admin/book' }}" enctype="multipart/form-data">
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
                                <div class="col-lg-8 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="bookTitle">{{trans('greet.Book Title')}}</label>
                                        <input type="text" class="form-control input-lg" id="bookTitle" placeholder="{{trans('greet.Book Title')}}"
                                               name="title" value="{{ old('title') }}">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="bookEdition">{{trans('greet.Edition')}}</label>
                                        <input type="text" class="form-control input-lg" id="bookEdition" placeholder="{{trans('greet.Edition')}}"
                                               name="edition" value="{{ old('edition') }}" maxlength="100" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label id="authorLabel1" for="bookAuthor1">{{trans('greet.Author 1')}}</label>
                                        <input type="text" class="form-control input-lg" id="bookAuthor1" placeholder="{{trans('greet.Author 1')}}"
                                               maxlength="100" data-provide="typeahead" autocomplete="off" name="author1name"
                                        value="{{ old('author1name') }}">
                                        <input type="hidden" id="author1" name="author1" value="{{ old('author1') }}">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label id="authorLabel2" for="bookAuthor2">{{trans('greet.Author 2')}}</label>
                                        <input type="text" class="form-control input-lg" id="bookAuthor2" placeholder="{{trans('greet.Author 2')}}"
                                               maxlength="100" data-provide="typeahead" autocomplete="off" name="author2name"
                                               value="{{ old('author2name') }}">
                                        <input type="hidden" id="author2" name="author2" value="{{ old('author2') }}">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label id="authorLabel3" for="bookAuthor3">{{trans('greet.Author 3')}}</label>
                                        <input type="text" class="form-control input-lg" id="bookAuthor3" placeholder="{{trans('greet.Author 3')}}"
                                               maxlength="100" data-provide="typeahead" autocomplete="off" name="author3name"
                                               value="{{ old('author3name') }}">
                                        <input type="hidden" id="author3" name="author3" value="{{ old('author2') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label id="" for="bookPublishDate">{{trans('greet.Publish Date')}}</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control input-lg date-picker" id="bookPublishDate"
                                                   placeholder="Publish Date" maxlength="100" name="publishDate"
                                                   value="{{ old('publishDate') }}" required>
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                    <label id="publiserLabel" for="bookPublisher">{{trans('greet.Publisher')}}</label>
                                    <input type="text" class="form-control input-lg" id="bookPublisher" placeholder="{{trans('greet.Publisher')}}" maxlength="100" required
                                           data-provide="typeahead" autocomplete="off"
                                           name="publisherName" value="{{ old('publisherName') }}">
                                    <input type="hidden" id="publisherId" name="publisher" value="{{ old('publisher') }}">
                                </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label id="" for="bookCopy">{{trans('greet.Quantity (Copy)')}}</label>

                                        <input type="number" class="form-control input-lg" id="bookCopy"
                                               placeholder="Number of Copy" maxlength="2" name="copy"
                                               value="1" required >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="bookISBN10">{{trans('greet.ISBN 10')}}</label>
                                    <input type="text" class="form-control input-lg" id="bookISBN10" placeholder="ISBN10"
                                           name="isbn10" value="{{ old('isbn10') }}" maxlength="10" required>
                                </div>
                            </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="bookIsbn13">{{trans('greet.ISBN13')}}</label>
                                    <input type="text" class="form-control input-lg" id="bookIsbn13" placeholder="ISBN13" maxlength="13" required
                                    name="isbn13" value="{{ old('isbn13') }}">
                                </div>
                            </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="bookISBN10">{{trans('greet.Shelf')}}</label>
                                        <select class="form-control input-lg" name="shelf">
                                            @foreach($shelfs as $shelf)
                                                <option>{{ $shelf }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="bookIsbn13">{{trans('greet.Shelf Level')}}</label>
                                        <select class="form-control input-lg" name="shelfLevel">
                                            @foreach($shelfLevels as $level)
                                                <option>{{ $level }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label id="bookCategoryLabel1" for="bookCategory1">{{trans('greet.Category 1')}}</label>
                                        <input type="text" class="form-control input-lg" id="bookCategory1" required
                                               placeholder="{{trans('greet.Category 1')}}" maxlength="100" name="category1name"
                                               data-provide="typeahead" autocomplete="off" value="{{ old('category1name') }}">
                                        <input type="hidden" id="category1" name="category1" value="{{ old('category1') }}">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label id="bookCategoryLabel2" for="bookCategory2">{{trans('greet.Category 2')}}</label>
                                        <input type="text" class="form-control input-lg" id="bookCategory2"
                                               placeholder="{{trans('greet.Category 2')}}" maxlength="100" name="category2name"
                                               data-provide="typeahead" autocomplete="off" value="{{ old('category2name') }}">
                                        <input type="hidden" id="category2" name="category2" value="{{ old('category2') }}">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label id="bookCategoryLabel3" for="bookCategory3">{{trans('greet.Category 3')}}</label>
                                        <input type="text" class="form-control input-lg" id="bookCategory3"
                                               placeholder="{{trans('greet.Category 3')}}" maxlength="100" name="category3name"
                                               data-provide="typeahead" autocomplete="off" value="{{ old('category3name') }}">
                                        <input type="hidden" id="category3" name="category3" value="{{ old('category3') }}">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label id="thumbnail" >img</label>
                                        <input type="file" class="form-control input-lg" id="thumbnail" value="thumbnail" name="thumbnail">


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