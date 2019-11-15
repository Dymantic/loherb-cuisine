<template>
    <iframe v-if="ready" :height="contentHeight" allowtransparency="true" scrolling="no" frameborder="0" title='xxx' :src="src" class="bookings-frame w-full"></iframe>
</template>

<script type="text/babel">
    export default {
        props: ['lang'],

        data() {
            return {
                contentHeight: null,
                ready: false,
            };
        },

        computed: {
            src() {
                return `https://inline.app/booking/loherb/cuisine?language=${this.lang}&contentHeight=${this.contentHeight}`;
            }

        },

        mounted() {
            this.contentHeight = window.innerHeight - (3 * 16);
            this.ready = true;
        }



    }
</script>
