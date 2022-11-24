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
            color: black;
        }
        .user_info p{
            font-size: 10px;
            color: gray;
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
        .contacts{
            margin: 20px;
        }
    </style>

    @foreach($chats as $chat)
        <div class="d-flex bd-highlight contacts">
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
