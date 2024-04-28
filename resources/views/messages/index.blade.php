<x-site-layout>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2" >
                <div class="card" >
                    <div class="card-body" >
                        <div id="messages" class="mb-3" style="height: 400px; overflow-y: scroll;" style="margin-top: 10px">
                            @foreach($messages as $message)
                                @if($message->user_id === auth()->id())
                                    <!-- Authenticated User's Message (Left) -->
                                    <div class="d-flex justify-content-start mb-2">
                                        <div class="bg-primary text-white rounded p-2">
                                            {{ $message->content }}
                                        </div>
                                    </div>
                                @else
                                    <!-- Other Users' Messages (Left) -->
                                    <div class="d-flex justify-content-start mb-2">
                                        <div class="bg-light rounded p-2">
                                            @if ($message->user)
                                                <strong>{{ $message->user->name }}:</strong> {{ $message->content }}
                                            @else
                                                <strong>Anonymous:</strong> {{ $message->content }}
                                            @endif
                                        </div>

                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <form id="messageForm" action="/messages" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="content" class="form-control" placeholder="Type your message..." style="border-radius: 15px; padding: 10px;">
                            </div>
                            <button type="submit" class="btn btn-primary" style="border-radius: 15px;">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-site-layout>
