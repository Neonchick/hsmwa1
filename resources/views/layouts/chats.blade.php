<div>
    <style>
        .block-left{width:30%;height:100%;overflow:auto;float:left;border:1px solid black;}
        .block-right{width:70%;height:100%;overflow:auto;border:1px solid black;}
    </style>
    <div class="block-left"><x-chats-list :chats="$chats"/></div>
    <div class="block-right"><x-chat-history :messages="$selected_chat_messages"/></div>
</div>
