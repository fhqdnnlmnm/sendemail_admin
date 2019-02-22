<template>
    <div class="app-wrapper">
        <div class="sidebar-container">
           <item icon="el-icon-edit">
           </item>
           <div v-for="route in routes" :key="route.path">
               {{route.name}}
           </div>
        </div>
        <div class="mian-container">
            <div class="nav-bar">
                nav-bar
            </div>
            <div class="app-main">
                app-main
            </div>
        </div>
    </div>
</template>

<script>
import Item from './components/Sidebar/Item';
export default {
    components:{
        Item
    },
    computed:{
        routes(){
            return this.$router.options.routes
        }
    }
}
</script>

<style lang="scss" scoped>
    @import '~@/mixin.scss';
    .app-wrapper{
        @include clearfix;
        position:relative;
        height:100%;
        width:100%;
    }
</style>
