<template>
    <ul id="sub">
        <li v-for="n in 100">
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

</style>
