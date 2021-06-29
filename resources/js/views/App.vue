<template>
    <div id="root">
        <Sidebar />
        <div id="content">
            <Header />
            <div class="page-content">
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script>
    import Header from "./admin/layouts/Header";
    import Sidebar from "./admin/layouts/Sidebar";

    export default {
        components: {
            Header,
            Sidebar
        }
    }
</script>
