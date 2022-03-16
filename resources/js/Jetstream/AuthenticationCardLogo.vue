<template>
    <Link :href="'/'">
        <img src="/components/logo-dishub.png" class="w-20 h-20" />
    </Link>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Link,
        },
    })
</script>
