<template>
    <div>
        <button :class="classes" class="w-full text-left" v-if="as == 'button'">
            <slot></slot>
        </button>

        <Link :href="href" :class="classes" v-else>
            <slot />
        </Link>
    </div>
</template>

<script>
    import { defineComponent } from 'vue';
    import { Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Link,
        },
        props: ['active', 'href', 'as'],

        computed: {
            classes() {
                return this.active
                    ? 'flex items-center px-2 py-1 text-white rounded-md bg-blue-600'
                    : 'flex items-center px-2 py-1 text-white transition-colors duration-200 transform rounded-md hover:bg-blue-600'
            }
        }
    })
</script>
