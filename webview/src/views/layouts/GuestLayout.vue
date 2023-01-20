
<template>
    <NavbarComponent></NavbarComponent>
    <div class="container">
        <slot></slot>
    </div>
</template>

<script>
import NavbarComponent from '../../components/NavbarComponent.vue';
    export default{
        components: {
            NavbarComponent
        },
    }
</script>