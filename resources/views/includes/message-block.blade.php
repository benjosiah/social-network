@if(count($errors) >0)
    <div class='row'>
        <div class='col-md-6'>
            <ul>
                @foreach($errors->all() as $errors)
                    <li>
                        {{$errors}}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
@if(Session::has('message'))
<div class='row'>
        <div class='col-md-6'>
            <ul>
                {{Session::Get('message')}}
            </ul>
        </div>
    </div>
@endif