(function(e,a){
    var t,r=e.getElementsByTagName("head")[0],c=e.location.protocol;
    t=e.createElement("script");t.type="text/javascript";
    t.charset="utf-8";t.async=!0;t.defer=!0;
    t.src=c+"//front.optimonk.com/public/"+a+"/js/preload.js";r.appendChild(t);
})(document, '{{accountId}}');
document.querySelector('html').addEventListener('optimonk#ready', function () {
    var data = "url=" + encodeURIComponent(window.location.href) + "&referrer=" + encodeURIComponent(document.referrer);
    OptiMonk.ajax.post(data, "{{siteUrl}}/wp-content/plugins/exit-intent-popups-by-optimonk/data-provider.php", OptiMonk.addResponseToHead)
});