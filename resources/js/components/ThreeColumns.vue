<template>
    <div class="three_columns">
        <sub-content class="sub_2"></sub-content>
        <main-content class="main"></main-content>
        <sub-content class="sub_3"></sub-content>
    </div>
</template>

<script>
import MainContent from "./MainContent";
import SubContent from "./SubContent";
export default {
    name: "TwoColumns",
    components: {MainContent, SubContent}
}
</script>

<style scoped>
.three_columns {
    display: flex;
}
.sub_2 {
    height: 500px;
    border: red 5px solid;
}
.sub_3 {
    height: 500px;
    border: green 5px solid;
}
.main {
    height: 2000px;
    border: blue 5px solid;
}
</style>
