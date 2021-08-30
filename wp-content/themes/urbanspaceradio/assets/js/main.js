"use strict";

$(document).ready(function () {
    $('.slick').slick({
        arrows: true,
        adaptiveHeight: true,
    });

    const updatePlaylist = function (songList) {
        for (let i = 0, total = songList.length; i < total; i++) {
            const item = songList[i];
            if (item.status === 'current') {
                $('.js-singer').html(item.artist);
                $('.js-song').html(item.title);
            }
        }
    };

    const getPlaylist = function () {
        $.getJSON("https://urbanspaceradio.com/songinfo/?stream=/urban-space-radio", function (songList) {
            updatePlaylist(songList);
        });
    };

    getPlaylist();
    setInterval(getPlaylist, 10000);

    let streamURL = {
            mp3: "https://stream.urbanspaceradio.com:8443/urban-space-radio?cache-buster=" + Date.now()
        },
        o = !1,
        l = navigator.userAgent.toLowerCase().indexOf("chrome") > -1,
        u = "undefined" != typeof window.orientation,
        c = l && !u;

    $("#player").jPlayer({
        ready: function () {
            o = !0, $(this).jPlayer("setMedia", streamURL).jPlayer("play")
        },
        pause: function () {
            $(this).jPlayer("clearMedia")
        },
        ended: function () {
            $(this).jPlayer("play");
        },
        error: function (e) {
            o && e.jPlayer.error.type === $.jPlayer.error.URL_NOT_SET && $(this).jPlayer("setMedia", streamURL).jPlayer("play")
        },
        swfPath: "http://jplayer.org/latest/dist/jplayer",
        supplied: c ? "m4a,mp3" : "mp3",
        solution: "html",
        preload: "none",
        wmode: "window",
        useStateClassSkin: !0,
        autoBlur: !1,
        keyEnabled: !0
    });
});
