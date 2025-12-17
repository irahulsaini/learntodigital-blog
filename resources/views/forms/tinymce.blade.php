<div
    x-data="{
        editor: null,
        state: @entangle($getStatePath()),

        init() {
            const waitForTiny = setInterval(() => {
                if (window.tinymce) {
                    clearInterval(waitForTiny);
                    this.mount();
                }
            }, 50);
        },

        mount() {
            tinymce.init({
                target: this.$refs.editor,
                height: 400,
                menubar: false,

                plugins: [
                    'advlist autolink lists link image charmap preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table code help wordcount'
                ],

                toolbar:
                    'undo redo | formatselect | bold italic backcolor | ' +
                    'alignleft aligncenter alignright alignjustify | ' +
                    'bullist numlist outdent indent | removeformat | help',

                toolbar_sticky: true,
                toolbar_sticky_offset: 64,

                setup: (editor) => {
                    this.editor = editor;

                    editor.on('init', () => {
                        if (this.state) {
                            editor.setContent(this.state);
                        }
                    });

                    editor.on('change keyup', () => {
                        this.state = editor.getContent();
                    });
                }
            });

            // 🔑 WATCH for Filament hydration (THIS FIXES BLANK EDIT)
            this.$watch('state', (value) => {
                if (this.editor && value !== this.editor.getContent()) {
                    this.editor.setContent(value || '');
                }
            });
        }
    }"
    x-init="init()"
    wire:ignore
>
    <textarea x-ref="editor"></textarea>
</div>
