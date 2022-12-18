(function() {
        var v = document.getElementsByClassName("youtube-player");

        for (var n = 0; n < v.length; n++) {
            var p = document.createElement("div");
            p.innerHTML = JWTubeThumb(v[n].dataset.id);
            p.onclick = JWTubeIframe;
            v[n].appendChild(p);
        }
    }

)();

function JWTubeThumb(id) {
    return '<img class="youtube-thumb" src="http://i.ytimg.com/vi/' + id + '/hqdefault.jpg"><div class="play-button"></div>';
}

function JWTubeIframe() {
    var iframe = document.createElement("iframe");
    iframe.setAttribute("src", "http://www.youtube.com/embed/" + this.parentNode.dataset.id + "?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=0&showinfo=0");
    iframe.setAttribute("frameborder", "0");
    iframe.setAttribute("id", "youtube-iframe");
    iframe.loading = 'lazy';
    this.parentNode.replaceChild(iframe, this);
}
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-500px";
    }
    prevScrollpos = currentScrollPos;
}
AOS.init();