<template>
    <section>
        <div v-if="user.role == 0 && user.roleName == 'admin'">
            <aside
                class="sidebar position-fixed top-0 left-0 overflow-auto h-100 float-left"
                id="show-side-navigation1"
            >
                <i
                    class="uil-bars close-aside d-md-none d-lg-none"
                    data-close="show-side-navigation1"
                ></i>
                <div
                    class="sidebar-header d-flex justify-content-center align-items-center px-3 py-4"
                >
                    <img
                        class="rounded-pill img-fluid"
                        width="65"
                        src="/assets/avatar.png"
                        alt=""
                    />
                    <div class="ms-2">
                        <h5 class="fs-6 mb-0 ml-2">
                            <a class="text-decoration-none" href="#">{{
                                user.lastName
                            }}</a>
                        </h5>
                    </div>
                </div>

                <ul class="categories list-unstyled">
                    <li class="has-dropdown">
                        <i class="uil-estate fa-fw"></i
                        ><a href="#"> Dashboard</a>
                        <ul class="sidebar-dropdown list-unstyled">
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">ipsum dolor</a></li>
                            <li><a href="#">dolor ipsum</a></li>
                            <li><a href="#">amet consectetur</a></li>
                            <li><a href="#">ipsum dolor sit</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <i class="uil-folder"></i><a href="#"> File manager</a>
                    </li>
                    <li class="has-dropdown">
                        <i class="uil-calendar-alt"></i
                        ><a href="#"> Calender</a>
                        <ul class="sidebar-dropdown list-unstyled">
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">ipsum dolor</a></li>
                            <li><a href="#">dolor ipsum</a></li>
                            <li><a href="#">amet consectetur</a></li>
                            <li><a href="#">ipsum dolor sit</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <i class="uil-envelope-download fa-fw"></i
                        ><a href="#"> Mailbox</a>
                        <ul class="sidebar-dropdown list-unstyled">
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">ipsum dolor</a></li>
                            <li><a href="#">dolor ipsum</a></li>
                            <li><a href="#">amet consectetur</a></li>
                            <li><a href="#">ipsum dolor sit</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <ul class="sidebar-dropdown list-unstyled">
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">ipsum dolor</a></li>
                            <li><a href="#">dolor ipsum</a></li>
                            <li><a href="#">amet consectetur</a></li>
                            <li><a href="#">ipsum dolor sit</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <i class="uil-bag"></i><a href="#"> Projects</a>
                        <ul class="sidebar-dropdown list-unstyled">
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">ipsum dolor</a></li>
                            <li><a href="#">dolor ipsum</a></li>
                            <li><a href="#">amet consectetur</a></li>
                            <li><a href="#">ipsum dolor sit</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <i class="uil-setting"></i><a href="#"> Settings</a>
                        <ul class="sidebar-dropdown list-unstyled">
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">ipsum dolor</a></li>
                            <li><a href="#">dolor ipsum</a></li>
                            <li><a href="#">amet consectetur</a></li>
                            <li><a href="#">ipsum dolor sit</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <i class="uil-chart-pie-alt"></i
                        ><a href="#"> Components</a>
                        <ul class="sidebar-dropdown list-unstyled">
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">ipsum dolor</a></li>
                            <li><a href="#">dolor ipsum</a></li>
                            <li><a href="#">amet consectetur</a></li>
                            <li><a href="#">ipsum dolor sit</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <i class="uil-panel-add"></i><a href="#"> Charts</a>
                        <ul class="sidebar-dropdown list-unstyled">
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">ipsum dolor</a></li>
                            <li><a href="#">dolor ipsum</a></li>
                            <li><a href="#">amet consectetur</a></li>
                            <li><a href="#">ipsum dolor sit</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <i class="uil-map-marker"></i
                        ><a href="/logout"> Log out</a>
                    </li>
                </ul>
            </aside>
        </div>
        <div v-else-if="user.role == 1 && user.roleName == 'tesard'">
            Welcome Tesard
        </div>
        <div v-else-if="user.role == 2 && user.roleName == 'respLabo'">
            Welcome Responsable
        </div>
        <div v-else-if="user.role == 3 && user.roleName == 'enseinement'">
            Welcome Enseigement
        </div>
        <div class="error" v-else>
            Page not found with this role please check ur Role or contact admin
            to fix ur problem
        </div>
    </section>
</template>
<script>
export default {
    data() {
        return {};
    },
    props: ["user"]
};
</script>
<style scoped>
div {
    color: #fff;
}
.error {
    color: #f00;
    background: #fff;
    border: 1px solid;
    border-radius: 10px;
    padding: 20px;
    width: 50vw;
    margin: 200px auto;
    text-align: center;
    font-family: "Times New Roman", Times, serif;
}
</style>
