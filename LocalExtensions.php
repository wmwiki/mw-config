<?php

// Set up extensions for use on wikis that are not global or not all used, this extension just for add to some wiki
if ( $wmgUseCodeEditor ) {
	wfLoadExtension( 'CodeEditor' );
}

if ( $wmgUsePdfHandler ) {
	wfLoadExtension( 'PdfHandler' );
}
