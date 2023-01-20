<template>
    <div class="offcanvas offcanvas-end w-25" tabindex="-1" id="offcanvas" data-bs-keyboard="false"
        data-bs-backdrop="false">
        <div class="offcanvas-header">
            <h4 class="offcanvas-title d-none d-sm-block" id="offcanvas">Categories</h4>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-header">
            <input class="form-control" placeholder="Search Category..." v-model="keyword" />
        </div>
        <div class="offcanvas-body px-0">
            <div class="accordion accordion-flush" :id="'accordionFlush'">
                <div class="accordion-item" v-for="category in allcategories" :class="filterList(category.name)">
                    <h2 class="accordion-header" :id="'flush-heading' + category.slug">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            :data-bs-target="'#flush-collapse' + category.slug"
                            :aria-controls="'flush-collapse' + category.slug" aria-expanded="false">
                            {{ category.name }}
                        </button>
                    </h2>
                    <div :id="'flush-collapse' + category.slug" :aria-labelledby="'flush-heading' + category.slug"
                        :data-bs-parent="'#accordionFlush'" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <div class="list-group list-group-flush">
                                <button v-for="sub in category.sub" class="list-group-item list-group-item-action ">
                                    {{ sub.name }}
                                </button>
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
    props: [
        'allcategories'
    ],
    methods: {
        filterList(value) {
            let converted = value.toLowerCase().includes(this.keyword.toLowerCase());
            return converted || this.keyword == '' ? '' : 'd-none';
        }
    },
    data() {
        return {
            keyword: ''
        }
    }
}
</script>