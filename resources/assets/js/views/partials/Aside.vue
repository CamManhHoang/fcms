<template>
    <aside class="menu" id="aside-menu">
        <p class="menu-label">
            Dashboard
        </p>
        <ul class="menu-list">
            <li>
                <router-link :to="{ name: 'dashboard' }" exact>
                    <span class="icon">
                        <i class="fa fa-home"></i>
                    </span>
                    Home
                </router-link>
            </li>
            <li>
                <router-link :to="{ name: 'contacts' }">
                    <span class="icon">
                        <i class="fa fa-users"></i>
                    </span>
                    Contacts
                </router-link>
                <ul>
                    <router-link :to="{ name: 'contact-create' }">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                        Add New
                    </router-link>
                </ul>
            </li>
            <li>
                <router-link :to="{ name: 'chat' }">
                    <span class="icon">
                        <i class="fa fa-home"></i>
                    </span>
                    Chat Room
                </router-link>
            </li>
        </ul>
        <p class="menu-label">
            Administration
        </p>
        <ul class="menu-list">
            <li><a>Team Settings</a></li>
            <li>
                <a class="is-active">Manage Your Team</a>
                <ul>
                    <li><a>Members</a></li>
                    <li><a>Plugins</a></li>
                    <li><a>Add a member</a></li>
                </ul>
            </li>
            <li><a>Invitations</a></li>
            <li><a>Cloud Storage Environment Settings</a></li>
            <li><a>Authentication</a></li>
        </ul>
        <p class="menu-label">
            Transactions
        </p>
        <ul class="menu-list">
            <li><a>Payments</a></li>
            <li><a>Transfers</a></li>
            <li><a>Balance</a></li>
        </ul>
    </aside>
</template>
<style>
    #aside-menu {
        background-repeat: repeat;
        background-color: #FAFAFA;
        background-image: url(/images/Bg.png);
    }
    .menu-label {
        font-weight: bold;
        padding-top: 1em;
        padding-left: 1em;
    }
</style>
<script>
    export default {

    }
</script>
