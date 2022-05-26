<template>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <Post v-for="(post, index) in posts" :key="index" :post="post" />
    </div>
</template>

<script>
import Post from "./Post.vue";
export default {
    name: "Posts",
    components: {
        Post,
    },
    data: function () {
        return {
            posts: [],
        };
    },
    methods: {
        getPosts() {
            axios
                .get("http://localhost:8000/api/posts")
                .then((result) => {
                    this.posts = result.data.results.data;
                    console.log(this.posts);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
    created() {
        this.getPosts();
    },
};
</script>

<style></style>
