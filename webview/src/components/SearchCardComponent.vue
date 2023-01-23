<template>
    <div class="card bg-dark text-white mt-4 border-0 shadow">
        <div class="card-img-overlay h-100 px-5 mx-5">
            <div class="mt-5 pt-4">
                <h5 class="card-title text-shadow">We have what you are looking for...</h5>
                <div class="w-100 d-flex flex-row">
                    <input class="form-control" placeholder="Search Keyword..." />
                    <button class="btn btn-primary d-flex flex-row ms-2">
                        <i class="fa-solid fa-magnifying-glass me-1 mt-1"></i>
                        Find
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.card {
    min-height: 251px !important;
    background-image: url(/src/assets/search-background.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position-y: -469px;
}
</style>