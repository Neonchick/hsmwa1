<div>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <style>
        .msg_cotainer {
            width: auto;
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 10px;
            border-radius: 25px;
            background-color: #82ccdd;
            padding: 10px;
        }

        .msg_time {
            position: absolute;
            left: 0;
            bottom: -15px;
            color: gray;
            font-size: 10px;
        }

        .msg_name {
            position: absolute;
            left: 0;
            top: -25px;
            color: black;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .img_cont_msg {
            height: 40px;
            width: 40px;
        }

        .user_img_msg {
            height: 40px;
            width: 40px;
            border: 1.5px solid #f5f6fa;
        }

        .messages {
            margin-left: 20px;
            margin-right: 20px;
            margin-top: 60px;
        }

        .new_message {
            margin-top: 40px;
            margin-bottom: 0px;
            padding: 20px;
            border: 1px solid black;
        }

        .text_box {
            width: 80%;
        }

        .send_btn {
            margin-left: 20px;
        }

        .test1 {
            position: relative;
            width: 100%;
        }
    </style>

    @foreach($messages as $message)
        <div class="d-flex justify-content-start mb-4 messages">
            <div class="img_cont_msg">
                <img src="https://therichpost.com/wp-content/uploads/2020/06/avatar2.png"
                     class="rounded-circle user_img_msg">
            </div>
            <div class="test1">
                <span class="msg_name">{{$message->user->name}}</span>
                <div class="msg_cotainer">
                    {{$message->text}}
                </div>
                <span class="msg_time">{{$message->published_at}}</span>
            </div>
        </div>
    @endforeach
    <form class="new_message" method="post" action="{{route('messages.store',['chat_id' => $message->chat_id])}}"
          title="create article">
        @csrf
        <input class="text_box" name="text"/>
        <button class="send_btn" type="submit">Send</button>
    </form>
</div>
