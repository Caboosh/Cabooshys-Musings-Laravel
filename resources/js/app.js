new ClipboardJS('.cbsh');

import hljs from 'highlight.js/lib/core';
import shell from 'highlight.js/lib/languages/shell';   
import python from 'highlight.js/lib/languages/python';   

hljs.registerLanguage('shell', shell);
hljs.registerLanguage('python', python);
hljs.initHighlightingOnLoad();
hljs.highlightAll();

import './bootstrap';
