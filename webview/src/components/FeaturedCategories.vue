<template>
    <div class="d-flex flex-row mt-5">
        <div class="mx-1" v-for="category in categories.data">
            <div class="card border-0 shadow-sm text-white">
                <img :src="category.banner" class="card-img" :alt="category.name">
                <div class="card-img-overlay">
                    <h5 class="card-title">{{ category.name }}</h5>
                    <p class="card-text">{{ category.count }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            url: import.meta.env.VITE_APP_URL,
            categories: []
        }
    },
    methods: {
        getFeatured() {
            let $this = this;
            axios.get(this.url + 'featured-categories')
                .then(response => {
                    $this.categories = response.data
                })
        }
    },
    mounted() {
        this.getFeatured()
    }
}
</script>