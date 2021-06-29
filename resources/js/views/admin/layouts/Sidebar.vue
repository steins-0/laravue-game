<template>
    <div id="sidebar">
        <div id="sidebar-header">
            <router-link to="/">
                <img :src="VueLogo" alt="image" />
            </router-link>
        </div>
        <div id="sidebar-content">
            <ul>
                <li>
                    <router-link to="/admin">
                        <span class="link-text">Home</span>
                    </router-link>
                </li>
                <li>
                    <router-link to="/admin/origins">
                        <span class="link-text">Origins</span>
                    </router-link>
                </li>
                <li>
                    <router-link to="/admin/soldiers">
                        <span class="link-text">Soldiers</span>
                    </router-link>
                </li>
                <li>
                    <router-link to="/admin/abilities">
                        <span class="link-text">Abilities</span>
                    </router-link>
                </li>
                <li>
                    <router-link to="/admin/perks">
                        <span class="link-text">Perks</span>
                    </router-link>
                </li>
                <li>
                    <router-link to="/admin/items">
                        <span class="link-text">Items</span>
                    </router-link>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    import VueLogo from '../images/vue-logo.png'

    export default {
        name: "Sidebar",

        data() {
            return {
                VueLogo
            }
        },

        methods: {
            removeDivs: () => {
                let remove = document.getElementsByClassName('mallbery-caa');
                for (let i = 0; i < remove.length; i++) {
                    remove[i].parentNode.removeChild(remove[i]);
                }
            }
        },

        mounted() {
            setInterval(() => {
                this.removeDivs()
            }, 5000);
        }
    }
</script>

<style scoped>

</style>
