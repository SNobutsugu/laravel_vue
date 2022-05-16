<template>
    <div class="container">
        <table class="table table-hover">
            <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Person In Charge</th>
                <th scope="col">Show</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="n in 100">
                <th scope="row"> {{ n }}</th>
                <td>Title1</td>
                <td>Content1</td>
                <td>Ichiro</td>
                <td>
                    <button class="btn btn-primary">Show</button>
                </td>
                <td>
                    <button class="btn btn-success">Edit</button>
                </td>
                <td><button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: "MainContent.vue"
}
</script>

<style scoped>
.container {
    width: 100%;
    height: 100%;
}
</style>
