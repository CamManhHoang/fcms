<template>
    <div class="chat-log">
        <div class="chat-message" v-for="message in messages">
            <p>{{ message.message }}</p>
            <small>{{ message.user.name }}</small>
        </div>
        <div class="empty" v-show="messages.length === 0">
            Nothing here yet!
        </div>
    </div>
</template>

<script>
    export default {
        props: ['messages'],
    }
</script>

<style>
    .chat-log .chat-message:nth-child(even) {
        background-color: #ccc;
    }

    .empty {
        padding: 1rem;
        text-align: center;
    }

    .chat-message {
        padding: 1rem;
    }

    .chat-message > p {
        margin-bottom: .5rem;
    }
</style>
