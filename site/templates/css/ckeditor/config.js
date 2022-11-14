CKEDITOR.editorConfig = function( config )
{
    config.extraPlugins = 'print,email';
    config.height = 600;
    config.resize_enabled = false;
    config.removePlugins = 'elementspath';
    config.skin = 'bootstrapck,/site/templates/css/ckeditor/bootstrapck/';
    config.toolbarCanCollapse = false;
    config.toolbar =
    [
        { name: 'basicstyles', items: [  'Bold', 'Italic', 'Underline',  'HorizontalRule', '-', 'NumberedList', 'BulletedList', '-',    'Email', 'Print'] }
    ];

};