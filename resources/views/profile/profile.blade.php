<!-- Profile tab -->
<div class="tab-pane fade in active" id="account-profile">
    <div class="row">
        <form class="col-md-7 col-lg-8" method="post" id="validation-form"
              action="{{route('profile.update')}} ">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="p-x-1">
                <fieldset class="form-group form-group-lg{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="account-name">Name</label>
                    <input type="text" class="form-control" name="name" id="account-name"
                           value="{{auth()->user()->name}}">
                    @if ($errors->has('name'))
                        <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                                </span>
                    @endif
                </fieldset>
                <fieldset class="form-group form-group-lg{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="account-email">E-mail</label>
                    <input type="email" class="form-control" name="email" id="account-email"
                           value="{{auth()->user()->email}}">
                    @if ($errors->has('email'))
                        <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                                </span>
                    @endif
                </fieldset>
                <fieldset class="form-group form-group-lg{{ $errors->has('phone') ? ' has-error' : '' }}">
                    <label for="account-phone">Mobile</label>
                    <input type="text" class="form-control" name="phone" id="account-phone"
                           value="{{auth()->user()->phone}}">
                    @if ($errors->has('phone'))
                        <span class="help-block">
                                <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                    @endif
                </fieldset>

                <fieldset class="form-group form-group-lg">
                    <label for="account-addrss">Address</label>
                    <input type="text" class="form-control" name="address"
                           value="{{auth()->user()->address}}">
                </fieldset>
                <button type="submit" class="btn btn-lg btn-primary m-t-3">Update Profile</button>
            </div>
        </form>
        <!-- Spacer -->
        <div class="m-t-4 visible-xs visible-sm"></div>
        <!-- Avatar -->
        <div class="col-md-4 col-lg-3 col-md-offset-1">
            <div class="panel bg-transparent">
                <div class="panel-body text-xs-center">
                    @if (auth()->user()->profile_pic)
                        @if(File::exists(public_path('storage/user/profile/' . auth()->user()->profile_pic)))
                            <img src="{{ asset('storage/user/profile/' . auth()->user()->profile_pic) }}" id="blah"
                                 style="max-width: 100%;" onchange="readURL(this)"/>
                        @endif
                    @else
                        <img src="{{ asset('backend/download.png') }}" id="blah"
                             style="max-width: 100%;" onchange="readURL(this)"/>
                    @endif
                </div>
                <hr class="m-y-0">
                <div class="m-t-2 text-center text-muted font-size-12">JPG, JPEG or PNG. Max size of 2MB
                </div>
                <div class="panel-body text-xs-center">
                    <form method="post" action="{{route('user.picture')}}"
                          style="display: inline" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <fieldset
                                class="form-group form-group-lg{{ $errors->has('profile_pic') ? ' has-error' : '' }}">
                            <input type='file' name="profile_pic" onchange="readURL(this)"/>
                            @if ($errors->has('profile_pic'))
                                <span class="help-block">
                                                <strong>{{ $errors->first('profile_pic') }}</strong>
                                </span>
                            @endif
                        </fieldset>
                        <button type="submit" class="btn btn-lg btn-primary center-block">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Profile tab -->
