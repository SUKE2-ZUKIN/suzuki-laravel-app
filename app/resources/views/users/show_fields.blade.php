<!-- User Name Field -->
<div class="col-sm-12">
    {!! Form::label('user_name', 'User Name:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- User Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- User Email Field -->
<div class="col-sm-12">
    {!! Form::label('icon', 'Icon:') !!}
   <div>
   <img src="{{ asset(Auth::user()->icon) }}"
        class="user-image elevation-2" alt="User Image"
        width="300", height="300">
   </div>
</div>


