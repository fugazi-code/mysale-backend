<template>
    <GuestLayout>
        <SearchCardComponent></SearchCardComponent>
        <FeaturedCategories></FeaturedCategories>
    </GuestLayout>
</template>

<script setup>
import GuestLayout from './layouts/GuestLayout.vue';
import SearchCardComponent from '../components/SearchCardComponent.vue';
import FeaturedCategories from '../components/FeaturedCategories.vue';
</script>