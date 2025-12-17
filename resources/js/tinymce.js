window.tinymceEditor = function ({ state }) {
    return {
        editor: null,

        init() {
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
                toolbar_sticky_offset: 64, // Filament header height

                setup: (editor) => {
                    this.editor = editor;

                    editor.on('init', () => {
                        editor.setContent(state || '');
                    });

                    editor.on('change keyup', () => {
                        state = editor.getContent();
                    });
                }
            });
        }
    }
}
