<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha256-JirYRqbf+qzfqVtEE4GETyHlAbiCpC005yBTa4rj6xg=" crossorigin="anonymous"></script>
<script src="{{ mix('/js/app.js') }}"></script>

@yield('page-scripts')

@stack('scripts')

<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-34567782-6"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments)};
	gtag('js', new Date());
	gtag('config', 'UA-424'+'42'+'002-6');
</script>
<script>
/**
* Function that registers a click on an outbound link in Analytics.
* This function takes a valid URL string as an argument, and uses that URL string
* as the event label. Setting the transport method to 'beacon' lets the hit be sent
* using 'navigator.sendBeacon' in browser that support it.
*/
var getOutboundLink = function(url, label) {
  gtag('event', 'click', {
    'event_category': 'promoted',
    'event_label': label,
    'transport_type': 'beacon',
    'event_callback': function(){window.open(url)}
  });
}
</script>
