<div class="row g-4 " id="card-product">
    @foreach ($products as $product)
        <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="rounded position-relative fruite-item">
                <div class="fruite-img">
                    <img src="/storage/{{ $product->image }}" class="img-fluid w-100 rounded-top" alt="">
                </div>
                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">
                    {{ $product->category->name }}
                </div>
                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                    <h4>{{ $product->name }}</h4>
                    <p>{!! substr($product->description, 0, 80) !!}</p>
                    <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">Rp. {{ number_format($product->price, 0) }}</p>
                        <a href="#" data-id="{{ $product->id }}"
                            class="add-cart btn border border-secondary rounded-pill px-3 text-primary"><i
                                class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                            cart</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

@push('scripts')
    <script>
        const addCart = $('.add-cart');
        $(document).on('click', '.add-cart', function(e) {
            e.preventDefault();
            const id = $(this).data('id');
            $.ajax({
                url: '/cart',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id
                },
                success: function(response) {

                    Swal.fire({
                        toast: true,
                        icon: 'success', // You can change this to 'error', 'warning', 'info', or 'question'
                        title: 'Product added to cart',
                        position: 'top-end', // Can be 'top', 'top-start', 'top-end', 'center', 'center-start', 'center-end', 'bottom', 'bottom-start', 'bottom-end'
                        showConfirmButton: false, // Hide the OK button
                        timer: 1500, // Time the toast will be visible
                        timerProgressBar: true, // Show progress bar

                    });
                    $('.cart-count').text(response.data);
                }
            })
        })
    </script>
@endpush
