@if(Session::has('status'))
    <div class="alert alert-success">
        <p><strong>Great!!</strong> Profile Updated Successfully.</p>
    </div>
@endif

<form method="post" action="{{ url('/').'/admin/my-profile' }}" enctype="application/x-www-form-urlencoded"
class="form-vertical">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="form-group">
                <label>{{trans('greet.fname')}}</label>
                <input type="text" name="firstName" value="{{ $user->firstName }}" class="form-control input-lg"
                       placeholder="First Name" maxlength="50" required/>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="form-group">
                <label>{{trans('greet.lname')}}</label>
                <input type="text" name="lastName" value="{{ $user->lastName }}" class="form-control input-lg"
                       placeholder="First Name" maxlength="50" required/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="form-group">
                <label>{{trans('greet.email')}}</label>
                <label class="form-control input-lg">{{ $user->email }}</label>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-12">
            <div class="form-group">
                <label>{{trans('greet.gender')}}</label>
                <select class="form-control input-lg" name="gender" required>
                    <option {{ $user->gender=='Male'?'SELECTED':'' }}>{{trans('greet.mgender')}}</option>
                    <option {{ $user->gender=='Female'?'SELECTED':'' }}>{{trans('greet.fgender')}}</option>
                </select>
            </div>
        </div>
        <div class="col-lg-4 col-md-5 col-sm-12">
            <div class="form-group">
                <label>{{trans('greet.birth')}}</label>
                <input type="text" name="dateOfBirth" value="{{ $user->dateOfBirth->format('d M Y') }}"
                       class="form-control input-lg date-picker" placeholder="Date of Birth" maxlength="50" required/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="form-group">
                <label>{{trans('greet.ptitle')}}</label>
                <input type="text" name="profileTitle" value="{{ $user->profileTitle }}"
                       class="form-control input-lg" placeholder="Profile Title" maxlength="10" required/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-right">
            <button class="btn btn-info" type="submit">{{trans('greet.Update')}}</button>
        </div>
    </div>
</form>