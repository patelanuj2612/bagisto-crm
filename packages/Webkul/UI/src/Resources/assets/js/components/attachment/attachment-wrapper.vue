<template>
    <div class="attachment-wrapper">
        <attachment-item
            v-for='attachment in attachments'
            :key='attachment.id'
            :attachment="attachment"
            :input-name="inputName"
            @onRemoveAttachment="removeAttachment($event)"
        ></attachment-item>

        <label class="add-attachment-link" @click="addAttachment">
            <i class="icon attachment-icon"></i>
            Add Attachment
        </label>
    </div>
</template>

<script>
    export default {
        props: {
            data: {
                type: Array|String,

                required: false,

                default: () => ([])
            },

            inputName: {
                type: String,

                required: false,

                default: 'attachments[]'
            }
        },

        data: function() {
            return {
                attachmentCount: 0,
                
                attachments: []
            }
        },

        created () {
            var self = this;

            this.data.forEach(function(attachment) {
                self.attachments.push(attachment)

                self.attachmentCount++;
            });
        },

        methods: {
            addAttachment () {
                this.attachmentCount++;

                this.attachments.push({'id': 'attachment_' + this.attachmentCount});
            },

            removeAttachment (attachment) {
                let index = this.attachments.indexOf(attachment);

                Vue.delete(this.attachments, index);
            }
        }

    }
</script>
