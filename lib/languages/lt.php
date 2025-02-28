<?php

return [
	'form.block.name' 						=> 'Forma',
	'form.block.default.help'				=> 'Leave blank for default text',
	'form.block.inbox' 						=> 'Užpildymai',
	'form.block.inbox.empty' 				=> 'Nėra laiškų',
	'form.block.inbox.asread' 				=> 'Pažymėti kaip perskaitytą',
	'form.block.inbox.asunread' 			=> 'Pažymėti kaip neperskaitytą',
	'form.block.inbox.delete' 				=> 'Ištrinti',
	'form.block.inbox.new'	    			=> 'Naujas',
	'form.block.inbox.loading'	    		=> 'Kraunasi...',
	'form.block.inbox.show'	    			=> 'Parodyti užpildymus',
	'form.block.inbox.failed'    			=> 'nepavyko',
	'form.block.inbox.error'    			=> 'Nepavyko gauti statistikos',
	'form.block.inbox' 						=> 'Užpildymai',
	'form.block.inbox.tooltip.read' 		=> 'Šis užpildymas jau perskaitytas',
	'form.block.inbox.tooltip.unread' 		=> 'Šis užpildymas dar neperskaitytas',
	'form.block.inbox.notinblock'    		=> 'The mail view field can only used in form blocks',

	'form.block.fromfields' 							=> 'Formos laukeliai',
	'form.block.fromfields.label' 						=> 'Rodomas pavadinimas',
	'form.block.fromfields.width' 						=> 'Plotis',
	'form.block.fromfields.width1' 						=> 'Per visą plotį',
	'form.block.fromfields.width2' 						=> 'Pusė',
	'form.block.fromfields.width3' 						=> 'Trečdalis',
	'form.block.fromfields.width4' 						=> 'Ketvirtadalis',
	'form.block.fromfields.slug' 						=> 'Unikalus ID',
	'form.block.fromfields.autofill'	 				=> 'Kontekstas',
	'form.block.fromfields.required' 					=> 'Būtinas',
	'form.block.fromfields.required_fail' 				=> 'Klaidos pranešimas',
	'form.block.fromfields.display'						=> 'Rodomas pavadinimas',
	'form.block.fromfields.display.help'				=> 'Needed to display the emails in the panel. You can use the unique identifier of the fields as placeholder (e.g. \{\{name\}\})',

	'form.block.fromfields.input' 						=> 'Textfield',
	'form.block.fromfields.input.inputtype' 			=> 'Input type',
	'form.block.fromfields.input.inputtype.text' 		=> 'Tekstas',
	'form.block.fromfields.input.inputtype.number' 		=> 'Numeris',
	'form.block.fromfields.input.inputtype.email' 		=> 'El. paštas',
	'form.block.fromfields.input.inputtype.tel' 		=> 'Telefonas',
	'form.block.fromfields.input.inputtype.url' 		=> 'Svetainė',
	'form.block.fromfields.input.inputtype.password' 	=> 'Slaptažodis',
	'form.block.fromfields.input.inputtype.hidden' 		=> 'Paslėptas',
	'form.block.fromfields.input.placeholder' 			=> 'Placeholder',
	'form.block.fromfields.input.default'				=> 'Default',
	'form.block.fromfields.input.validate' 				=> 'Validation',
	'form.block.fromfields.input.validate' 				=> 'Validation',
	'form.block.fromfields.input.validate.msg' 			=> 'Error message',
	'form.block.fromfields.input.fields' 				=> 'Validation type',
	'form.block.fromfields.input.fields.alpha' 			=> 'Text only',
	'form.block.fromfields.input.fields.alpha.text'		=> 'If you want to allow spaces. Select <i>match</i> and enter as <i>regular expression</i> <strong>/^[a-zA-Z ]*$/</strong>.',
	'form.block.fromfields.input.fields.num' 			=> 'Numbers only',
	'form.block.fromfields.input.fields.minLength' 		=> 'Min. simbolių kiekis',
	'form.block.fromfields.input.fields.maxLength' 		=> 'Maks. simbolių kiekis',
	'form.block.fromfields.input.fields.min' 			=> 'Minimum value',
	'form.block.fromfields.input.fields.max' 			=> 'Maximum value',
	'form.block.fromfields.input.fields.email' 			=> 'Email',
	'form.block.fromfields.input.fields.url' 			=> 'Website',
	'form.block.fromfields.input.fields.match' 			=> 'Regular expression',
	'form.block.fromfields.input.fields.match.help' 	=> "<a href='https://www.regextester.com/' target='_blank'>More Information</a>",
	'form.block.fromfields.input.fields.msg' 			=> "Error message",

	'form.block.fromfields.textarea' 					=> 'Textarea',
	'form.block.fromfields.textarea.placeholder' 		=> 'Placeholder',
	'form.block.fromfields.textarea.row' 				=> 'Number of rows',
	'form.block.fromfields.textarea.man' 				=> 'Max. Characters',

	'form.block.fromfields.checkbox' 					=> 'Multiple selection',
	'form.block.fromfields.checkbox.columns' 			=> 'Number of columns',
	'form.block.fromfields.checkbox.options' 			=> 'Selection',
	'form.block.fromfields.checkbox.options.label' 		=> 'Display name',
	'form.block.fromfields.checkbox.options.slug' 		=> 'Unique identifier',
	'form.block.fromfields.checkbox.options.selected' 	=> 'Selected',

	'form.block.fromfields.radio' 						=> 'Selection',
	'form.block.fromfields.radio.columns' 				=> 'Number of columns',
	'form.block.fromfields.radio.default' 				=> 'Selected',
	'form.block.fromfields.radio.default.help' 			=> 'Reopen dialog if not current.',
	'form.block.fromfields.radio.options' 				=> 'Selection',
	'form.block.fromfields.radio.options.label' 		=> 'Display name',
	'form.block.fromfields.radio.options.slug' 			=> 'Unique identifier',

	'form.block.fromfields.select' 						=> 'Dropdown',
	'form.block.fromfields.select.placeholder' 			=> 'Placeholder',
	'form.block.fromfields.select.default' 				=> 'Selected',
	'form.block.fromfields.select.default.help' 		=> 'Reopen dialog if not current.',
	'form.block.fromfields.select.options' 				=> 'Selection',
	'form.block.fromfields.select.options.label' 		=> 'Display name',
	'form.block.fromfields.select.options.slug' 		=> 'Unique identifier',

	'form.block.fromfields.file'  						=> 'Attachment',
	'form.block.fromfields.file.accept'  				=> 'Accepted MIME type',
	'form.block.fromfields.file.accept.help'  			=> 'You can also use placeholder (like image/* for any kind of images). <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types/Common_types" target="_blank">More Info</a>',
	'form.block.fromfields.file.accept.fail'  			=> 'Error message for wrong MIME types',
	'form.block.fromfields.file.maxsize'  				=> 'Max. filesize/file',
	'form.block.fromfields.file.maxsize.help'  			=> 'The maximum file size can be limited by the server.',
	'form.block.fromfields.file.maxnumber'  			=> 'Max. number of files',
	'form.block.fromfields.file.warning.label'  		=> 'Warning!',
	'form.block.fromfields.file.warning.text'  			=> 'Be careful with executable file types (e.g. application/zip, application/msword). These may contain malware.',

	'form.block.options' 						=> 'Options',
	'form.block.options.email.help'				=> 'Multiple recipients possible. Separated with `;`',
	'form.block.options.enable_notify' 			=> "Send notification",
	'form.block.options.notify_email' 			=> "Recipient address",
	'form.block.options.notify_subject' 		=> "Subject",
	'form.block.options.notify_body' 			=> "Message",
	'form.block.options.enable_confirm' 		=> "Send confirmation",
	'form.block.options.confirm_email' 			=> "From address",
	'form.block.options.confirm_subject' 		=> "Subject",
	'form.block.options.confirm_body' 			=> "Message",
	'form.block.options.redirect' 				=> "On success",
	'form.block.options.redirect.on' 			=> "Show text",
	'form.block.options.redirect.off'			=> "Redirect visitor",
	'form.block.options.success_text'			=> "Confirmation text",
	'form.block.options.success_url' 			=> "Redirect",
	'form.block.options.invalid_message'		=> "On validation error",
	'form.block.options.fatal_message'			=> "On fatal error ",

	'form.block.placeholdes.summary' 			=> "Summary",

	'form.block.message.confirm_body'			=> '<p>Thank you for your request, we will get back to you as soon as possible.</p>',
	'form.block.message.confirm_subject'		=> 'Your request',
	'form.block.message.exists_message'			=> '<p>The form has already been filled in.</p>',
	'form.block.message.fatal_message'			=> '<p>Something went wrong.<br>Contact the administrator or try again later.</p>',
	'form.block.message.required_fail'			=> 'This field is required.',
	'form.block.message.file_accept' 			=> 'Only following file types are accepted: {{accept}}.',
	'form.block.message.file_maxsize' 			=> 'File(s) must not be larger than {{ maxsize }}MB',
	'form.block.message.file_maxnumber'         => 'No more than {{maxnumber}} may be uploaded.',
	'form.block.message.file_required' 			=> 'Choose at least one File to upload.',
	'form.block.message.file_fatal'     		=> 'Something went wrong with the upload. Error no.  {{ error }}.',
	'form.block.message.invalid_message'		=> '<p>Please check these fields:</p>',
	'form.block.message.notify_body'			=> '<p>{{ name }} send a request:</p><p>{{ summary }}</p>',
	'form.block.message.notify_subject'			=> 'Request from website.',
	'form.block.message.send_button'			=> 'Siųsti',
	'form.block.message.loading'                => 'Uploading ({{percent}})',
	'form.block.message.success_message'		=> '<p>Thank you {{ name }}. We will get back to you as soon as possible.</p>',

];
