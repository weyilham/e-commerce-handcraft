<div>
    @foreach ($carts as $item)
        <div class="mb-3">
            <div class="card-body border rounded shadow-sm position-relative">
                <div class="position-absolute top-0 end-0 me-3 mt-2 check-cart">
                    <input type="checkbox" class="delete-cart" name="check[]" value="{{ $item->id }}">
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-3">
                            <img src="https://via.placeholder.com/100" width="100" class="img-fluid" alt="">
                        </div>
                        <div class="col-6">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text">Product Description</p>
                        </div>
                        <div class="col-3">
                            <h5>Rp. {{ $item->price }}</h5>
                        </div>
                    </div>
                    <div class="row  mt-2">
                        <div class="col-12 d-flex flex-row-reverse gap-2">
                            <div style="width: 10rem">
                                @push('styles')
                                    <style>
                                        #inputGroup-sizing-sm-left {

                                            border-top-left-radius: 5px !important;
                                            border-bottom-left-radius: 5px !important;
                                        }

                                        #inputGroup-sizing-sm-right {
                                            border-top-right-radius: 5px !important;
                                            border-bottom-right-radius: 5px !important;
                                        }

                                        .delete-cart {
                                            border-radius: 5px !important;
                                        }
                                    </style>
                                @endpush
                                <div class="input-group input-group-sm col-md-6">
                                    <button class="input-group-text px-3 btn-success"
                                        id="inputGroup-sizing-sm-left">-</button>
                                    <input type="text" class="form-control text-center"
                                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                        value="{{ $item->qty }}">
                                    <button class="input-group-text px-3 btn-success"
                                        id="inputGroup-sizing-sm-right">+</button>
                                </div>
                            </div>
                            <div class="mb-0">
                                <a href="#" class="delete-cart btn btn-danger btn-sm text-sm  rounded-0"><i
                                        class="fas fa-trash-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
