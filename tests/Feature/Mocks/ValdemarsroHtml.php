<?php

namespace Tests\Feature\Mocks;

class ValdemarsroHtml
{
    public static function getHtml()
    {
        return <<<HTML

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="da"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="da"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="da"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="da"> <!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0"/>
	<!-- Google Consent Mode -->
	<script data-cookieconsent="ignore">
	window.dataLayer = window.dataLayer || [];
	function gtag() {
		dataLayer.push(arguments)
	}
	gtag("consent", "default", {
		ad_storage: "denied",
		analytics_storage: "denied",
		functionality_storage: "denied",
		personalization_storage: "denied",
		security_storage: "granted",
		wait_for_update: 500
	});
	gtag("set", "ads_data_redaction", true);
	</script>
	<!-- End Google Consent Mode-->
	<!-- Google Tag Manager -->
	<script data-cookieconsent="ignore">
	(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KPHRD4D');</script>
	<!-- End Google Tag Manager -->
	<!-- Cookiebot CMP-->
	<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="3fd83e37-5009-4c1e-be74-0b58bae69ac1" data-blockingmode="auto" type="text/javascript" data-framework="IAB"></script>
	<!-- End Cookiebot CMP -->
	<script>
	 const loadTcfStub = () => {
   !(function () {
     var e = function () {
      var e,
         t = "__tcfapiLocator",
         a = [],
         n = window;
       for (; n;) {
         try {
           if (n.frames[t]) {
             e = n;
             break;
           }
         } catch (e) { }
         if (n === window.top) break;
         n = n.parent;
       }
       e ||
         (!(function e() {
           var a = n.document,
             r = !!n.frames[t];
           if (!r)
             if (a.body) {
               var i = a.createElement("iframe");
               (i.style.cssText = "display:none"),
                 (i.name = t),
                 a.body.appendChild(i);
             } else setTimeout(e, 5);
           return !r;
         })(),
           (n.__tcfapi = function () {
             for (var e, t = arguments.length, n = new Array(t), r = 0; r < t; r++)
               n[r] = arguments[r];
             if (!n.length) return a;
             if ("setGdprApplies" === n[0])
               n.length > 3 &&
                 2 === parseInt(n[1], 10) &&
                 "boolean" == typeof n[3] &&
                 ((e = n[3]), "function" == typeof n[2] && n[2]("set", !0));
             else if ("ping" === n[0]) {
               var i = { gdprApplies: e, cmpLoaded: !1, cmpStatus: "stub" };
               "function" == typeof n[2] && n[2](i);
             } else a.push(n);
           }),
           n.addEventListener(
             "message",
             function (e) {
               var t = "string" == typeof e.data,
                 a = {};
               try {
                 a = t ? JSON.parse(e.data) : e.data;
               } catch (e) { }
               var n = a.__tcfapiCall;
               n &&
                 window.__tcfapi(
                   n.command,
                   n.version,
                   function (a, r) {
                     var i = {
                       __tcfapiReturn: {
                         returnValue: a,
                         success: r,
                         callId: n.callId,
                       },
                     };
                     t && (i = JSON.stringify(i)), e.source.postMessage(i, "*");
                   },
                   n.parameter
                 );
             },
             !1
           ));
     };
     "undefined" != typeof module ? (module.exports = e) : e();
   })();
 };
	</script>
	<meta name="google-site-verification" content="nQKmt_tIbzGR5or65zIrZeoWg1RH5hYmOQF1OcynpD4"/>
	<meta name="p:domain_verify" content="b29dbaf4e4b29fa78b409938fd73066b"/>
	<link rel="preload" href="https://www.valdemarsro.dk/wp-content/themes/valdemarsro16/assets/fa/webfonts/fa-solid-900.woff2" as="font"/>
	<link rel="preload" href="https://www.valdemarsro.dk/wp-content/themes/valdemarsro16/assets/fa/webfonts/fa-light-300.woff2" as="font"/>
	<meta name="pinterest-rich-pin" content="false"/>
	<link rel="shortcut icon" href="/favicon.png"/>
    <link rel="apple-touch-icon image_src" href="/favicon.png"/>
	<title>Grøntsagsgryde med kikærter - nem, varmende og sund</title>
		<script src="https://tags.adnuntius.com/concept_cph/dWP579iij.prod.js" async></script>
	<script>
	window.addEventListener('CookiebotOnLoad', function(e)
	{
		if(!Cookiebot.consent.marketing)
		{
			/*(function () { var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = 'https://macro.adnami.io/macro/spec/adsm.macro.b0036c32-8e55-4305-bdcf-b8f7aab7bd67.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x); })();

			var adsmtag = adsmtag || {};
			adsmtag.cmd = adsmtag.cmd || [];

			document.body.classList.add('cookieless');

			window.adn = window.adn || {}; adn.calls = adn.calls || [];
			adn.calls.push(function()
			{
				adn.request({ adUnits: [
					{ auId: '00000000000bae7f', auW: '930', auH: '180', useCookies: false },
					{ auId: '00000000000bae80', auW: '300', auH: '250', useCookies: false },
					{ auId: '00000000000bae81', auW: '300', auH: '250', useCookies: false },
					{ auId: '00000000000bae82', auW: '320', auH: '320', useCookies: false },
					{ auId: '00000000000bae83', auW: '320', auH: '320', useCookies: false },
					{ auId: '00000000000bae84', auW: '320', auH: '320', useCookies: false },
					{ auId: '00000000000bae85', auW: '320', auH: '320', useCookies: false }
				]});
			});*/
		}
		else
		{
			/*(function () { var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = 'https://macro.adnami.io/macro/spec/adsm.macro.c2d00cd4-7d5e-4fcd-aa48-e3d709943dcf.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x); })();

			var adsmtag = adsmtag || {};
			adsmtag.cmd = adsmtag.cmd || [];*/

			var _adftrack = {
				pm: 273610,
				divider: encodeURIComponent('|'),
				pagename: encodeURIComponent('valdemarsro.dk')
			};

			(function () { var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = 'https://track.adform.net/serving/scripts/trackpoint/async/'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x); })();
		}
	}, false);
	</script>
	<script>
	var style = document.createElement('style');
	style.type = 'text/css';
	style.innerHTML = '.hiddenForPrint { display: none!important; }';
	document.getElementsByTagName('head')[0].appendChild(style);
	window.addEventListener("beforeprint", function(event) {
		var adslots = document.querySelectorAll('div[id^="adn-"]');
		adslots.forEach(div => {
			div.classList.add("hiddenForPrint");
			div.id="hiddenForPrint"
		});
	});
	</script>
		<!--<script src="https://www.valdemarsro.dk/wp-content/themes/valdemarsro16/assets/js/adsm-1.0.5.js"></script>
	<script type="text/javascript" src="//eas8.emediate.eu/EAS_tag.1.0.js"></script>-->
	<!--<script>
    var adsmtag = adsmtag || {};
    adsmtag.cmd = adsmtag.cmd || [];
    (function () {
        var script = document.createElement('script');
        script.async = true;
        script.type = 'text/javascript';
        script.src = 'https:' + '//rmb-adsembler.netdna-ssl.com/mnemonics/adsm.macro.c2d00cd4-7d5e-4fcd-aa48-e3d709943dcf.js';
        var node = document.getElementsByTagName('script')[0];
        node.parentNode.insertBefore(script, node);
    })();
	</script>-->
	<link rel="apple-touch-icon-precomposed" href="https://www.valdemarsro.dk/wp-content/themes/valdemarsro16/assets/img/homescreen.png"/>
	<meta name="p:domain_verify" content="44b9fbe74d49952c174561a91bd8b891"/>
	<!-- Hotjar Tracking Code forhttp://valdemarsro.dk  <http://valdemarsro.dk/>  -->
	<!--<script>
		(function(h,o,t,j,a,r){
			h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
			h._hjSettings={hjid:242276,hjsv:5};
			a=o.getElementsByTagName('head')[0];
			r=o.createElement('script');r.async=1;
			r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
			a.appendChild(r);
		})(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
	</script>-->
	<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

	<!-- This site is optimized with the Yoast SEO plugin v19.4 - https://yoast.com/wordpress/plugins/seo/ -->
	<meta name="description" content="Denne grøntsagsgryde med kikærter er virkelig lækker og giver en skøn varme - den er sund og mættende - få opskriften her" />
	<link rel="canonical" href="https://www.valdemarsro.dk/varmende-nem-og-krydret-groentsagsgryde-med-kikaerter/" />
	<meta property="og:locale" content="da_DK" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Grøntsagsgryde med kikærter - nem, varmende og sund" />
	<meta property="og:description" content="Denne grøntsagsgryde med kikærter er virkelig lækker og giver en skøn varme - den er sund og mættende - få opskriften her" />
	<meta property="og:url" content="https://www.valdemarsro.dk/varmende-nem-og-krydret-groentsagsgryde-med-kikaerter/" />
	<meta property="og:site_name" content="Valdemarsro" />
	<meta property="article:publisher" content="https://www.facebook.com/Valdemarsro" />
	<meta property="article:published_time" content="2016-03-08T07:14:33+00:00" />
	<meta property="article:modified_time" content="2021-09-15T14:52:04+00:00" />
	<meta property="og:image" content="https://www.valdemarsro.dk/wp-content/2016/03/groentsagsgryde_opskrift.jpg" />
	<meta property="og:image:width" content="1000" />
	<meta property="og:image:height" content="667" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta name="author" content="Ann-Christine" />
	<meta name="twitter:label1" content="Skrevet af" />
	<meta name="twitter:data1" content="Ann-Christine" />
	<meta name="twitter:label2" content="Estimeret læsetid" />
	<meta name="twitter:data2" content="2 minutter" />
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://www.valdemarsro.dk/#organization","name":"Valdemarsro.dk","url":"https://www.valdemarsro.dk/","sameAs":["http://instagram.com/valdemarsro_dk","https://www.facebook.com/Valdemarsro","https://twitter.com/AnnChristine_"],"logo":{"@type":"ImageObject","inLanguage":"da-DK","@id":"https://www.valdemarsro.dk/#/schema/logo/image/","url":"https://www.valdemarsro.dk/wp-content/2015/04/valdemarsrodk_logo.png","contentUrl":"https://www.valdemarsro.dk/wp-content/2015/04/valdemarsrodk_logo.png","width":400,"height":180,"caption":"Valdemarsro.dk"},"image":{"@id":"https://www.valdemarsro.dk/#/schema/logo/image/"}},{"@type":"WebSite","@id":"https://www.valdemarsro.dk/#website","url":"https://www.valdemarsro.dk/","name":"Valdemarsro","description":"Opskrifter og livsstil med over 1000 skønne opskrifter","publisher":{"@id":"https://www.valdemarsro.dk/#organization"},"potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://www.valdemarsro.dk/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"da-DK"},{"@type":"ImageObject","inLanguage":"da-DK","@id":"https://www.valdemarsro.dk/varmende-nem-og-krydret-groentsagsgryde-med-kikaerter/#primaryimage","url":"https://www.valdemarsro.dk/wp-content/2016/03/groentsagsgryde_opskrift.jpg","contentUrl":"https://www.valdemarsro.dk/wp-content/2016/03/groentsagsgryde_opskrift.jpg","width":1000,"height":667,"caption":"grøntsagsgryde"},{"@type":"WebPage","@id":"https://www.valdemarsro.dk/varmende-nem-og-krydret-groentsagsgryde-med-kikaerter/","url":"https://www.valdemarsro.dk/varmende-nem-og-krydret-groentsagsgryde-med-kikaerter/","name":"Grøntsagsgryde med kikærter - nem, varmende og sund","isPartOf":{"@id":"https://www.valdemarsro.dk/#website"},"primaryImageOfPage":{"@id":"https://www.valdemarsro.dk/varmende-nem-og-krydret-groentsagsgryde-med-kikaerter/#primaryimage"},"image":{"@id":"https://www.valdemarsro.dk/varmende-nem-og-krydret-groentsagsgryde-med-kikaerter/#primaryimage"},"thumbnailUrl":"https://www.valdemarsro.dk/wp-content/2016/03/groentsagsgryde_opskrift.jpg","datePublished":"2016-03-08T07:14:33+00:00","dateModified":"2021-09-15T14:52:04+00:00","description":"Denne grøntsagsgryde med kikærter er virkelig lækker og giver en skøn varme - den er sund og mættende - få opskriften her","breadcrumb":{"@id":"https://www.valdemarsro.dk/varmende-nem-og-krydret-groentsagsgryde-med-kikaerter/#breadcrumb"},"inLanguage":"da-DK","potentialAction":[{"@type":"ReadAction","target":["https://www.valdemarsro.dk/varmende-nem-og-krydret-groentsagsgryde-med-kikaerter/"]}]},{"@type":"BreadcrumbList","@id":"https://www.valdemarsro.dk/varmende-nem-og-krydret-groentsagsgryde-med-kikaerter/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Hjem","item":"https://www.valdemarsro.dk/"},{"@type":"ListItem","position":2,"name":"Grøntsagsgryde med kikærter"}]},{"@type":"Article","@id":"https://www.valdemarsro.dk/varmende-nem-og-krydret-groentsagsgryde-med-kikaerter/#article","isPartOf":{"@id":"https://www.valdemarsro.dk/varmende-nem-og-krydret-groentsagsgryde-med-kikaerter/"},"author":{"name":"Ann-Christine","@id":"https://www.valdemarsro.dk/#/schema/person/9f60ecd87413504455262682ccd720d5"},"headline":"Grøntsagsgryde med kikærter","datePublished":"2016-03-08T07:14:33+00:00","dateModified":"2021-09-15T14:52:04+00:00","mainEntityOfPage":{"@id":"https://www.valdemarsro.dk/varmende-nem-og-krydret-groentsagsgryde-med-kikaerter/"},"wordCount":219,"commentCount":25,"publisher":{"@id":"https://www.valdemarsro.dk/#organization"},"image":{"@id":"https://www.valdemarsro.dk/varmende-nem-og-krydret-groentsagsgryde-med-kikaerter/#primaryimage"},"thumbnailUrl":"https://www.valdemarsro.dk/wp-content/2016/03/groentsagsgryde_opskrift.jpg","articleSection":["Aftensmad","Bålmad","Frokost","Mellemøstens køkken","Nem Hverdagsmad","Opskrifter","Vegetar"],"inLanguage":"da-DK","potentialAction":[{"@type":"CommentAction","name":"Comment","target":["https://www.valdemarsro.dk/varmende-nem-og-krydret-groentsagsgryde-med-kikaerter/#respond"]}]},{"@type":"Person","@id":"https://www.valdemarsro.dk/#/schema/person/9f60ecd87413504455262682ccd720d5","name":"Ann-Christine"}]}</script>
	<!-- / Yoast SEO plugin. -->


<link rel='dns-prefetch' href='//ajax.googleapis.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
		<!-- This site uses the Google Analytics by MonsterInsights plugin v8.7.0 - Using Analytics tracking - https://www.monsterinsights.com/ -->
							<script src="//www.googletagmanager.com/gtag/js?id=UA-5530254-7"  data-cfasync="false" data-wpfc-render="false" type="text/javascript" async></script>
			<script data-cfasync="false" data-wpfc-render="false" type="text/javascript">
				var mi_version = '8.7.0';
				var mi_track_user = true;
				var mi_no_track_reason = '';

								var disableStrs = [
															'ga-disable-UA-5530254-7',
									];

				/* Function to detect opted out users */
				function __gtagTrackerIsOptedOut() {
					for ( var index = 0; index < disableStrs.length; index++ ) {
						if ( document.cookie.indexOf( disableStrs[ index ] + '=true' ) > -1 ) {
							return true;
						}
					}

					return false;
				}

				/* Disable tracking if the opt-out cookie exists. */
				if ( __gtagTrackerIsOptedOut() ) {
					for ( var index = 0; index < disableStrs.length; index++ ) {
						window[ disableStrs[ index ] ] = true;
					}
				}

				/* Opt-out function */
				function __gtagTrackerOptout() {
					for ( var index = 0; index < disableStrs.length; index++ ) {
						document.cookie = disableStrs[ index ] + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
						window[ disableStrs[ index ] ] = true;
					}
				}

				if ( 'undefined' === typeof gaOptout ) {
					function gaOptout() {
						__gtagTrackerOptout();
					}
				}
								window.dataLayer = window.dataLayer || [];

				window.MonsterInsightsDualTracker = {
					helpers: {},
					trackers: {},
				};
				if ( mi_track_user ) {
					function __gtagDataLayer() {
						dataLayer.push( arguments );
					}

					function __gtagTracker( type, name, parameters ) {
						if (!parameters) {
							parameters = {};
						}

						if (parameters.send_to) {
							__gtagDataLayer.apply( null, arguments );
							return;
						}

						if ( type === 'event' ) {

															parameters.send_to = monsterinsights_frontend.ua;
								__gtagDataLayer( type, name, parameters );
													} else {
							__gtagDataLayer.apply( null, arguments );
						}
					}
					__gtagTracker( 'js', new Date() );
					__gtagTracker( 'set', {
						'developer_id.dZGIzZG' : true,
											} );
															__gtagTracker( 'config', 'UA-5530254-7', {"forceSSL":"true"} );
										window.gtag = __gtagTracker;											(function () {
							/* https://developers.google.com/analytics/devguides/collection/analyticsjs/ */
							/* ga and __gaTracker compatibility shim. */
							var noopfn = function () {
								return null;
							};
							var newtracker = function () {
								return new Tracker();
							};
							var Tracker = function () {
								return null;
							};
							var p = Tracker.prototype;
							p.get = noopfn;
							p.set = noopfn;
							p.send = function (){
								var args = Array.prototype.slice.call(arguments);
								args.unshift( 'send' );
								__gaTracker.apply(null, args);
							};
							var __gaTracker = function () {
								var len = arguments.length;
								if ( len === 0 ) {
									return;
								}
								var f = arguments[len - 1];
								if ( typeof f !== 'object' || f === null || typeof f.hitCallback !== 'function' ) {
									if ( 'send' === arguments[0] ) {
										var hitConverted, hitObject = false, action;
										if ( 'event' === arguments[1] ) {
											if ( 'undefined' !== typeof arguments[3] ) {
												hitObject = {
													'eventAction': arguments[3],
													'eventCategory': arguments[2],
													'eventLabel': arguments[4],
													'value': arguments[5] ? arguments[5] : 1,
												}
											}
										}
										if ( 'pageview' === arguments[1] ) {
											if ( 'undefined' !== typeof arguments[2] ) {
												hitObject = {
													'eventAction': 'page_view',
													'page_path' : arguments[2],
												}
											}
										}
										if ( typeof arguments[2] === 'object' ) {
											hitObject = arguments[2];
										}
										if ( typeof arguments[5] === 'object' ) {
											Object.assign( hitObject, arguments[5] );
										}
										if ( 'undefined' !== typeof arguments[1].hitType ) {
											hitObject = arguments[1];
											if ( 'pageview' === hitObject.hitType ) {
												hitObject.eventAction = 'page_view';
											}
										}
										if ( hitObject ) {
											action = 'timing' === arguments[1].hitType ? 'timing_complete' : hitObject.eventAction;
											hitConverted = mapArgs( hitObject );
											__gtagTracker( 'event', action, hitConverted );
										}
									}
									return;
								}

								function mapArgs( args ) {
									var arg, hit = {};
									var gaMap = {
										'eventCategory': 'event_category',
										'eventAction': 'event_action',
										'eventLabel': 'event_label',
										'eventValue': 'event_value',
										'nonInteraction': 'non_interaction',
										'timingCategory': 'event_category',
										'timingVar': 'name',
										'timingValue': 'value',
										'timingLabel': 'event_label',
										'page' : 'page_path',
										'location' : 'page_location',
										'title' : 'page_title',
									};
									for ( arg in args ) {
																				if ( ! ( ! args.hasOwnProperty(arg) || ! gaMap.hasOwnProperty(arg) ) ) {
											hit[gaMap[arg]] = args[arg];
										} else {
											hit[arg] = args[arg];
										}
									}
									return hit;
								}

								try {
									f.hitCallback();
								} catch ( ex ) {
								}
							};
							__gaTracker.create = newtracker;
							__gaTracker.getByName = newtracker;
							__gaTracker.getAll = function () {
								return [];
							};
							__gaTracker.remove = noopfn;
							__gaTracker.loaded = true;
							window['__gaTracker'] = __gaTracker;
						})();
									} else {
										console.log( "" );
					( function () {
							function __gtagTracker() {
								return null;
							}
							window['__gtagTracker'] = __gtagTracker;
							window['gtag'] = __gtagTracker;
					} )();
									}
			</script>
				<!-- / Google Analytics by MonsterInsights -->
		<style id='global-styles-inline-css' type='text/css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
</style>
<link rel='stylesheet' id='opensans-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C400i%2C600%2C700&#038;display=swap&#038;ver=6.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='https://www.valdemarsro.dk/wp-content/themes/valdemarsro16/style.css?v=26112021&#038;ver=6.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='fa-css'  href='https://www.valdemarsro.dk/wp-content/themes/valdemarsro16/assets/fa/css/all.min.css?ver=6.0.1' type='text/css' media='all' />
<script type='text/javascript' src='https://www.valdemarsro.dk/wp-content/plugins/google-analytics-for-wordpress/assets/js/frontend-gtag.min.js?ver=8.7.0' id='monsterinsights-frontend-script-js'></script>
<script data-cfasync="false" data-wpfc-render="false" type="text/javascript" id='monsterinsights-frontend-script-js-extra'>/* <![CDATA[ */
var monsterinsights_frontend = {"js_events_tracking":"true","download_extensions":"pdf,doc,ppt,xls,zip,docx,pptx,xlsx","inbound_paths":"[]","home_url":"https:\/\/www.valdemarsro.dk","hash_tracking":"false","ua":"UA-5530254-7","v4_id":""};/* ]]> */
</script>
<link rel="https://api.w.org/" href="https://www.valdemarsro.dk/wp-json/" /><link rel="alternate" type="application/json" href="https://www.valdemarsro.dk/wp-json/wp/v2/posts/24809" /><link rel='shortlink' href='http://wp.me/p9s7E-6s9' />
<link rel="alternate" type="application/json+oembed" href="https://www.valdemarsro.dk/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.valdemarsro.dk%2Fvarmende-nem-og-krydret-groentsagsgryde-med-kikaerter%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://www.valdemarsro.dk/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.valdemarsro.dk%2Fvarmende-nem-og-krydret-groentsagsgryde-med-kikaerter%2F&#038;format=xml" />
	</head>
<body class="page-varmende-nem-og-krydret-groentsagsgryde-med-kikaerter" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KPHRD4D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="cncpt-dsk_top"></div>
<div id="header-wrapper" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
		<style>#header-wrapper{padding-top:0;}#top-container{padding-top:158px;}</style><script>function _dismiss_promo_top() {document.location = '/varmende-nem-og-krydret-groentsagsgryde-med-kikaerter/?dismiss_promo_top=1';}</script><div id="promotop" style="position:relative;margin-bottom:10px;"><style>
#promotop
{
background: #7c4747;
text-align: center;
padding: 10px;
}
#promotop,#promotop a
{
color: #fff;
font-size: 15px;
font-weight: 400;
}
}
</style>
<a href="/valdemarsro-premium/" id="topbar_3" onclick="return _promotion_click('topbar_2', '');">
<div style="padding-bottom:6px;">☆ VALDEMARSRO MADPLANER☆ </div>
Læs mere og prøv gratis i 7 dage
</a>
<script>
document.addEventListener('DOMContentLoaded', (event) => { _promotion_view('topbar_2', ''); });
</script><span style="position:absolute;right:10px;top:10px;font-size:20px;cursor:pointer;" onclick="_dismiss_promo_top();">&times;</span></div>		<div id="header"><style>
#header-features > li{float:left;margin-right:20px;position:relative;}
#header-app{order:50;text-transform:uppercase;}
@media only screen and (max-width: 1024px){
#header-logo{flex-grow:1;}
#header-features{display:none;}
}
@media only screen and (max-width: 775px){
#header-search-mobile{display:block;}
}
#header-burger-active{z-index:1100;}
</style>
<div id="header-search-mobile">
	<a href="/premium/soeg/"><img src="https://www.valdemarsro.dk/wp-content/themes/valdemarsro16/assets/img/svg-search2.svg" style="width:20px;vertical-align:middle;margin-right:4px;"/></a>
</div>
<div id="header-nav" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation" class="desktop">
	<ul id="menu-ny-topmenu" class="menu">
		<li id="header-search">
			<a href="/premium/soeg/"><img src="https://www.valdemarsro.dk/wp-content/themes/valdemarsro16/assets/img/svg-search2.svg" style="width:20px;vertical-align:middle;margin-right:4px;position:relative;top:-3px;"/></a>
		</li>
		<li id="menu-item-28135" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-28135">
			<a href="#">Opskrifter</a>
			<ul class="sub-menu">
				<li id="menu-item-28075" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-28075">
					<a href="https://www.valdemarsro.dk/opskriftsoversigt/">Opskrifter</a>
				</li>
				<li id="menu-item-28077" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-28077">
					<a href="https://www.valdemarsro.dk/raavare-indeks/">Opskrifter efter råvarer</a>
				</li>
								<li id="menu-item-48996" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48996">
					<a href="https://www.valdemarsro.dk/madplan/">Madplan</a>
				</li>
							</ul>
		</li>
				<li id="header-premium">
			<a href="/valdemarsro-premium/">
				<img src="https://www.valdemarsro.dk/wp-content/themes/valdemarsro16/assets/img/svg-premium.svg" style="width:16px;vertical-align:middle;margin-right:4px;position:relative;top:-2px;"/>Få Premium
			</a>
	</li>
			</ul>
</div>
<div id="header-logo">
	<a href="/"><img src="https://www.valdemarsro.dk/wp-content/themes/valdemarsro16/assets/img/logo3.png" width="300" height="44" alt="Valdemarsro"/></a>
</div>
<ul id="header-features" class="menu">
	<li id="menu-item-28137" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-28137">
		<a href="#">Mere Valdemarsro</a>
		<ul class="sub-menu">
			<li id="menu-item-28099" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-28099">
				<a href="/livsstil/">Livsstil</a>
			</li>
			<li id="menu-item-28113" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-28113">
				<a href="/rejser/">Rejser</a>
			</li>
			<li id="menu-item-28098" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-28098">
				<a href="/boger/">Bøger</a>
			</li>
			<li id="menu-item-28083" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-28083" style="margin-bottom:40px;">
				<a href="/i-haven/">I haven</a>
			</li>
			<li id="menu-item-28093" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-28093">
				<a href="/valdemarsro-om-os/">Om Valdemarsro</a>
			</li>
			<li id="menu-item-42290" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-42290">
				<a href="/nyhedsbrev/">Nyhedsbrev</a>
			</li>
			<li id="menu-item-46712" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46712">
				<a href="/support/">Support Premium</a>
			</li>
			<li id="menu-item-35280" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-35280">
				<a href="/kontakt/">Kontakt</a>
			</li>
		</ul>
	</li>
	<li id="header-shop">
		<a href="/kogeboeger/">Kogebøger</a>
	</li>
		<li id="header-user">
		<a href="#" onclick="return _open_modal('login-modal', 1);">
			<img src="https://www.valdemarsro.dk/wp-content/themes/valdemarsro16/assets/img/svg-key.svg" style="width:16px;vertical-align:middle;margin-right:4px;position:relative;top:-2px;"/>Log på
		</a>
	</li>
	</ul>
<!--<div id="header-app">
	<!--<a href="/valdemarsro-app/"><i class="fas fa-mobile-alt"></i>App</a>
	<a href="/premium/soeg/"><img src="https://www.valdemarsro.dk/wp-content/themes/valdemarsro16/assets/img/svg-search2.svg" style="width:16px;vertical-align:middle;margin-right:4px;"/</a>
</div>-->
<div id="header-burger">
	<a href="#" onclick="return openBurger();"><i class="fas fa-bars"></i></a>
</div></div>
</div>
<style>
#header-burger-active a{text-transform:uppercase;}
</style>
<div id="header-burger-active">
	<div class="title">Menu<span class="close" onclick="closeBurger();">&times;</span></div>
		<ul class="menu">
		<li class="menu-item menu-item-has-children">
			<a href="#">Opskrifter</a>
			<ul class="sub-menu">
				<li class="menu-item">
					<a href="/opskriftsoversigt/">Opskrifter</a>
				</li>
				<li class="menu-item">
					<a href="/premium/soeg/">Søg <img src="https://www.valdemarsro.dk/wp-content/themes/valdemarsro16/assets/img/svg-search2.svg" style="width:16px;vertical-align:middle;margin-left:4px;"/></a>
				</li>
				<li class="menu-item">
					<a href="/raavare-indeks/">Søg opskrifter efter råvarer</a>
				</li>
			</ul>
		</li>
				<li class="menu-item" style="margin-bottom:20px;">
			<a href="/madplan/">Madplan</a>
		</li>
		<li class="menu-item">
			<a href="/valdemarsro-premium/">Få Valdemarsro Premium</a>
		</li>
		<li class="menu-item" style="margin-bottom:20px;">
			<a href="#" onclick="return _open_modal('login-modal', 1);">Log på Valdemarsro Premium</a>
		</li>
				<li class="menu-item">
			<a href="/kogeboeger/">Valdemarsro kogebøger</a>
		</li>
		<li class="menu-item menu-item-has-children">
			<a href="#">Livsstil indlæg</a>
			<ul class="sub-menu">
				<li class="menu-item">
					<a href="/livsstil/">Livsstil</a>
				</li>
				<li class="menu-item">
					<a href="/boger/">Bøger</a>
				</li>
				<li class="menu-item">
					<a href="/i-haven/">I haven</a>
				</li>
				<li class="menu-item">
					<a href="/rejser/">Rejser</a>
				</li>
			</ul>
		</li>
		<li class="menu-item">
			<a href="/valdemarsro-om-os/">Om Valdemarsro</a>
		</li>
		<li class="menu-item">
			<a href="/kontakt/">Kontakt</a>
		</li>
		<!--
				<li>
			<a href="#" onclick="return _open_modal('login-modal', 1);">Log på Valdemarsro Premium</a>
		</li>
				-->
	</ul>
	<div class="social">
		<!--<a href="https://www.facebook.com/Valdemarsro/"><i class="fab fa-facebook"></i></a>
		<a href="https://www.instagram.com/valdemarsro_dk/"><i class="fab fa-instagram"></i></a>
		<a href="https://www.youtube.com/user/valdemarsr0?sub_confirmation=1"><i class="fab fa-youtube-square"></i></a>-->
		<a class="sm in" href="https://www.instagram.com/valdemarsro_dk/" target="_blank"><img src="https://www.valdemarsro.dk/wp-content/themes/valdemarsro16/assets/img/instagram1.png"/></a>
		<a class="sm fb" href="https://www.facebook.com/Valdemarsro/" target="_blank"><img src="https://www.valdemarsro.dk/wp-content/themes/valdemarsro16/assets/img/facebook1.png"/></a>
		<a class="sm yt" href="https://www.youtube.com/user/valdemarsr0?sub_confirmation=1" target="_blank"><img src="https://www.valdemarsro.dk/wp-content/themes/valdemarsro16/assets/img/youtube1.png"/></a>
		<a class="sm pi" href="https://dk.pinterest.com/valdemarsro/" target="_blank"><img src="https://www.valdemarsro.dk/wp-content/themes/valdemarsro16/assets/img/pinterest1.png"/></a>
	</div>
</div>
<div class="container" id="top-container">
		<!-- Wallpaper -->
	<div id="adn-00000000000bae7f" style="display:none;" class="vroad"></div>
	<div id="adn-00000000000bae82" style="display:none;" class="vroad vroadmob"></div>
	<div id="cncpt-lb1"></div>
		<!--<div id="cncpt-mob1"></div>-->
	<div id="cncpt-mob-top"></div>
				<div id="main">
<div class="main-wrapper single-post" itemscope="itemscope" itemtype="http://schema.org/Recipe">
	<div class="hidden-schema">
		<span itemprop="publisher" itemscope="itemscope" itemtype="https://schema.org/Organization">
			<span itemprop="name">Valdemarsro</span>
			<span itemprop="logo" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
				<span itemprop="url">https://www.valdemarsro.dk/wp-content/themes/valdemarsro16/assets/img/header-logo.png</span>
			</span>
		</span>
		<span itemprop="author" itemscope="itemscope" itemtype="https://schema.org/Person">
			<span itemprop="name">Ann-Christine Hellerup Brandt</span>
		</span>
		<span itemprop="mainEntityOfPage">https://www.valdemarsro.dk/varmende-nem-og-krydret-groentsagsgryde-med-kikaerter/</span>
				<span itemprop="recipeCategory">Aftensmad</span>
						<span itemprop="keywords">Bålmad, Frokost, Mellemøstens køkken, Nem Hverdagsmad, Vegetar</span>
			</div>

	<div class="row clear-after">
		<div class="col span_12 post-common">
			<div class="post-category">Opskrift</div>
			<div class="title">
				<h1 itemprop="headline">Grøntsagsgryde med kikærter</h1>
			</div>
			<div class="title-separator"></div>			<div class="content post-image-right">
				<div class="image recipe-image">
					<img src="https://www.valdemarsro.dk/wp-content/2016/03/groentsagsgryde_opskrift.jpg" itemprop="image"/>
					<img class="favorite" src="https://www.valdemarsro.dk/wp-content/themes/valdemarsro16/assets/img/svg-favorite.svg" onclick="return _favorite_toggle(24809, this);"/>				</div>
				<div itemprop="description" id="recipe-intro">
					<img class="printonly" src="https://www.valdemarsro.dk/wp-content/themes/valdemarsro16/assets/img/logo3.png" width="240" style="filter:grayscale(100%);"/>
					<p>I går lavede jeg denne varmende grøntsagsgryde med kikærter til min frokost og jeg påtænker at gøre præcis det samme til aftensmad i dag &#8211; holder ellers meget af variation, men det blev så godt og jeg tror det vil være lige sagen i aften.</p>
<p>Denne ret er blandt mine favoritter i denne uge!</p>
<p>Kan jo umuligt vælge én livret, det kan jeg faktisk næsten ikke forstå, at man kan &#8211; for der er jo så uendelig meget godt. Så jeg har til gengæld nok mindst hundrede livretter, det svinger fra uge til uge, sæson til sæson, morgen til aften og alt efter vejret.</p>
<div class="clear"></div><div id="cncpt-mob1"></div><div class="post-recipe"><div class="carrot"></div><div class="hidden-schema"><span itemprop="cookTime">PT30M</span><span itemprop="totalTime">PT15M</span><span itemprop="recipeYield">4</span></div><h2 itemprop="name">Grøntsagsgryde med kikærter</h2><div class="recipe-stats"><div class="recipe-stat"><span class="recipe-stat-label">Tid i alt</span><strong>30 min.</strong></div><div class="recipe-stat"><span class="recipe-stat-label">Arbejdstid</span><strong>15 min.</strong></div><div class="recipe-stat"><span class="recipe-stat-label">Holdbarhed</span><strong>2 dage</strong></div><div class="recipe-stat"><span class="recipe-stat-label">Antal</span><strong style="cursor:pointer;" onclick="_open_modal_wrapper(24805, 4, 'pers.', 4);">4 pers. <i class="fas fa-sort"></i></strong></div></div><div class="row clear-after"><div class="col span_6"><div class="subtitle">Ingredienser</div><ul class="ingredientlist content"><li itemprop="recipeIngredient">2 tsk stødt spidskommen, stødt</li><li itemprop="recipeIngredient">1 tsk stødt koriander</li><li itemprop="recipeIngredient">1 tsk stødt kardemomme</li><li itemprop="recipeIngredient">1 tsk stødt ingefær</li><li itemprop="recipeIngredient">0,50 tsk cayenne peber</li><li itemprop="recipeIngredient">1 tsk kanel</li><li itemprop="recipeIngredient">1 rødløg, finthakket</li><li itemprop="recipeIngredient">2 fed hvidløg, finthakkede</li><li itemprop="recipeIngredient">400 g butternut squash, i mundrette tern</li><li itemprop="recipeIngredient">4 gulerod, skåret i tern</li><li itemprop="recipeIngredient">2 dåser hakkede tomater</li><li itemprop="recipeIngredient">3 dl grøntsagsbouillon</li><li itemprop="recipeIngredient">1 broccoli, delt i buketter</li><li itemprop="recipeIngredient">1 squash, skåret i tern</li><li itemprop="recipeIngredient">1 dåse kikærter, drænede og skyllede</li><li itemprop="recipeIngredient">0,50 citron, saften herfra</li><li itemprop="recipeIngredient">1 spsk olivenolie, til stegning</li><li itemprop="recipeIngredient">salt</li><li itemprop="recipeIngredient">sort peber, friskkværnet</li><li class="ingredient-header">Til servering</li><li itemprop="recipeIngredient">1 dl cremefraiche 18 %</li><li itemprop="recipeIngredient">1 håndfuld bredbladet persille</li><li itemprop="recipeIngredient">3 dl ris, hvis man er ekstra sulten</li></ul><a class="btn btn-print" href="#" onclick="window.print();return false;">Udskriv</a><br/><a class="btn btn-shopping btn-locked" href="/valdemarsro-premium/">Føj til indkøbsseddel</a><br/><a class="btn btn-addfavorite btn-locked" href="/valdemarsro-premium/">Føj til favoritter</a></div><div class="col span_6"><div class="subtitle">Fremgangsmåde</div><div itemprop="recipeInstructions" class="content"><p>Kom spidskommen, koriander, kardemomme, ingefær, cayennepeber og kanel i en varm tør gryde og varm det godt igennem under omrøring, til det begynder at dufte skønt.</p>
<p>Skru ned for varmen og kom rødløg, hvidløg og olie i gryden og sauter, til løgene er bløde.</p>
<p>Tilsæt butternutsquash, gulerødder, hakkede tomater og grøntsagsbouillon. Læg låg på og lad retten simre ved lav varme i 10 minutter.</p>
<p>Kom broccoli og squash i gryden og lad det simre i endnu 10 minutter. Tilsæt kikærter og varm retten godt igennem. Smag til med citronsaft, salt og friskkværnet peber.</p>
<p>Server i dybe tallerkener med cremefraiche og persille.</p>
<p>Hvis I er ekstra sultne, så kan I servere ris til</p>
</div></div></div></div>				</div>
			</div>
						<style>
.nutrition-trigger{background:#f5f5f5;padding:0 20px;margin-bottom:20px;}
.nutrition{display:none;padding:20px 0;}
.nutrition h2{text-align:center;}
.nutrition-trigger h3{text-transform:uppercase;font-weight:500;font-size:14px;position:relative;}
.nutrition-trigger > h3{padding:20px 0;cursor:pointer;margin-bottom:0;}
.nutrition-trigger > h3:after{position:absolute;top:18px;right:0;content:'';display:block;width:24px;height:24px;transition:all .2s;background-position:center right;background-repeat:no-repeat;background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAArElEQVRIS+3TIQ4CMRCF4W8NggPAJTCg8BhOi8bgV4HhEnAEFCmhyYawO91N1rWymXl/35tpY+bTzKyvAsKEa0STI2qxwBHPQGWFM17Y/9b2zeCKLe44DECS+AUb3LArBXQb+yAlNYMfbUigSDy5idb0n1Dqy7FEEYaAJNaFPL4Zrwvm8ymNHOSZdSHpLnx5biwFZCcnLAvXd5SD8EP1FYxxMAlSAWFsNaIwojfcwCMZQwCQhgAAAABJRU5ErkJggg==);}
.nutrition-trigger > h3.toggled:after{transform:rotate(180deg);}
.nutrition strong{font-weight:600;display:block;margin-bottom:5px;}
.nutrition-wrapper,.nutrition-fake{display:flex;flex-wrap:wrap;align-items:center;}
.nutrition-wrapper > div,.nutrition-fake > div{flex-basis:50%;max-width:50%;}
.nutrition-wrapper .nutrition-wrapper > div{flex-basis:50%;}
.nutrition-wrapper div div{margin-bottom:15px;}
.nutrition-wrapper p{font-size:14px;text-align:center;flex-basis:100%;}
.post-recipe{margin-bottom:0;}
.blur{filter:blur(4px);}
.nutrition-fake{position:relative;}
.nutrition-fake-overlay{text-align:center;z-index:10;position:absolute;top:0;left:0;width:100%;height:100%;display:flex;flex-direction:column;flex-basis:100% !important;max-width:100% !important;justify-content:center;align-items:center;}
@media(max-width:960px)
{
.nutrition > .nutrition-wrapper,.nutrition-fake{display:block;}
.nutrition-wrapper > div,.nutrition-fake > div{max-width:100%;margin-top:20px;}
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
<div class="nutrition-trigger print-hide">
	<h3 onclick="$(this).parent().find('.nutrition').slideToggle();$(this).toggleClass('toggled');">Næringsindhold</h3>
	<div class="nutrition">
				<div class="nutrition-fake">
			<div class="nutrition-fake-overlay">
				<strong style="line-height:1.3;">For at se næringsindhold skal du være logget ind og have et aktivt Premium abonnement.</strong>
				<a style="background-color:#2b536c;color:#fff;border-radius:10px;padding:15px 30px;display:inline-block;margin-top:20px;" href="/valdemarsro-premium/" target="_blank" rel="noopener">Læs om Valdemarsro Premium &gt;&gt;</a>
			</div>
			<div style="opacity:.3;">
				<img src="https://www.valdemarsro.dk/wp-content/themes/valdemarsro16/premium/fake_chart.png"/>
			</div>
			<div style="opacity:.3;">
				<div class="nutrition-wrapper">
					<div>
						<h3> Pr. pers.</h3>
						<div>
							<strong>Energi</strong>
							<span class="blur">xxxx</span><br/>(<span class="blur">xxx</span> kcal)
						</div>
						<div>
							<strong>Fedt</strong>
							<span class="blur">xxxx</span> gram
						</div>
						<div>
							<strong>Kulhydrat</strong>
							<span class="blur">xxxx</span> gram
						</div>
						<div>
							<strong>Protein</strong>
							<span class="blur">xxxx</span> gram
						</div>
					</div>
					<div>
						<h3>Total</h3>
						<div>
							<strong>Energi</strong>
							<span class="blur">xxxx</span><br/>(<span class="blur">xxx</span> kcal)
						</div>
						<div>
							<strong>Fedt</strong>
							<span class="blur">xxxx</span> gram
						</div>
						<div>
							<strong>Kulhydrat</strong>
							<span class="blur">xxxx</span> gram
						</div>
						<div>
							<strong>Protein</strong>
							<span class="blur">xxxx</span> gram
						</div>
					</div>
				</div>
			</div>
		</div>
			</div>
</div>
<script>
window.chartColors = {
	fats: 'rgb(134, 153, 167)',
	carbs: 'rgb(203, 215, 221)',
	proteins: 'rgb(233, 227, 215)'
};

var config1 = {
	type: 'pie',
	data: {
		datasets: [{
			data: [
				9.9,
				73.5,
				16.6			],
			backgroundColor: [
				window.chartColors.fats,
				window.chartColors.carbs,
				window.chartColors.proteins
			]
		}],
		labels: [
			'Fedt',
			'Kulhydrat',
			'Protein'
		]
	},
	options: {
		tooltips: {
			mode: 'label',
			callbacks: {
				label: function(tooltip, data)
				{
					console.log(tooltip);
					console.log(data);
					return ' ' + data['labels'][tooltip['index']] + ': ' + data['datasets'][0]['data'][tooltip['index']] + '%';
				}
			}
		}
	}
};
</script>
					</div>
	</div>
	<!--<div id="adn-00000000000bae80" style="margin-bottom:20px;display:none;" class="vroad"></div>-->
		<!--<div id="cncpt-dsk_lb2" style="margin-bottom:20px;"></div>-->
	<div class="row clear-after" id="after-recipe">
		<div class="col sidebar-on-right">
			<div class="wrapper">
				<div class="content">
					<style>
.note-trigger{background:#f5f5f5;padding:0 20px;margin-bottom:20px;}
.note-trigger > h3{text-transform:uppercase;font-weight:500;font-size:14px;position:relative;padding:20px 0;cursor:pointer;margin-bottom:0;}
.note-trigger > h3:after{position:absolute;top:18px;right:0;content:'';display:block;width:24px;height:24px;transition:all .2s;background-position:center right;background-repeat:no-repeat;background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAArElEQVRIS+3TIQ4CMRCF4W8NggPAJTCg8BhOi8bgV4HhEnAEFCmhyYawO91N1rWymXl/35tpY+bTzKyvAsKEa0STI2qxwBHPQGWFM17Y/9b2zeCKLe44DECS+AUb3LArBXQb+yAlNYMfbUigSDy5idb0n1Dqy7FEEYaAJNaFPL4Zrwvm8ymNHOSZdSHpLnx5biwFZCcnLAvXd5SD8EP1FYxxMAlSAWFsNaIwojfcwCMZQwCQhgAAAABJRU5ErkJggg==);}
.note-trigger > h3.toggled:after{transform:rotate(180deg);}
.note{padding-bottom:20px;}
.note textarea{width:100%;height:100px;max-width:100%;border:1px solid #ccc;padding:10px;margin-bottom:10px;resize:vertical;}
.note button{background:#844444;color:#fff;border:none;height:30px;text-align:center;cursor:pointer;font-weight:700;font-size:14px;padding:0 20px;}
/*.note input[type="checkbox"]:checked{filter:invert(100%) hue-rotate(318deg) brightness(1.7);}*/
.note input[type="checkbox"]:checked{filter:grayscale(1) invert(1) brightness(5);}
</style>
<div class="note-trigger print-hide">
	<h3 onclick="$(this).parent().find('.note').slideToggle();$(this).toggleClass('toggled');">Mine noter til opskriften</h3>
	<div class="note" style="display:none;">
		<form method="post">
						<strong style="line-height:1.3;">For at bruge denne funktion skal du være logget ind og have et aktivt Premium abonnement.</strong>
			<br/>
			<a style="background-color:#2b536c;color:#fff;border-radius:10px;padding:15px 30px;display:inline-block;margin-top:20px;text-decoration:none;" href="/valdemarsro-premium/" target="_blank" rel="noopener">Læs om Valdemarsro Premium &gt;&gt;</a>
			<br/><br/>
						<textarea name="recipe_note" maxlength="500" readonly disabled></textarea>
			<button type="submit" readonly disabled>Gem note</button>&nbsp;&nbsp;
			<label for="include_in_print">
				<input type="checkbox" name="include_in_print" id="include_in_print" value="1" checked readonly disabled/> Inkluder note i udskrivning
			</label>
		</form>
	</div>
</div>					<div id="adn-00000000000bae83" style="clear:both;margin-bottom:20px;display:none;" class="vroad vroadmob"></div><div id="cncpt-mob2" style="clear:both;margin-bottom:20px;"></div>
<p><strong>Tip til opskriften</strong></p>
<ul>
<li>Hvis du ikke har butternut squash, så brug i stedet kartofler, søde kartofler, en anden type græskar eller rodfrugter efter eget valg.</li>
</ul>
<p><img class="alignleft size-full wp-image-45374" src="https://www.valdemarsro.dk/wp-content/2016/03/Img3280.jpg" alt="grøntsagsgryde" width="1000" height="1443" srcset="https://www.valdemarsro.dk/wp-content/2016/03/Img3280.jpg 1000w, https://www.valdemarsro.dk/wp-content/2016/03/Img3280-208x300.jpg 208w, https://www.valdemarsro.dk/wp-content/2016/03/Img3280-600x866.jpg 600w, https://www.valdemarsro.dk/wp-content/2016/03/Img3280-768x1108.jpg 768w" sizes="(max-width: 1000px) 100vw, 1000px" /></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Det tager ikke mange minutter at bikse det sammen &#8211; så den hører glimrende til kategorien: <a href="http://www.valdemarsro.dk/category/temaer/nem-hverdagsmad/" target="_blank" rel="noopener noreferrer">nem hverdagsmad</a> &#8211; og det smager så godt, så jeg synes, at jeg lige ville dele opskriften med jer. En ret som denne kan jo næsten hører til kategorien &#8216;ruskomsnusk&#8217; hvilket var, hvad vi i min barndom kaldte retterne &#8220;alt godt fra køleskabet og grøntsagsskufferne&#8221;.</p>
					<div class="clear"></div>
															<h3><strong>Ny kogebog  med KAGER &amp; DESSERTER</strong></h3>
<p>Ny Valdemarsro kogebog fyldt med alle favoritopskrifterne til det søde køkken og kan forudbestilles nu &#8211;<em><a href="https://www.valdemarsro.dk/kogebog-valdemarsro-kager-desserter/" target="_blank" rel="noopener"> læs mere her &gt;&gt;</a></em></p>
<p>&nbsp;</p>
<h3><strong>Medlem af Valdemarsro Premium ☆</strong></h3>
<p>Som  medlem af Valdemarsro er det nemt og hurtigt at planlægge ugens måltider og lave indkøbsseddel. Du får en smart indkøbsseddelfunktion og ugentlige madplaner, som du frit kan tilpasse til dig og din familie. Du får også din egen favoritside, energiberegning på alle opskrifter, dit eget notefelt til opskrifter. Og du kan bruge dine fordele både på Valdemarsro hjemmeside og i appen.<br />
+ du  slipper for annoncer og reklamebannere her på Valdemarsro.<br />
<strong><em><a href="/valdemarsro-premium/">Prøv gratis i 7 dage her &gt;&gt;</a></em></strong></p>
<p>&nbsp;</p>
									</div>
				<div class="recipe-bar">
					<a href="https://www.valdemarsro.dk/aftensmad/">Aftensmad</a> <a href="https://www.valdemarsro.dk/baalmad/">Bålmad</a> <a href="https://www.valdemarsro.dk/frokost-og-madpakke/">Frokost</a> <a href="https://www.valdemarsro.dk/mellemoestens-koekken/">Mellemøstens køkken</a> <a href="https://www.valdemarsro.dk/nem-hverdagsmad/">Nem Hverdagsmad</a> <a href="https://www.valdemarsro.dk/opskrifter/">Opskrifter</a> <a href="https://www.valdemarsro.dk/vegetar/">Vegetar</a><a href="https://www.valdemarsro.dk/tag/spidskommen/">Spidskommen</a><a href="https://www.valdemarsro.dk/tag/koriander/">Koriander</a><a href="https://www.valdemarsro.dk/tag/kardemomme/">Kardemomme</a><a href="https://www.valdemarsro.dk/tag/ingefaer/">Ingefær</a><a href="https://www.valdemarsro.dk/tag/kanel/">Kanel</a><a href="https://www.valdemarsro.dk/tag/roedloeg/">Rødløg</a><a href="https://www.valdemarsro.dk/tag/hvidloeg/">Hvidløg</a><a href="https://www.valdemarsro.dk/tag/graeskar/">Græskar</a><a href="https://www.valdemarsro.dk/tag/guleroedder/">Gulerødder</a><a href="https://www.valdemarsro.dk/tag/hakkede-tomater/">Hakkede tomater</a><a href="https://www.valdemarsro.dk/tag/bouillon/">Bouillon</a><a href="https://www.valdemarsro.dk/tag/broccoli/">Broccoli</a><a href="https://www.valdemarsro.dk/tag/squash/">Squash</a><a href="https://www.valdemarsro.dk/tag/kikaerter/">Kikærter</a><a href="https://www.valdemarsro.dk/tag/persille/">Persille</a>				</div>
				<div class="related">
					<div class="row clear-after">
						<div class="col span_12">
							<div class="row clear-after">
	<div class="nav-wrapper">
				<div class="col nav-prev">
			<div class="inner">
			<a href="https://www.valdemarsro.dk/smaa-glimt-74/">&lsaquo; Forrige indlæg</a>			</div>
		</div>
						<div class="col pull_right nav-next">
			<div class="inner">
			<a href="https://www.valdemarsro.dk/fyldt-kyllingebryst/">Næste indlæg &rsaquo;</a>			</div>
		</div>
				<div class="clear"></div>
	</div>
</div>						</div>
						<div id="adn-00000000000bae84" style="display:none;" class="vroad vroadmob"></div>
						<!--<div id="cncpt-mob3"></div>-->
												<!--<div data-spklw-widget="widget-5b8f9186a45c3"></div>-->
						<div class="widget_text col span_12"><div class="textwidget custom-html-widget">
<a href="https://www.valdemarsro.dk/valdemarsro-premium/" id="commentwidget_1" onclick="return _promotion_click('commentwidget_1', '');"><img src="/wp-content/2020/12/1-prioritet-Banner_Premium.jpg"/></a>
<script>
document.addEventListener('DOMContentLoaded', (event) => { _promotion_view('commentwidget_1', '');
</script>


<br /><br /></div></div>											</div>
				</div>
				<div id="comments">
	<div class="comments-title"><span class="svg">&#xe910;</span>25 kommentarer</div>
	<ul class="comments"><li class="comment even thread-even depth-1 parent" id="comment-70004"><div id="div-comment-70004" class="comment-body" itemscope="itemscope" itemtype="http://schema.org/Comment"><div class="comment-author"><strong itemprop="name">Inaam</strong> skrev:</div><div class="comment-date">8. marts 2016 kl. 09:00</div><div class="comment-text" itemprop="text"><p>Nøj, det lyder godt. Jeg elsker også sådanne nogle retter. Kikærter er bare så fantastiske. Jeg har dog lidt svært ved, at få børnene til at spise en ret som denne, fordi grøntsagerne er kogte. Den eneste ret med kogte grøntsager, de spiser, er minestrone. En god gang wok vil de heller ikke have og det er så ærgerligt, for jeg elsker disse retter. Har du et godt fif til, hvordan jeg kan få dem til at spise disse retter? De spiser ellers masser af grøntsager &#8211; bare de ikke er kogte.</p>
<p>Jeg har i øvrigt en god opskrift på en kikærtecurry, som du skal prøve. Jeg kan lige sende den til dig senere.</p>
<p>God dag.<br />
Kh<br />
Inaam</p>
</div><div class="reply"><span class="line"></span><a rel='nofollow' class='comment-reply-link' href='#comment-70004' data-commentid="70004" data-postid="24809" data-belowelement="div-comment-70004" data-respondelement="respond" data-replyto="Besvar Inaam" aria-label='Besvar Inaam'>Svar</a></div></div><ul class="children">
<li class="comment byuser comment-author-ann-christine bypostauthor odd alt depth-2 parent" id="comment-70061"><div id="div-comment-70061" class="comment-body" itemscope="itemscope" itemtype="http://schema.org/Comment"><div class="ac"></div><div class="comment-author"><strong itemprop="name">Ann-Christine</strong> skrev:</div><div class="comment-date">8. marts 2016 kl. 13:52</div><div class="comment-text" itemprop="text"><p>Det kan også være en udfordring indimellem herhjemme. Jeg gør egentlig bare det at jeg servere rå gulerødder, agurk, tomater, dampet broccoli ved siden af i små skåle. Kan også finde på at blende en portion af denne opskrift til en helt fin og cremet suppe, som jeg spæder op med lidt fløde og så servere som suppe &#8211; så går det hele straks meget nemmere<br />
Og ja, tak &#8211; den kikærtecurry vil jeg da meget gerne prøve :)<br />
Rigtig dejlig dag til dig<br />
Kh AC</p>
</div><div class="reply"><span class="line"></span><a rel='nofollow' class='comment-reply-link' href='#comment-70061' data-commentid="70061" data-postid="24809" data-belowelement="div-comment-70061" data-respondelement="respond" data-replyto="Besvar Ann-Christine" aria-label='Besvar Ann-Christine'>Svar</a></div></div><ul class="children">
<li class="comment even depth-3 parent" id="comment-70258"><div id="div-comment-70258" class="comment-body" itemscope="itemscope" itemtype="http://schema.org/Comment"><div class="comment-author"><strong itemprop="name">Inaam</strong> skrev:</div><div class="comment-date">9. marts 2016 kl. 09:19</div><div class="comment-text" itemprop="text"><p>ok, det må jeg prøve.<br />
Jeg har egentlig to opskrifter du skal prøve: Kikærtecurry og korma curry:<br />
Kikærtecurry 4-6 pers:<br />
1 spsk olivenolie<br />
2 løg i skiver<br />
6-8 fed hvidløg<br />
1 spsk stødt spidskommen<br />
2 tsk stødt koriander<br />
1 tsk sød paprika<br />
2 dåser à 400 g hakkede tomater<br />
425 g purerede tomater<br />
2 dåser à 425 g kikærter (eller i blødsatte og kogte)<br />
1 rød peberfrugt<br />
30 g bredbladet hakket persille<br />
Olien varmes i gryden og løgene svitses bløde for jævn varme i 4-5 min. Rør hvidløg og krydderier i og svits yderligere 1-2 min. Rør hakkede tomater, purerede tomater, kikærter og peberfrugt i.<br />
Det bringes i kog, varmen dæmpes og det simrer i 15 min. Smages til med salt og sort peber fra kværn. Rør persille i. Serveres med friskbagt brød.</p>
<p>Korma curry<br />
Til fire personer</p>
<p>1 spsk. olie, 1 stort løg i skiver, 2 fed pressede hvidløg, 1 spsk. garam masala, 1 tsk. stødt koriander, 1 tsk. stødt spidskommen, 1 tsk. chilipulver, ¼ tsk. stødt gurkemeje, 1 ds. kokosmælk (400g), 500g små champignoner, 100 g malede mandler, 2 spsk. tomatpasta, 2 ds. afdryppede hvide bønner eller kidney bønner (à 300g), 1 rød peberfrugt i skiver, 2 tsk. citronsaft, 15 g hakket, frisk koriander.</p>
<p>1.	Olien varmes i en stor gryde. Løg og hvidløg svitses gyldent. Tilsæt de stødte krydderier og svits 1-2 min.<br />
2.	Tilsæt kokosmælk og bring det i kog. Varmen dæmpes og champignoner, malede mandler, tomatpasta samt 2½dl vand tilsættes. Læg låg på og bring det i kog. Varmen dæmpes og det simrer uden låg i 10 min. Rør jævnligt.<br />
3.	Tilsæt bønner og peberfrugt og kog 5 min eller til saucen er jævnet. Rør citronsaft og koriander i.</p>
<p>Serveres med kogt ris og yoghurt naturel. </p>
<p>Jeg tænker, at disse rette måske lige er noget for dig?</p>
</div><div class="reply"><span class="line"></span><a rel='nofollow' class='comment-reply-link' href='#comment-70258' data-commentid="70258" data-postid="24809" data-belowelement="div-comment-70258" data-respondelement="respond" data-replyto="Besvar Inaam" aria-label='Besvar Inaam'>Svar</a></div></div><ul class="children">
<li class="comment byuser comment-author-ann-christine bypostauthor odd alt depth-4" id="comment-70546"><div id="div-comment-70546" class="comment-body" itemscope="itemscope" itemtype="http://schema.org/Comment"><div class="ac"></div><div class="comment-author"><strong itemprop="name">Ann-Christine</strong> skrev:</div><div class="comment-date">10. marts 2016 kl. 14:46</div><div class="comment-text" itemprop="text"><p>Dét lyder jo så lækkert!<br />
Det er printet og skal prøves i weekenden eller næste uge.<br />
Kh AC</p>
</div><div class="reply"><span class="line"></span><a rel='nofollow' class='comment-reply-link' href='#comment-70546' data-commentid="70546" data-postid="24809" data-belowelement="div-comment-70546" data-respondelement="respond" data-replyto="Besvar Ann-Christine" aria-label='Besvar Ann-Christine'>Svar</a></div></div></li><!-- #comment-## -->
</ul><!-- .children -->
</li><!-- #comment-## -->
</ul><!-- .children -->
</li><!-- #comment-## -->
</ul><!-- .children -->
</li><!-- #comment-## -->
<li class="comment even thread-odd thread-alt depth-1 parent" id="comment-70058"><div id="div-comment-70058" class="comment-body" itemscope="itemscope" itemtype="http://schema.org/Comment"><div class="comment-author"><strong itemprop="name"><a href='http://www.louiseslammesky.dk' rel='external nofollow ugc' class='url'>Louise</a></strong> skrev:</div><div class="comment-date">8. marts 2016 kl. 13:46</div><div class="comment-text" itemprop="text"><p>Mmmh, det lyder virkelig lækkert! Den røg straks på must-try listen ;-)<br />
Opskriften du har nedskrevet må være til 4 pers, ikke? Du skriver, at du spiste det til frokost, men det virker umiddelbart som en lidt voldsom enmands-portion..</p>
</div><div class="reply"><span class="line"></span><a rel='nofollow' class='comment-reply-link' href='#comment-70058' data-commentid="70058" data-postid="24809" data-belowelement="div-comment-70058" data-respondelement="respond" data-replyto="Besvar Louise" aria-label='Besvar Louise'>Svar</a></div></div><ul class="children">
<li class="comment byuser comment-author-ann-christine bypostauthor odd alt depth-2" id="comment-70066"><div id="div-comment-70066" class="comment-body" itemscope="itemscope" itemtype="http://schema.org/Comment"><div class="ac"></div><div class="comment-author"><strong itemprop="name">Ann-Christine</strong> skrev:</div><div class="comment-date">8. marts 2016 kl. 14:01</div><div class="comment-text" itemprop="text"><p>Jeg var meget, meget sulten :D Nej pjat, jeg har ganget det jeg lavede op, så det passer til 4 personer :) Godt du lige siger det, jeg har skrevet det på nu :)<br />
Kh AC</p>
</div><div class="reply"><span class="line"></span><a rel='nofollow' class='comment-reply-link' href='#comment-70066' data-commentid="70066" data-postid="24809" data-belowelement="div-comment-70066" data-respondelement="respond" data-replyto="Besvar Ann-Christine" aria-label='Besvar Ann-Christine'>Svar</a></div></div></li><!-- #comment-## -->
</ul><!-- .children -->
</li><!-- #comment-## -->
<li class="comment even thread-even depth-1 parent" id="comment-70114"><div id="div-comment-70114" class="comment-body" itemscope="itemscope" itemtype="http://schema.org/Comment"><div class="comment-author"><strong itemprop="name">Charlotte</strong> skrev:</div><div class="comment-date">8. marts 2016 kl. 19:43</div><div class="comment-text" itemprop="text"><p>Hej Ann-Christine,<br />
Dit indlæg var så inspirerende, at grøntsagsgryden kom på menuen her til aften. Og med stor success, gud hvor var den lækker :)<br />
Mange tak!</p>
</div><div class="reply"><span class="line"></span><a rel='nofollow' class='comment-reply-link' href='#comment-70114' data-commentid="70114" data-postid="24809" data-belowelement="div-comment-70114" data-respondelement="respond" data-replyto="Besvar Charlotte" aria-label='Besvar Charlotte'>Svar</a></div></div><ul class="children">
<li class="comment byuser comment-author-ann-christine bypostauthor odd alt depth-2" id="comment-70125"><div id="div-comment-70125" class="comment-body" itemscope="itemscope" itemtype="http://schema.org/Comment"><div class="ac"></div><div class="comment-author"><strong itemprop="name">Ann-Christine</strong> skrev:</div><div class="comment-date">8. marts 2016 kl. 21:12</div><div class="comment-text" itemprop="text"><p>Hvor fantastisk! Det er jeg glad for at høre, vi spiste det også med stor succes herhjemme :)<br />
Tusind tak for din søde hilsen<br />
Kh AC</p>
</div><div class="reply"><span class="line"></span><a rel='nofollow' class='comment-reply-link' href='#comment-70125' data-commentid="70125" data-postid="24809" data-belowelement="div-comment-70125" data-respondelement="respond" data-replyto="Besvar Ann-Christine" aria-label='Besvar Ann-Christine'>Svar</a></div></div></li><!-- #comment-## -->
</ul><!-- .children -->
</li><!-- #comment-## -->
<li class="comment even thread-odd thread-alt depth-1" id="comment-70914"><div id="div-comment-70914" class="comment-body" itemscope="itemscope" itemtype="http://schema.org/Comment"><div class="comment-author"><strong itemprop="name"><a href='http://www.christinebonde.dk' rel='external nofollow ugc' class='url'>Christine Bonde</a></strong> skrev:</div><div class="comment-date">12. marts 2016 kl. 19:53</div><div class="comment-text" itemprop="text"><p>Mmmmh, lyder virkelig lækkert!</p>
</div><div class="reply"><span class="line"></span><a rel='nofollow' class='comment-reply-link' href='#comment-70914' data-commentid="70914" data-postid="24809" data-belowelement="div-comment-70914" data-respondelement="respond" data-replyto="Besvar Christine Bonde" aria-label='Besvar Christine Bonde'>Svar</a></div></div></li><!-- #comment-## -->
<li class="comment odd alt thread-even depth-1 parent" id="comment-71098"><div id="div-comment-71098" class="comment-body" itemscope="itemscope" itemtype="http://schema.org/Comment"><div class="comment-author"><strong itemprop="name">Charlotte</strong> skrev:</div><div class="comment-date">13. marts 2016 kl. 21:19</div><div class="comment-text" itemprop="text"><p>Jeg ville lige knytte en bemærkning til min kommentar: manden og jeg spiste resterne af grøntsagsgryden dagen efter med creme fraiche, persille og bacontern &#8211; hold da op, bacon kan virkelig anbefales! Det virkede bare supergodt med alle smagsnuancerne ? Endnu engang tak for en nem og dejlig opskrift.</p>
</div><div class="reply"><span class="line"></span><a rel='nofollow' class='comment-reply-link' href='#comment-71098' data-commentid="71098" data-postid="24809" data-belowelement="div-comment-71098" data-respondelement="respond" data-replyto="Besvar Charlotte" aria-label='Besvar Charlotte'>Svar</a></div></div><ul class="children">
<li class="comment byuser comment-author-ann-christine bypostauthor even depth-2" id="comment-71215"><div id="div-comment-71215" class="comment-body" itemscope="itemscope" itemtype="http://schema.org/Comment"><div class="ac"></div><div class="comment-author"><strong itemprop="name">Ann-Christine</strong> skrev:</div><div class="comment-date">14. marts 2016 kl. 13:12</div><div class="comment-text" itemprop="text"><p>Ej, hvor lækkert! Lyder så skønt med de ting til &#8211; og bacon er jo virkelig et vidunderligt krydderi til mange retter, så det her skal jeg da også prøve :)<br />
Tak for din dejlige hilsen<br />
Kh AC</p>
</div><div class="reply"><span class="line"></span><a rel='nofollow' class='comment-reply-link' href='#comment-71215' data-commentid="71215" data-postid="24809" data-belowelement="div-comment-71215" data-respondelement="respond" data-replyto="Besvar Ann-Christine" aria-label='Besvar Ann-Christine'>Svar</a></div></div></li><!-- #comment-## -->
</ul><!-- .children -->
</li><!-- #comment-## -->
<li class="comment odd alt thread-odd thread-alt depth-1 parent" id="comment-71294"><div id="div-comment-71294" class="comment-body" itemscope="itemscope" itemtype="http://schema.org/Comment"><div class="comment-author"><strong itemprop="name">Henriette</strong> skrev:</div><div class="comment-date">15. marts 2016 kl. 03:54</div><div class="comment-text" itemprop="text"><p>Tak for lækker inspiration til nemme retter i en presset hverdag med 2 små børn. Perfekt til både store og små?</p>
</div><div class="reply"><span class="line"></span><a rel='nofollow' class='comment-reply-link' href='#comment-71294' data-commentid="71294" data-postid="24809" data-belowelement="div-comment-71294" data-respondelement="respond" data-replyto="Besvar Henriette" aria-label='Besvar Henriette'>Svar</a></div></div><ul class="children">
<li class="comment byuser comment-author-ann-christine bypostauthor even depth-2" id="comment-71525"><div id="div-comment-71525" class="comment-body" itemscope="itemscope" itemtype="http://schema.org/Comment"><div class="ac"></div><div class="comment-author"><strong itemprop="name">Ann-Christine</strong> skrev:</div><div class="comment-date">16. marts 2016 kl. 10:36</div><div class="comment-text" itemprop="text"><p>Hvor er det dejligt at høre! Jeg er glad for at kunne inspirere :)<br />
Tak for din søde hilsen<br />
Kh AC</p>
</div><div class="reply"><span class="line"></span><a rel='nofollow' class='comment-reply-link' href='#comment-71525' data-commentid="71525" data-postid="24809" data-belowelement="div-comment-71525" data-respondelement="respond" data-replyto="Besvar Ann-Christine" aria-label='Besvar Ann-Christine'>Svar</a></div></div></li><!-- #comment-## -->
</ul><!-- .children -->
</li><!-- #comment-## -->
<li class="comment odd alt thread-even depth-1 parent" id="comment-116566"><div id="div-comment-116566" class="comment-body" itemscope="itemscope" itemtype="http://schema.org/Comment"><div class="comment-author"><strong itemprop="name">Henriette</strong> skrev:</div><div class="comment-date">2. marts 2018 kl. 16:54</div><div class="comment-text" itemprop="text"><p>Hej<br />
Er den fryse venlig?</p>
</div><div class="reply"><span class="line"></span><a rel='nofollow' class='comment-reply-link' href='#comment-116566' data-commentid="116566" data-postid="24809" data-belowelement="div-comment-116566" data-respondelement="respond" data-replyto="Besvar Henriette" aria-label='Besvar Henriette'>Svar</a></div></div><ul class="children">
<li class="comment byuser comment-author-ann-christine bypostauthor even depth-2" id="comment-116622"><div id="div-comment-116622" class="comment-body" itemscope="itemscope" itemtype="http://schema.org/Comment"><div class="ac"></div><div class="comment-author"><strong itemprop="name">Ann-Christine</strong> skrev:</div><div class="comment-date">4. marts 2018 kl. 18:39</div><div class="comment-text" itemprop="text"><p>Ja, det kan den fint :)</p>
</div><div class="reply"><span class="line"></span><a rel='nofollow' class='comment-reply-link' href='#comment-116622' data-commentid="116622" data-postid="24809" data-belowelement="div-comment-116622" data-respondelement="respond" data-replyto="Besvar Ann-Christine" aria-label='Besvar Ann-Christine'>Svar</a></div></div></li><!-- #comment-## -->
</ul><!-- .children -->
</li><!-- #comment-## -->
<li class="comment odd alt thread-odd thread-alt depth-1 parent" id="comment-116915"><div id="div-comment-116915" class="comment-body" itemscope="itemscope" itemtype="http://schema.org/Comment"><div class="comment-author"><strong itemprop="name">Anne</strong> skrev:</div><div class="comment-date">13. marts 2018 kl. 08:52</div><div class="comment-text" itemprop="text"><p>Hej<br />
Er det korrekt læst i opskriften, at du ikke bruger stokken fra broccolien?<br />
Hilsen Anne</p>
</div><div class="reply"><span class="line"></span><a rel='nofollow' class='comment-reply-link' href='#comment-116915' data-commentid="116915" data-postid="24809" data-belowelement="div-comment-116915" data-respondelement="respond" data-replyto="Besvar Anne" aria-label='Besvar Anne'>Svar</a></div></div><ul class="children">
<li class="comment byuser comment-author-ann-christine bypostauthor even depth-2" id="comment-116920"><div id="div-comment-116920" class="comment-body" itemscope="itemscope" itemtype="http://schema.org/Comment"><div class="ac"></div><div class="comment-author"><strong itemprop="name">Ann-Christine</strong> skrev:</div><div class="comment-date">13. marts 2018 kl. 11:35</div><div class="comment-text" itemprop="text"><p>Ja, det er helt korrekt.<br />
Stokken kommer jeg istedet gerne i en juicer, når jeg juicer en grøntsagsjuice.<br />
Kh AC</p>
</div><div class="reply"><span class="line"></span><a rel='nofollow' class='comment-reply-link' href='#comment-116920' data-commentid="116920" data-postid="24809" data-belowelement="div-comment-116920" data-respondelement="respond" data-replyto="Besvar Ann-Christine" aria-label='Besvar Ann-Christine'>Svar</a></div></div></li><!-- #comment-## -->
</ul><!-- .children -->
</li><!-- #comment-## -->
<li class="comment odd alt thread-even depth-1 parent" id="comment-124961"><div id="div-comment-124961" class="comment-body" itemscope="itemscope" itemtype="http://schema.org/Comment"><div class="comment-author"><strong itemprop="name">Iben</strong> skrev:</div><div class="comment-date">17. august 2018 kl. 10:21</div><div class="comment-text" itemprop="text"><p>Hej Ann-Christine<br />
Jeg er ikke så erfaren inden for kikærteverden? Derfor et lille spørgsmål.<br />
Min mand har købt kikærter på dåse, der står de er klar til brug. Betyder det at jeg bare kan smide dem i retten uden at bløde dem op først?<br />
Tak for en dejlig opskrift. Jeg glæder mig til at serverer den.<br />
God dag<br />
/Iben</p>
</div><div class="reply"><span class="line"></span><a rel='nofollow' class='comment-reply-link' href='#comment-124961' data-commentid="124961" data-postid="24809" data-belowelement="div-comment-124961" data-respondelement="respond" data-replyto="Besvar Iben" aria-label='Besvar Iben'>Svar</a></div></div><ul class="children">
<li class="comment byuser comment-author-ann-christine bypostauthor even depth-2" id="comment-124981"><div id="div-comment-124981" class="comment-body" itemscope="itemscope" itemtype="http://schema.org/Comment"><div class="ac"></div><div class="comment-author"><strong itemprop="name">Ann-Christine</strong> skrev:</div><div class="comment-date">17. august 2018 kl. 17:56</div><div class="comment-text" itemprop="text"><p>Hej Iben,<br />
Kikærterne fra dåse er iblødsat og kogte, så de kan blot skylles og bruges direkte i gryden<br />
God fornøjelse og dejlig weekend til dig<br />
Kh AC</p>
</div><div class="reply"><span class="line"></span><a rel='nofollow' class='comment-reply-link' href='#comment-124981' data-commentid="124981" data-postid="24809" data-belowelement="div-comment-124981" data-respondelement="respond" data-replyto="Besvar Ann-Christine" aria-label='Besvar Ann-Christine'>Svar</a></div></div></li><!-- #comment-## -->
</ul><!-- .children -->
</li><!-- #comment-## -->
<li class="comment odd alt thread-odd thread-alt depth-1 parent" id="comment-143874"><div id="div-comment-143874" class="comment-body" itemscope="itemscope" itemtype="http://schema.org/Comment"><div class="comment-author"><strong itemprop="name">iben</strong> skrev:</div><div class="comment-date">14. marts 2019 kl. 18:56</div><div class="comment-text" itemprop="text"><p>Så lækker en ret.<br />
Kan den mon fryses? Kh Iben</p>
</div><div class="reply"><span class="line"></span><a rel='nofollow' class='comment-reply-link' href='#comment-143874' data-commentid="143874" data-postid="24809" data-belowelement="div-comment-143874" data-respondelement="respond" data-replyto="Besvar iben" aria-label='Besvar iben'>Svar</a></div></div><ul class="children">
<li class="comment byuser comment-author-ann-christine bypostauthor even depth-2" id="comment-143932"><div id="div-comment-143932" class="comment-body" itemscope="itemscope" itemtype="http://schema.org/Comment"><div class="ac"></div><div class="comment-author"><strong itemprop="name">Ann-Christine</strong> skrev:</div><div class="comment-date">15. marts 2019 kl. 11:23</div><div class="comment-text" itemprop="text"><p>Det vil jeg tro at den fint kan :)<br />
Tak for din søde hilsen<br />
Kh AC</p>
</div><div class="reply"><span class="line"></span><a rel='nofollow' class='comment-reply-link' href='#comment-143932' data-commentid="143932" data-postid="24809" data-belowelement="div-comment-143932" data-respondelement="respond" data-replyto="Besvar Ann-Christine" aria-label='Besvar Ann-Christine'>Svar</a></div></div></li><!-- #comment-## -->
</ul><!-- .children -->
</li><!-- #comment-## -->
<li class="comment odd alt thread-even depth-1 parent" id="comment-157857"><div id="div-comment-157857" class="comment-body" itemscope="itemscope" itemtype="http://schema.org/Comment"><div class="comment-author"><strong itemprop="name">Heidi</strong> skrev:</div><div class="comment-date">5. september 2019 kl. 11:26</div><div class="comment-text" itemprop="text"><p>Jeg ELSKER denne ret. Det er sådan en rigtig efterårs gryde med masser af smag og varme!<br />
Den skal menuen snart igen !</p>
<p>Tak for dejlige opskrifter og inspiration</p>
</div><div class="reply"><span class="line"></span><a rel='nofollow' class='comment-reply-link' href='#comment-157857' data-commentid="157857" data-postid="24809" data-belowelement="div-comment-157857" data-respondelement="respond" data-replyto="Besvar Heidi" aria-label='Besvar Heidi'>Svar</a></div></div><ul class="children">
<li class="comment byuser comment-author-ann-christine bypostauthor even depth-2" id="comment-157872"><div id="div-comment-157872" class="comment-body" itemscope="itemscope" itemtype="http://schema.org/Comment"><div class="ac"></div><div class="comment-author"><strong itemprop="name">Ann-Christine</strong> skrev:</div><div class="comment-date">5. september 2019 kl. 13:19</div><div class="comment-text" itemprop="text"><p>Hvor er det dejligt at høre! Mange tak for din søde tilbagemelding<br />
Kh AC</p>
</div><div class="reply"><span class="line"></span><a rel='nofollow' class='comment-reply-link' href='#comment-157872' data-commentid="157872" data-postid="24809" data-belowelement="div-comment-157872" data-respondelement="respond" data-replyto="Besvar Ann-Christine" aria-label='Besvar Ann-Christine'>Svar</a></div></div></li><!-- #comment-## -->
</ul><!-- .children -->
</li><!-- #comment-## -->
<li class="comment odd alt thread-odd thread-alt depth-1" id="comment-192545"><div id="div-comment-192545" class="comment-body" itemscope="itemscope" itemtype="http://schema.org/Comment"><div class="comment-author"><strong itemprop="name">Agnes</strong> skrev:</div><div class="comment-date">30. september 2020 kl. 18:15</div><div class="comment-text" itemprop="text"><p>Kan man bruge æble?<br />
Mvh Agnes</p>
</div><div class="reply"><span class="line"></span><a rel='nofollow' class='comment-reply-link' href='#comment-192545' data-commentid="192545" data-postid="24809" data-belowelement="div-comment-192545" data-respondelement="respond" data-replyto="Besvar Agnes" aria-label='Besvar Agnes'>Svar</a></div></div></li><!-- #comment-## -->
<li class="comment even thread-even depth-1" id="comment-196817"><div id="div-comment-196817" class="comment-body" itemscope="itemscope" itemtype="http://schema.org/Comment"><div class="comment-author"><strong itemprop="name">Kamilla</strong> skrev:</div><div class="comment-date">7. december 2020 kl. 13:44</div><div class="comment-text" itemprop="text"><p>Hej :-)<br />
Jeg har nogle kikærter på dåse. Hvor mange gram drænet kikærter skal jeg bruge?<br />
Mange hilsner fra Kamilla</p>
</div><div class="reply"><span class="line"></span><a rel='nofollow' class='comment-reply-link' href='#comment-196817' data-commentid="196817" data-postid="24809" data-belowelement="div-comment-196817" data-respondelement="respond" data-replyto="Besvar Kamilla" aria-label='Besvar Kamilla'>Svar</a></div></div></li><!-- #comment-## -->
</ul></div>
<!--<div id="ccph-mobil3_banner" data-ccph-cu="[[0,18945],[768,0]]" style="margin: 0 auto;"></div>-->
<div id="adn-00000000000bae84" style="display:none;" class="vroad vroadmob"></div>
<!--<div id="cncpt-mob3"></div> -->
				<div id="adn-00000000000bae83" style="display:none;" class="vroad vroadmob"></div>
<div id="cncpt-mob2"></div>

<div class="comment-form-title">Skriv en kommentar</div>
<div class="comment-faq">
	<strong>Har du spørgsmål til opskriften, kan du finde de fleste svar her:</strong>
	<a href="/ofte-stillede-spoergsmaal-til-valdemarsro-opskrifter/">Oftest stillede spørgsmål til Valdemarsro opskrifter >></a>
</div>
<div id="respond">
	<a rel="nofollow" id="cancel-comment-reply-link" href="/varmende-nem-og-krydret-groentsagsgryde-med-kikaerter/#respond" style="display:none;">Annuller svar</a>	<form action="/wp-comments-post.php" method="post" onsubmit="_track_comment();">
				<div class="input-wrapper">
			<div class="input">
				<textarea name="comment" id="comment" class="textarea" placeholder="Skriv din kommentar her"></textarea>
			</div>
		</div>
		<div class="input-row-wrapper">
			<div class="input-wrapper">
				<div class="input">
					<input class="text" type="text" value="" id="name" name="author" placeholder="Navn *"/>
				</div>
			</div>
			<div class="input-wrapper">
				<div class="input">
					<input class="text" type="text" value="" id="email" name="email" placeholder="E-mail *"/>
				</div>
			</div>
			<div class="input-wrapper">
				<div class="input">
					<input class="text" type="text" value="" id="url" name="url" placeholder="Website"/>
				</div>
			</div>
			<div class="clear"></div>
			<p style="margin-top:5px;font-size:12px;">Din emailadresse vil ikke blive offentliggjort.</p>
		</div>
		<button type="submit" name="submit" id="commentsubmit" class="submit"><span>Send</span></button>
		<br/>

		<br/><br/>
		<input type='hidden' name='comment_post_ID' value='24809' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
		<p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="c5d29cd9f7" /></p><p style="display: none !important;"><label>&#916;<textarea name="ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea></label><input type="hidden" id="ak_js_1" name="ak_js" value="100"/><script>document.getElementById( "ak_js_1" ).setAttribute( "value", ( new Date() ).getTime() );</script></p>	</form>
	<div class="clear"></div>
</div>
<script>
function _track_comment()
{
	dataLayer.push({
		event: 'comment',
		url_path: 'https://www.valdemarsro.dk/varmende-nem-og-krydret-groentsagsgryde-med-kikaerter/'
	});

	return true;
}
</script>			</div>
		</div>
		<div class="col sidebar">
			<div id="text-23" class="widget widget_text">			<div class="textwidget"><div class="widget-om">
<div class="image"><img src="/wp-content/2020/06/valdemarsro_.png"alt="Ann Christine Hellerup Brandt"/></div>
<p>Jeg hedder Ann-Christine, er mor til Julie og Johan og er gift med Martin. <br />
Jeg elsker at udvikle og finde på lækre og velsmagende opskrifter, som jeg deler med jer her på Valdemarsro, i mine kogebøger og i min <a href="https://www.valdemarsro.dk/madplan/">ugentlige madplan</a></p>
<p>Det er mig, der tager billederne til Valdemarsro og så deler jeg indimellem også boganbefalinger, tips til havearbejde og indlæg om min have, rejseguides fra vores rejser og andre små skønne ting. Hvis du har lyst kan du læse mere <a href="https://www.valdemarsro.dk/ann-christine-hellerup-brandt/">Om Valdemarsro her ...</a></p>
</div>
&nbsp;
&nbsp;</div>
		</div><div id="text-102" class="widget widget_text">			<div class="textwidget"><div id="cncpt-rec1"></div></div>
		</div><div id="text-127" class="widget widget_text">			<div class="textwidget"><!--<div id="cncpt-rec2"></div>--></div>
		</div><div id="block-3" class="widget widget_block"></div><div id="custom_html-6" class="widget_text widget widget_custom_html"><div class="textwidget custom-html-widget">
&nbsp;

&nbsp;

&nbsp;</div></div><div id="text-129" class="widget widget_text">			<div class="textwidget"></p>
<div class="widget-om" id="sidebarwidget_1">
<div class="image" style="margin-top: 0;"><img src="/wp-content/2020/09/Valdemarsro_premium_2.png" alt="Valdemarsro Premium" /></div>
<p><b>BLIV MEDLEM AF VALDEMARSRO</b></p>
<ul>
<li>få din helt egen favoritside her på Valdemarsro</li>
<li>Nye lækre madplaner hver uge</li>
<li>smart indkøbsseddel funktion</li>
<li>ingen reklame og annoncer</li>
</ul>
<p><a href="/premium/opret/">Bliv medlem af Valdemarsro &gt;&gt;</a><br />
( der er 7 dages gratis prøvetid )</p>
</div>
<p><script>
document.addEventListener('DOMContentLoaded', (event) => { _promotion_view('sidebarwidget_1', '');
</script><br />

</div>
		</div><div id="custom_html-11" class="widget_text widget widget_custom_html"><div class="textwidget custom-html-widget"><div class="banner-vertical-1" onclick="document.location='https://www.valdemarsro.dk/kogebog-valdemarsro-kager-desserter/';" style="cursor:pointer;">
	<div class="leaf"></div>
	<div class="bg">
		<img src="https://www.valdemarsro.dk/wp-content/2022/04/Valdemarsro_kager-og-desserter_banner.jpg"/>
		<div class="image" style="background-image:url(https://www.valdemarsro.dk/wp-content/2022/04/Valdemarsro_kager-og-desserter_banner.jpg);">
			<img src="https://www.valdemarsro.dk/wp-content/2022/04/Valdemarsro_kager-og-desserter_banner.jpg"/>
			<span><a>Køb kogebogen her</a></span>
		</div>
	</div>
</div></div></div><div id="mc4wp_form_widget-4" class="widget widget_mc4wp_form_widget"><h3 class="widget-title">Tilmeld dig Valdemarsro nyhedsbrev</h3><script>(function() {
	window.mc4wp = window.mc4wp || {
		listeners: [],
		forms: {
			on: function(evt, cb) {
				window.mc4wp.listeners.push(
					{
						event   : evt,
						callback: cb
					}
				);
			}
		}
	}
})();
</script><!-- Mailchimp for WordPress v4.8.7 - https://wordpress.org/plugins/mailchimp-for-wp/ --><form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-23617" method="post" data-id="23617" data-name="Default sign-up form" ><div class="mc4wp-form-fields"><input type="email" name="EMAIL" placeholder="Email" required="required" id="mc_email"/>
<input type="submit" value="Tilmeld" id="mc_submit"/>
<p style="font-size:14px;margin:10px 0;line-height:1.3;">
  <br/>Ugentligt inspiration til sæsonaktuelle opskrifter.
</p>
<p style="font-size:10px;margin-bottom:20px;line-height:1.3;">
  Samtykke til at modtage nyhedsbrevet kan til enhver tid trækkes tilbage, <a href="/personoplysninger-og-cookie-politik/" style="text-decoration:underline;">læs mere her</a>
</p></div><label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></label><input type="hidden" name="_mc4wp_timestamp" value="1661412682" /><input type="hidden" name="_mc4wp_form_id" value="23617" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" /><div class="mc4wp-response"></div></form><!-- / Mailchimp for WordPress Plugin --></div><div id="custom_html-10" class="widget_text widget widget_custom_html"><div class="textwidget custom-html-widget"><div class="banner-vertical-1" onclick="document.location='https://www.valdemarsro.dk/valdemarsro-kogebog-groen-aftensmad/';" style="cursor:pointer;">
	<div class="leaf"></div>
	<div class="bg">
		<img src="https://www.valdemarsro.dk/wp-content/2020/09/valdemarsro-groen-aftensmad.jpg"/>
		<div class="image" style="background-image:url(https://www.valdemarsro.dk/wp-content/2020/09/valdemarsro-groen-aftensmad.jpg);">
			<img src="https://www.valdemarsro.dk/wp-content/2020/09/valdemarsro-groen-aftensmad.jpg"/>
			<span><a>Køb 'GRØN AFTENSMAD' her</a></span>
		</div>
	</div>
</div></div></div><div id="custom_html-7" class="widget_text widget widget_custom_html"><div class="textwidget custom-html-widget"><div class="banner-vertical-1" onclick="document.location='https://www.valdemarsro.dk/kogebog-valdemarsro-aftensmad/';" style="cursor:pointer;">
	<div class="leaf"></div>
	<div class="bg">
		<img src="https://www.valdemarsro.dk/wp-content/2020/09/valdemarsro-aftensmad-kogebog.jpg"/>
		<div class="image" style="background-image:url(https://www.valdemarsro.dk/wp-content/2020/09/valdemarsro-aftensmad-kogebog.jpg);">
			<img src="https://www.valdemarsro.dk/wp-content/2020/09/valdemarsro-aftensmad-kogebog.jpg"/>
			<span><a>Køb "Valdemarsro AFTENSMAD" her</a></span>
		</div>
	</div>
</div></div></div><div id="custom_html-9" class="widget_text widget widget_custom_html"><div class="textwidget custom-html-widget"><!--<div id="cncpt-mob4"></div>--></div></div><div id="block-2" class="widget widget_block"><div class="banner-vertical-1" onclick="document.location='https://www.valdemarsro.dk/kogebog-valdemarsro-jul/';" style="cursor:pointer;">
	<div class="leaf"></div>
	<div class="bg">
		<img src="https://www.valdemarsro.dk/wp-content/2021/08/Valdemarsro_Jul_ryg.jpg"/>
		<div class="image" style="background-image:url(https://www.valdemarsro.dk/wp-content/2021/08/Valdemarsro_Jul_ryg.jpg);">
			<img src="https://www.valdemarsro.dk/wp-content/2021/08/Valdemarsro_Jul_ryg.jpg"/>
			<span><a>KOGEBOG: Valdemarsro JUL >></a></span>
		</div>
	</div>
</div>
</div>		</div>
	</div>
	</div>
<script>
window.addEventListener('DOMContentLoaded', (event) => {
	var canHover = !(matchMedia('(hover: none)').matches);
	var pid = 1;
	$('div[itemprop="recipeInstructions"] p').each(function()
	{
		$(this).attr('data-pid', pid);

		if(canHover)
			$(this).addClass('can-hover');

		if(typeof(Storage) !== 'undefined')
		{
			if(sessionStorage.getItem('recipe_24809_pid_' + $(this).data('pid')) != null)
				$(this).addClass('done');
		}

		$(this).click(function()
		{
			$(this).toggleClass('done');

			if(typeof(Storage) !== 'undefined')
			{
				if($(this).hasClass('done'))
					sessionStorage.setItem('recipe_24809_pid_' + $(this).data('pid'), '1');
				else
					sessionStorage.removeItem('recipe_24809_pid_' + $(this).data('pid'));
			}
		});

		pid++;
	});

	var iid = 1;
	$('li[itemprop="recipeIngredient"]').each(function()
	{
		$(this).attr('data-iid', iid);

		if(canHover)
			$(this).addClass('can-hover');

		if(typeof(Storage) !== 'undefined')
		{
			if(sessionStorage.getItem('recipe_24809_iid_' + $(this).data('iid')) != null)
				$(this).addClass('done');
		}

		$(this).click(function()
		{
			$(this).toggleClass('done');

			if(typeof(Storage) !== 'undefined')
			{
				if($(this).hasClass('done'))
					sessionStorage.setItem('recipe_24809_iid_' + $(this).data('iid'), '1');
				else
					sessionStorage.removeItem('recipe_24809_iid_' + $(this).data('iid'));
			}
		});

		iid++;
	});
});
</script>
<style>
div[itemprop="recipeInstructions"] > p.can-hover:hover,div[itemprop="recipeInstructions"] > p.done,li[itemprop="recipeIngredient"].can-hover:hover,li[itemprop="recipeIngredient"].done{text-decoration:line-through;cursor:pointer;opacity:.75;}
</style>
<div id="amount-modal" class="modal">
	<div class="modal-wrapper">
		<div class="modal-window">
			<span class="modal-close" onclick="$(this).parents('.modal').fadeOut();">&times;</span>
			<div class="modal-content modal-text">
				<form method="get">
				<div class="modal-title">Vælg antal</div>
				<div id="amount-pers">
					<select name="antal" id="amount">
						<option value="1">1 pers.</option>
						<option value="2">2 pers.</option>
						<option value="3">3 pers.</option>
						<option value="4">4 pers.</option>
						<option value="5">5 pers.</option>
						<option value="6">6 pers.</option>
						<option value="7">7 pers.</option>
						<option value="8">8 pers.</option>
						<option value="9">9 pers.</option>
						<option value="10">10 pers.</option>
						<option value="12">12 pers.</option>
						<option value="14">14 pers.</option>
						<option value="16">16 pers.</option>
						<option value="18">18 pers.</option>
						<option value="20">20 pers.</option>
					</select>
				</div>
				<div id="amount-other">
					<select name="antal" id="amount"></select>
				</div>
				<button type="submit">OK</button>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
function _open_modal_wrapper(id, val, unit, default_val)
{
	$('#amount-modal').find('#id').val(id);

	if(unit == 'pers.')
	{
		$('#amount-modal #amount-other').hide();
		$('#amount-modal #amount-pers').show();
	}
	else
	{
		$('#amount-modal #amount-other #amount option').remove();

		var v = Math.round((default_val / 2) * 100) / 100;

		//if(default_val > 1)
			$('#amount-modal #amount-other #amount').append('<option value="' + v + '">' + v + '</option>');
		//else
		//	$('#amount-modal #amount-other #amount').append('<option value="' + (default_val * i) + '">' + (default_val * i) + '</option>');

		for(var i = 1; i <= 4; i++)
		{
			v = Math.round((default_val * i) * 100) / 100;
			$('#amount-modal #amount-other #amount').append('<option value="' + v + '">' + v + '</option>');
		}

		$('#amount-modal #amount-pers').hide();
		$('#amount-modal #amount-other').show();
	}

	$('#amount-modal').find('#amount').each(function()
	{
		$(this).val(val);
	});

	_open_modal('amount-modal');
}
</script>		<footer role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
			<div class="footer-newsletter">
				<p>Tilmeld dig Valdemarsro nyhedsbrev</p>

				<script>(function() {
	window.mc4wp = window.mc4wp || {
		listeners: [],
		forms: {
			on: function(evt, cb) {
				window.mc4wp.listeners.push(
					{
						event   : evt,
						callback: cb
					}
				);
			}
		}
	}
})();
</script><!-- Mailchimp for WordPress v4.8.7 - https://wordpress.org/plugins/mailchimp-for-wp/ --><form id="mc4wp-form-2" class="mc4wp-form mc4wp-form-23617" method="post" data-id="23617" data-name="Default sign-up form" ><div class="mc4wp-form-fields"><input type="email" name="EMAIL" placeholder="Email" required="required" id="mc_email"/>
<input type="submit" value="Tilmeld" id="mc_submit"/>
<p style="font-size:14px;margin:10px 0;line-height:1.3;">
  <br/>Ugentligt inspiration til sæsonaktuelle opskrifter.
</p>
<p style="font-size:10px;margin-bottom:20px;line-height:1.3;">
  Samtykke til at modtage nyhedsbrevet kan til enhver tid trækkes tilbage, <a href="/personoplysninger-og-cookie-politik/" style="text-decoration:underline;">læs mere her</a>
</p></div><label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></label><input type="hidden" name="_mc4wp_timestamp" value="1661412682" /><input type="hidden" name="_mc4wp_form_id" value="23617" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-2" /><div class="mc4wp-response"></div></form><!-- / Mailchimp for WordPress Plugin -->			</div>
			<div class="footer-logo">
				<img src="https://www.valdemarsro.dk/wp-content/themes/valdemarsro16/assets/img/logo4.png" width="45" alt="Valdemarsro"/>
			</div>
			<div class="footer-sm">
				<a class="sm in" href="https://www.instagram.com/valdemarsro_dk/" target="_blank"><img src="https://www.valdemarsro.dk/wp-content/themes/valdemarsro16/assets/img/instagram1.png"/></a>
				<a class="sm fb" href="https://www.facebook.com/Valdemarsro/" target="_blank"><img src="https://www.valdemarsro.dk/wp-content/themes/valdemarsro16/assets/img/facebook1.png"/></a>
				<a class="sm yt" href="https://www.youtube.com/user/valdemarsr0?sub_confirmation=1" target="_blank"><img src="https://www.valdemarsro.dk/wp-content/themes/valdemarsro16/assets/img/youtube1.png"/></a>
				<a class="sm pi" href="https://dk.pinterest.com/valdemarsro/" target="_blank"><img src="https://www.valdemarsro.dk/wp-content/themes/valdemarsro16/assets/img/pinterest1.png"/></a>
			</div>
			<div class="footer-links">
				<a href="/handels-betingelser-valdemarsro-premium/">Handelsbetingelser</a>
				<a href="/personoplysninger-og-cookie-politik/">Personoplysninger og cookies</a>
				<a href="/job-hos-valdemarsro/">Job hos Valdemarsro</a>
				<a href="/kontakt/">Kontakt</a>
			</div>
			<!--<div class="premium-support">
				<a href="/support/"><i class="fas fa-life-ring"></i> Support</a>
			</div>-->
		</footer>
		<!--<div id="footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
			<div class="row clear-after" id="footer-logo">
				<div class="col span_10 col-center">
					<img src="https://www.valdemarsro.dk/wp-content/themes/valdemarsro16/assets/img/logo4.png" width="178" height="139" alt="Valdemarsro"/>
				</div>
			</div>
			<div class="row clear-after" id="footer-cols">
				<div class="col span_3 push_1" id="footer-col-1">
					<ul class="menu" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation">
						<li><a href="/bagved-valdemarsrodk/">Om Valdemarsro / kontakt</a></li>
						<li><a href="http://shop.valdemarsro.dk">Valdemarsro Shop</a></li>
						<li><a href="/faq/">FAQ</a></li>
						<li><a href="/nyhedsbrev/">Nyhedsbrev</a></li>
					</ul>
				</div>
				<div class="col span_2" id="footer-col-2">
					<ul class="menu" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation">
						<li><a href="/opskriftsoversigt/">Opskrifter</a></li>
						<li><a href="/category/livsstil/">Livsstil</a></li>
						<li><a href="/category/diy/">Do it yourself</a></li>
						<li><a href="/rejser/">Rejser</a></li>
					</ul>
				</div>
				<div class="col span_2" id="footer-col-3">
					<ul class="menu" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation">
						<li><a href="/presse/">Presse</a></li>
						<li><a href="/samarbejde-og-annoncering/">Annoncering</a></li>
						<li><a href="/personoplysninger-og-cookie-politik/">Cookiepolitik</a></li>
					</ul>
				</div>
				<div class="col span_4" id="footer-col-4">
					<a href="https://www.facebook.com/Valdemarsro/" class="svg">&#xe900;</a>
					<a href="https://www.instagram.com/valdemarsro_dk/" class="svg">&#xe90c;</a>
					<a href="https://www.youtube.com/user/valdemarsr0?sub_confirmation=1" class="svg">&#xe90f;</a>
					<a href="https://dk.pinterest.com/valdemarsro/" class="svg">&#xe901;</a>
					<a href="https://www.bloglovin.com/blogs/valdemarsro-1709049" class="svg">&#xe90d;</a>
				</div>
			</div>
		</div>-->
	</div>
</div>
<div id="login-modal" class="modal">
	<div class="modal-wrapper">
		<div class="modal-window">
			<span class="modal-close" onclick="$(this).parents('.modal').fadeOut();">&times;</span>
			<div class="modal-content modal-text">
				<img src="https://www.valdemarsro.dk/wp-content/themes/valdemarsro16/assets/img/gryde.png" alt="Valdemarsro Premium" width="56" height="44"/>
				<h3>Valdemarsro Premium</h3>
								<p>Har du ikke Premium?</p>
				<button class="button cta"><a href="/premium/opret/"><i class="fas fa-star"></i> Få Premium</a></button>
							</div>
			<div class="modal-form">
				<!--<div class="modal-tabs">
					<div class="modal-tab active" onclick="_switch_modal_tab(1, this);">Log på</div>
					<div class="modal-tab" onclick="_switch_modal_tab(2, this);">Glemt password?</div>
					<div class="modal-tab" onclick="_switch_modal_tab(3, this);">Opret Premium</div>
				</div>-->
				<div class="modal-content modal-tab-content active" id="modal-tab-1">
					<form onsubmit="return _try_logon(this);">
												<p class="modal-field">
							<input type="email" id="login-email" placeholder="Email"/>
						</p>
						<p class="modal-field">
							<input type="password" id="login-pwd" placeholder="Adgangskode"/>
						</p>
						<button type="submit">Log på</button>
					</form>
					<div id="login-msg" class="modal-form-message"></div>
					<a href="#" class="modal-form-helper-link" onclick="return _switch_modal_tab(2, this);">Glemt adgangskode?</a>
				</div>
				<div class="modal-content modal-tab-content" id="modal-tab-2">
					<p class="modal-hint">Indtast din email, så sender vi dig et link hvor du kan ændre dit password.</p>
					<form onsubmit="return _try_forgot(this);">
						<p class="modal-field">
							<input type="email" id="forgot-email" placeholder="Email"/>
						</p>
						<button type="submit">Send link</button>
					</form>
					<div id="forgot-msg" class="modal-form-message"></div>
					<a href="#" class="modal-form-helper-link" onclick="return _switch_modal_tab(1, this);">Log på</a>
				</div>
				<!--<div class="modal-content modal-tab-content" id="modal-tab-3">
					<p class="modal-hint">Indtast din email, så opretter vi dig straks som Premium-bruger. Herefter kan du bruge Valdemarsro Premium ganske gratis de næste 7 dage.</p>
					<form onsubmit="return _try_signup(this);">
						<p class="modal-field">
							<input type="email" id="signup-email" placeholder="Email"/>
						</p>
						<p class="modal-field">
							<input type="email" id="signup-email2" placeholder="Gentag email"/>
						</p>
						<button type="submit">Opret</button>
					</form>
					<div id="signup-msg" class="modal-form-message"></div>
				</div>-->
			</div>
		</div>
	</div>
</div><script>(function() {function maybePrefixUrlField() {
	if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
		this.value = "http://" + this.value;
	}
}

var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
if (urlFields) {
	for (var j=0; j < urlFields.length; j++) {
		urlFields[j].addEventListener('blur', maybePrefixUrlField);
	}
}
})();</script><script type='text/javascript' src='https://www.valdemarsro.dk/wp-includes/js/comment-reply.min.js?ver=6.0.1' id='comment-reply-js'></script>
<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js' id='jquery-js'></script>
<script type='text/javascript' src='https://www.valdemarsro.dk/wp-content/themes/valdemarsro16/assets/js/valdemarsro.js?v=070422&#038;ver=6.0.1' id='main-js'></script>
<script defer type='text/javascript' src='https://www.valdemarsro.dk/wp-content/plugins/akismet/_inc/akismet-frontend.js?ver=1659354002' id='akismet-frontend-js'></script>
<script type='text/javascript' defer src='https://www.valdemarsro.dk/wp-content/plugins/mailchimp-for-wp/assets/js/forms.js?ver=4.8.7' id='mc4wp-forms-api-js'></script>
<!--stats_footer_test--><script src="https://stats.wordpress.com/e-202234.js" type="text/javascript"></script>
<script type="text/javascript">
st_go({blog:'2253058',v:'ext',post:'24809'});
var load_cmc = function(){linktracker_init(2253058,24809,2);};
if ( typeof addLoadEvent != 'undefined' ) addLoadEvent(load_cmc);
else load_cmc();
</script>
<!--<script src="//widgets.sprinklecontent.com/v2/sprinkle.js" async></script>-->
<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
<span id="totop" onclick="jQuery('html,body').animate({scrollTop:0}, 'fast');">&#x25B2; Til toppen</span>
<script>
dataLayer.push({
	event: 'user_state',
	status: 'anonymous'
});
function isElementInViewport(el)
{
    if(typeof jQuery === 'function' && el instanceof jQuery)
		el = el[0];

	var rect = el.getBoundingClientRect();

	return rect.top >= 0 && rect.left >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /* or $(window).height() */ rect.right <= (window.innerWidth || document.documentElement.clientWidth) /* or $(window).width() */;
}
var _scroll_tracked = [];
function _promotion_view(name, slot)
{
	var ok = false;

	if(isElementInViewport(jQuery('#' + name)))
	{
		ok = true;
	}
	else
	{
		jQuery(window).on('DOMContentLoaded load resize scroll', function()
		{
			if(isElementInViewport(jQuery('#' + name)))
			{
				if(_scroll_tracked.indexOf(name) >= 0)
					return;

				//console.log(name + ' in viewport');
				_scroll_tracked.push(name);

				dataLayer.push({ ecommerce: null });
				dataLayer.push({
					event: 'view_promotion',
					creative_name: name,
					//creative_slot: "homepage",
					ecommerce: {
						items: [
							{
								item_id: 'SKU_monthly',
								item_name: 'Monthly Premium Subscription',
								currency: 'DKK',
								index: 1,
								item_brand: 'Valdemarsro',
								price: 39,
								quantity: 1
							},
							{
								item_id: 'SKU_yearly',
								item_name: 'Yearly Premium Subscription',
								currency: 'DKK',
								index: 2,
								item_brand: 'Valdemarsro',
								price: 199,
								quantitys: 1
							}
						]
					}
				});
			}
		});
	}

	if(ok)
	{
		if(_scroll_tracked.indexOf(name) >= 0)
			return;

		//console.log(name + ' in viewport');
		_scroll_tracked.push(name);

		dataLayer.push({ ecommerce: null });
		dataLayer.push({
			event: 'view_promotion',
			creative_name: name,
			//creative_slot: "homepage",
			ecommerce: {
				items: [
					{
						item_id: 'SKU_monthly',
						item_name: 'Monthly Premium Subscription',
						currency: 'DKK',
						index: 1,
						item_brand: 'Valdemarsro',
						price: 39,
						quantity: 1
					},
					{
						item_id: 'SKU_yearly',
						item_name: 'Yearly Premium Subscription',
						currency: 'DKK',
						index: 2,
						item_brand: 'Valdemarsro',
						price: 199,
						quantitys: 1
					}
				]
			}
		});
	}
}
function _promotion_click(name, slot)
{
	dataLayer.push({ ecommerce: null });
	dataLayer.push({
		event: 'select_promotion',
		creative_name: name,
		ecommerce: {
			items: [
				{
					item_id: 'SKU_monthly',
					item_name: 'Monthly Premium Subscription',
					currency: 'DKK',
					index: 1,
					item_brand: 'Valdemarsro',
					price: 39,
					quantity: 1
				},
				{
					item_id: 'SKU_yearly',
					item_name: 'Yearly Premium Subscription',
					currency: 'DKK',
					index: 2,
					item_brand: 'Valdemarsro',
					price: 199,
					quantitys: 1
				}
			]
		}
	});

	return true;
}
</script></body>
</html>

HTML;
    }
}
