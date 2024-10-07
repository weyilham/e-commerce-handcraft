<div class="container-fluid fruite py-5">
    <div class="container py-5">
        <div class="tab-class text-center">
            <div class="row g-4">
                <div class="col-lg-4 text-start">
                    <h2>Our Handicrafts Products</h2>

                </div>
                <div class="col-lg-8 text-end">
                    <ul class="nav nav-pills d-inline-flex text-center mb-5">
                        <li class="nav-item">
                            <a class="d-flex m-2 py-2 bg-light rounded-pill" data-category="all" data-bs-toggle="pill"
                                href="#tab-2">
                                <span class="text-dark" style="width: 130px;">All Products</span>
                            </a>
                        </li>
                        @foreach ($categories as $category)
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill"
                                    data-category={{ $category->id }} href="#tab-2">
                                    <span class="text-dark" style="width: 130px;">{{ $category->name }}</span>
                                </a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            {{-- products --}}
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            {{-- Card Products --}}
                            <div id="card-products">
                                <x-product.cardproduct :products="$products" />
                            </div>
                            {{-- EndCardProduct --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function() {
            const category = $('.nav-item a');

            category.on('click', function() {
                const category_id = $(this).data('category');

                console.log(category_id);
                $.ajax({
                    url: "{{ route('home.show', '') }}" + '/' + category_id,
                    type: 'GET',
                    success: function(data) {
                        $('#card-products').html(data);
                        // $('#tab-1').html(data);
                    }
                })
                //getdata product by category
            })
        })
    </script>
@endpush
