<x-app-layout>
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Congratulations {{ Auth::user()->name }}! 🎉</h5>
                            <p class="mb-4">
                                Anda telah berhasil login sebagai <span class="fw-bold">{{ Auth::user()->role }}.</span>
                            </p>

                            {{-- <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a> --}}
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-8 col-lg-12 order-3 order-md-2">
            <div class="row">
              
            </div>
        </div>
    </div>


    @push('scripts')
        <!-- Vendors JS -->
        <script src="{{ asset('tadmin/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

        <!-- Page JS -->
        <script src="{{ asset('tadmin/assets/js/dashboards-analytics.js') }}"></script>
    @endpush
</x-app-layout>
