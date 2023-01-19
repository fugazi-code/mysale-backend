<template>
    <nav class="navbar navbar-expand-lg h-100 navbar-light bg-light shadow-sm p-0">
        <div class="navbar-collapse h-100" id="navbarNav">
            <div class="container h-100  d-flex flex-column flex-md-row  justify-content-between">
                <ul class="navbar-nav h-100">
                    <router-link class="navbar-brand my-auto" :to="{ name: 'home' }">
                        <img src="../assets/nav-logo.svg" alt="mysale logo" width="120" height="34" />
                    </router-link>
                    <li class="nav-item pt-3 me-2">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">
                                <i class="fa-solid fa-location-pin"></i>
                            </label>
                            <select class="form-select" id="inputGroupSelect01" v-model="selectedCity">
                                <option value="">All Cities</option>
                                <option v-for="city in cities" :value="city.id">{{ city.name_en }}</option>
                            </select>
                        </div>
                    </li>
                    <li class="nav-item" v-for="category in categories.slice(0, 3)">
                        <router-link class="d-none d-sm-block d-sm-none d-md-block text-nowrap nav-link h-100 pt-4 px-2"
                            :to="{ name: 'home' }">
                            {{ category.name }}
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="text-nowrap nav-link h-100 pt-md-4 pt-0 px-2" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvas">
                            <i class="fa-solid fa-bars-staggered"></i>
                            All Categories
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav h-100  d-flex flex-row">
                    <li class="nav-item">
                        <router-link class="text-nowrap btn btn-link fw-lighter h-100 pt-md-4 pt-0 px-2"
                            :to="{ name: 'home' }">Log In</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="text-nowrap btn btn-link fw-lighter h-100 pt-md-4 pt-0 px-2"
                            :to="{ name: 'home' }">Sign Up</router-link>
                    </li>
                    <li class="nav-item h-100 ms-2">
                        <button type="button" class="btn btn-info text-white mt-md-3 mt-0 px-2">Sell</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <side-bar-component :allcategories="categories"></side-bar-component>
</template>

<script>
import SideBarComponent from './SideBarComponent.vue';
import axios from 'axios';
export default {
    components: {
        SideBarComponent
    },
    methods: {
        isActive() {
            let $this = this;
            axios.get(this.url + 'cities').then(response => {
                $this.cities = response.data.data
            });
        },
        getCategories() {
            let $this = this;
            axios.get(this.url + 'categories').then(response => {
                $this.categories = response.data
            });
        },
    },
    data() {
        return {
            url: import.meta.env.VITE_APP_URL,
            selectedCity: '',
            cities: [],
            categories: []
        };
    },
    beforeMount() {
        this.isActive();
        this.getCategories();
    },
    mounted() {
    }
}
</script>