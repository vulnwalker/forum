/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
   config.filebrowserBrowseUrl = 'http://localhost/flux/plugins/ckeditor/kcfinder/browse.php?opener=ckeditor&type=files';
   config.filebrowserImageBrowseUrl = 'http://localhost/flux/plugins/ckeditor/kcfinder/browse.php?opener=ckeditor&type=images';
   config.filebrowserFlashBrowseUrl = 'http://localhost/flux/plugins/ckeditor/kcfinder/browse.php?opener=ckeditor&type=flash';
   config.filebrowserUploadUrl = 'http://localhost/flux/plugins/ckeditor/kcfinder/upload.php?opener=ckeditor&type=files';
   config.filebrowserImageUploadUrl = 'http://localhost/flux/plugins/ckeditor/kcfinder/upload.php?opener=ckeditor&type=images';
   config.filebrowserFlashUploadUrl = 'http://localhost/flux/plugins/ckeditor/kcfinder/upload.php?opener=ckeditor&type=flash';
};
