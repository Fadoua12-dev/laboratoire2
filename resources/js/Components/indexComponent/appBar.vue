<template>
    <header class="appbar teal-light-3 z-1">
        <div class="wrap">
            <section class="middle d-flex flex-row justify-content-end">
                <a class="wave" href="/">Home</a>
                <div class="d-inline" v-if="isLogin">
                    <a class="wave" href="/dashboard">Dashboard</a>
                    <a class="wave" href="/logout">Logout</a>
                </div>
                <div class="d-inline" v-else>
                    <a class="wave" href="/login">Login</a>
                    <a class="wave" href="/register">Register</a>
                </div>
            </section>
        </div>
    </header>
</template>
<script>
export default {
    props: ["isLogin"],
    data() {
        return {};
    }
};
</script>
<style>
*:hover,
*:focus {
    outline: none;
}

.appbar {
    width: 100%;
    height: 65px;
    line-height: 60px;
    color: #000;
}
.appbar > div {
    width: 95%;
    margin: 0 auto;
    height: 100%;
}
.appbar > div > section {
    display: inline-block;
}
.appbar > div > section > a {
    min-width: 50px;
    height: 40px;
    line-height: 42px;
    padding: 0px 8px 0px 8px;
    text-decoration: none;
    text-transform: uppercase;
    text-align: center;
    font-size: 14px;
    font-weight: 500;
    margin-right: 5px;
    font-family: "Roboto", san-serif;
}
.appbar > div > section > a > img {
    height: 25px;
    vertical-align: middle;
}
.appbar > div > section > a.icon {
    text-transform: none;
    width: 50px;
    height: 50px;
    padding: 0px;
    margin: 0;
    text-align: center;
    border-radius: 50%;
}
.appbar > div > section > a.icon > i {
    font-size: 24px;
    position: relative;
    top: 0.5em;
}
.appbar > div > section > a.icon > svg {
    width: 24px;
    height: 24px;
}
.appbar > div > section > a.icon > img {
    margin-top: 8px;
}
.appbar > div > section.left {
    width: 300px;
    height: 100%;
    display: flex;
    float: left;
    align-items: center;
    justify-content: initial;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.appbar > div > section.left > .title {
    margin-left: 10px;
}
.appbar > div > section.middle {
    width: auto;
    height: 100%;
    display: flex;
    margin: 0px auto;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}
.appbar > div > section.right {
    width: auto;
    height: 100%;
    display: flex;
    float: right;
    align-items: center;
    justify-content: flex-end;
    overflow: hidden;
}
.appbar > div > section > .title {
    font-size: 16px;
    color: inherit;
    vertical-align: middle;
    font-family: "Roboto", "Segoe UI", BlinkMacSystemFont, system-ui,
        -apple-system;
}
.appbar > div > section > button {
    margin-top: 0px;
    color: inherit;
    margin-left: 5px;
}
.appbar > div > section > button > i {
    vertical-align: middle;
}
.appbar > div > section > button[open-menu="nesting"] {
    display: none;
}

@media screen and (max-width: 500px) {
    .appbar > div {
        width: 100%;
    }
    .appbar > div > section.left {
        width: 45%;
    }
    .appbar > div > section.right {
        width: 40%;
    }
}
</style>
