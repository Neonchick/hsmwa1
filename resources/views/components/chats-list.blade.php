<div>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <style>
        .user_info{
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 15px;
        }
        .user_info span{
            font-size: 20px;
            color: white;
        }
        .user_info p{
            font-size: 10px;
            color: rgba(255,255,255,0.6);
        }
        .img_cont{
            position: relative;
            height: 70px;
            width: 70px;
        }
        .user_img{
            height: 70px;
            width: 70px;
            border:1.5px solid #f5f6fa;
        }
    </style>

    @foreach($chats as $chat)
{{--        <h2>{{ $chat->title }}</h2>--}}
{{--        <h3>{{ $chat->latestMessage }}</h3>--}}
        <div class="d-flex bd-highlight">
            <div class="img_cont">
                <img src="https://therichpost.com/wp-content/uploads/2020/06/avatar2.png" class="rounded-circle user_img">
            </div>
            <div class="user_info">
                <span>{{ $chat->title }}</span>
                <p>{{ $chat->latestMessage->text }}</p>
            </div>
        </div>
    @endforeach
</div>
