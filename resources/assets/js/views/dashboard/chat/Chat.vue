<template>
    <div class="box column is-6 is-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                Chat Room
                <span class="badge pull-right">{{ usersInRoom.length }}</span>
            </div>
            <chat-log :messages="messages"></chat-log>
            <chat-composer v-on:message-sent="addMessage"></chat-composer>
        </div>
    </div>
</template>
<script>

import ChatLog from './ChatLog';
import ChatComposer from './ChatComposer';

export default{
    components: {
        'chat-log': ChatLog,
        'chat-composer': ChatComposer
    },
    data() {
        return {
            messages: [],
            usersInRoom: []
        }
    },
    methods: {
        addMessage(message) {
            this.messages.push(message);
            axios.post('/api/messages', message).then(response => {
                // Do whatever;
            })
        }
    },
    created() {
        axios.get('/api/messages').then(response => {
            this.messages = response.data;
        });

        Echo.join('chatroom')
            .here((users) => {
                this.usersInRoom = users;
            })
            .joining((user) => {
                this.usersInRoom.push(user);
            })
            .leaving((user) => {
                this.usersInRoom = this.usersInRoom.filter(u => u != user)
            })
            .listen('MessagePosted', (e) => {
                this.messages.push({
                    message: e.message.message,
                    user: e.user
                });
            });
    }
}

</script>
