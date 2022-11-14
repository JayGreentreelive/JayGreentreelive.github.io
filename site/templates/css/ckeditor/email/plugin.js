/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

/**
 * @fileOverview Email Plugin
 */

CKEDITOR.plugins.add( 'email', {

	icons: 'email,', // %REMOVE_LINE_CORE%
	hidpi: true, // %REMOVE_LINE_CORE%
	init: function( editor ) {
		// Print plugin isn't available in inline mode yet.
		if ( editor.elementMode == CKEDITOR.ELEMENT_MODE_INLINE )
			return;

		var pluginName = 'email';

		// Register the command.
		var command = editor.addCommand( pluginName, CKEDITOR.plugins.email );

		// Register the toolbar button.
		editor.ui.addButton && editor.ui.addButton( 'Email', {
			label: 'Email',
			command: pluginName,
			toolbar: 'document,50'
		} );
	}
} );

CKEDITOR.plugins.email = {
	exec: function( editor ) {

	//if($("#email_status").length) $("#email_status").html("");

	$.magnificPopup.open({
		  items: {
		     src: '#email-popup',
		  },
		  type: 'inline'
		}, 0);

	},
	canUndo: false,
	readOnly: 1,
	modes: { wysiwyg: 1 }
};
