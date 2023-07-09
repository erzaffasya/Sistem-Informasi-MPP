<div id="google_translate_element" style="position: fixed; left:2rem; bottom:1.5rem; z-index:99; transform: scale(1.3);"></div>
<script src="{{ asset('tlandingpage/plugins/jquery/jquery.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="{{ asset('tlandingpage/plugins/slick/slick.min.js') }}"></script>
<script src="{{ asset('tlandingpage/plugins/bootstrap/bootstrap.min.js') }}"></script>
<script src="plugins/scrollmenu/scrollmenu.min.js"></script>
<!-- Main Script -->
<script src="{{ asset('tlandingpage/js/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js" integrity="sha512-Ixzuzfxv1EqafeQlTCufWfaC6ful6WFqIz4G+dWvK0beHw0NVJwvCKSgafpy5gwNqKmgUfIBraVwkKI+Cz0SEQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
	
    function googleTranslateElementInit() {
		new google.translate.TranslateElement({
			pageLanguage: 'id, in',
			includedLanguages: 'en,id',
			layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
			multilanguagePage: true
		}, 'google_translate_element');
	}
	AOS.init();
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

@stack('scripts')