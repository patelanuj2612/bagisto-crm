<template>
    <div v-show="isActive">
        <slot></slot>
    </div>
</template>

<script>
    export default {
        props: {
            name: { 
                required: true 
            },

            selected: {
                default: false
            }
        },

        inject: ['$validator'],
        
        data() {
            return {
                isActive: false
            };
        },
        
        mounted() {
            this.isActive = this.selected;
        }
    }
</script>