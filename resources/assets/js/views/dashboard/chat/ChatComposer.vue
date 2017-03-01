<template>
    <div class="chat-composer">
        <input class="input" id="message" type="text" placeholder="Start typing your message..." v-model="messageText" @keyup.enter="sendMessage">
        <button class="button is-primary" @click="sendMessage">Send</button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            messageText: ''
        }
    },
    methods: {
        sendMessage() {
            this.$emit('message-sent', {
                message: this.messageText,
                user: {
                    name: auth.user.profile.name
                }
            });
            this.messageText = '';
        }
    }
}
</script>

<style>
    .chat-composer {
        display: flex;
    }

    .chat-composer input {
        flex: 1 auto;
        padding: .5rem 1rem;
    }

    .chat-composer button {
       margin-left: 3px;
    }
</style>
