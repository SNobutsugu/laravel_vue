<template>
    <div class="container-fluid bg-dark mb-3">
        <div class="container">
            <nav class="navbar navbar-dark">
                <span class="navbar-brand mb-0 h1">Vue Laravel SPA</span>
                <div>
                    <router-link v-bind:to="{name: 'task.list'}">
                        <button class="btn btn-success">List</button>
                    </router-link>
                    <router-link v-bind:to="{name: 'two.columns'}">
                        <button class="btn btn-success">Two Columns</button>
                    </router-link>
                    <router-link v-bind:to="{name: 'partial.scroll'}">
                        <button class="btn btn-success">PartialScroll</button>
                    </router-link>
                    <router-link v-bind:to="{name: 'three.columns'}">
                        <button class="btn btn-success">Three Columns</button>
                    </router-link>
                </div>
            </nav>
        </div>
    </div>
</template>

<script>
    export default {}
</script>
