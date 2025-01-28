// JavaScript Document
    var pre = document.getElementsByTagName('pre');
    for (var i = 0; i < pre.length; i++) {
    var isLanguage = pre[i].children[0].className.indexOf('language-');
    if ( isLanguage === 0 ) {
            var button           = document.createElement('button');
                    button.className = 'copy-button';
                    button.textContent = 'Copy';
 
                    pre[i].appendChild(button);
        }
}
var copyCode = new Clipboard('.copy-button', {
    target: function(trigger) {
        return trigger.previousElementSibling;
    }
});
    copyCode.on('success', function(event) {
    event.clearSelection();
    event.trigger.textContent = 'Copied';
    window.setTimeout(function() {
        event.trigger.textContent = 'Copy';
    }, 2000);
});
      
