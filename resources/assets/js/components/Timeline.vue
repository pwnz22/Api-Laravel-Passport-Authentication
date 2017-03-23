<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Timeline</div>
                    <div class="panel-body">

                        <post-tweet :tweets="tweets"></post-tweet>
                        <hr>

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
    import PostTweet from './PostTweet'
    export default {
        components: {PostTweet},

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
