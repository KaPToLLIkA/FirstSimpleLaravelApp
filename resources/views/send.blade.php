@extends('welcome')

@section('content')

<div class="title m-b-md">
    Laravel send message
</div>

<div>
    <form method="POST" action="{{route('send')}}" >
        @csrf
        <label for="sender">Sender</label>
        <input type="text" name="sender"/>
        <label for="message">Message</label>
        <textarea name="message"></textarea>
        <input type="submit" value="Submit">
    </form>
</div>


<div class="links">
    <a href="http://laravel.task/">Back</a>
    <a href="http://laravel.task/show">Show all messages</a>

</div>
@endsection
