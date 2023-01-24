<template>
    <div class="mt-5">
        <h4>Featured Categories</h4>
        <div class="d-flex flex-row mt-3">
            <div class="mx-1" v-for="category in categories.data">
                <div class="card border-0 shadow-sm text-white">
                    <img :src="category.banner" class="card-img" :alt="category.name">
                    <div class="card-img-overlay featured">
                    </div>
                    <div class="card-img-overlay d-flex align-items-end">
                        <div>
                            <h5 class="card-title responsive-font">{{ category.name }}</h5>
                            <p class="card-text">+{{ category.count }} listing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.card-img-overlay.featured {
    background: linear-gradient(to bottom, transparent 0%, #6e6e6e 100%);
}

.card-img {
    max-height: 500px;
    max-width: 500px;
}
</style>

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