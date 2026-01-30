(function(){
    var placeholder = document.getElementById('email‑link');
    if(placeholder) {
        var user = placeholder.hasAttribute('data-user') ? placeholder.dataset.user : "info";                // before @
        var host = placeholder.hasAttribute('data-host') ? placeholder.dataset.host : "schlauhaus.com";      // after @
        var address = user + "@" + host;
        var a = document.createElement('a');
        a.href = "mailto:" + address;
        a.textContent = address;
        placeholder.parentNode.replaceChild(a, placeholder);
    }
})();
