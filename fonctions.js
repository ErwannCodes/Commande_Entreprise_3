function ajusterHauteur(iframeId) {
    var iframe = document.getElementById(iframeId);
    iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';
}
