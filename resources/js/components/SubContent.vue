<template>
    <ul class="sub">
        <li v-for="n in 10">
            {{ n }}回目
        </li>
    </ul>
</template>

<script>
export default {
    name: "SubContent.vue"
}
</script>

<style scoped>
.sub {
    width: 100%;
    height: 100%;
    border: red 5px solid;
}
</style>
