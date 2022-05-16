<template>
    <div>
        <div class="title">
            <p>aaaaa</p>
            <br>
            <p>aaaaa</p>
            <br>
            <p>aaaaa</p>
            <br>
            <p>aaaaa</p>
            <br>
        </div>
        <div class="partial_scroll">
            <ul>
                <li v-for="n in 40">
                    {{ n }}回目
                </li>
            </ul>
        </div>
        <div class="footer">
            <p>ddddd</p>
            <br>
            <p>ddddd</p>
            <br>
            <p>ddddd</p>
            <br>
            <p>ddddd</p>
            <br>
        </div>
    </div>
</template>

<script>

export default {
    name: "PartialScroll"
}
</script>

<style scoped>
.title {
    border: red 5px solid;
}
.partial_scroll {
    height: 100px;
    border: blue 5px solid;
    overflow: scroll;
}
.footer {
    border: greenyellow 5px solid;
}
</style>
