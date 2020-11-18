var _typeof = typeof Symbol === 'function' && typeof Symbol.iterator === 'symbol' ? function (obj) { 'use strict'; return typeof obj; } : function (obj) { 'use strict'; return obj && typeof Symbol === 'function' && obj.constructor === Symbol && obj !== Symbol.prototype ? 'symbol' : typeof obj; };

(function () {
  'use strict';

  CKEDITOR.plugins.add('widgetbootstrap', {

    requires: 'widget',

    icons: 'widgetbootstrapLeftCol,widgetbootstrapRightCol,widgetbootstrapTwoCol,widgetbootstrapThreeCol',

    init: function init(editor) {

      var showButtons = editor.config.widgetbootstrapShowButtons !== 'undefined' ? editor.config.widgetbootstrapShowButtons : true;

      editor.widgets.add('widgetbootstrapLeftCol', {

        button: showButtons ? 'Add left column box' : 'undefined',

        template: '<div class="row two-col-left">' + '<div class="col-sm-3 col-md-3 col-sidebar"><p><img src="https://placehold.it/300x250&text=Image" /></p></div>' + '<div class="col-sm-9 col-md-9 col-main"><p>Content</p></div>' + '</div>',

        editables: {
          col1: {
            selector: '.col-sidebar'
          },
          col2: {
            selector: '.col-main'
          }
        },

        upcast: function upcast(element) {
          return element.name === 'div' && element.hasClass('two-col-right-left');
        }
      });

      editor.widgets.add('widgetbootstrapRightCol', {

        button: showButtons ? 'Add right column box' : 'undefined',

        template: '<div class="row two-col-right">' + '<div class="col-sm-9 col-md-9 col-main"><p>Content</p></div>' + '<div class="col-sm-3 col-md-3 col-sidebar"><p><img src="https://placehold.it/300x250&text=Image" /></p></div>' + '</div>',

        editables: {
          col1: {
            selector: '.col-sidebar'
          },
          col2: {
            selector: '.col-main'
          }
        },

        upcast: function upcast(element) {
          return element.name === 'div' && element.hasClass('two-col-right');
        }
      });

      editor.widgets.add('widgetbootstrapTwoCol', {

        button: showButtons ? 'Add two column box' : 'undefined',

        template: '<div class="row two-col">' + '<div class="col-6 col-sm-6 col-md-6 col-first"><p><img src="https://placehold.it/500x280&text=Image" /></p><p>Content</p></div>' + '<div class="col-6 col-sm-6 col-md-6 col-second"><p><img src="https://placehold.it/500x280&text=Image" /></p><p>Content</p></div>' + '</div>',

        editables: {
          col1: {
            selector: '.col-first'
          },
          col2: {
            selector: '.col-second'
          }
        },

        upcast: function upcast(element) {
          return element.name === 'div' && element.hasClass('two-col');
        }
      });

      editor.widgets.add('widgetbootstrapThreeCol', {

        button: showButtons ? 'Add three column box' : 'undefined',

        template: '<div class="row three-col">' + '<div class="col-4 col-sm-4 col-md-4 col-first"><p><img src="https://placehold.it/400x225&text=Image" /></p><p>Text below</p></div>' + '<div class="col-4 col-sm-4 col-md-4 col-second"><p><img src="https://placehold.it/400x225&text=Image" /></p><p>Text below</p></div>' + '<div class="col-4 col-sm-4 col-md-4 col-third"><p><img src="https://placehold.it/400x225&text=Image" /></p><p>Text below</p></div>' + '</div>',

        editables: {
          col1: {
            selector: '.col-first'
          },
          col2: {
            selector: '.col-second'
          },
          col3: {
            selector: '.col-third'
          }
        },

        upcast: function upcast(element) {
          return element.name === 'div' && element.hasClass('three-col');
        }
      });

      if (_typeof(editor.config.contentsCss) === 'object') {
        editor.config.contentsCss.push(CKEDITOR.getUrl(this.path + 'contents.css'));
      }
      else {
        editor.config.contentsCss = [editor.config.contentsCss, CKEDITOR.getUrl(this.path + 'contents.css')];
      }
    }
  });
})();
