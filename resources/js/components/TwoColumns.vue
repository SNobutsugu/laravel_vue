<template>
    <div class="two_columns">
        <sub-content class="sub"></sub-content>
        <main-content class="main"></main-content>
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
.two_columns {
    display: flex;
}
.sub {
    height: 1080px;
    overflow: scroll;
    border: red 5px solid;
}
.main {
    height: 1080px;
    overflow: scroll;
    border: blue 5px solid;
}
</style>
