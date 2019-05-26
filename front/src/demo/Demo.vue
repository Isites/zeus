<template>
    <div id="demo">
        <router-link to="/demo/statics">统计demo</router-link> |
        <router-link to="/demo/protect">保护demo</router-link>
        <router-view/>
    </div>
</template>
<style lang="less">
#demo{
    background: #09c;
    color: #fff;
    a {
        color: #fff;
    }
}    
</style>
