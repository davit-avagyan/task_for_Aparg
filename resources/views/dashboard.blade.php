<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="">
        <h1>All Users</h1>

        @foreach($allUsers as $user)
            <div data-id="{{ $user['id'] }}" class="">
                <h2>{{ $user['name'] }}</h2>
                <img src="{{ $user['profile_photo_url'] }}">
                <button class="start_chat btn btn-success" type="button" data-id="{{ $user['id'] }}">Start Chat</button>
            </div>
        @endforeach

    </div>

</x-app-layout>

{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">--}}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<script>

    import Button from "../js/Jetstream/Button";

    export default {
        components: {Button}
    }
</script>
