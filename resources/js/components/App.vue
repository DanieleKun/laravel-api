<template>
    <h2>Homepage</h2>
</template>

<script>
import Axios from 'axios'

    export default {
        name: 'App',
        data() {
            return {
                posts: [],
            }
        },

        created() {
            Axios.get('http://127.0.0.1:8000/api/posts')
            .then(response => {
                this.posts = response.data.response.data;
            })
            .catch(error => console.log('errore!!!!!'));
        }
    }
   
</script>


<style lang="scss" scoped>
    @import 'bootstrap/scss/bootstrap';
</style>