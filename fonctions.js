function ajusterHauteur() {
    var iframe = document.getElementById('headerIframe');
    iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';
}