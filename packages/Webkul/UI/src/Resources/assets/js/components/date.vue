<template>
    <div class="date-container">
        <slot>
            <input
                type="text"
                :name="name"
                class="control"
                :value="value"
                data-input
            />
        </slot>
    </div>
</template>

<script>
    import Flatpickr from "flatpickr";

    export default {
        props: {
            name: String,

            value: String,

            minDate: String,

            maxDate: String,
        },

        data() {
            return {
                datepicker: null,
            };
        },

        mounted() {
            var self = this;

            var options = {
                allowInput: true,
                altFormat: "Y-m-d",
                dateFormat: "Y-m-d",
                weekNumbers: true,
                onChange: function(selectedDates, dateStr, instance) {
                    self.$emit("onChange", dateStr);
                },
            };

            if (this.minDate) {
                options.minDate = this.minDate;
            }

            if (this.maxDate) {
                options.maxDate = this.maxDate;
            }

            this.datepicker = new Flatpickr(this.$el.getElementsByTagName("input")[0], options);
        },
    };
</script>
