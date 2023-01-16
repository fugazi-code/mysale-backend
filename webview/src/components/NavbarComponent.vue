<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-0">
        <div class="collapse navbar-collapse h-100" id="navbarNav">
            <div class="container h-100">
                <ul class="navbar-nav h-100">
                    <router-link class="navbar-brand my-auto" :to="{ name: 'home' }">
                        <img src="../assets/nav-logo.svg" alt="mysale logo" width="120" height="34" />
                    </router-link>
                    <li class="nav-item pt-2">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">
                                <i class="fa-solid fa-location-pin"></i>
                            </label>
                            <select class="form-select" id="inputGroupSelect01" v-model="selectedCity">
                                <option value="">Choose...</option>
                                <option v-for="city in cities" :value="city.id">{{ city.name_en }}</option>
                            </select>
                        </div>

                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link h-100 pt-3 px-4" :to="{ name: 'home' }">Car and Bikes</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link h-100 pt-3 px-4" :to="{ name: 'about' }">About</router-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
import axios from 'axios';
export default {
    methods: {
        isActive() {
            let $this = this;
            axios.get(this.url + 'cities').then(response => {
                $this.cities = response.data.data
            });
        }
    },
    data() {
        return {
            url: import.meta.env.VITE_APP_URL,
            selectedCity: '',
            cities: []
        };
    },
    mounted(){
        this.isActive();
    }
}
</script>