<!-- Password tab -->
<div class="tab-pane fade" id="account-password">
    <form class="col-md-7 col-md-offset-1" method="post" id="validation-form1"
          action="{{route('user.password')}}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <fieldset class="form-group form-group-lg{{ $errors->has('current_password') ? ' has-error' : '' }}">
            <label for="account-password">Old password</label>
            <input type="password" class="form-control" name="current_password" id="current_password">
            @if ($errors->has('current_password'))
                <span class="password_message">{{$errors->first('current_password')}}</span>
            @endif
        </fieldset>
        <fieldset class="form-group form-group-lg{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="account-new-password">New password</label>
            <input type="password" class="form-control" name="password" id="password">
            @if ($errors->has('password'))
                <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </fieldset>
        <fieldset class="form-group form-group-lg">
            <label for="account-new-password-repeat">Confirm password</label>
            <input type="password" class="form-control" name="password_confirmation"
                   id="password_confirmation">
        </fieldset>
        <button type="submit" class="btn btn-lg btn-primary m-t-3">Update password</button>
    </form>
</div>
<!-- / Password tab -->