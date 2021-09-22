<template>
    <div class="container">
        <div class="row">
            <div v-for="post in posts" :key="post.id" class="card col-md-3" >
                <h5> {{post.title}} </h5>

                <button v-on:click="deleteById(post.id)" type="button" class="btn btn-danger">Delete</button>

            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data(){
            return{
                posts:[]
            }
        },

        mounted() {
            this.getPosts();
        },

        methods:{
            getPosts() {
                axios.get('/api/posts').then((response) =>{
                    this.posts = response.data
                }
            )},

            deleteById(id){
                axios.delete(`api/posts/${id}`).then((response) => {
                    console.log(response);
                    this.getPosts();
                });
            }

        }

    }
</script>
