<template>
    <div>
        <div class="row spacing-bottom-small">
            <div class="column tight gutter-right">
                <button v-on:click="bold">Bold</button>
            </div>
            <div class="column tight">
                <button v-on:click="italic">Italic</button>
            </div>
        </div>
        <textarea
            ref="editor"
            name="body"
            v-model="body"
        ></textarea>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                body: ''
            }
        },

        methods: {
            wrap(tag) {
                const editor = this.$refs.editor

                const selectionStart = editor.selectionStart
                const selectionEnd = editor.selectionEnd

                // Start
                this.body = this.body.slice(0, selectionStart) + '<' + tag + '>' + this.body.slice(selectionStart)

                // End
                this.body = this.body.slice(0, selectionEnd + tag.length + 2) + '</' + tag + '>' + this.body.slice(selectionEnd + tag.length + 2)
            },

            bold(e) {
                e.preventDefault()

                this.wrap('strong')
            },

            italic(e) {
                e.preventDefault()

                this.wrap('em')
            }
        }
    }
</script>
