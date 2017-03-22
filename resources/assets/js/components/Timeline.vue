<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        <div class="media" v-for="tweet in tweets">
                            <div class="media-left">
                                <a href="#">
                                    <img src="https://placeholdit.imgix.net/~text?txtsize=8&txt=65%C3%9765&w=65&h=65" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <strong>{{ tweet.user.name }}</strong>
                                <p>{{ tweet.body }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                tweets: []
            }
        },

        mounted() {
            axios.get('/tweets').then(response => this.tweets = response.data)
        }
    }
</script>
