/*jslint node: true indent:4*/
/*global include: false, ActiveXObject: false, XMLHttpRequest: false, cssRefresh: false*/
'use strict';
/*
 *  CSSrefresh v1.0.1
 *
 *  Copyright (c) 2012 Fred Heusschen
 *  www.frebsite.nl
 *
 *  Dual licensed under the MIT and GPL licenses.
 *  http://en.wikipedia.org/wiki/MIT_License
 *  http://en.wikipedia.org/wiki/GNU_General_Public_License
 */

(function(window) {
    var phpjs = {
            array_filter: function(arr, func) {
                var retObj = {},
                    k;

                for (k = 0; k < arr.length; k++) {
                    if (func(arr[k])) {
                        retObj[k] = arr[k];
                    }
                }
                k = null;
                return retObj;
            },
            filemtime: function(file) {
                var headers = this.get_headers(file, 1);
                return (headers && headers['Last-Modified'] && Date.parse(headers['Last-Modified']) / 1000) || false;
            },
            get_headers: function(url, format) {
                var req = window.ActiveXObject ? new ActiveXObject('Microsoft.XMLHTTP') : new XMLHttpRequest(),
                    tmp,
                    headers,
                    pair,
                    i,
                    j = 0;

                if (!req) {
                    throw new Error('XMLHttpRequest not supported.');
                }

                try {
                    req.open('HEAD', url, false);
                    req.send(null);
                    if (req.readyState < 3) {
                        return false;
                    }
                    tmp = req.getAllResponseHeaders();
                    tmp = tmp.split('\n');
                    tmp = this.array_filter(tmp, function(value) {
                        return value.toString().substring(1) !== '';
                    });

                    headers = format ? {} : [];

                    for (i = 0; tmp.hasOwnProperty(i); i++) {
                        if (format) {
                            pair = tmp[i].toString().split(':');
                            headers[pair.splice(0, 1)] = pair.join(':').substring(1);
                        } else {
                            headers[j++] = tmp[i];
                        }
                    }

                    return headers;
                } catch (err) {
                    return false;
                } finally {
                    req = tmp = headers = pair = i = j = null;
                }
            }
        },

        cssRefresh = function () {

            var getHref = function(f) {
                    //console.log('*')
                    return f.getAttribute('href').split('?')[0];
                },
                getRandom = function(f) {
                    //console.log('**')
                    return f + '?x=' + Math.random();
                },
                files = document.getElementsByTagName('link'),
                links = [],
                a,
                l,
                elem,
                rel;

            for (a = 0, l = files.length; a < l; a++) {
                elem = files[a];
                rel = elem.rel;
                if (typeof rel !== 'string' || rel.length === 0 || rel === 'stylesheet') {
                    links.push({
                        'elem' : elem,
                        'href' : getHref(elem),
                        'last' : false
                    });
                }
            }

            function reloadFile(links) {

                var a,
                    l,
                    link,
                    newTime;

                for (a = 0, l = links.length; a < l; a++) {
                    link = links[a];
                    newTime = phpjs.filemtime(getRandom(link.href));
                    //  has been checked before
                    if (link.last) {
                        //  has been changed
                        if (link.last !== newTime) {
                            //  reload
                            link.elem.setAttribute('href', getRandom(link.href));
                        }
                    }
                    //  set last time checked
                    link.last = newTime;
                }
                a = l = link = newTime = null;
                setTimeout(function() {
                    reloadFile(links);
                }, 1000);

            }
            files = elem = rel = a = l = null;
            reloadFile(links);

        };

    window.cssRefresh = cssRefresh;

}(window));

cssRefresh();
