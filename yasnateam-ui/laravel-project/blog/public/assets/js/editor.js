

var quill = new Quill('#editor-container', {
    modules: {
        toolbar: {
            container: [
                ['bold', 'italic'],
                ['link', 'blockquote', 'code-block'],
                [{ list: 'ordered' }, { list: 'bullet' }],
                [{ 'font': []}],
                ['image']
            ],
            handlers: {
                image: imageHandler
            }
        }

    },
    placeholder: 'Compose an epic...',
    theme: 'snow'
});

function imageHandler() {
    var range = this.quill.getSelection();
    var value = prompt('What is the image URL');
    this.quill.insertEmbed(range.index, 'image', value, Quill.sources.USER);
}

/*
var form = document.querySelector('form');
form.onsubmit = function() {
    // Populate hidden form on submit
    /!*var about = document.querySelector('input[name=about]');
    about.value = JSON.stringify(quill.getContents());

    console.log("Submitted", $(form).serialize(), $(form).serializeArray());*!/
    // No back end to actually submit to!
    /!*alert('Open the console to see the submit data!');*!/

    about.value=$('.ql-editor').html();

    $(form).submit();
};
*/

///////////////////////////////////////////

/*var renderer  = require('quilljs-renderer');
var Document  = renderer.Document;

// Load the built-in HTML formatter
renderer.loadFormat('html');

// Create a document instance
var doc = new Document([
    {insert: 'Hello, World!', attributes: {bold: true}},
    {insert: '\n', attributes: {align: 'right'}},
    {insert: 'This is a demo of the Quilljs Renderer'},
    {insert: '\n', attributes: {align: 'left'}},
    {insert: 1, attributes: {
        image: 'monkey.png',
        alt: 'Funny monkey picture'
    }}
]);

console.log(doc.convertTo('html'));*/
