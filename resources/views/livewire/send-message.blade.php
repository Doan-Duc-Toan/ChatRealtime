<div class="app">
    <header>
        <h1>Chat Application</h1>
        <input type="text"id="username" placeholder="Enter Username..." wire:model="username">
        {{-- @error('username')
            <span style="color: red">{{ $message }}</span>
        @enderror --}}
    </header>
    <div id="messages">
        @if ($List)
            @foreach ($List as $message)
                <div class="message"><strong>{{$message->username}} :</strong> {{$message->content}}</div>
            @endforeach
        @endif
    </div>
    <form id="message_form" wire:submit.prevent="send">
        <input type="text"id="message_input" placeholder="Message..." wire:model='content'>
        <button type="submit" id="message_send">Send</button>
        {{-- @error('content')
            <span style="color: red">{{ $message }}</span>
        @enderror --}}

    </form>
</div>
