  {{-- no tocar --}}

  <script type="text/javascript">
      (function(e, t) {
          var n = e.amplitude || {
              _q: [],
              _iq: {}
          };
          var r = t.createElement("script");
          r.type = "text/javascript";
          r.integrity = "sha384-girahbTbYZ9tT03PWWj0mEVgyxtZoyDF9KVZdL+R53PP5wCY0PiVUKq0jeRlMx9M";
          r.crossOrigin = "anonymous";
          r.async = true;
          r.src = "https://cdn.amplitude.com/libs/amplitude-7.2.1-min.gz.js";
          r.onload = function() {
              if (!e.amplitude.runQueuedFunctions) {
                  console.log("[Amplitude] Error: could not load SDK")
              }
          };
          var i = t.getElementsByTagName("script")[0];
          i.parentNode.insertBefore(r, i);

          function s(e, t) {
              e.prototype[t] = function() {
                  this._q.push([t].concat(Array.prototype.slice.call(arguments, 0)));
                  return this
              }
          }
          var o = function() {
              this._q = [];
              return this
          };
          var a = ["add", "append", "clearAll", "prepend", "set", "setOnce", "unset"];
          for (var u = 0; u < a.length; u++) {
              s(o, a[u])
          }
          n.Identify = o;
          var c = function() {
              this._q = [];
              return this
          };
          var l = ["setProductId", "setQuantity", "setPrice", "setRevenueType", "setEventProperties"];
          for (var p = 0; p < l.length; p++) {
              s(c, l[p])
          }
          n.Revenue = c;
          var d = ["init", "logEvent", "logRevenue", "setUserId", "setUserProperties", "setOptOut", "setVersionName",
              "setDomain", "setDeviceId", "enableTracking", "setGlobalUserProperties", "identify",
              "clearUserProperties", "setGroup", "logRevenueV2", "regenerateDeviceId", "groupIdentify", "onInit",
              "logEventWithTimestamp", "logEventWithGroups", "setSessionId", "resetSessionId"
          ];

          function v(e) {
              function t(t) {
                  e[t] = function() {
                      e._q.push([t].concat(Array.prototype.slice.call(arguments, 0)))
                  }
              }
              for (var n = 0; n < d.length; n++) {
                  t(d[n])
              }
          }
          v(n);
          n.getInstance = function(e) {
              e = (!e || e.length === 0 ? "$default_instance" : e).toLowerCase();
              if (!n._iq.hasOwnProperty(e)) {
                  n._iq[e] = {
                      _q: []
                  };
                  v(n._iq[e])
              }
              return n._iq[e]
          };
          e.amplitude = n
      })(window, document);
      amplitude.getInstance().init("92dd3459e91268bfffd6866dd216bc54");

      // INFO---------------------------------------------------------------------------------------------------AQUI
      let mainTitleCounter = 1;
      let forYour = [{
              label: "Comprobantes",
              width: "105px",
              widthSM: "335px",
          }, {
              label: "mucho más.",
              width: "372px",
              widthSM: "390px",
          }, {
              label: "Facturas",
              width: "280px",
              widthSM: "200px",
          }, {

              label: "Estados de cartera",
              width: "900px",
              widthSM: "430px",
          } //,{
          //        label: "Facturas",
          //        width: "101px",
          //        widthSM: "140px",
          //    },{
          //        label: "Comprobantes",
          //        width: "155px",
          //        widthSM: "215px",
          //    }
      ];

      let mainTitleParts = document.querySelectorAll(".main-title-parts");

      if (window.innerWidth < 567) {
          mainTitleParts[0].style.width = forYour[0].width;
      }

      setInterval(() => {
          mainTitleCounter = (mainTitleCounter == (forYour.length - 1)) ? 0 : mainTitleCounter + 1;
          let mainTitlePart_1 = mainTitleParts[0];
          let mainTitlePart_2 = mainTitleParts[1];

          mainTitlePart_1.classList.add('opacity-0');
          mainTitlePart_1.classList.remove('opacity-100');

          mainTitlePart_2.classList.add('opacity-0');
          mainTitlePart_2.classList.remove('opacity-100');

          setTimeout(() => {
              if (mainTitleCounter % 2 == 0) {
                  if (window.innerWidth >= 567) {
                      mainTitlePart_1.style.width = forYour[mainTitleCounter].widthSM;
                  } else {
                      mainTitlePart_1.style.width = forYour[mainTitleCounter].width;
                  }
              }
              mainTitlePart_1.innerHTML = forYour[mainTitleCounter].label;
              mainTitlePart_1.classList.remove('opacity-0');
              mainTitlePart_1.classList.add('opacity-100');

              mainTitlePart_2.innerHTML = forYour[mainTitleCounter + 1].label;
              mainTitlePart_2.classList.remove('opacity-0');
              mainTitlePart_2.classList.add('opacity-100');

              mainTitleCounter = (mainTitleCounter == (forYour.length - 1)) ? 0 : mainTitleCounter + 1;
          }, 500);
      }, 3000);
  </script>
