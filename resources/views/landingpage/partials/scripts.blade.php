<div id="google_translate_element" style="position: fixed; left:2rem; bottom:1.5rem; z-index:99; transform: scale(1.3);"></div>
<script src="{{ asset('tlandingpage/plugins/jquery/jquery.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
{{-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> --}}
<script src="{{ asset('tlandingpage/plugins/slick/slick.min.js') }}"></script>
<script src="{{ asset('tlandingpage/plugins/bootstrap/bootstrap.min.js') }}"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"
    integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
<script src="plugins/scrollmenu/scrollmenu.min.js"></script>
<!-- Main Script -->
<script src="{{ asset('tlandingpage/js/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
<script>

    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                'Oktober', 'November', 'Desember'
            ],
            datasets: [{
                label: 'Kunjungan Harian',
                data: [12, 19, 3, 5, 2, 3, 9, 12, 20, 10, 11, 8],
                borderWidth: 3
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@stack('scripts')