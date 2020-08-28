@extends('welcome')

@section('content')
    <div class="title m-b-md">
        Show all messages
    </div>

    <table>
        <tr class="head_tr">
            <td class="head_td">Sender</td>
            <td class="head_td">Message</td>
        </tr>
    @foreach($messages as $message)
        <tr>
            <td>{{$message->sender}}</td>
            <td>{{$message->message}}</td>
        </tr>
    @endforeach
    </table>

    <div class="links">
        <a href="http://laravel.task/">Back</a>
        <a href="http://laravel.task/send">Send message</a>

    </div>
@endsection
