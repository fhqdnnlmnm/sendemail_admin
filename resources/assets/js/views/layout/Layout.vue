<template>
    <div class="app-wrapper">
        <div class="sidebar-container">
            sidebar
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
export default {
    
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
